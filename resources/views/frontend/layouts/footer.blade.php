<footer style="text-align: left;background: #333333;color: #ffffff;">
    <div class="bawah section" id="Footer"><div class="widget HTML" data-version="2" id="HTML8">
        <h3 class="title" style="display: none;">WhatsApp Chat</h3>
        <div class="widget-content" style="font-size: 20px;line-height: 1.5em;">
            <div class="chatfixed">
                <div class="box teks-kiri">
                    <a class="btn-chat btn-hijautua animated rubberBand infinite" target="_blank" title="Hubungi Kami Via WhatsApp" href="https://wa.me/{{$text->wa}}?text=Adi Baskara Persada Siap Membantu . . . . "><i class="fa fa-whatsapp besar"></i></a>
                </div>
            </div>
            <style>
                .btn-chat {font-size:30px;margin:3px;border: none;color: green!important;padding: 6px 12px;cursor: pointer;display:inline-block;  -webkit-transition-duration: 0.4s; transition-duration: 0.4s;border-radius:50%!important;}
                .btn-chat:hover {border: 2px solid #00cc33; background-color: #ffffff; color: green!important;}
                .chatfixed{line-height:0px;position:fixed;left:10px;bottom:10px;z-index: 99999999999}
                @media (max-width:480px){
                .chatfixed{bottom:60px}
                }
            </style>
        </div>
    </div>
    <div class="widget HTML" data-version="2" id="HTML10">
    <h3 class="title" style="display: none;">FOOTER</h3>
    <div class="widget-content" style="font-size: 20px;line-height: 1.5em;">
    <!-- AWAL FOOTER 3 KOLOM -->
    <div class="oke fitur latar-hitam teks-kiri" style="text-align: left;background: #333333;color: #ffffff;">
	    <div class="konten" style="margin: 0px auto;padding-right: 5px;padding-left: 5px;max-width: 1140px;">
		    <div class="kol-13" style="padding: 0;float: left;width: 33.3%;transition: all 1s ease 50ms;">
			    <div class="box" style="padding: 15px;">
				    <div class="garis-putih tebal" style="border-bottom: 1px solid #ffffff;padding-bottom: 10px;margin-top: 10px;font-weight: bolder;">
					    <p clas="normal tebal" style="font-size: 20px;margin: 0 0 10px;font-weight: bolder;color: white;">About Us</p>
				    </div>
				    <p class="kecil box" style="padding: 10px;color: white;">ADI BASKARA PERSADA</p>
                    <p class="kecil box" style="padding: 10px;color: white;">Konsultan Bangunan</p>
                    <p class="kecil box" style="padding: 10px;color: white;">@php echo $text->tentang; @endphp</p>
			    </div>
		    </div>
 
    		<div class="kol-13" style="padding: 0;float: left;width: 33.3%;transition: all 1s ease 50ms;">
	    		<div class="box" style="padding: 15px;">
		    		<div class="garis-putih tebal" style="border-bottom: 1px solid #ffffff;padding-bottom: 10px;margin-top: 10px;font-weight: bolder;">
			    		<p clas="normal tebal" style="font-size: 20px;margin: 0 0 10px;font-weight: bolder;color: white;">Marketing Gallery</p>
				    </div>
    				<div class="kecil" style="font-size: 16px;line-height: 1.6em;">
	    				<ul class="fa-ul box berbaris" style="line-height: 2em;">
		    			<li><span class="fa-li" style="position: absolute;left: -2.14285714em;width: 2.14285714em;top: 0.14285714em;text-align: center;"><i class="fa fa-map-marker"></i></span>{{$text->tempat}}</li>
			    		<li><span class="fa-li" style="position: absolute;left: -2.14285714em;width: 2.14285714em;top: 0.14285714em;text-align: center;"><i class="fa fa-whatsapp"></i></span><a class="putih" href="https://api.whatsapp.com/send?phone={{$text->wa}}&amp;text=Halo. Saya Mau Konsultasi Untuk Membangun Rumah">{{$text->wa}}</a></li>
				    	<li><span class="fa-li" style="position: absolute;left: -2.14285714em;width: 2.14285714em;top: 0.14285714em;text-align: center;"><i class="fa fa-instagram"></i></span><a class="putih" href="#">{{$text->ig}}</a></li>
					    </ul>
    				</div>
	    		</div>
		    </div>
    		<div class="kol-13" style="padding: 0;float: left;width: 33.3%;transition: all 1s ease 50ms;">
              	<div class="box" style="padding: 15px;">
		    	    <div class="garis-putih tebal" style="border-bottom: 1px solid #ffffff;padding-bottom: 10px;margin-top: 10px;font-weight: bolder;">
			    	    <p clas="normal tebal" style="font-size: 20px;margin: 0 0 10px;font-weight: bolder;color: white;">Map</p>
			        </div>
                    <div class="box" style="padding: 15px;">
			        <div class="peta" style="overflow: hidden;padding-bottom: 56.25%;position: relative;height: 0;">
				        <iframe src="https://maps.google.com/maps?q=eka%20mitra%20tegal&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="330px" frameborder="0" style="border:0" allowfullscreen="" loading="lazy"></iframe>
			        </div>
                </div>
		    </div>
		</div>
    </div>
</div>
<!-- AKHIR FOOTER 3 KOLOM -->
</div>
</div></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner-content" style="text-align: center;">
                    <p>Copyright &copy; 2020 
                        <a href="http://sinudtech.web.id/" target="_blank">Sinudtech</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>