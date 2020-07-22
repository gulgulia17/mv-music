@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        @foreach ($LatestMusic as $item)
        <div class="col-md-3 col-sm-6 col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        {{$item->title}}
                    </div>
                    <div class="card-tools">
                        <div class="btn-group">
                            <button class="btn btn-sm" type="button" id="triggerId" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="triggerId">
                                <a class="dropdown-item text-right" href="{{route('mymusic.edit',$item->id)}}">
                                    Edit<i class="fas fa-edit px-3" style="padding-right: .8rem!important"></i>
                                </a>
                                <a class="dropdown-item text-right"
                                    onclick="event.preventDefault(); document.getElementById('form{{$item->id}}').submit();">
                                    Delete<i class="fas fa-trash px-3"></i>
                                </a>
                                <form action="{{route('mymusic.destroy',$item->id)}}" method="post"
                                    id="form{{$item->id}}" class="d-none">@csrf @method('DELETE')</form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="img">
                        <img src="{{asset($item->musicThumb)}}" alt="{{$item->title}}" class="w-100">
                    </div>
                    <div class="description">
                        <p>{{$item->video_des}}</p>
                        <div class="text-right">
                            <a href="{{$item->video_url}}" class="btn btn-primary btn-sm font-sm">{{$item->title}}</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

@section('style')
<style>
    .description {
        padding: 1rem;
    }
</style>
@endsection