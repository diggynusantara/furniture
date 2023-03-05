<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Tambah Produk</h4>
        </div>
        <div class="modal-body">
            <form action="{{ route('panel.admin.produk.add') }}" name="modal_popup" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Kategori</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-book"></i>
                        </div>
                        <select name="kategori" class="form-control" required>
                            <option value="">Pilih Kategori</option>
                            @foreach ($kategori as $item)
                                <option value="{{ $item->id }}">{{ $item->kategori }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label>Produk</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-book"></i>
                        </div>
                        <input name="produk" type="text" class="form-control" placeholder="Produk" required/>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" type="submit">
                        Simpan
                    </button>
                    <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
                        Batal
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>