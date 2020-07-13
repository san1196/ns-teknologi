@php
    use Illuminate\Support\Facades\DB;
@endphp
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Contact Us') }}</div>

				<div class="card-body">
                    <a href="/contact" class="btn btn-primary">Back</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/contact/store">
 
                        {{ csrf_field() }}
 
                        
                        <div class="form-group">
                            <label>Lokasi</label><br>
                            <label><b>*hanya masukan link yang berada pada value "SRC" dari HTML (iframe) Google Maps</b></label>
                            <textarea name="lokasi" type="text" class="form-control" placeholder="Lokasi untuk Google Maps"></textarea>
 
                             @if($errors->has('lokasi'))
                                <div class="text-danger">
                                    {{ $errors->first('lokasi')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" type="text" class="form-control" placeholder="Alamat"></textarea>
 
                             @if($errors->has('alamat'))
                                <div class="text-danger">
                                    {{ $errors->first('alamat')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Telepon</label>
                            <input name="telepon" type="text" class="form-control" placeholder="Telepon">
 
                             @if($errors->has('telepon'))
                                <div class="text-danger">
                                    {{ $errors->first('telepon')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input name="email" type="email" class="form-control" placeholder="Email">
 
                             @if($errors->has('email'))
                                <div class="text-danger">
                                    {{ $errors->first('email')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Submit">
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
    </div>
</div>
<!--<script>
    tinymce.init({
        selector: 'textarea',
        height: 200,
        plugins: [
          'advlist autolink lists link image charmap print preview anchor',
          'searchreplace visualblocks code fullscreen',
          'insertdatetime media table contextmenu paste code'
        ],
        toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        content_css: [
          '//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
          '//www.tinymce.com/css/codepen.min.css'
        ]
    });
</script>-->
@endsection