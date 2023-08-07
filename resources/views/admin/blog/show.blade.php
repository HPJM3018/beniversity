@extends('layouts.app')

@section('content')

<section class="page-header">
        <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><span>/</span></li>
                    <li class="active">News details</li>
                </ul>
                <h2>News details</h2>
            </div>
        </div>
    </section>
@endsection