@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @if (isset($about))
                    <form action="{{route('about.store')}}" method="post">
                        <div class="form-group">
                            <label for="short_about" class="font-sm text-center mb-0 font-weight-bold">About MV Music
                                IN-Short</label>
                            <textarea class="form-control" name="short_about" id="short_about"
                                rows="3">{{$about->short_about}}</textarea>
                            @error('short_about')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="long_about" class="font-sm text-center mb-0 font-weight-bold">About MV
                                Music</label>
                            <textarea class="form-control" name="long_about" id="long_about"
                                rows="3">{{$about->long_about}}</textarea>
                        </div>
                        @if ( empty($about->short_about) || empty($about->long_about))
                        <div class="form-group text-right"><button class="btn btn-primary">Submit</button></div>
                        @endif
                        @csrf
                    </form>
                    @else
                    <script>
                        window.location = '/details';
                    </script>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('style') @endsection
@section('script') @endsection