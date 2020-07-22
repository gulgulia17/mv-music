@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1 class="font-sm font-weight-bold text-center mb-0">Latest Music</h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('mymusic.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{asset('images/placeholders/300.png')}}" alt="" class="w-100"
                                    id="previewThum">
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="font-sm" for="title">Title</label>
                                    <input type="text" name="title" id="Title" class="form-control"
                                        placeholder="Song Title">
                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="font-sm" for="url">Video URL</label>
                                    <input type="text" name="video_url" id="video_url" class="form-control"
                                        placeholder="Youtube video URL">
                                    @error('video_url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="musicThumb" class="font-sm float-right">Please Choose
                                        Music Thumbnail</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="musicThumb" name="musicThumb">
                                        <label class="custom-file-label" for="musicThumb">Choose file</label>
                                    </div>
                                    @error('musicThumb')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="font-sm float-right" for="video_des">Video description <span class="text-danger" style="font-size: .5rem;letter-spacing:0px">(Shoudn't be more than 300 Char)</span></label>
                                    <textarea cols="30" rows="5" name="video_des" id="video_des"
                                        class="form-control"
                                        placeholder="Video description / 2,3 lines of lyric"></textarea>
                                        @error('video_des')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    <div class="text-right mt-3">
                                        <button class="btn btn-primary font-sm">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection