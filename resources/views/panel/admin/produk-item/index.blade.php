@extends('panel.layouts.app',['halaman' => 'Produk Item'])

@section('content')
    <section class="content-header">
        <h1>Produk Item</h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        @if (Session::has('message'))
                            <div class="alert alert-{{ Session::get('alert') }} alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                {{--  <h5> Alert!</h5>  --}}
                                {{ Session::get('message') }}
                            </div>
                        @endif
                    </div>
                    <div class="box-body">
                        <button class="btn btn-success" type="button" data-target="#ModalAdd" data-toggle="modal"><i class="fa fa-plus"></i> Tambah Baru</button>
                        <br><br>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <form action="{{ url()->current() }}" method="get">
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="{{ isset($_GET['keyword']) ? $_GET['keyword'] : '' }}" placeholder="Pencarian..." name="keyword">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary" type="submit" id="btn-search">CARI</button>
                                            <a href="{{ route('panel.admin.kategori.index') }}" class="btn btn-warning">ULANGI</a>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <br>
                        <table class="table table-bordered table-striped table-scalable">
                            <thead>
                                <tr>
                                    <th>Produk</th>
                                    <th>Produk Item</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($produkItem as $item)
                                    <tr>
                                        <td>{{ $item->parent_produk }}</td>
                                        <td>{{ $item->produk }}</td>
                                        <td><img src="{{ asset('public/produk-item/'.$item->gambar) }}" alt="" width="70px" height="50px"></td>
                                        <td>
                                            <button class="btn btn-primary" data-target="#ModalEdit" data-toggle="modal" onclick="edit('{{ $item->id }}')">Ubah</button>
                                            <button class="btn btn-danger" onclick="hapus('{{ $item->id }}')">Hapus</button>
                                        </td>
                                    </tr>
                                @endforeach
                                @if (count($produkItem) <= 0)
                                    <tr>
                                        <td colspan="4">Data tidak tersedia</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                        {{ $produkItem->render() }}                
                    </div>
                </div>
            </div>
        </div>
        <div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog">
            @include('panel.admin.produk-item.form_add')
        </div>
        <div id="ModalEdit" class="modal fade" tabindex="-1" role="dialog">
            @include('panel.admin.produk-item.form_edit')
        </div>
    </section>
@endsection

@section('javascript')
    <script>
        function edit(id){
            var CSRF_TOKEN = "{{ csrf_token() }}"
            $.ajax({
                type    : 'POST',
                url     : '{{ route("panel.admin.produk-item.get") }}',
                data    : {_token: CSRF_TOKEN, id: id},
                success:function(data){
                    var data = JSON.parse(data);
                    $('#id').val(data.id);
                    $('#produk').val(data.id_produk);
                    $('#produkItem').val(data.produk);
                    $('#deskripsi').val(data.deskripsi);
                    $('#harga').val(data.harga);
                }
            });
        }

        function hapus(id){
            if(confirm('Hapus Data Produk ?')){
                window.location.href = "{{ url('panel/admin/produk-item/hapus') }}/"+id;
            }
        }
    </script>

    {{-- <script src="https://cdn.tiny.cloud/1/2v6izguv3cf2rxha2lndctvzeiq9h5mxdg511uc3w13ol46s/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            toolbar_mode: 'floating',
        });
        tinymce.activeEditor.setContent($('#deskripsi').val());

        function edit(id){
            var CSRF_TOKEN = "{{ csrf_token() }}"
            $.ajax({
                type    : 'POST',
                url     : '{{ route("panel.admin.produk-item.get") }}',
                data    : {_token: CSRF_TOKEN, id: id},
                success:function(data){
                    var data = JSON.parse(data);
                    $('#id').val(data.id);
                    $('#produk').val(data.id_produk);
                    $('#produkItem').val(data.produk);
                    $('#deskripsi').val(data.deskripsi);
                    $('#harga').val(data.harga);
                }
            });
        }
    </script> --}}
@endsection