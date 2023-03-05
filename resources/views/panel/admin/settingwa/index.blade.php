@extends('panel.layouts.app',['halaman' => 'Setting'])

@section('content')
    <section class="content-header">
        <h1>Setting Whatsapp</h1>
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
                        <form action="{{ route('panel.admin.settingwa.edit') }}" name="modal_popup" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="1">
                            <div class="form-group">
                                <label>Pesan Barang</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        {{--  <i class="fa fa-book"></i>  --}}
                                    </div>
                                    <textarea name="pesan" cols="10" rows="10" class="form-control" required>{{ $text->pesan }}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Pesan Kontak</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        {{--  <i class="fa fa-book"></i>  --}}
                                    </div>
                                    <textarea name="pesan_kontak" cols="10" rows="10" class="form-control" required>{{ $text->pesan_kontak }}</textarea>
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
@endsection