<section class="content-header">
    <h1>Home Image Bottom</h1>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <form action="{{ route('panel.admin.tampilan.home.edit') }}" enctype="multipart/form-data" method="post">
                                {{ csrf_field() }}
                                <div class="input-group">
                                    <input type="file" class="form-control" name="gambar" required>
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="submit" id="btn-search">Ganti Gambar</button>
                                    </span>
                                </div>
                                <input type="hidden" value="3" name="id">
                                <input type="hidden" value="Aktif" name="status">
                                <input type="hidden" value="1" name="posisi">
                                <input type="hidden" value="Home Image Bottom" name="page">
                            </form>
                        </div>
                    </div>
                    <br>
                    <table class="table table-bordered table-striped table-scalable">
                        <thead>
                            <tr>
                                <th style="text-align: center">Gambar</th>
                                {{--  <th>Posisi</th>  --}}
                                {{--  <th>Page</th>  --}}
                                {{--  <th>Status</th>  --}}
                                {{--  <th>Aksi</th>  --}}
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $index = 0;
                            @endphp
                            @foreach ($slider as $item)
                                @if ($item->page == 'Home Image Bottom')
                                    @php
                                        $index++;
                                    @endphp
                                    <tr>
                                        <td style="text-align: center"><img src="{{ asset('public/tampilan/'.$item->gambar) }}" alt="" width="300px" height="280px"></td>
                                        {{--  <td>{{ $item->posisi }}</td>
                                        <td>{{ $item->page }}</td>  --}}
                                        {{--  <td>
                                            <button class="btn btn-{{ $item->status == 'Aktif' ? 'success' : 'danger' }}">{{ $item->status }}</button></td>  --}}
                                        {{--  <td>
                                            <button class="btn btn-primary" data-target="#ModalEdit" data-toggle="modal" onclick="edit('{{ $item->id }}')">Ubah</button>
                                            <button class="btn btn-danger" onclick="hapus('{{ $item->id }}')">Hapus</button>
                                        </td>  --}}
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>