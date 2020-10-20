@extends('layout')

@section('title', 'Blog')

@section('content')
<div class="reson_area" style="padding-top: 120px">

    <div class="container">
      <div class="row justify-content-center">  
        <div class="col-lg-8">
            <div class="single_reson">
                <div class="help_content">
                    <div class="">
                        <img src="{{asset("public/devlop/img/_laravel.png")}}" alt="" width= "100%" height= "400">
                    </div>
                    <div class="text-art">
                        <p class="text-center">Laravel</p>
                        <h3 class="text-center mb-4">PENERAPAN MVC LARAVEL</h3><hr><br>
                    <p>Selamat datang teman-teman di blog saya. Pada kesempatan kali ini saya akan menjelaskan bagaimana kita mengimplementasikan MVC (Model, View, Controller) pada laravel. Artikel ini saya buat untuk mengerjakan tugas Pengembangan Aplikasi Berbasis Web.
                    </p>
                    <p>
                        <b> Model-View-Controller </b>(biasanya dikenal sebagai MVC ) adalah pola desain perangkat lunak yang biasa digunakan untuk mengembangkan antarmuka pengguna yang membagi logika program terkait menjadi tiga elemen yang saling berhubungan. Ini dilakukan untuk memisahkan representasi internal informasi dari cara informasi disajikan dan diterima dari pengguna.

                        Biasanya digunakan untuk antarmuka pengguna grafis desktop (GUI), pola ini telah menjadi populer untuk mendesain aplikasi web . bahasa pemrograman populer seperti JavaScript , Python , Ruby , PHP , Java , C # , dan Swift memiliki kerangka kerja MVC yang digunakan untuk web atau pengembangan aplikasi mobile.
                    </p>
                    <br>
                    <h4>Model</h4>
                    <p>
                        Komponen utama dari pola. Ini adalah struktur data dinamis aplikasi, tidak bergantung pada antarmuka pengguna. Ini secara langsung mengelola data, logika dan aturan aplikasi.</p>
                        <br>
                        <h4>View</h4>
                        <p>Representasi informasi apa pun seperti bagan, diagram, atau tabel. Beberapa tampilan dari informasi yang sama dimungkinkan, seperti diagram batang untuk manajemen dan tampilan tabel untuk akuntan.</p>
                        <br>
                        <h4>Controller</h4>
                        <p>Menerima input dan mengubahnya menjadi perintah untuk model atau tampilan.</p> <br>
                        <p>
                        Selain membagi aplikasi ke dalam komponen ini, desain model-view-controller mendefinisikan interaksi di antara mereka.

                        Model bertanggung jawab untuk mengelola data aplikasi. Ini menerima input pengguna dari pengontrol.
                        View berarti penyajian model dalam format tertentu.
                        Pengontrol menanggapi masukan pengguna dan melakukan interaksi pada objek model data. Pengontrol menerima input, secara opsional memvalidasinya dan kemudian meneruskan input ke model.
                        Seperti pola perangkat lunak lainnya, MVC mengekspresikan "inti dari solusi" ke masalah sambil memungkinkannya diadaptasi untuk setiap sistem. Desain MVC tertentu dapat sangat bervariasi dari deskripsi tradisional di sini.
                    </p>
                    <hr>
                    <h4 class="mt-2">Tags : 
                        <button class="btn btn-primary">PHP</button>
                        <button class="btn btn-primary">Laravel</button>
                        <button class="btn btn-primary">Web</button>
                        
                    </h4>
                </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="single_reson ">
                <div class="help_content pl-3 pr-3">
                    <div class="text-art" style="padding-left: 3px">
                        <h4>Populer Posts</h4>
                        <hr>
                    </div>
                    <div class="d-flex mb-4">
                        <img src="{{asset("public/devlop/img/_laravel.png")}}" alt="" 
                        width="35%" height="100" style="float: left; padding-right:9px">
                    <p class="">LARAVEL KERANGKA UNTUK APLIKASI WEB </p>
                    </div>
                    <div class="d-flex mb-4">
                        <img src="{{asset("public/devlop/img/_laravel.png")}}" alt="" 
                        width="35%" height="100" style="float: left; padding-right:9px">
                    <p class="">LARAVEL KERANGKA UNTUK WEB YANG POWEFUL</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 mt-5">
                <div class="single_reson ">
                    <div class="help_content pl-3 pr-3">
                        <div class="text-art" style="padding-left: 3px">
                            <h4>Labels</h4>
                            <hr>
                        </div>
                        <div class="mb-4">
                            <button class="btn mb-2">PHP</button>
                            <button class="btn mb-2">Javascripts</button>
                            <button class="btn mb-2">Laravel</button>
                            <button class="btn mb-2">Git</button>
                            <button class="btn mb-2">CodeIgniter</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    </div>
@endsection