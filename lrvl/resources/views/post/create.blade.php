<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 12.01.18
 * Time: 15:08
 */
?>
@extends('layouts.main')

@section('title', 'Page Title')

@section('content')
    <div class="container" >
        <section id="create-post" class="create-post">
            <h1>Create</h1>
            {!! Form::open(['route' => 'post.store']) !!}
            @include('post._form')
            {!! Form::close()!!}
        </section>
    </div>
@endsection