@extends('layouts.main')
@section('title','Gallery')
@section('contentdark')
<div class="container px-5">
    <div class="row py-5">
        <div class="col-md-12 pb-5">
            <div class="title">
                <h1>Studio Gallery</h1>
            </div>
            <div class="title-divider mx-md-0 mx-auto m-0 mb-4">
            </div>
        </div>
        @foreach ($gallery as $item)
        <div class="col-md-3 col-sm-4 col-6">
        <img src="{{asset($item->galleryFile)}}" class="img-fluid zoom-in">    
        </div>            
        @endforeach
    </div>
</div>
@endsection
@section('style') @endsection
@section('script') @endsection