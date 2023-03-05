@extends('frontend.layouts.app',['halaman' => 'home'])

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
    <meta name="description" content="{{ json_decode($text->home)->description }}">
    <meta name="keywords" content="{{ json_decode($text->home)->keyword }}">
    <meta name="author" content="{{ json_decode($text->home)->author }}">
    <title>{{ $text->toko }}</title>
    <link href="{{ asset('public/frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/templatemo-sixteen.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/owl.css') }}">
@endsection

@section('content')
    <div class="banner header-text">
        <div class="owl-banner owl-carousel">
            @foreach ($slider as $item)
                <div class="banner-item-02" style="background-image: url({{ asset('public/tampilan/'.$item->gambar) }})">
                    <div class="text-content">
                        <h2><style>{
                        @media only screen and (min-width: 631px) and (max-width: 768px)
                        font-size: 60px;font-weight: bolder;line-height: 1.2em;}
                        </style>
                        WUJUDKAN HUNIAN IMPIAN ANDA BERSAMA KAMI</h2><br><br>
                        <a class="btn2 btn-merahtua zoom-in" href="#portofolio" style="background-color: #c0392b;border: 2px solid #c0392b;font-size: 17px;margin: 3px;border: none;color: white;padding: 6px 20px;cursor: pointer;display: inline-block;-webkit-transition-duration: 0.4s;transition-duration: 0.4s;border-radius: 50px;border-radius: 2%;-webkit-transition: all 1s ease;-moz-transition: all 1s ease;-o-transition: all 1s ease;-ms-transition: all 1s ease;transition: all 1s ease;">
                            <b>PORTOFOLIO KAMI</b>
                        </a><br><br>
                        <p class="animated" style="color: white;font-size: 20px;font-weight: bolder;visibility: visible;margin: 0 0 10px;">Hubungi Kami</p>
                        <p>
                            <a class="social-icons" href="tel:+{{$text->wa}}" target="_blank" style="background-color: #2196F3;border: 2px solid #2196F3;font-size: 17px;margin: 3px;border: none;color: white;padding: 6px 20px;cursor: pointer;display: inline-block;-webkit-transition-duration: 0.4s;transition-duration: 0.4s;border-radius: 50px;border-radius: 2%;-webkit-transition: all 1s ease;-moz-transition: all 1s ease;-o-transition: all 1s ease;-ms-transition: all 1s ease;transition: all 1s ease;"><i class="fa fa-phone-square"></i> 
                                <b>{{$text->wa}}</b>
                            </a>
                            <a class="social-icons" href="https://wa.me/{{$text->wa}}?text=Adi Baskara Persada Siap Membantu . . . . " target="_blank" style="background-color: #27ae60;border: 2px solid #27ae60;font-size: 17px;margin: 3px;border: none;color: white;padding: 6px 20px;cursor: pointer;display: inline-block;-webkit-transition-duration: 0.4s;transition-duration: 0.4s;border-radius: 50px;border-radius: 2%;-webkit-transition: all 1s ease;-moz-transition: all 1s ease;-o-transition: all 1s ease;-ms-transition: all 1s ease;transition: all 1s ease;"><i class="fa fa-whatsapp"></i>
                                <b>{{$text->wa}}</b>
                            </a>
                        </p><br>
                        <ul class="social-icons">
                            @include('frontend.item.social',['text' => $text])
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="widget HTML" data-version="2" id="HTML18">
        <h3 class="title" style="display: none;">KLIEN KAMI</h3>
        <div class="widget-content">
        <!-- AWAL GALERI 6 KOLOM -->
        <div class="fitur" style="padding: 60px 20px 60px;">
            <div class="konten headline" style="text-align: center;margin: 0px auto;padding-right: 5px;padding-left: 5px;max-width: 1140px;">
                <h2 id="KLIEN" class="tebal" style="font-size: 32px;line-height: 1.3em;padding: 5px 0;margin-top: 20px;margin-bottom: 10px;">KLIEN KAMI</h2>
                <h4 style="font-family: inherit;font-weight: 500;line-height: 1.1;color: inherit;margin-top: 10px;margin-bottom: 10px;">Beberapa brand yang mungkin anda kenal telah menjadi rekan kerja kami.</h4>
            </div>
            <div class="konten tengah" style="margin: 0px auto;padding-right: 5px;padding-left: 5px;max-width: 1140px;">
                <div class="kol6" style="padding: 0;float: left;width: 16.5%;transition: all 1s ease 50ms;">
                    <div class="box" style="padding: 15px;">
    		            <img style="max-width: 100%;height: auto;border-radius: 0;" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjmdpVo-soFSrc11G_1jW5bEwTahJ1c84HtR7p9RnCuh5jJxjBboui0HpeNhr1qZ-ab79Dv8iL0a3MskZ_ZuLrWKSxqHijoQ5vaIKFPgxn7zR6RXZxcDhQY19eGmgD882okNNwexhwbDBuQiGdkW7zX5Fvftr_SN2ap3TcrNymUkm-wMNnodqG7GYhM/s1600/rsud.jpg">
		            </div>
                </div>
	            <div class="kol6" style="padding: 0;float: left;width: 16.5%;transition: all 1s ease 50ms;">
                    <div class="box" style="padding: 15px;">
       			        <img style="max-width: 100%;height: auto;border-radius: 0;" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgw2uKmHw74lx9QvntEz39LoHBaWEfj9ED7vmTqW0IlBrdOEgrXQ8jjcwoPgA6W7ITmcoTtSpp9mW_ccmo2H2RhWJ8jOMigMSKzRd07ze-s3rRcneER9LBDhWnSdbQ4l-di5ceFRCvZBVjH9PmYQ3l-5Cl70g9yOPJv7UuARl7QAO_G1W6rmniQB5MK/s1600/SETDA%20DEMAK%202.jpg">
	        	    </div>
                </div>
                <div class="kol6" style="padding: 0;float: left;width: 16.5%;transition: all 1s ease 50ms;">
                    <div class="box" style="padding: 15px;">
            		    <img style="max-width: 100%;height: auto;border-radius: 0;" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiKYb595joqdIo-S5Ma9XggN_BzSCWmIRz_d27CL-DMvdWrX0i62os0ifGCLID4Rc3ImOrzMlMGS-9c0pRN4boEGuI7UFHaaOZIakpA--ueNoOEQsTpgNhRsmrybUmWfXoDVQo7mPZtwOf34xEkbroXvikFEowbGmBpf1zKBXkbZ2uy1o9qDtV0KTIE/s1600/bri.jpg">
	                </div>
                </div>
	            <div class="kol6" style="padding: 0;float: left;width: 16.5%;transition: all 1s ease 50ms;">
                    <div class="box" style="padding: 15px;">
			            <img style="max-width: 100%;height: auto;border-radius: 0;" alt="galeri" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEh-MPlvAhRzZK6yEcGyj82a6h6iOWNNttQPklE-bM3UnfoeUQa4HaLfyZ3qe-4Wszi9kyHtwReG41f3sD04OMDUgPREQ3wW-mQ2G2TFcFZtTNlx1gNG0mX9flqLeq1S9oSTHa36zdMJS7UVy07R8yl-gN1wromzEKkXJFEY7OZFuVeMxmKLAZ703hrL/s16000/POLRES%20PUTIH.jpg">
		            </div>
                </div>
                <div class="kol6" style="padding: 0;float: left;width: 16.5%;transition: all 1s ease 50ms;">
                    <div class="box" style="padding: 15px;">
			            <img style="max-width: 100%;height: auto;border-radius: 0;" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg-YNNfFIueACi2bdD0LipYT0TMSWQEpUpXcAht9zzbGPC88UW8AoF1PGyoiyypsUuV8aDiBnNbWPLAy7O7Ec-29Va5mDKzhrlSVA893pKbAhIjumT2GRvqnQGZKPgKOt6rpJOmVfVejaM6Exo_dKrtTZYvas7P8ooBOB8w25NP0IqXJg76KPZxit7k/s16000/DINAS%20PENDIDIKAN%20DAN%20KEBUDAYAAN%20DEMAK.jpg">
		            </div>
                </div>
                <div class="kol6" style="padding: 0;float: left;width: 16.5%;transition: all 1s ease 50ms;">
                    <div class="box" style="padding: 15px;">
			            <img style="max-width: 100%;height: auto;border-radius: 0;" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiEztAUlkQNzPQfDQnLX5EYolcSwvB0h7UuUcLQoSJDre4YrTXZp7Z1x_aN6pRbUkeoB4j7sZUf8fDf_NeoPCLrMZmejWYxp19fcfRsbWFZlcwtIqmx6fKldK8SqSOq7Q1_xDVlKxuA7FseeU7z-z_UC-09wI4EyM1SEM_ZO6jroYYZ0m0sPBXqcG7K/s16000/LOGO%20PUSKESMAS.jpg">
		            </div>
                </div>		
            </div>
        </div>
        <!-- BATAS GALERI 6 KOLOM -->
    </div>
    <div class="latest-products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading"><br><br>
                        <h2>Product Terbaru</h2>
                        <a href="{{ route('product') }}">lihat selengkapnya <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                @foreach ($produk as $item)
                    <div class="col-md-4">
                        @include('frontend.item.produk', ['item' => $item])
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="best-features">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Tentang {{$text->toko}}</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="left-content">
                        @php
                            echo $text->tentang;
                        @endphp
                        <a href="{{ route('about-us') }}" class="filled-button">Lihat Selengkapnya</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-image">
                        <img src="{{ asset('public/tampilan/'.$bottom->gambar) }}" alt="" width="100%" height="350px">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="widget HTML" data-version="2" id="HTML25">
        <h3 class="title" style="display: none;">KATEGORI OPSI 3</h3>
        <div class="widget-content" style="font-size: 20px;line-height: 1.5em;height: 450px">
        <!-- AWAL PORTOFOLIO -->
            <div class="fitur oke" style="padding: 60px 20px 60px;">
                <div class="konten headline" style="text-align: center;margin: 0px auto;padding-right: 5px;padding-left: 5px;max-width: 1140px;">
                    <h2 id="service" class="tebal" style="font-weight: bolder;">Layanan Adi Baskara Persada</h2>
                    <div class="konten tengah" style="text-align: center;margin: 0px auto;padding-right: 5px;padding-left: 5px;max-width: 1140px;">
                        <!-- batas 1  -->
                        <div class="group">
                            <div class="kol-2" style="padding: 0;float: left;width: 49.8%;transition: all 1s ease 50ms;">
                                <div class="box" style="padding: 15px;">
                                    <div class="latar-hitam" style="background: #333333;color: #ffffff;">
                                    <a href="#" target="_blank">
                                    <img style="max-width: 100%;height: auto;border-radius: 0;vertical-align: middle;border: 0;" src="https://1.bp.blogspot.com/-iFgNAAtY8xc/YVJYoFMbUZI/AAAAAAAAFfc/PRwoe4Kofg8wkSUY_W5zYr7dP3yGvEQzACLcBGAsYHQ/s0/JASA%2BDESAIN%2BPERENCANAAN%2BDAN%2BPEMBANGUNAN%2BEL%2BAZZAM.jpg"><br>
                                    </a><div class="box" style="padding: 15px;"><a href="#" target="_blank">
                                        </a><div class="tebal" style="font-weight: bolder;"><a href="#" target="_blank">
                                            </a><a href="#" class="btn1 btn-merah btn-besar" style="background-color: #f03a28;border: 2px solid #f03a28;font-size: 20px;padding: 10px 24px;font-size: 17px;margin: 3px;border: none;color: white;padding: 6px 20px;cursor: pointer;display: inline-block;-webkit-transition-duration: 0.4s;transition-duration: 0.4s;border-radius: 6px;">KONSULTAN</a>
                                            </div>
    				                        <a class="btn1 btn-biru btn-kecil" href="#portofolio" style="background-color: #2196F3;border: 2px solid #2196F3;font-size: 14px;padding: 3px 13px;font-size: 17px;margin: 3px;border: none;color: white;padding: 6px 20px;cursor: pointer;display: inline-block;-webkit-transition-duration: 0.4s;transition-duration: 0.4s;border-radius: 6px;"><i class="fas fa-tv"></i> Desain 2D &amp; 3D</a>				
	    		                            <a class="btn1 btn-hijau btn-kecil" href="https://api.whatsapp.com/send?phone={{$text->wa}}&amp;text=Halo Adi Baskara Persada , Saya Mau Konsultasi Untuk Membangun Rumah" style="background-color: #2ecc71;border: 2px solid #2ecc71;font-size: 14px;padding: 3px 13px;font-size: 17px;margin: 3px;border: none;color: white;padding: 6px 20px;cursor: pointer;display: inline-block;-webkit-transition-duration: 0.4s;transition-duration: 0.4s;border-radius: 6px;" target="_blank"><i class="fa fa-whatsapp"></i> Konsultasi</a>      
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!-- batas 2  -->
                            <div class="kol-2" style="padding: 0;float: left;width: 49.8%;transition: all 1s ease 50ms;">
                                <div class="box" style="padding: 15px;">
                                    <div class="latar-hitam" style="background: #333333;color: #ffffff;">
                                    <a href="#" target="_blank">
                                    <img style="max-width: 100%;height: auto;border-radius: 0;vertical-align: middle;border: 0;" src="https://1.bp.blogspot.com/-op8S6bPoFMs/YVP3ZQDYEiI/AAAAAAAAFhA/vjZaSyrY-WcHKitWQQiKBPWhzzdinwJXQCLcBGAsYHQ/s16000/JASA%2BRENOVASI%2BBANGUNAN.jpg"><br>
                                    </a><div class="box" style="padding: 15px;"><a href="#" target="_blank">
                                        </a><div class="tebal" style="font-weight: bolder;"><a href="#" target="_blank">
                                            </a><a href="#" class="btn1 btn-merah btn-besar" style="background-color: #f03a28;border: 2px solid #f03a28;font-size: 20px;padding: 10px 24px;font-size: 17px;margin: 3px;border: none;color: white;padding: 6px 20px;cursor: pointer;display: inline-block;-webkit-transition-duration: 0.4s;transition-duration: 0.4s;border-radius: 6px;">KONTRAKTOR</a>
                                            </div>
			    	                        <a class="btn1 btn-biru btn-kecil" href="#portofolio" style="background-color: #2196F3;border: 2px solid #2196F3;font-size: 14px;padding: 3px 13px;font-size: 17px;margin: 3px;border: none;color: white;padding: 6px 20px;cursor: pointer;display: inline-block;-webkit-transition-duration: 0.4s;transition-duration: 0.4s;border-radius: 6px;"><i class="fas fa-tv"></i> Pembuatan RAB</a>				
			                                <a class="btn1 btn-hijau btn-kecil" href="https://api.whatsapp.com/send?phone={{$text->wa}}&amp;text=Halo Adi Baskara Persada , Saya Mau Konsultasi Untuk Membangun Rumah" style="background-color: #2ecc71;border: 2px solid #2ecc71;font-size: 14px;padding: 3px 13px;font-size: 17px;margin: 3px;border: none;color: white;padding: 6px 20px;cursor: pointer;display: inline-block;-webkit-transition-duration: 0.4s;transition-duration: 0.4s;border-radius: 6px;" target="_blank"><i class="fa fa-whatsapp"></i> Konsultasi</a>      
                                        </div>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- AKHIR PORTOFOLIO -->    
    </div>             		
    <div class="widget HTML" data-version="2" id="HTML26">
        <h3 class="title" style="display: none;">Kategori 2</h3>
        <div class="widget-content" style="font-size: 20px;line-height: 1.5em;height: 450px">
        <!--AWAL 2 	KOLOM-->
            <div class="konten tengah" style="text-align: center;margin: 0px auto;padding-right: 5px;padding-left: 5px;max-width: 1140px;">
                <hr class="putih" style="border: 2px solid white;max-width: 100px;margin-top: -5px;">
            </div>
            <div class="konten" style="margin: 0px auto;padding-right: 5px;padding-left: 5px;max-width: 1140px;">
		        <div class="kol-12" style="padding: 0;float: left;width: 49.8%;transition: all 1s ease 50ms;">
			        <div class="box" style="padding: 15px;">
				        <div class="box latar-putih melengkung sorot-shadow-kuning" style="padding: 15px;transition: all 1s ease 50ms;background: #ffffff;color: #333333;border-radius: 10px;-moz-border-radius: 10px;-webkit-border-radius: 10px;">
					        <div class="gambar-fitur" style="width: 100px;height: 100px;float: left;padding-right: 10px;padding-left: 10px;padding-top: 0;font-size: 60px;text-align: center;">
                                <img style="max-width: 100%;height: auto;border-radius: 0;vertical-align: middle;border: 0;" alt="icon pekerjaan las" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjpdlnNWbu_6hTes10aox1n_RRmrl0R3Nj0buHX2smy4uzmCkXQC7Exskln1YidO636BMLDT8-NWQTvSqY8vfA_5of2rnzgbyfr1r7fG2YEiBgnCDVornp-u1GJnNJ01Otvrur20eBcQV9wSTLZEqUtV2pX1gfv6o0tidxYqc54IeucxLGZhLFcoRaM/s1600/pekerjaan%20las%20icon.jpg">
                 	        </div>
					        <div class="teks-fitur kecil" style="overflow: hidden;font-size: 16px;line-height: 1.6em;">
                                <p class="tebal normal" style="font-weight: bolder;font-size: 20px;">Pekerjaan Besi Dan Las</p>
                                Produk konstruksi (tangga besi, railing tangga, pagar, tralis, kanopi, dan lain sebagainya)  <br>
                                <a href="#" target="_blank"><b>KLIK DI SINI</b></a>
                  	        </div>
				        </div>
			        </div>
		        </div>
		        <div class="kol-12" style="padding: 0;float: left;width: 49.8%;transition: all 1s ease 50ms;">
			        <div class="box" style="padding: 15px;">
				        <div class="box latar-putih melengkung sorot-shadow-kuning" style="padding: 15px;transition: all 1s ease 50ms;background: #ffffff;color: #333333;border-radius: 10px;-moz-border-radius: 10px;-webkit-border-radius: 10px;">
					        <div class="gambar-fitur" style="width: 100px;height: 100px;float: left;padding-right: 10px;padding-left: 10px;padding-top: 0;font-size: 60px;text-align: center;">
                                <img style="max-width: 100%;height: auto;border-radius: 0;vertical-align: middle;border: 0;" alt="agen pulsa murah" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEh4fa6YDbLLnP3GK-NHjVEkkQhaW5hk99EIOPPUiTv7bBq_5v6kvWiBzS2x3JQcb9NaEZBJssIEsMMrqNvXgMpMUoc87r8QP6sHEzETfpIGFHcJSdRgM2Yv-eotehYzT0ITQrvVr1jHFQMvjm4Fgg0zrMRfccRhkD_a00tMLst75loEhLlc2SooxWxe/s1600/imb.jpg">
                 	        </div>
					        <div class="teks-fitur kecil" style="overflow: hidden;font-size: 16px;line-height: 1.6em;">
                                <p class="tebal normal" style="font-weight: bolder;font-size: 20px;">Konsultan Jasa Pengurusan IMB</p>
                                Kami siap membantu Anda terkait Pengerjaan dan Pengurusan IMB serta hal kontruksi lain sebagainya.<br>
                                <a href="#" target="_blank"><b>KLIK DI SINI</b></a>
                  	        </div>
				        </div>
			        </div>
		        </div>
            </div>
        </div>
    </div>
    <div class="widget HTML" data-version="2" id="HTML27">
        <h3 class="title" style="display: none;">Kenapa Kami</h3>
        <div class="widget-content" style="font-size: 18px;line-height: 1.5em;height: 500px;">
        <!-- AWAL 3 KOLOM -->
            <div class="konten headline" style="text-align: center;margin: 0px auto;padding-right: 5px;padding-left: 5px;max-width: 1140px;">
			    <h3 class="tebal hitam"><style>{
                @media only screen and (min-width: 631px) and (max-width: 768px)
                font-size: 28px;font-weight: bolder;color: #333333;}
                </style>Kenapa Kami?</h3>
                <p style="font-size: 20px;text-align: center;width: 97%">Kami adalah pilihan tepat untuk memulai pembangunan rumah yang Anda impikan</p><br>
			    <hr class="biru" style="color: #2679ec;border: 2px solid blue;max-width: 100px;margin-top: -5px;transition: all 1s ease 50ms;"><br>
		    </div>
            <div class="konten tengah" style="text-align: center;margin: 0px auto;padding-right: 5px;padding-left: 5px;max-width: 1140px;">
                <div class="kol-13" style="padding: 0;float: left;width: 33.3%;transition: all 1s ease 50ms;">
                    <div class="box" style="padding: 15px;">
                        <img class="foto1" style="width: 100px;height: 100px;overflow: hidden;margin: auto;border-radius: 100px;border: 3px solid #e9e9e9;max-width: 100%;vertical-align: middle;" src="https://1.bp.blogspot.com/-k3jKBDbhfN4/YVJXd6Z01rI/AAAAAAAAFfI/WUvco1votrw6De0LQ0ar_H721sbs9ljkwCLcBGAsYHQ/s0/uang-300x300.png">
                        <h6 class="tebal hitam" style="font-weight: bolder;transition: all 1s ease 50ms;color: #333333;">TERJANGKAU</h6>
                        <p class="kecil" style="]font-size: 16px;line-height: 1.6em;">Kami memberikan harga yang bisa disesuaikan dengan anggaran Anda. Dengan anggaran yang terbatas, Anda dapat menggunakan jasa kami dengan mudah. </p>
                    </div>
                </div>
                <div class="kol-13" style="padding: 0;float: left;width: 33.3%;transition: all 1s ease 50ms;">
                    <div class="box" style="padding: 15px;">
                        <img class="foto1" style="width: 100px;height: 100px;overflow: hidden;margin: auto;border-radius: 100px;border: 3px solid #e9e9e9;max-width: 100%;vertical-align: middle;" src="https://1.bp.blogspot.com/-XQ7Z3MVc8u8/YVJVRl3yR_I/AAAAAAAAFfA/UqWsbwqJz_UYoRfYiAkeurNgRsgrJwJ0gCLcBGAsYHQ/s0/duits-300x300.png">
                        <h6 class="tebal hitam" style="font-weight: bolder;transition: all 1s ease 50ms;color: #333333;">TERPERCAYA</h6>
                        <p class="kecil" style="]font-size: 16px;line-height: 1.6em;">Kami menggunakan sistem pembayaran secara bertahap. Dalam pelaksanaannya dibagi menjadi tiga tahap yang dibayar sesuai dengan progress proyek. Kemudahan Anda dalam memantau progress di lapangan kini berada dalam genggaman.</p>
                    </div>
                </div>
                <div class="kol-13" style="padding: 0;float: left;width: 33.3%;transition: all 1s ease 50ms;">
                    <div class="box" style="padding: 15px;">
                        <img class="foto1" style="width: 100px;height: 100px;overflow: hidden;margin: auto;border-radius: 100px;border: 3px solid #e9e9e9;max-width: 100%;vertical-align: middle;" src="https://1.bp.blogspot.com/-Shv00DRRFbM/YVJXeG5mi7I/AAAAAAAAFfM/0teDxrmTXnEg27FXk91UiPSrmcLemzGKwCLcBGAsYHQ/s0/uang-300x00.png">
                        <h6 class="tebal hitam" style="font-weight: bolder;transition: all 1s ease 50ms;color: #333333;">TRANSPARAN</h6>
                        <p class="kecil" style="]font-size: 16px;line-height: 1.6em;">Kami terbuka hal sepesifikasi material. Baik itu jenis maupun merek yang Kami gunakan untuk pembangunan hunian Anda. Kami menjamin material yang kami gunakan sesuai dengan SNI sehingga bangunan rumah kokoh, aman dan sesuai dengan impian Anda dan keluarga.</p>
                    </div>
                </div>
            </div>
            <style type="text/css">
            .thumbnail {position: relative; overflow: hidden;padding: 5px;}
            .caption {position: absolute; top: 0; right: 0; background-color: rgba(23,152,242,0.8);width: 100%;height:100%; padding: 2%; padding-top: 10%; display: none; text-align: center; color: #fff !important;  z-index: 2;}
            .bg-melayang{background: url("https://1.bp.blogspot.com/-4GdRdSbq3iI/XTJM9YswfbI/AAAAAAAADDU/7E5WrS8RkVcu6S_0Usy-ehTzZuhNcEBsgCLcBGAs/s1600/fasilitas.jpg") repeat scroll 0 0 #333333;background-attachment: fixed; background-size:cover;}</style>
        </div>
        <!-- AKHIR 6 KOLOM -->
    </div>
    <div class="widget HTML" data-version="2" id="HTML28">
        <h3 class="title" style="display: none;">Portofolio</h3>
        <div class="widget-content" style="font-size: 20px;line-height: 1.5em;transition: all 1s ease 50ms;height: 800px">
            <!-- PORTOFOLIO -->
            <div id="portofolio">
                <div class="latar-hitam"> <!-- style="background: #333333;color: #ffffff;" -->
                    <div class="oke fitur" style="padding: 60px 20px 60px;">
                        <div class="konten headline wow  fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;animation-duration: 1s;animation-fill-mode: both;text-align: center;margin: 0px auto;padding-right: 5px;padding-left: 5px;max-width: 1140px;">
                        <h2 class="x-besar style62" style="font-size: 38px;line-height: 1.2em;font-family: 'Prata', serif;line-height: 1.4em;"><span class="putih" style="color: black;transition: all 1s ease 50ms;"><b>Portofolio</b> </span> </h2>
                        <hr class="orange" style="border: 2px solid #ff6600;max-width: 100px;margin-top: -5px;transition: all 1s ease 50ms;color: #ff6600;">
                        </div>
                    </div>
                    <div class="konten headline" style="text-align: center;margin: 0px auto;padding-right: 5px;padding-left: 5px;max-width: 1140px;">
                        <p><a class="btn2 btn-merah zoom-in" style="background-color: #f03a28;border: 2px solid #f03a28;font-size: 17px;margin: 3px;border: none;color: white;padding: 6px 20px;cursor: pointer;display: inline-block;-webkit-transition-duration: 0.4s;transition-duration: 0.4s;border-radius: 50px;transition: all 1s ease;" href="#" target="_blank"> <b>PERENCANAAN</b></a>
                        <a class="btn2 btn-merah zoom-in" style="background-color: #f03a28;border: 2px solid #f03a28;font-size: 17px;margin: 3px;border: none;color: white;padding: 6px 20px;cursor: pointer;display: inline-block;-webkit-transition-duration: 0.4s;transition-duration: 0.4s;border-radius: 50px;transition: all 1s ease;" href="#" target="_blank"> <b>INTERIOR</b></a>
                        <a class="btn2 btn-merah zoom-in" style="background-color: #f03a28;border: 2px solid #f03a28;font-size: 17px;margin: 3px;border: none;color: white;padding: 6px 20px;cursor: pointer;display: inline-block;-webkit-transition-duration: 0.4s;transition-duration: 0.4s;border-radius: 50px;transition: all 1s ease;" href="#" target="_blank"> <b>PLAFOND</b></a>
                        <a class="btn2 btn-merah zoom-in" style="background-color: #f03a28;border: 2px solid #f03a28;font-size: 17px;margin: 3px;border: none;color: white;padding: 6px 20px;cursor: pointer;display: inline-block;-webkit-transition-duration: 0.4s;transition-duration: 0.4s;border-radius: 50px;transition: all 1s ease;" href="#" target="_blank"> <b>PEKERJAAN STRUKTUR</b></a>
                        <a class="btn2 btn-merah zoom-in" style="background-color: #f03a28;border: 2px solid #f03a28;font-size: 17px;margin: 3px;border: none;color: white;padding: 6px 20px;cursor: pointer;display: inline-block;-webkit-transition-duration: 0.4s;transition-duration: 0.4s;border-radius: 50px;transition: all 1s ease;" href="#" target="_blank"> <b>PEKERJAAN LAS</b></a></p>
                    </div>
                    <!--BATAS BARIS 1-->
                    <div class="konten" style="margin: 0px auto;padding-right: 5px;padding-left: 5px;max-width: 1140px;">
                        <!--BATAS KE 1-->  
                        <div class="kol-2 wow  fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;animation-duration: 1s;animation-fill-mode: both;padding: 0;float: left;width: 49.8%;transition: all 1s ease 50ms;">
                            <div class="box" style="padding: 15px;">
                                <img style="max-width: 100%;height: auto;border-radius: 0;vertical-align: middle;border: 0;" src="https://blogger.googleusercontent.com/img/a/AVvXsEgLt0HorBgSSO8-1xRKGsWFyfdPeVOOcW7iYwX2lfbbzR4jVfYAMVbI2ZNkkNM8VzSWaxTAqjpDvzpqv_4_tkaE8AaKV8rLD146nrtMDNm10MW6vhKrbsBkCKC3Y43wQ-VEoC820X7qG2_fn77jdedsksWBgo3yOYKCbD6mMNs3FmwYmKGeUo8A1vGB"> 
                            </div>
                        </div>
                        <!--BATAS KE 2-->
                        <div class="kol-2 wow  fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;animation-duration: 1s;animation-fill-mode: both;padding: 0;float: left;width: 49.8%;transition: all 1s ease 50ms;">
                            <div class="box" style="padding: 15px;">
                                <img style="max-width: 100%;height: auto;border-radius: 0;vertical-align: middle;border: 0;" src="https://blogger.googleusercontent.com/img/a/AVvXsEiPw8uo4Xoyz9dAnMqPNbtao5glHqhMDezL6ut2fCR2q5dc0vT7UYlrkKVU0CX3HHzkjUydYuYctVfRcJStNBtQRBy4QwvCn2omj4lN2REOm5FdqJLvguAaasuFon7MR0FhvIQ4MmdkpjvMwNEXi4S-8ZY_UceHCWzO1WBgv7TcpF_bAlwI0JEF7B5-">
                            </div>
                        </div>
                    </div>
                    <!--BATAS BARIS 2-->
                    <div class="konten" style="margin: 0px auto;padding-right: 5px;padding-left: 5px;max-width: 1140px;">
                    <!--BATAS KE 1-->  
                        <div class="kol-2 wow  fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;animation-duration: 1s;animation-fill-mode: both;padding: 0;float: left;width: 49.8%;transition: all 1s ease 50ms;">
                            <div class="box" style="padding: 15px;">
                                <img style="max-width: 100%;height: auto;border-radius: 0;vertical-align: middle;border: 0;" src="https://blogger.googleusercontent.com/img/a/AVvXsEhEelzRefVDK_FrKNDwQPpRRmTMaW7CtbIuGXBpl3hmpOjK2Rbdi3z8TuHAknkoNxCko6OorWWMcvOHfghC2I0JWGDp0aKJegWo9T1iYEP8-W1yJNAID_r2uzHFZISLQV3AICrTCaC3bGEUAhOsoDDZcPfrvYpCR821H97nWSaxVCcevbp2oqKdnGbE=s1600">
                            </div>
                        </div>
                    <!--BATAS KE 2-->
                        <div class="kol-2 wow  fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;animation-duration: 1s;animation-fill-mode: both;padding: 0;float: left;width: 49.8%;transition: all 1s ease 50ms;">
                            <div class="box" style="padding: 15px;">
                                <img style="max-width: 100%;height: auto;border-radius: 0;vertical-align: middle;border: 0;" src="https://blogger.googleusercontent.com/img/a/AVvXsEgt8V1yBqtn6eWvQerS5FF9OL-fH10-hhf5yycNstnm-ZVoKW91mnbgUjjRp0ojEXNPw2xW7MLwr035xFKxCEWd8BdWFJhZt7E7WM0qTq6l90i3q1KvDwdHRJi01hk7qHJNsMt_WXX60NiucM6Ex-QmsuHNPue2vmzbk_bawyxR7ihI11efoJQ1W8yM=s1600">
                            </div>
                        </div>
                    </div>
                    <!--BATAS BARIS 3-->
                    <div class="konten" style="margin: 0px auto;padding-right: 5px;padding-left: 5px;max-width: 1140px;">
                    <!--BATAS KE 1-->  
                        <div class="kol-2 wow  fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;animation-duration: 1s;animation-fill-mode: both;padding: 0;float: left;width: 49.8%;transition: all 1s ease 50ms;">
                            <div class="box" style="padding: 15px;">
                                <img style="max-width: 100%;height: auto;border-radius: 0;vertical-align: middle;border: 0;" src="https://1.bp.blogspot.com/-sxSZcioyClc/YV3aiyf_8uI/AAAAAAAAFqc/V75DYAwb_iU15Siz6SyOECiODx08NFoEACLcBGAsYHQ/s1600/galeri%2Bperencanaan6.jpg">
                            </div>
                        </div>
                    <!--BATAS KE 2-->
                        <div class="kol-2 wow  fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;animation-duration: 1s;animation-fill-mode: both;padding: 0;float: left;width: 49.8%;transition: all 1s ease 50ms;">
                            <div class="box" style="padding: 15px;">
                                <img style="max-width: 100%;height: auto;border-radius: 0;vertical-align: middle;border: 0;" src="https://1.bp.blogspot.com/-yVmQxww_c8U/YV3aff6S7rI/AAAAAAAAFqU/5evTs5APPyMcFI2FgON7YHwOtrqodJIggCLcBGAsYHQ/s1600/galeri%2Bperencanaan5.jpg">
                            </div>
                        </div>
                    </div>
                    <!--BATAS BARIS 4-->
                    <div class="konten" style="margin: 0px auto;padding-right: 5px;padding-left: 5px;max-width: 1140px;">
                    <!--BATAS KE 1-->  
                        <div class="kol-2 wow  fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;animation-duration: 1s;animation-fill-mode: both;padding: 0;float: left;width: 49.8%;transition: all 1s ease 50ms;">
                            <div class="box" style="padding: 15px;">
                                <img style="max-width: 100%;height: auto;border-radius: 0;vertical-align: middle;border: 0;" src="https://1.bp.blogspot.com/-AjOjegIfuG0/YV3ZnXrlPcI/AAAAAAAAFoo/ZKrsFoIeUV8fcJWhYE93EJ6UxUwNWrMIACLcBGAsYHQ/s1600/galeri%2Bperencanaan11.jpg">
                            </div>
                        </div>
                    <!--BATAS KE 2-->
                        <div class="kol-2 wow  fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;animation-duration: 1s;animation-fill-mode: both;padding: 0;float: left;width: 49.8%;transition: all 1s ease 50ms;">
                            <div class="box" style="padding: 15px;">
                                <img style="max-width: 100%;height: auto;border-radius: 0;vertical-align: middle;border: 0;" src="https://1.bp.blogspot.com/-VsHW9CTPoUU/YV3ZtYFgCJI/AAAAAAAAFos/5O1-3rs0FZ08P1GFnwSNqBtkbSg_5s5AQCLcBGAsYHQ/s1600/galeri%2Bperencanaan13.jpg">
                            </div>
                        </div>
                    </div>
                    <!--BATAS BARIS 5-->
                    <div class="konten" style="margin: 0px auto;padding-right: 5px;padding-left: 5px;max-width: 1140px;">
                    <!--BATAS KE 1-->  
                        <div class="kol-2 wow  fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;animation-duration: 1s;animation-fill-mode: both;padding: 0;float: left;width: 49.8%;transition: all 1s ease 50ms;">
                            <div class="box" style="padding: 15px;">
                                <img style="max-width: 100%;height: auto;border-radius: 0;vertical-align: middle;border: 0;" src="https://1.bp.blogspot.com/-qS4UeMTamdk/YV3lX_DyVbI/AAAAAAAAFrk/dviMTlJHwjk7JkTiT__3gPluoO3WGTtLgCLcBGAsYHQ/s1600/pekerjaan%2Binterior%2B9.jpg">
                            </div>
                        </div>
                    <!--BATAS KE 2-->
                        <div class="kol-2 wow  fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;animation-duration: 1s;animation-fill-mode: both;padding: 0;float: left;width: 49.8%;transition: all 1s ease 50ms;">
                            <div class="box" style="padding: 15px;">
                                <img style="max-width: 100%;height: auto;border-radius: 0;vertical-align: middle;border: 0;" src="https://1.bp.blogspot.com/-pA3lFfybaBM/YV3lAFNTCPI/AAAAAAAAFq8/BjA23DOPbbA_9aZhD49SeYKy8ltv8eO1gCLcBGAsYHQ/s1600/pekerjaan%2Binterior%2B12.jpg">
                            </div>
                        </div>
                    </div>
                    <!--BATAS BARIS 6-->
                    <div class="konten" style="margin: 0px auto;padding-right: 5px;padding-left: 5px;max-width: 1140px;">
                    <!--BATAS KE 1-->  
                        <div class="kol-2 wow  fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;animation-duration: 1s;animation-fill-mode: both;padding: 0;float: left;width: 49.8%;transition: all 1s ease 50ms;">
                            <div class="box" style="padding: 15px;">
                                <img style="max-width: 100%;height: auto;border-radius: 0;vertical-align: middle;border: 0;" src="https://1.bp.blogspot.com/-SWHUwq30EIk/YV3Zzr44saI/AAAAAAAAFo4/UYKOsMugF54zHcCMOXiKXjJIAaxPzOevgCLcBGAsYHQ/s1600/galeri%2Bperencanaan16.jpg">
                            </div>
                        </div>
                    <!--BATAS KE 2-->
                        <div class="kol-2 wow  fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;animation-duration: 1s;animation-fill-mode: both;padding: 0;float: left;width: 49.8%;transition: all 1s ease 50ms;">
                            <div class="box" style="padding: 15px;">
                                <img style="max-width: 100%;height: auto;border-radius: 0;vertical-align: middle;border: 0;" src="https://1.bp.blogspot.com/-s_ptK_1bdyk/YV3Z06yWljI/AAAAAAAAFpA/PAz41yl-TKMF5r_XsVCtc_O8rMSYKyDpQCLcBGAsYHQ/s1600/galeri%2Bperencanaan18.jpg">
                            </div>
                        </div>
                    </div>
                <!--BATAS-->
                </div>
            </div>
        </div>
        <!--END PORTOFOLIO-->   
    </div>
    <div class="widget HTML" data-version="2" id="HTML29">
        <h3 class="title" style="display: none;">Price List</h3>
        <div class="widget-content" style="font-size: 20px;line-height: 1.5em;">
            <!-- AWAL HARGA 3 -->
                <div class="headline" style="text-align: center;">
                    <h1 class="tebal" style="font-weight: bolder;">PRICELIST</h1>
                    <div class="latar-merahtua" id="pricelist" style="background: #c60404;color: #ffffff;">
                        <div class="overlay-merahtua" style="background: #c60404;color: #ffffff;">
                            <div class="oke fitur pattern1" style="padding: 60px 20px 60px;background: url(https://3.bp.blogspot.com/-DDUInT9NuYk/W3EKXr9aPwI/AAAAAAAAA50/3ieijdvJDj0K0H9-of1s2XrazQTLKpuwACLcBGAs/s1600/pattern1.png);">
                                <h2 class="tebal" style="font-weight: bolder;">RUMAH TINGGAL 1 LANTAI</h2>
                            </div>
                            <div class="konten" style="margin: 0px auto;padding-right: 5px;padding-left: 5px;max-width: 1140px;">
                                <div class="kol-14"><style>{width: 49.8%;padding: 0;float: left;width: 24.95%;transition: all 1s ease 50ms;}</style>
                                    <div class="box" style="padding: 15px;">
                                        <div class="harga1 zoom-in melengkung border-abumuda latar-putih" style="max-width: 95%;line-height: 2em;width: 97%;box-shadow: 0 8px 12px 0 rgb(0 0 0 / 20%);background: #ffffff;color: #333333;border-radius: 2%;border: 2px solid #c5c6c7;margin: 0 auto;padding: 10px;-webkit-transition: all 1s ease;-moz-transition: all 1s ease;-o-transition: all 1s ease;-ms-transition: all 1s ease;transition: all 1s ease;border-radius: 10px;-moz-border-radius: 10px;-webkit-border-radius: 10px;">
                                            <ul>
                                                <li class="besar tebal box biru garis-abuabu" style="padding: 15px;font-size: 30px;border-bottom: 1px solid #ececec;padding-bottom: 10px;margin-top: 10px;font-weight: bolder;font-size: 32px;line-height: 1.3em;">TYPE MINIMALIS</li>
                                                <li>Start From </li>
                                                <li class="harga lebar" style="padding: 30px 10px 30px;"><span><b style="font-size: 40px;font-weight: 700;">2,8 JT/M2</b></span></li>
                                                <li class="box" style="padding: 15px;"><a href="#" class="btn2 btn-biru" style="background-color: #2196F3;border: 2px solid #2196F3;font-size: 17px;margin: 3px;border: none;color: white;padding: 6px 20px;cursor: pointer;display: inline-block;-webkit-transition-duration: 0.4s;transition-duration: 0.4s;border-radius: 50px;">Lihat Detail</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="kol-14"><style>{width: 49.8%;padding: 0;float: left;width: 24.95%;transition: all 1s ease 50ms;}</style>
                                    <div class="box" style="padding: 15px;">
                                        <div class="harga1 zoom-in melengkung border-abumuda latar-putih" style="max-width: 95%;line-height: 2em;width: 97%;box-shadow: 0 8px 12px 0 rgb(0 0 0 / 20%);background: #ffffff;color: #333333;border-radius: 2%;border: 2px solid #c5c6c7;margin: 0 auto;padding: 10px;-webkit-transition: all 1s ease;-moz-transition: all 1s ease;-o-transition: all 1s ease;-ms-transition: all 1s ease;transition: all 1s ease;border-radius: 10px;-moz-border-radius: 10px;-webkit-border-radius: 10px;">
                                            <ul>
                                                <li class="besar tebal box orange garis-abuabu" style="padding: 15px;font-size: 30px;border-bottom: 1px solid #ececec;padding-bottom: 10px;margin-top: 10px;font-weight: bolder;font-size: 32px;line-height: 1.3em;">TYPE PLATINUM</li>
                                                <li>Start From </li>
                                                <li class="harga lebar" style="padding: 30px 10px 30px;"><span><b style="font-size: 40px;font-weight: 700;">3,0 JT/M2</b></span></li>
                                                <li class="box" style="padding: 15px;"><a href="#" class="btn2 btn-biru" style="background-color: #2196F3;border: 2px solid #2196F3;font-size: 17px;margin: 3px;border: none;color: white;padding: 6px 20px;cursor: pointer;display: inline-block;-webkit-transition-duration: 0.4s;transition-duration: 0.4s;border-radius: 50px;">Lihat Detail</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="kol-14"><style>{width: 49.8%;padding: 0;float: left;width: 24.95%;transition: all 1s ease 50ms;}</style>
                                    <div class="box" style="padding: 15px;">
                                        <div class="harga1 zoom-in melengkung border-abumuda latar-putih" style="max-width: 95%;line-height: 2em;width: 97%;box-shadow: 0 8px 12px 0 rgb(0 0 0 / 20%);background: #ffffff;color: #333333;border-radius: 2%;border: 2px solid #c5c6c7;margin: 0 auto;padding: 10px;-webkit-transition: all 1s ease;-moz-transition: all 1s ease;-o-transition: all 1s ease;-ms-transition: all 1s ease;transition: all 1s ease;border-radius: 10px;-moz-border-radius: 10px;-webkit-border-radius: 10px;">
                                            <ul>
                                                <li class="besar tebal box merah garis-abuabu" style="padding: 15px;font-size: 30px;border-bottom: 1px solid #ececec;padding-bottom: 10px;margin-top: 10px;font-weight: bolder;font-size: 32px;line-height: 1.3em;">TYPE DIAMOND</li>
                                                <li>Start From </li>
                                                <li class="harga lebar" style="padding: 30px 10px 30px;"><span><b style="font-size: 40px;font-weight: 700;">3,3 JT/M2</b></span></li>
                                                <li class="box" style="padding: 15px;"><a href="#" class="btn2 btn-biru" style="background-color: #2196F3;border: 2px solid #2196F3;font-size: 17px;margin: 3px;border: none;color: white;padding: 6px 20px;cursor: pointer;display: inline-block;-webkit-transition-duration: 0.4s;transition-duration: 0.4s;border-radius: 50px;">Lihat Detail</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="kol-14"><style>{width: 49.8%;padding: 0;float: left;width: 24.95%;transition: all 1s ease 50ms;}</style>
                                    <div class="box" style="padding: 15px;">
                                        <div class="harga1 zoom-in melengkung border-abumuda latar-putih" style="max-width: 95%;line-height: 2em;width: 97%;box-shadow: 0 8px 12px 0 rgb(0 0 0 / 20%);background: #ffffff;color: #333333;border-radius: 2%;border: 2px solid #c5c6c7;margin: 0 auto;padding: 10px;-webkit-transition: all 1s ease;-moz-transition: all 1s ease;-o-transition: all 1s ease;-ms-transition: all 1s ease;transition: all 1s ease;border-radius: 10px;-moz-border-radius: 10px;-webkit-border-radius: 10px;">
                                            <ul>
                                                <li class="besar tebal box hijau garis-abuabu" style="padding: 15px;font-size: 30px;border-bottom: 1px solid #ececec;padding-bottom: 10px;margin-top: 10px;font-weight: bolder;font-size: 32px;line-height: 1.3em;">TYPE LUXURY</li>
                                                <li>Start From </li>
                                                <li class="harga lebar" style="padding: 30px 10px 30px;"><span><b style="font-size: 40px;font-weight: 700;">3,6 JT/M2</b></span></li>
                                                <li class="box" style="padding: 15px;"><a href="#" class="btn2 btn-biru" style="background-color: #2196F3;border: 2px solid #2196F3;font-size: 17px;margin: 3px;border: none;color: white;padding: 6px 20px;cursor: pointer;display: inline-block;-webkit-transition-duration: 0.4s;transition-duration: 0.4s;border-radius: 50px;">Lihat Detail</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="oke fitur pattern1" style="padding: 60px 20px 60px;background: url(https://3.bp.blogspot.com/-DDUInT9NuYk/W3EKXr9aPwI/AAAAAAAAA50/3ieijdvJDj0K0H9-of1s2XrazQTLKpuwACLcBGAs/s1600/pattern1.png);">
                                <h2 class="tebal" style="font-weight: bolder;">RUMAH TINGGAL 2 LANTAI</h2>
                            </div>
                            <div class="konten" style="margin: 0px auto;padding-right: 5px;padding-left: 5px;max-width: 1140px;">
                                <div class="kol-14"><style>{width: 49.8%;padding: 0;float: left;width: 24.95%;transition: all 1s ease 50ms;}</style>
                                    <div class="box" style="padding: 15px;">
                                        <div class="harga1 zoom-in melengkung border-abumuda latar-putih" style="max-width: 95%;line-height: 2em;width: 97%;box-shadow: 0 8px 12px 0 rgb(0 0 0 / 20%);background: #ffffff;color: #333333;border-radius: 2%;border: 2px solid #c5c6c7;margin: 0 auto;padding: 10px;-webkit-transition: all 1s ease;-moz-transition: all 1s ease;-o-transition: all 1s ease;-ms-transition: all 1s ease;transition: all 1s ease;border-radius: 10px;-moz-border-radius: 10px;-webkit-border-radius: 10px;">
                                            <ul>
                                                <li class="besar tebal box biru garis-abuabu" style="padding: 15px;font-size: 30px;border-bottom: 1px solid #ececec;padding-bottom: 10px;margin-top: 10px;font-weight: bolder;font-size: 32px;line-height: 1.3em;">TYPE MINIMALIS</li>
                                                <li>Start From </li>
                                                <li class="harga lebar" style="padding: 30px 10px 30px;"><span><b style="font-size: 40px;font-weight: 700;">3,1 JT/M2</b></span></li>
                                                <li class="box" style="padding: 15px;"><a href="#" class="btn2 btn-biru" style="background-color: #2196F3;border: 2px solid #2196F3;font-size: 17px;margin: 3px;border: none;color: white;padding: 6px 20px;cursor: pointer;display: inline-block;-webkit-transition-duration: 0.4s;transition-duration: 0.4s;border-radius: 50px;">Lihat Detail</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="kol-14"><style>{width: 49.8%;padding: 0;float: left;width: 24.95%;transition: all 1s ease 50ms;}</style>
                                    <div class="box" style="padding: 15px;">
                                        <div class="harga1 zoom-in melengkung border-abumuda latar-putih" style="max-width: 95%;line-height: 2em;width: 97%;box-shadow: 0 8px 12px 0 rgb(0 0 0 / 20%);background: #ffffff;color: #333333;border-radius: 2%;border: 2px solid #c5c6c7;margin: 0 auto;padding: 10px;-webkit-transition: all 1s ease;-moz-transition: all 1s ease;-o-transition: all 1s ease;-ms-transition: all 1s ease;transition: all 1s ease;border-radius: 10px;-moz-border-radius: 10px;-webkit-border-radius: 10px;">
                                            <ul>
                                                <li class="besar tebal box orange garis-abuabu" style="padding: 15px;font-size: 30px;border-bottom: 1px solid #ececec;padding-bottom: 10px;margin-top: 10px;font-weight: bolder;font-size: 32px;line-height: 1.3em;">TYPE PLATINUM</li>
                                                <li>Start From </li>
                                                <li class="harga lebar" style="padding: 30px 10px 30px;"><span><b style="font-size: 40px;font-weight: 700;">3,4 JT/M2</b></span></li>
                                                <li class="box" style="padding: 15px;"><a href="#" class="btn2 btn-biru" style="background-color: #2196F3;border: 2px solid #2196F3;font-size: 17px;margin: 3px;border: none;color: white;padding: 6px 20px;cursor: pointer;display: inline-block;-webkit-transition-duration: 0.4s;transition-duration: 0.4s;border-radius: 50px;">Lihat Detail</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="kol-14"><style>{width: 49.8%;padding: 0;float: left;width: 24.95%;transition: all 1s ease 50ms;}</style>
                                    <div class="box" style="padding: 15px;">
                                        <div class="harga1 zoom-in melengkung border-abumuda latar-putih" style="max-width: 95%;line-height: 2em;width: 97%;box-shadow: 0 8px 12px 0 rgb(0 0 0 / 20%);background: #ffffff;color: #333333;border-radius: 2%;border: 2px solid #c5c6c7;margin: 0 auto;padding: 10px;-webkit-transition: all 1s ease;-moz-transition: all 1s ease;-o-transition: all 1s ease;-ms-transition: all 1s ease;transition: all 1s ease;border-radius: 10px;-moz-border-radius: 10px;-webkit-border-radius: 10px;">
                                            <ul>
                                                <li class="besar tebal box merah garis-abuabu" style="padding: 15px;font-size: 30px;border-bottom: 1px solid #ececec;padding-bottom: 10px;margin-top: 10px;font-weight: bolder;font-size: 32px;line-height: 1.3em;">TYPE DIAMOND</li>
                                                <li>Start From </li>
                                                <li class="harga lebar" style="padding: 30px 10px 30px;"><span><b style="font-size: 40px;font-weight: 700;">3,6 JT/M2</b></span></li>
                                                <li class="box" style="padding: 15px;"><a href="#" class="btn2 btn-biru" style="background-color: #2196F3;border: 2px solid #2196F3;font-size: 17px;margin: 3px;border: none;color: white;padding: 6px 20px;cursor: pointer;display: inline-block;-webkit-transition-duration: 0.4s;transition-duration: 0.4s;border-radius: 50px;">Lihat Detail</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="kol-14"><style>{width: 49.8%;padding: 0;float: left;width: 24.95%;transition: all 1s ease 50ms;}</style>
                                    <div class="box" style="padding: 15px;">
                                        <div class="harga1 zoom-in melengkung border-abumuda latar-putih" style="max-width: 95%;line-height: 2em;width: 97%;box-shadow: 0 8px 12px 0 rgb(0 0 0 / 20%);background: #ffffff;color: #333333;border-radius: 2%;border: 2px solid #c5c6c7;margin: 0 auto;padding: 10px;-webkit-transition: all 1s ease;-moz-transition: all 1s ease;-o-transition: all 1s ease;-ms-transition: all 1s ease;transition: all 1s ease;border-radius: 10px;-moz-border-radius: 10px;-webkit-border-radius: 10px;">
                                            <ul>
                                                <li class="besar tebal box hijau garis-abuabu" style="padding: 15px;font-size: 30px;border-bottom: 1px solid #ececec;padding-bottom: 10px;margin-top: 10px;font-weight: bolder;font-size: 32px;line-height: 1.3em;">TYPE LUXURY</li>
                                                <li>Start From </li>
                                                <li class="harga lebar" style="padding: 30px 10px 30px;"><span><b style="font-size: 40px;font-weight: 700;">3,9 JT/M2</b></span></li>
                                                <li class="box" style="padding: 15px;"><a href="#" class="btn2 btn-biru" style="background-color: #2196F3;border: 2px solid #2196F3;font-size: 17px;margin: 3px;border: none;color: white;padding: 6px 20px;cursor: pointer;display: inline-block;-webkit-transition-duration: 0.4s;transition-duration: 0.4s;border-radius: 50px;">Lihat Detail</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- AKHIR HARGA 4 -->
        </div>
    </div>
    
    
    <div class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-content">
                        <div class="row">
                            <div class="col-md-8">
                                <h4></h4>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
@endsection