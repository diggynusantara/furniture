<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Ubah Service</h4>
        </div>
        <div class="modal-body">
            <form action="{{ route('panel.admin.service.edit') }}" name="modal_popup" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" id="id" name="id">
                <div class="form-group">
                    <label>Judul</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-book"></i>
                        </div>
                        <input name="judul" id="judul" type="text" class="form-control" placeholder="Judul" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            {{--  <i class="fa fa-book"></i>  --}}
                        </div>
                        <textarea name="deskripsi" id="deskripsi" cols="10" rows="10" class="form-control" required></textarea>
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