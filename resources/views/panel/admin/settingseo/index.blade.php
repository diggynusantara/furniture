@extends('panel.layouts.app',['halaman' => 'Setting SEO'])

@section('content')
    <section class="content-header">
        @if (Session::has('message'))
            <div class="alert alert-{{ Session::get('alert') }} alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                {{--  <h5> Alert!</h5>  --}}
                {{ Session::get('message') }}
            </div>
        @endif
        <h1>Setting SEO</h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                @include('panel.admin.settingseo.home')
                @include('panel.admin.settingseo.product')
                @include('panel.admin.settingseo.about')
                @include('panel.admin.settingseo.contact')
            </div>
        </div>
    </section>
@endsection

@section('javascript')
@endsection