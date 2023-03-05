@extends('frontend.layouts.app', ['halaman' => 'produk'])

@section('javascript')
    <script src="{{ asset('public/frontend/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('public/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/js/custom.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/js/owl.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/js/slick.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/js/isotope.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/js/accordions.js') }}"></script>
    <script language = "text/Javascript"> 
        cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
        function clearField(t){                   //declaring the array outside of the
        if(! cleared[t.id]){                      // function makes it static and global
            cleared[t.id] = 1;  // you could use true and false, but that's more typing
            t.value='';         // with more chance of typos
            t.style.color='#fff';
            }
        }
    </script>
@endsection

@section('head')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ json_decode($text->product)->description }}">
    <meta name="keywords" content="{{ json_decode($text->product)->keyword }}">
    <meta name="author" content="{{ json_decode($text->product)->author }}">
    <title>{{ $text->toko }}</title>
    <link href="{{ asset('public/frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/templatemo-sixteen.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/owl.css') }}">
@endsection

@section('content')
    @include('frontend.item.header', ['gambar' => $top->gambar])
    <div class="best-features about-features">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>{{ $produkItem->produk }}</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-image">
                        <img src="{{ asset('public/produk-item/'.$produkItem->gambar) }}" alt="" width="100%" height="326px">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="left-content">
                        @php
                            echo $produkItem->deskripsi;
                        @endphp
                        <ul class="social-icons">
                            @include('frontend.item.social',['text' => $text])
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection