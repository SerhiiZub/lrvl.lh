<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 12.01.18
 * Time: 16:39
 */
var_dump($messages);
?>
{{--<h2>{{ $exception->getMessage() }}</h2>--}}
<div class="form-group">
    {!! Form::label('slug') !!}
    {!! Form::text('slug', null, ['class'=>'form-control'] ) !!}
</div>
<div class="form-group">
    {!! Form::label('title') !!}
    {!! Form::text('title', null, ['class'=>'form-control'] ) !!}
</div>
<div class="form-group">
    {!! Form::label('excerpt') !!}
    {!! Form::textarea('excerpt', null, ['class'=>'form-control'] ) !!}
</div>
<div class="form-group">
    {!! Form::label('content') !!}
    {!! Form::textarea('content', null, ['class'=>'form-control'] ) !!}
</div>
<div class="form-group">
    {!! Form::label('published') !!}
    {!! Form::checkbox('published', null, false) !!}
</div>
<div class="form-group">
    {!! Form::label('published_at') !!}
    {!! Form::input('date', 'published_at', date('Y-m-d'), ['class'=>'form-control'] ) !!}
</div>
<div class="form-group">
    {!! Form::submit('Create', ['class'=>'btn btn-primary']) !!}
</div>
