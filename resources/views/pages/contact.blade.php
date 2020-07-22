@extends('layouts.main')
@section('content')
<section class="section bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="title mx-auto">
                    <h1>Contact</h1>
                    <div class="title-divider"></div>
                </div>
            </div>
            <div class="col-md-6 mb-md-2 mb-5">
                <div class="card rounded-0 border" style="background-color: transparent!important;height: 500px">
                    <div class="card-body" style="background-color: transparent!important;">
                        <form action="{{route('inquiry')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name" class="subtitle label ml-2">Name</label>
                                <input @error('name') autofocus @enderror value="{{ old('name') }}" type="text"
                                    name="name" id="name" class="form-control rounded-0"
                                    placeholder="Please enter your name">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email" class="subtitle label ml-2">Email</label>
                                <input @error('email') autofocus @enderror value="{{ old('email') }}" type="text"
                                    name="email" id="email" class="form-control rounded-0"
                                    placeholder="Please enter your email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="number" class="subtitle label ml-2">Number</label>
                                <input @error('number') autofocus @enderror value="{{ old('number') }}" type="tel"
                                    pattern="[0-9]*" name="number" id="number" class="form-control rounded-0"
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
            <div class="col-md-5 mx-auto mb-md-2 mb-5 text-md-left text-center">
                <div class="row">
                    <div class="col-md-12 col-6 mb-4">
                        <div class="title">
                            <h3>MV Music</h3>
                            <div class="title-divider mx-md-0 mx-auto"></div>
                        </div>
                        <i class="fa fa-map-marker px-2"></i>
                        <a class="contact-link">
                            Bikaner,Bikaner,Bikaner
                        </a>

                    </div>
                    <div class="col-md-12 col-6 mb-4">
                        <div class="title">
                            <h3>Connect with us:</h3>
                            <div class="title-divider mx-md-0 mx-auto"></div>
                            <p class="mb-0">For support or any question</p>
                        </div>
                        <span class="pr-2">
                            <i class="fa fa-envelope pr-2"></i>
                            <a class="contact-link" href="mailto:admin@admin.com">admin@admin.com</a>
                        </span>
                        <span class="pr-2">
                            <i class="fas fa-phone pr-2"></i>
                            <a class="contact-link"
                                href="tel:+91 @isset($Contact){{$Contact->phonenumber}}@endisset">@isset($Contact){{$Contact->phonenumber}}@endisset</a>
                        </span>
                    </div>
                    <div class="col-md-12">
                        <div class="title">
                            <h3>Why MV Music:</h3>
                            <div class="title-divider mx-md-0 mx-auto"></div>
                            <p class="mb-0">@isset($about) {{$about->short_about}} @endisset</p>
                        </div>

                    </div>
                </div>
            </div>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d220.13360235385284!2d73.29791464745013!3d28.020268763816063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x393fdd5d251c589b%3A0x7218fa88f147d738!2sJassusar%20Gate!5e0!3m2!1sen!2sin!4v1595401851382!5m2!1sen!2sin"
                class="col-md-12 my-2" height="300" frameborder="0">
            </iframe>
        </div>
    </div>
</section>
@endsection
@section('style')
<style>
    .bg{
        background: linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('../images/background/6.jpg');
        background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;
        color:#ffff!important;
    }
    .contact-link{
        color: #ffff;
        transition: .3s ease-in-out;
    }
    a.contact-link:hover{
        color: #007bff;
        font-weight: bold;
        text-decoration: none;
    }
    .title-divider{
        background-color: #a51d0787!important;
    }
    
    .cta{
        display: none!important;
    }
</style>
@endsection
@section('script') @endsection