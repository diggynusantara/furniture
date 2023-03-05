
<a href="{{route('product-item',['id' => $item->id])}}">
    <div class="product-item">
        <img src="{{ asset('public/kategori/'.$item->gambar) }}" alt="" width="100%" height="200px">
        <div class="down-content">
            <a href="{{route('product-item',['id' => $item->id])}}"><h4>{{ $item->kategori }}</h4></a>
            <p>{{ $item->deskripsi }}</p>
        </div>
    </div>
</a>