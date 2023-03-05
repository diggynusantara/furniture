<ul class="navbar-nav ml-auto">
    <li class="nav-item {{ $halaman == 'home' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">Beranda
            @if ($halaman == 'home')
                <span class="sr-only">(current)</span>
            @endif
        </a>
    </li> 
    {{-- <li class="nav-item {{ $halaman == 'produk' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('product') }}">Produk
            @if ($halaman == 'produk')
                <span class="sr-only">(current)</span>
            @endif
        </a>
    </li> --}}
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Produk
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            @foreach (DB::table('kategori')->orderBy('kategori','ASC')->get() as $itemKategori)
                <li class="dropdown-submenu">
                    <a class="dropdown-item dropdown-toggle" href="#">{{$itemKategori->kategori}}</a>
                    <ul class="dropdown-menu">
                        @foreach (DB::table('produk')->where('id_kategori','=',$itemKategori->id)->get() as $itemProduk)
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#">{{$itemProduk->produk}}</a>
                                <ul class="dropdown-menu">
                                    @foreach (DB::table('produk_item')->where('id_produk','=',$itemProduk->id)->get() as $item)
                                        <li><a class="dropdown-item" href="{{route('product-item-detail',['id' => $item->id_produk, 'id_produk_item' => $item->id])}}">{{$item->produk}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @endforeach
          {{-- <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li class="dropdown-submenu">
            <a class="dropdown-item dropdown-toggle" href="#">Submenu</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Submenu action</a></li>
              <li><a class="dropdown-item" href="#">Another submenu action</a></li>
              <li class="dropdown-submenu">
                <a class="dropdown-item dropdown-toggle" href="#">Subsubmenu</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Subsubmenu action</a></li>
                  <li><a class="dropdown-item" href="#">Another subsubmenu action</a></li>
                </ul>
              </li>
            </ul>
          </li> --}}
        </ul>
    </li>
    <li class="nav-item {{ $halaman == 'about-us' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('about-us') }}">Tentang Kami
            @if ($halaman == 'about-us')
                <span class="sr-only">(current)</span>
            @endif
        </a>
    </li>
    <li class="nav-item {{ $halaman == 'contact-us' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('contact-us') }}">Kontak Kami
            @if ($halaman == 'contact-us')
                <span class="sr-only">(current)</span>
            @endif
        </a>
    </li>
</ul>