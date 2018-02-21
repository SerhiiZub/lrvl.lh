<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 09.01.18
 * Time: 14:22
 */
?>
@extends('layouts.main')

@section('title', 'Page Title')

@section('content')
    <div class="container" style="margin-top: 90px">
        <div>
            {!! link_to_route('posts', 'published') !!}     {!! link_to_route('posts.unpublished', 'unpublished') !!}
        </div>
        <div>
            {!! link_to_route('posts', 'published') !!}     {!! link_to_route('posts.unpublished', 'unpublished') !!}   {!! link_to_route('post.create', 'new') !!}
        </div>
        <section id="posts" class="posts">
            @foreach($posts as $post)
                <article>
                    <h2>{!! $post->title !!}</h2>
                    <p>{!! $post->excerpt !!}</p>
                    <p>published: {{ $post->published_at  }}</p>
                </article>
            @endforeach
        </section>
    </div>
@endsection

