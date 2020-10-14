
@extends('layout')

@section('title', 'Git')


@section('content')
    
<div class="reson_area section_padding">

<div class="container pages">
  <div class="row justify-content-center">

      {{-- <div class="col-lg-10">
          <div class="section_title text-center mb-55">
              <h3><span>Made Code</span></h3>adalah website yang dikembangkan khusus untuk membantu belajar dasar-dasar pemrograman
          </div>
      </div> --}}
  </div>
  <div class="row justify-content-center">

      <div class="col-lg-10">
          <div class="section_title text-center mb-55">
              <h3><span>Git Courses</span></h3>
          </div>
      </div>
  </div>
  <div class="row justify-content-center">  
      <div class="col-lg-4 col-md-6">
          <div class="single_reson">
              <div class="help_content">
                  <div class="">
                      <img src="{{asset("public/devlop/img/apaitu-git.png")}}" alt="" width= "100%" height= "200">
                  </div>
                  <div class="text-art">
                  <p>APA ITU GIT, KENAPA PENTING</p>
                  <a href="{{url("blog/read")}}" class="read_more">Read More</a>
              </div>
              </div>
          </div>
      </div>
      <div class="col-lg-4 col-md-6">
          <div class="single_reson">
              <div class="help_content">
                  <div class="">
                      <img class="img-art" src="{{asset("public/devlop/img/install-git.jpg")}}" alt="" width="100%" height= "200">
                  </div>
                  <div class="text-art">
                      <p>INSTALL GIT DAN KONFIGURASI</p>
                      <a href="#" class="read_more">Read More</a>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-5">
          <div class="single_reson">
              <div class="help_content">
                  <img src="{{asset("public/devlop/img/repo-git.png")}}" alt="" width= "100%" height= "200">
                  <div class="text-art">
                  <p>REPOSITORI GIT DALAM PROYEK</p>
                  <a href="#" class="read_more">Read More</a>
              </div>
              </div>
          </div>
      </div>
  </div>
  
</div>
</div>

@endsection
