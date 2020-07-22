@extends('layouts.app')
@section('style')
<style>
    @media (min-width:768px) {
        .button-bottom {
            position: absolute;
            bottom: 0;
            right: 0;
        }
    }
</style>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('gallery.about')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h1 class="font-sm text-center mb-0 font-weight-bold">add to gallery</h1>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{asset('images/placeholders/300.png')}}" alt="" class="w-100" id="preview">
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="customFile" class="font-sm">Please Choose Logo</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile" name="galleryFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                                <div class="form-group text-right">
                                    <button class="btn btn-primary font-sm button-bottom">SUbmit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection