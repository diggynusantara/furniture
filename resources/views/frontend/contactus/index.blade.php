@extends('frontend.layouts.app', ['halaman' => 'contact-us'])

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
    <meta name="description" content="{{ json_decode($text->contact)->description }}">
    <meta name="keywords" content="{{ json_decode($text->contact)->keyword }}">
    <meta name="author" content="{{ json_decode($text->contact)->author }}">
    <title>{{ $text->toko }}</title>
    <link href="{{ asset('public/frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/templatemo-sixteen.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/owl.css') }}">
@endsection

@section('content')
    @include('frontend.item.header', ['gambar' => $top->gambar])

    <div class="find-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Lokasi Kami</h2>
                    </div>
                </div>
                <div class="col-md-8">
                    <div id="map">
                        <iframe src="https://maps.google.com/maps?q=eka%20mitra%20tegal&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="330px" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="left-content">
                        @php
                            echo $text->tempat;
                        @endphp
                        <ul class="social-icons">
                            @include('frontend.item.social',['text' => $text])
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
      
    <div class="send-message">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Kirim Pesan Ke Kami</h2>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="contact-form">
                        <form id="contact" action="{{ route('contact-us.pesan') }}" method="post">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="name" type="text" class="form-control" id="name" placeholder="Nama Lengkap" required>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="email" type="text" class="form-control" id="email" placeholder="E-Mail">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="Pesan" required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="filled-button">Kirim Pesan</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                {{--  <div class="col-md-4">
                    <ul class="accordion">
                        <li>
                            <a>Accordion Title One</a>
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester consectetur similiqu consectetur.<br><br>Lorem ipsum dolor sit amet, consectetur adipisic elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti elite.</p>
                            </div>
                        </li>
                        <li>
                            <a>Second Title Here</a>
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester consectetur similiqu consectetur.<br><br>Lorem ipsum dolor sit amet, consectetur adipisic elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti elite.</p>
                            </div>
                        </li>
                        <li>
                            <a>Accordion Title Three</a>
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester consectetur similiqu consectetur.<br><br>Lorem ipsum dolor sit amet, consectetur adipisic elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti elite.</p>
                            </div>
                        </li>
                        <li>
                            <a>Fourth Accordion Title</a>
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester consectetur similiqu consectetur.<br><br>Lorem ipsum dolor sit amet, consectetur adipisic elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti elite.</p>
                            </div>
                        </li>
                    </ul>
                </div>  --}}
            </div>
        </div>
    </div>
@endsection