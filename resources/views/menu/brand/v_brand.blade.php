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

				<div class="card-body" style="overflow-y: scroll; overflow-x: scroll; height: 450px;">
					@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
					
					<a href="/brand/tambah" class="btn btn-primary">Input Brand</a>
        
					<br/>
					<br/>
					<form action="/brand" method="GET">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-4" style="padding-right: 0px;">
								<input type="text" autocomplete="{{app()->environment() === 'local' ? 'on' : 'off'}}" class="form-control" style="border-radius: 20px; font-size: 12px;" placeholder="Search Keterangan" name="filter" value="{{ old('filter') }}">
							</div>
							<div class="col-md-2" style="padding-right: 10px;">
								<button type="submit" class="btn btn-primary">Search</button>
                            </div>
                            <div class="col-md-6"></div>
						</div>
					</div>
                    </form>
					<br/>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Keterangan</th>
                                <th>Created</th>
                                <th>Updated</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($brand as $p)
                            <tr>
                                <td><img src='uploads/brand/{{ $p->image }}' width="50px"></td>
                                <td>{{ $p->keterangan }}</td>
                                <td>{{date('d F Y', strtotime($p->created_at))}}</td>
                                <td>{{date('d F Y', strtotime($p->updated_at))}}</td>
                                <td>
                                    <a href="/brand/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>&emsp;
                                    <a href="/brand/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
					<div class="box-footer clearfix">
						<div class="col-sm-12 col-md-5">
							Showing {{ $brand->perPage() }} of {{ $brand->total() }} entries
						</div>
						<div class="col-sm-12 col-md-7">
							<ul class="pagination pagination-sm no-margin pull-right">
								{{ $brand->links() }}
							</ul>
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection