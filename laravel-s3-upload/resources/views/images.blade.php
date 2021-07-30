@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">All Images</div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Image</th>
                            <th>Caption</th>
                            <th>Size</th>
                            <th>Uploaded</th>
                        </tr>
                        @foreach ($images as $images)
                            <tr>
                            <th><img width="100px" src="{{ Storage::disk('s3')->url($images->path) }}"></th>
                            <td>{{$images->title}}</td>
                            <td>{{$images->size_in_kb}} KB</td>
                            <td>{{$images->uploaded_time}}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection