<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Tambah Tim</h4>
        </div>
        <div class="modal-body">
            <form action="{{ route('panel.admin.tim.add') }}" name="modal_popup" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Nama</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-book"></i>
                        </div>
                        <input name="nama" type="text" class="form-control" placeholder="Nama" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label>Posisi</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-book"></i>
                        </div>
                        <input name="posisi" type="text" class="form-control" placeholder="Posisi" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label>Gambar</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-book"></i>
                        </div>
                        <input name="gambar" type="file" class="form-control" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label>WA</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-book"></i>
                        </div>
                        <input name="whatsapp" type="text" class="form-control" placeholder="WA" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label>FB</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-book"></i>
                        </div>
                        <input name="facebook" type="text" class="form-control" placeholder="Facebook" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label>IG</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-book"></i>
                        </div>
                        <input name="instagram" type="text" class="form-control" placeholder="IG" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            {{--  <i class="fa fa-book"></i>  --}}
                        </div>
                        <textarea name="deskripsi" cols="10" rows="10" class="form-control" required></textarea>
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