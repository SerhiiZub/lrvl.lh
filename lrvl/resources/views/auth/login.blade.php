<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 21.02.18
 * Time: 12:28
 */
?>
@extends('layouts.main')

@section('title', 'Page Title')

@section('content')
    <div class="container">
        <nav class="navbar" role="navigation">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{ url('auth/register') }}">Регистрация</a>
                </li>
            </ul>
        </nav>
        {{--Ошибки--}}
        @if (count($errors) > 0)
{{--        @if ($errors->has())--}}
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="alert alert-danger" role="alert">
                        <button class="close" aria-label="Close" data-dismiss="alert" type="button">
                            <span aria-hidden="true">×</span>
                        </button>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li> {{{ $error }}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endif
        {{--Успех--}}
        @if (Session::has('message'))
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="alert alert-success" role="alert">
                        <button class="close" aria-label="Close" data-dismiss="alert" type="button">
                            <span aria-hidden="true">×</span>
                        </button>
                        {{ Session::get('message') }}
                    </div>
                </div>
            </div>
        @endif
        <form role="form" method="post" action="{{ url('auth/login') }}">
            {!! csrf_field() !!}
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Email" name='email'>
            </div>
            <div class="form-group">
                <label for="password">Пароль</label>
                <input type="password" class="form-control" id="password" placeholder="Пароль" name="password">
            </div>
            <button type="submit" class="btn btn-default">Войти</button>
        </form>
    </div>
@endsection
