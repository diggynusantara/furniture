<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Edit Slider</h4>
        </div>
        <div class="modal-body">
            <form action="{{ route('panel.admin.tampilan.home.edit') }}" name="modal_popup" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" id="id" name="id">

                <div class="form-group">
                    <label>Status</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-book"></i>
                        </div>
                        <select name="status" id="status" class="form-control" required>
                            <option value="">Pilih Status</option>
                            <option value="Aktif">Aktif</option>
                            <option value="Tidak Aktif">Tidak Aktif</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label>Posisi</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-book"></i>
                        </div>
                        <input name="posisi" type="number" id="posisi" class="form-control" placeholder="Posisi" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label>Page</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-book"></i>
                        </div>
                        <select name="page" id="page" required class="form-control">
                            <option value="">Pilih Page</option>
                            <option value="Home Slider">Home Slider</option>
                            <option value="Home Image Bottom">Home Image Bottom</option>
                            <option value="Product Image Top">Product Image Top</option>
                            <option value="Contact Us Image Top">Contact Us Image Top</option>
                            <option value="About Us Image Top">About Us Image Top</option>
                        </select>
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