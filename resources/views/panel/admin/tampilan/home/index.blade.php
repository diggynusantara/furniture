@extends('panel.layouts.app',['halaman' => 'Tampilan Home'])

@section('content')
    @if (Session::has('message'))
        <div class="alert alert-{{ Session::get('alert') }} alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{--  <h5> Alert!</h5>  --}}
            {{ Session::get('message') }}
        </div>
    @endif
    @include('panel.admin.tampilan.home.slider')
    @include('panel.admin.tampilan.home.home_bottom')
    @include('panel.admin.tampilan.home.product_image_top')
    @include('panel.admin.tampilan.home.about_us_image_top')
    @include('panel.admin.tampilan.home.about_us_image_bottom')
    @include('panel.admin.tampilan.home.contact_us_image_top')
@endsection

@section('javascript')
    <script>
        function edit(id){
            var CSRF_TOKEN = "{{ csrf_token() }}"
            $.ajax({
                type    : 'POST',
                url     : '{{ route("panel.admin.tampilan.home.get") }}',
                data    : {_token: CSRF_TOKEN, id: id},
                success:function(data){
                    var data = JSON.parse(data);
                    $('#id').val(data.id);
                    $('#status').val(data.status);
                    $('#posisi').val(data.posisi);
                    $('#page').val(data.page);
                }
            });
        }

        function hapus(id){
            if(confirm('Hapus Data Produk ?')){
                window.location.href = "{{ url('panel/admin/tampilan/home/hapus') }}/"+id;
            }
        }
    </script>
@endsection