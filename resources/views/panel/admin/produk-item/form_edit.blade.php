<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Ubah Dosen</h4>
        </div>
        <div class="modal-body">
            <form action="{{ route('panel.admin.produk-item.edit') }}" name="modal_popup" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" id="id" name="id">
                <div class="form-group">
                    <label>Produk</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-book"></i>
                        </div>
                        <select name="produk" id="produk" class="form-control" required>
                            <option value="">Pilih Produk</option>
                            @foreach ($produk as $item)
                                <option value="{{ $item->id }}">{{ $item->produk }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label>Produk Item</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-book"></i>
                        </div>
                        <input name="produkItem" id="produkItem" type="text" class="form-control" placeholder="Produk Item" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-book"></i>
                        </div>
                        <input name="harga" type="number" id="harga" class="form-control" placeholder="Harga" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label>Gambar</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-book"></i>
                        </div>
                        <input name="gambar" type="file" class="form-control"/>
                    </div>
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            {{--  <i class="fa fa-book"></i>  --}}
                        </div>
                        <textarea name="deskripsi" cols="10" rows="10" id="deskripsi" class="form-control" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="submit">
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