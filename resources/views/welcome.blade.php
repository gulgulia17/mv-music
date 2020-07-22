@extends('layouts.main')
@section('title','Welcome')
@section('content')
<div id="stating" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#stating" data-slide-to="0" class="active"></li>
        <li data-target="#stating" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img src="{{asset('images/background/1.jpg')}}" class="img-fluid">
            <div class="carousel-caption d-md-block">
                <h1>Title</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{asset('images/background/2.jpg')}}" class="img-fluid">
            <div class="carousel-caption d-md-block">
                <h1>Title</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#stating" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#stating" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<section id="about" class="section">
    <div class="container-fluid center">
        <div class="row">
            <div class="col-md-5 mx-auto mb-2">
                <img src="{{asset('images/about.jpg')}}" alt="" class="w-100">
            </div>
            <div class="col-md-5 mt-md-5 mt-0">
                <div class="title">
                    <h1>About MV Music</h1>
                </div>
                <div class="title-divider center mb-4">
                </div>
                <p class="subtitle">
                    {{isset($about) ? $about->short_about :
                        'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit quo accusamus voluptatum sapiente, modi in, esse eveniet assumenda voluptatibus laudantium placeat officia quasi temporibus perferendis? Eos unde cum temporibus eaque.'
                    }}
                </p>
                <a href="" class="btn custom-button">Know More</a>
            </div>
        </div>
    </div>
</section>

<section id="tag" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="title mx-auto">
                    <h1 class="text-light font-sm-title">One good thing about music, when it hits you, you feel no
                        pain.</h1>
                    <div class="title-divider"></div>
                    <div class="margin-minus">
                        <span class="mx-2">
                            <a href="" class="btn custom-button">
                                Learn More
                            </a>
                        </span>
                        <span class="mx-2">
                            <a href="" class="btn custom-button mt-c">
                                Contact Us
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="whatwedo" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="title mx-auto">
                    <h1>What We Do ?</h1>
                    <div class="title-divider"></div>
                    <p class="subtitle">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt minus totam
                        quo ullam.</p>
                </div>
            </div>
        </div>
        <div class="row py-5">
            <div class="col-md-4 col-sm-4 col-12 text-center border-right">
                <div class="icon">
                    <i class="fa fa fa-users fa-4x"></i>
                </div>
                <div class="title mx-auto">
                    <h4>City Concert</h4>
                </div>
                <p class="subtitle">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt minus totam quo
                    ullam.</p>
            </div>
            <div class="col-md-4 col-sm-4 col-12 text-center">
                <div class="icon">
                    <i class="fa fa fa-users fa-4x"></i>
                </div>
                <div class="title mx-auto">
                    <h4>City Concert</h4>
                </div>
                <p class="subtitle">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt minus totam quo
                    ullam.</p>
            </div>
            <div class="col-md-4 col-sm-4 col-12 text-center border-left">
                <div class="icon">
                    <i class="fa fa fa-users fa-4x"></i>
                </div>
                <div class="title mx-auto">
                    <h4>City Concert</h4>
                </div>
                <p class="subtitle">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt minus totam quo
                    ullam.</p>
            </div>
        </div>
    </div>
</section>

<section id="mymusic" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="title mx-auto">
                    <h1>My Music</h1>
                    <div class="title-divider"></div>
                    <p class="subtitle">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt minus totam
                        quo ullam.</p>
                </div>
            </div>
            @foreach ($LatestMusic as $item)
            <div class="col-md-4">
                <div class="card rounded-0">
                    <div class="card-body p-0">
                        <div class="img">
                            <img src="{{asset($item->musicThumb)}}" class="w-100">
                        </div>
                        <div class="card-containt p-3">
                            <div class="title text-center">
                                <h4 class="mb-3">{{$item->title}}</h4>
                                <div class="title-divider mx-auto"></div>
                            </div>
                            <div class="subtitile text-justify">
                                <p class="mb-0">{{$item->video_des}}</p>
                            </div>
                            <div class="text-center">
                                <a href="{{$item->video_url}}" class="btn custom-button px-4 py-2 ">Know More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section id="studiogear" class="section">
    <div class="container-fluid center">
        <div class="row">
            <div class="col-md-5 mt-md-5 mt-0 mx-auto">
                <div class="title">
                    <h1>Studio Gear</h1>
                </div>
                <div class="title-divider mx-md-0 mx-auto m-0 mb-4">
                </div>
                <p class="subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae maxime sequi
                    voluptatibus temporibus velit rerum, voluptate nam libero perferendis omnis aperiam at saepe
                    inventore voluptatem. Sit quidem harum ullam dolorum.</p>
                <a href="{{ route('studiogear') }}" class="btn custom-button mb-3">Know More</a>
            </div>
            <div class="col-md-5 mr-auto">
                <img src="{{asset('images/gear.jpg')}}" alt="" class="w-100">
            </div>
        </div>
    </div>
</section>

<section id="contact" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="title mx-auto text-light">
                    <h1>Contact</h1>
                    <div class="title-divider"></div>
                </div>
            </div>
            <div class="col-md-6 mx-auto d-md-block d-none">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1761.7009837049593!2d73.30932655795876!3d27.9815958143258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x393fe7bce080f365%3A0x19a5331c7580082b!2sVyapar%20Nagar%2C%20Kisamidesar%2C%20Rajasthan!5e0!3m2!1sen!2sin!4v1589898443602!5m2!1sen!2sin"
                    class="col-md-12" height="500" frameborder="0"></iframe>
            </div>
            <div class="col-md-6 mx-auto">
                <div class="card rounded-0" style="height: 500px">
                    <div class="card-body">
                        <form action="{{route('inquiry')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name" class="subtitle label ml-2">Name</label>
                                <input @error('name') autofocus @enderror value="{{ old('name') }}"
                                    type="text" name="name" id="name" class="form-control rounded-0"
                                    placeholder="Please enter your name">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>    
                                    @enderror
                            </div>
                            <div class="form-group">
                                <label for="email" class="subtitle label ml-2">Email</label>
                                <input @error('email') autofocus @enderror value="{{ old('email') }}"
                                    type="text" name="email" id="email" class="form-control rounded-0"
                                    placeholder="Please enter your email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <label for="number" class="subtitle label ml-2">Number</label>
                                <input @error('number') autofocus @enderror value="{{ old('number') }}"
                                    type="tel" pattern="[0-9]*" name="number" id="number" class="form-control rounded-0"
                                    placeholder="Please enter your number">
                                    @error('number')
                                    <span class="invalid-feedback" role="alert">    
                                        <strong>{{ $message }}</strong>    
                                    </span>
                                    @enderror
                            </div>
                            <div class="form-group text-right">
                                <button class="btn custom-button">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


@endsection
@section('style')
<style>
    .cta{
        display: none!important;
    }
</style>
@endsection