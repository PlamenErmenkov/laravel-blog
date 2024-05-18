@extends('layouts.master')

@section('title', 'Home')

@section('main')
    <main class='flex-1 flex flex-col align-center justify-center'>
        <section class='container flex flex-col max-w-min align-center gap-4'>
            <img src="/assets/logo_transparency.png" style="filter:drop-shadow(0px 4px 0.5rem rgba(200, 200 ,200, 0.3)"
                alt="logo" class='h-20 w-20'>
            <p>Let the journey begin...</p>
            <a href='/blog' class='btn-primary btn-hover'>
                <span>
                    Begin reading
                </span>
            </a>
        </section>
    </main>
@stop
