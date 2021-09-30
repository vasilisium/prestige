@extends('layouts.layout')
@section('title', 'Home')
@section('content')
  <section class="banner">
    <div class="img_banner" style="background: url({{URL::asset('img/banner1.jpg')}}">
    </div>
    <div class="banner_logo">
      <img src="{{URL::asset('img/logo.svg')}}"/>
      <label>Меблі, що надихають</label>
    </div>
  </section>

  @include('main.about')
@endsection