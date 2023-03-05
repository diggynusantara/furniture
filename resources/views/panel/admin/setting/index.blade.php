@extends('panel.layouts.app',['halaman' => 'Setting'])

@section('content')
    <section class="content-header">
        <h1>Setting</h1>
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
                        <form action="{{ route('panel.admin.setting.edit') }}" name="modal_popup" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="1">
                            <div class="form-group">
                                <label>Tentang</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        {{--  <i class="fa fa-book"></i>  --}}
                                    </div>
                                    <textarea name="tentang" cols="10" rows="10" class="form-control">{{ $text->tentang }}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Tempat</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        {{--  <i class="fa fa-book"></i>  --}}
                                    </div>
                                    <textarea name="tempat" cols="10" rows="10" class="form-control">{{ $text->tempat }}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Facebook</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        {{--  <i class="fa fa-book"></i>  --}}
                                    </div>
                                    <input name="fb" type="text" class="form-control" placeholder="Facebook" value="{{ $text->fb }}"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Whatsapp</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        {{--  <i class="fa fa-book"></i>  --}}
                                    </div>
                                    <input name="wa" type="text" class="form-control" placeholder="Whatsapp" value="{{ $text->wa }}"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Instagram</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        {{--  <i class="fa fa-book"></i>  --}}
                                    </div>
                                    <input name="ig" type="text" class="form-control" placeholder="Instagram" value="{{ $text->ig }}"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Toko</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        {{--  <i class="fa fa-book"></i>  --}}
                                    </div>
                                    <input name="toko" type="text" class="form-control" placeholder="Toko" value="{{ $text->toko }}"/>
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
            </div>
        </div>
    </section>
@endsection

@section('javascript')
    <script src="https://cdn.tiny.cloud/1/2v6izguv3cf2rxha2lndctvzeiq9h5mxdg511uc3w13ol46s/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            toolbar_mode: 'floating',
        });
    </script>
@endsection