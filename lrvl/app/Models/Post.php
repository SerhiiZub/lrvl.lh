<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['slug', 'title', 'excerpt', 'content', 'published', 'published_at'];

/*    public function validate()
    {
        $rules = array(
            'slug' => array('required', 'unique:users,username'),
            'title'    => array('required', 'email', 'unique:users,email'),
            'excerpt' => array('required', 'min:7')
        );

        $validation = Validator::make(Input::all(), $rules);
    }*/

    public function scopePublished($query)
    {
        $query->where('published_at', '<=', Carbon::now('Europe/Kiev'))
            ->where('published', '=', 1);
    }

    public function scopeUnPublished($query)
    {
        $query->where('published_at', '=>', Carbon::now())
            ->orWhere('published', '=', 0);
    }

    public function getPublishedPosts()
    {
        return $this->latest('published_at')->published()->get();
    }

    public function getUnPublishedPosts()
    {
        return $this->latest('published_at')->unPublished()->get();
    }
}
