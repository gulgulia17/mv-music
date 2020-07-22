@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        {{$mymusic->title}}
                    </div>
                    <div class="card-tools">
                        <div class="btn-group">
                            <button class="btn btn-sm" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fas fa-ellipsis-v"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="triggerId">
                                <a class="dropdown-item text-right" href="{{route('mymusic.destroy',$mymusic->id)}}">
                                  Delete<i class="fas fa-trash px-3"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{route('mymusic.update',$mymusic->id)}}" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{asset($mymusic->musicThumb)}}" alt="{{$mymusic->title}}" class="w-100" id="preview">
                                <div class="form-group">
                                    <label for="customFile" class="font-sm">Please Choose Logo</label>
                                    <div class="custom-file">
                                        <input type="hidden" name="for" value="logo">
                                        <input type="file" class="custom-file-input" id="customFile" name="logo">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" id="title" class="form-control" value="{{ old('title') ? old('title') : $mymusic->title }}">
                                </div>
                                <div class="form-group">
                                    <label for="video_url">
                                    </label>
                                    <input type="text" name="video_url" id="video_url" class="form-control" value="{{ old('video_url') ? old('video_url') : $mymusic->video_url }}">
                                </div>
                                <div class="form-group">
                                    <label for="video_des">Video Description</label>
                                    <textarea name="video_des" id="video_des" cols="30" rows="6" class="form-control">
                                        {{ old('$mymusic->video_des') ? old('$mymusic->video_des') : $mymusic->video_des }}
                                    </textarea>
                                </div>
                                <div class="form-group text-right mb-0">
                                    <button class="btn btn-primary btn-sm font-sm">submit</button>
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

@section('style')
<style>
    .description{
        padding: 1rem;
    }
</style>
@endsection