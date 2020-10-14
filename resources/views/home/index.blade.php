@extends('layout')

@section('title', 'Home')

@section('content')
    
  {{-- slide area --}}
  <div class="slider_area">
    @include('home.part.poster')
  </div>

  {{-- modul populer area --}}
  <div class="reson_area section_padding">
    @include('home.part.modul_area')
  </div>

  {{-- area 2 --}}
  <div class="popular_causes_area section_padding" style="
  background-color: aliceblue;">
    @include('home.part.area_2')
  </div>

  {{-- area 3L --}}
  <div class="reson_area section_padding">
    @include('home.part.area_3')
  </div>

  {{-- area 4 --}}
  <div class="reson_area section_padding" style="padding-top: 0;">
    @include('home.part.area_4')
  </div>

      <!-- news__area_start  -->
  <div class="section_padding" style="background-color: #2c3e50">
    @include('home.part.area_terbaru')
  </div>

  <!-- our_volunteer_area_start  -->
  <div class="" style="background-color: #f2f2f2; margin-top:;padding-top: 64px;
  padding-bottom: 120px;">
  @include('home.part.subcriber')
  </div>

@endsection