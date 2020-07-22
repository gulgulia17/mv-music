@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <div class="@isset($logo) card collapsed-card @else card @endisset">
                        <div class="card-header">
                            <div class="card-tools">
                                <button type="button" class="btn btn-sm" data-card-widget="collapse"
                                    data-toggle="tooltip" title="Collapse">
                                    <i class="@isset($logo) fas fa-plus @else fas fa-minus @endisset"></i>
                                </button>
                            </div>
                            <div class="card-title"><h1 class="font-sm text-center mb-0 mt-1 mr-2 font-weight-bold">site basic details</h1></div>
                        </div>
                        <div class="card-body" style="@isset($logo) display:none @endisset">
                            <form action="{{ route('sitedetails') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="{{ isset($logo) ? asset($logo->path) : asset('images/placeholders/300.png')}}"
                                            alt="" class="w-100" id="preview">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="customFile" class="font-sm">Please Choose Logo</label>
                                            <div class="custom-file">
                                                <input type="hidden" name="for" value="logo">
                                                <input type="file" class="custom-file-input" id="customFile"
                                                    name="logo">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                            @error('logo')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="short_about" class="float-right font-sm">Short description about
                                                mv music {!!isset($about) ? '<a
                                                    href="/admin/about/'.$about->id.'/edit"><i
                                                        class="fas fa-edit fa-fw"></i></a>' : null !!}</label>
                                            <textarea {{isset($about) ? 'disabled' : 'name=short_about id=short_about'}}
                                                cols="30" rows="5"
                                                class="form-control">{{isset($about) ? $about->short_about : null}}</textarea>
                                            @error('short_about')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group text-right mb-0">
                                            <button class="btn btn-primary font-sm">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="@isset($SocialMedia) card collapsed-card @else card @endisset">
                        <div class="card-header">
                            <div class="card-tools">
                                <button type="button" class="btn btn-sm" data-card-widget="collapse"
                                    data-toggle="tooltip" title="Collapse">
                                    <i class="@isset($SocialMedia) fas fa-plus @else fas fa-minus @endisset"></i>
                                </button>
                            </div>
                            <div class="card-title"><h1 class="font-sm font-weight-bold mt-1 mr-2 text-center mb-0">social media links</h1></div>
                        </div>
                        <div class="card-body" style="@isset($SocialMedia) display:none @endisset">
                            <form action="{{ route('socialmedia') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="facebook"
                                            placeholder="Facebook URL"
                                            {{isset($SocialMedia) ? "value=$SocialMedia->facebook" : null}}>
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fab fa-facebook-f pr-1"></i></span>
                                        </div>
                                    </div>
                                    @error('facebook')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="instagram"
                                            placeholder="Instagram URL"
                                            {{isset($SocialMedia) ? "value=$SocialMedia->instagram" : null}}>
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fab fa-instagram"></i></span>
                                        </div>
                                    </div>
                                    @error('instagram')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="twitter" placeholder="Twitter URL"
                                            {{isset($SocialMedia) ? "value=$SocialMedia->twitter" : null}}>
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fab fa-twitter"></i></span>
                                        </div>
                                    </div>
                                    @error('twitter')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="linkedin"
                                            placeholder="linkedin URL"
                                            {{isset($SocialMedia) ? "value=$SocialMedia->linkedin" : null}}>
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fab fa-linkedin-in"></i></span>
                                        </div>
                                    </div>
                                    @error('linkedin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="snapchat"
                                            placeholder="Snapchat URL"
                                            {{isset($SocialMedia) ? "value=$SocialMedia->snapchat" : null}}>
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fab fa-snapchat-ghost"></i></span>
                                        </div>
                                    </div>
                                    @error('snapchat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group text-center mb-0">
                                    <button class="btn btn-primary font-sm">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <div class="@isset($LatestMusic) card collapsed-card @else card @endisset">
                        <div class="card-header">
                            <div class="card-tools">
                                <button type="button" class="btn btn-sm" data-card-widget="collapse"
                                    data-toggle="tooltip" title="Collapse">
                                    <i class="@isset($LatestMusic) fas fa-plus @else fas fa-minus @endisset"></i>
                                </button>
                            </div>
                            <div class="card-title"><h1 class="font-sm font-weight-bold mt-1 mr-2 text-center mb-0">Latest Music</div>
                                {!! isset($LatestMusic) ? '<a href='.route('mymusic.index').'><i class="fas fa-eye"></i></a>'
                                : null !!}
                            </h1>
                        </div>
                        <div class="card-body" style="@isset($LatestMusic) display:none @endisset">
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
                                                <input type="file" class="custom-file-input" id="musicThumb"
                                                    name="musicThumb">
                                                <label class="custom-file-label" for="musicThumb">Choose file</label>
                                            </div>
                                            @error('musicThumb')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label class="font-sm float-right" for="video_des">Video description <span
                                                    class="text-danger"
                                                    style="font-size: .5rem;letter-spacing:0px">(Shoudn't be more than
                                                    300 Char)</span></label>
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
                <div class="col-md-12">
                    <div class="@isset($Contact) card collapsed-card @else card @endisset">
                        <div class="card-header">
                            <div class="card-tools">
                                <button type="button" class="btn btn-sm" data-card-widget="collapse"
                                    data-toggle="tooltip" title="Collapse">
                                    <i class="@isset($Contact) fas fa-plus @else fas fa-minus @endisset"></i>
                                </button>
                            </div>
                            <div class="card-title"><h1 class="font-sm font-weight-bold mt-1 mr-2 text-center mb-0">contact details</div>
                                {!! isset($Contact) ? '<a href='.route('contact.edit',$Contact->id).'> <i class="fas fa-edit"></i> </a>' : null
                                !!}
                            </h1>
                        </div>
                        <div class="card-body" style="@isset($Contact) display:none @endisset">
                            <form action="{{ route('contact') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control"
                                            value="{{isset($Contact) ? $Contact->phonenumber : null}}"
                                            {{isset($Contact) ? 'disabled' : "name=phonenumber placeholder=Phonenumber"}}>
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                        </div>
                                    </div>
                                    @error('phonenumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="email" class="form-control"
                                            value="{{isset($Contact) ? $Contact->email : null}}"
                                            {{isset($Contact) ? 'disabled' : "name=email placeholder=Email"}}>
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                        </div>
                                    </div>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control"
                                            value="{{isset($Contact) ? $Contact->location : null}}"
                                            {{isset($Contact) ? 'disabled' : "name=location placeholder=Location"}}>
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fa fa-map-marker pr-1"></i></span>
                                        </div>
                                    </div>
                                    @error('location')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                {!!
                                isset($Contact) ? null :
                                '<div class="form-group text-right mb-0">
                                    <button class="btn btn-primary font-sm">Submit</button>
                                </div>'
                                !!}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection