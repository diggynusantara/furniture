@extends('panel.layouts.app',['halaman' => 'Kategori'])

@section('content')
    <section class="content-header">
        <h1>Kategori</h1>
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
                                    <th>Kategori</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kategori as $item)
                                    <tr>
                                        <td>{{ $item->kategori }}</td>
                                        <td><img src="{{ asset('public/kategori/'.$item->gambar) }}" alt="" width="70px" height="50px"></td>
                                        <td>
                                            <button class="btn btn-primary" data-target="#ModalEdit" data-toggle="modal" onclick="edit('{{ $item->id }}')">Ubah</button>
                                            <button class="btn btn-danger" onclick="hapus('{{ $item->id }}')">Hapus</button>
                                        </td>
                                    </tr>
                                @endforeach
                                @if (count($kategori) <= 0)
                                    <tr>
                                        <td colspan="2">Data tidak tersedia</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                        {{ $kategori->render() }}                
                    </div>
                </div>
            </div>
        </div>
        <div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog">
            @include('panel.admin.kategori.form_add')
        </div>
        <div id="ModalEdit" class="modal fade" tabindex="-1" role="dialog">
            @include('panel.admin.kategori.form_edit')
        </div>
    </section>
@endsection

@section('javascript')
    <script>
        function edit(id){
            var CSRF_TOKEN = "{{ csrf_token() }}"
            $.ajax({
                type    : 'POST',
                url     : '{{ route("panel.admin.kategori.get") }}',
                data    : {_token: CSRF_TOKEN, id: id},
                success:function(data){
                    var data = JSON.parse(data);
                    $('#id').val(data.id);
                    $('#kategori').val(data.kategori);
                    $('#deskripsi').val(data.deskripsi);
                }
            });
        }

        function hapus(id){
            if(confirm('Hapus Data Kategori ?')){
                window.location.href = "{{ url('panel/admin/kategori/hapus') }}/"+id;
            }
        }
    </script>
@endsection