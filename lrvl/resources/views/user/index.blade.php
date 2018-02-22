<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 21.02.18
 * Time: 12:57
 */
?>
@extends('layouts.main')

@section('title', 'Page Title')

@section('content')
    <div class="container" >
        <h1>Hello user</h1>
<!--        --><?php //var_dump($user)?>
        {{ $user->name }}
        {{--<section id="create-post" class="create-post">--}}
            {{--<h1>Create</h1>--}}
            {{--{!! Form::open(['route' => 'post.store']) !!}--}}
            {{--@include('post._form')--}}
            {{--{!! Form::close()!!}--}}
        {{--</section>--}}
    </div>
@endsection
