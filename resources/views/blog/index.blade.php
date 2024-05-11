@extends('layouts.master')

@section('title', 'Blogs')


@section('content')
    <section>
        <ol>
            @foreach ($blogs as $blog)
                <li class='blog-card'>
                    <p class="title">{{ $blog->title }}</p>
                    <p class="content">{{ Str::words($blog->content, 30) }}</p>
                </li>
            @endforeach
        </ol>
    </section>


    @yield('hole1')

@stop
