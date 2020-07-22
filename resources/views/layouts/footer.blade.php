@php
    use App\LatestMusic;
    use App\SocialMedia;
    use App\About;
    use App\Gallery;
    $SocialMedia = SocialMedia::orderBy('id', 'desc')->first();
    $about = About::orderBy('id', 'desc')->first();
    $LatestMusic = LatestMusic::orderBy('id', 'desc')->limit(3)->get();
    $gallery = Gallery::orderBy('id', 'desc')->limit(9)->get();
@endphp

<section id="footer" class="p-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-3 text-lg-left text-md-center">
                <div class="title">
                    <h3 class="text-light">About Us</h3>
                    <div class="title-divider mx-lg-0 mx-md-auto"></div>
                </div>
                <div class="subtitle">
                    <p class="mb-0 text-justify">
                        {{isset($about) ? $about->short_about :
                            'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit quo accusamus voluptatum sapiente, modi in, esse eveniet assumenda voluptatibus laudantium placeat officia quasi temporibus perferendis? Eos unde cum temporibus eaque.'
                        }}
                        
                    </p>
                </div>
                <ul class="ul-icon my-3">
                    <li class="nav-item">
                        <a href="http://{{isset($SocialMedia->facebook) ? $SocialMedia->facebook : null}}" class="topbar-link-social" id="social-1"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="http://{{isset($SocialMedia->instagram) ? $SocialMedia->instagram : null}}" class="topbar-link-social" id="social-2"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="http://{{isset($SocialMedia->twitter) ? $SocialMedia->twitter : null}}" class="topbar-link-social" id="social-3"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="http://{{isset($SocialMedia->linkedin) ? $SocialMedia->linkedin : null}}" class="topbar-link-social" id="social-4"><i class="fab fa-linkedin-in"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="http://{{isset($SocialMedia->snapchat) ? $SocialMedia->snapchat : null}}" class="topbar-link-social" id="social-5"><i
                                class="fab fa-snapchat-ghost"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 mb-3 text-lg-left text-md-center">
                <div class="title">
                    <h3 class="text-light">Music</h3>
                    <div class="title-divider mx-lg-0 mx-md-auto"></div>
                </div>
                <ul class="list-unstyled">
                    @foreach ($LatestMusic as $item)
                    <li class="mb-4">
                        <img src="{{asset($item->musicThumb)}}" width="50" height="50" class="mr-2">
                        <a href="{{$item->video_url}}" class="text-light">{{$item->title}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 mb-3 text-lg-left text-md-center">
                <div class="title">
                    <h3 class="text-light">Gallery</h3>
                    <div class="title-divider mx-lg-0 mx-md-auto"></div>
                </div>
                <div class="row">
                    @foreach ($gallery as $item)
                    <div class="col-4 mb-2">
                        <img src="{{asset($item->galleryFile)}}" class="w-100">
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-3 text-lg-left text-md-center">
                <div class="title">
                    <h3 class="text-light">Subscribe</h3>
                    <div class="title-divider mx-lg-0 mx-md-auto"></div>
                </div>
                <form action="{{ route('subs') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <div class="input-group">
                            <input
                                type="email" @error('subscriber_email') autofocus @enderror
                                class="rounded-0 form-control" placeholder="Email" name="subscriber_email"
                            >
                            <div class="input-group-append">
                                <button class="input-group-text rounded-0 btn custom-button m-0 p-2"
                                    id="basic-addon2">subscribe</button>
                            </div>
                        </div>
                        @error('subscriber_email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section id="bottom" class="p-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="text-md-left text-center text-light mb-md-0 mb-2">
                    Copyright &copy; {{date('Y')}} All rights reserved.
                </div>
            </div>
            <div class="col-md-6">
                <div class="text-md-right text-center text-light">
                    Powered by <a href="http://www.itplus.co.in">IT Plus</a>
                </div>
            </div>
        </div>
    </div>
</section>