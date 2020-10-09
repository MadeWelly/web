@extends('home.layout')

@section('title', 'Home')

@section('content')
    
  {{-- slide area --}}
  <div class="slider_area">
    @include('home.component.poster')
  </div>

  {{-- modul populer area --}}
  <div class="reson_area section_padding">
    @include('home.component.modul_area')
  </div>

  {{-- area 2 --}}
  <div class="popular_causes_area section_padding" style="padding-top: 40px;padding-bottom: 24px;
  background-color: aliceblue; margin-bottom:50px;">
    @include('home.component.area_2')
  </div>

  {{-- area 3L --}}
  <div class="reson_area pt-5 mt-5">
    @include('home.component.area_3')
  </div>

  {{-- area 4 --}}
  <div class="reson_area pt-5 mt-5">
    @include('home.component.area_4')
  </div>

      <!-- our_volunteer_area_start  -->
  <div class="" style="background-color: #f2f2f2; margin-top:49px;padding-top: 64px;
  padding-bottom: 120px;">
  @include('home.component.subcriber')
  </div>

      <!-- news__area_start  -->
  <div class="section_padding" style="background-color: #2c3e50">
    @include('home.component.area_terbaru')
  </div>

@endsection