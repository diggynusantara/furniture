<section class="content-header">
    <h1>Slider</h1>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    {{--  Slider  --}}
                </div>
                <div class="box-body">
                    <button class="btn btn-success" type="button" data-target="#ModalAdd" data-toggle="modal"><i class="fa fa-plus"></i> Tambah Baru</button>
                    <br><br>
                    <table class="table table-bordered table-striped table-scalable">
                        <thead>
                            <tr>
                                <th>Gambar</th>
                                <th>Posisi</th>
                                <th>Page</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $index = 0;
                            @endphp
                            @foreach ($slider as $item)
                                @if ($item->page == 'Home Slider')
                                    @php
                                        $index++;
                                    @endphp
                                    <tr>
                                        <td><img src="{{ asset('public/tampilan/'.$item->gambar) }}" alt="" width="70px" height="50px"></td>
                                        <td>{{ $item->posisi }}</td>
                                        <td>{{ $item->page }}</td>
                                        <td>
                                            <button class="btn btn-{{ $item->status == 'Aktif' ? 'success' : 'danger' }}">{{ $item->status }}</button></td>
                                        <td>
                                            <button class="btn btn-primary" data-target="#ModalEdit" data-toggle="modal" onclick="edit('{{ $item->id }}')">Ubah</button>
                                            <button class="btn btn-danger" onclick="hapus('{{ $item->id }}')">Hapus</button>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                            @if ($index <= 0)
                                <tr>
                                    <td colspan="4">Data tidak tersedia</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog">
        @include('panel.admin.tampilan.home.form_add')
    </div>
    <div id="ModalEdit" class="modal fade" tabindex="-1" role="dialog">
        @include('panel.admin.tampilan.home.form_edit')
    </div>
</section>