<div class="team-member">
    <div class="thumb-container">
        <img src="{{ asset('public/tim/'.$item->gambar) }}" alt="" width="100%" height="200px">
        <div class="hover-effect">
            <div class="hover-content">
                <ul class="social-icons">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                    {{--  <li><a href="#"><i class="fa fa-behance"></i></a></li>  --}}
                </ul>
            </div>
        </div>
    </div>
    <div class="down-content">
        <h4>{{ $item->nama }}</h4>
        <span>{{ $item->posisi }}</span>
        <p>{{ $item->deskripsi }}</p>
    </div>
</div>