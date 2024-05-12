@extends('layouts.master')

@section('title', $blog->title)

@section('content')
    <p>{{ $blog->content }}</p>
@stop
