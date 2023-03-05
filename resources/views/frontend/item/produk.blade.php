
<a href="{{route('product-item-detail',['id' => $item->id_produk, 'id_produk_item' => $item->id])}}">
    <div class="product-item">
        <img src="{{ asset('public/produk-item/'.$item->gambar) }}" alt="" width="100%" height="200px">
        <div class="down-content">
            <a href="{{route('product-item-detail',['id' => $item->id_produk, 'id_produk_item' => $item->id])}}"><h4>{{ $item->produk }}</h4></a>
            <h6>{{ "Rp " . number_format($item->harga,2,',','.') }}</h6>
            {{-- <ul class="stars">
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
            </ul> --}}
            {{-- <a href="{{ url('pesan/'.$item->id) }}" target="_blank">
                <span>Hubungi</span>
            </a> --}}
        </div>
    </div>
</a>