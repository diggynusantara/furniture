<div class="box">
    <div class="box-header">
        Beranda
    </div>
    <div class="box-body">
        <form action="{{ route('panel.admin.settingseo.edit') }}" name="modal_popup" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="1">
            <input type="hidden" name="page" value="home">
            <div class="form-group">
                <label>Author</label>
                <div class="input-group">
                    <div class="input-group-addon">
                        {{--  <i class="fa fa-book"></i>  --}}
                    </div>
                    <input type="text" value="{{ isset($text->home_author) ? $text->home_author : '' }}" name="author" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <label>Keyword</label>
                <div class="input-group">
                    <div class="input-group-addon">
                        {{--  <i class="fa fa-book"></i>  --}}
                    </div>
                    <input type="text" name="keyword" value="{{ isset($text->home_keyword) ? $text->home_keyword : '' }}" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <label>Deskripsi</label>
                <div class="input-group">
                    <div class="input-group-addon">
                        {{--  <i class="fa fa-book"></i>  --}}
                    </div>
                    <textarea name="description" cols="3" rows="3" class="form-control" required>{{ isset($text->home_description) ? $text->home_description : '' }}</textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" type="submit">
                    Simpan
                </button>
            </div>
        </form>                
    </div>
</div>