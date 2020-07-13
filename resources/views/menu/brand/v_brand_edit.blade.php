@php
    use Illuminate\Support\Facades\DB;
@endphp
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Product Brand') }}</div>

				<div class="card-body">
                    <a href="/brand" class="btn btn-primary">Back</a>
                    <br/>
                    <br/>
                    
 
                    <form method="post" action="/brand/update/{{ $brand->id }}" enctype="multipart/form-data">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
 
						<div class="form-group">
                            <label>Image</label>
                            <input name="image" type="file" accept="image/*" class="form-control" placeholder="Image Product Brand...">
 
                             @if($errors->has('image'))
                                <div class="text-danger">
                                    {{ $errors->first('image')}}
                                </div>
                            @endif
 
                        </div>
						
                        <div class="form-group">
                            <label>Keterangan</label>
                            <textarea name="keterangan" type="text" class="form-control" placeholder="Keterangan Product Brand..."> {{ $brand->keterangan }} </textarea>
 
                             @if($errors->has('keterangan'))
                                <div class="text-danger">
                                    {{ $errors->first('keterangan')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Update">
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
