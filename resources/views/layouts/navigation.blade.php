@php
    use App\Contact;
    use App\SocialMedia;
    $SocialMedia = SocialMedia::orderBy('id', 'desc')->first();
    $Contact = Contact::orderBy('id', 'desc')->first();
@endphp
<section id="topbar">
    <nav class="navbar">
        <ul class="ul-icon mr-md-auto mr-auto my-md-0 my-2 d-none d-md-flex">
            <li class="nav-item px-2">
                <i class="fas fa-phone fa-1x px-2"></i>
                <a class="topbar-link"  href="tel:+91{!!isset($Contact) ? $Contact->phonenumber : "123456678"!!}">{!!isset($Contact) ? $Contact->phonenumber : "123456678"!!}</a>
            </li>
            <li class="nav-item px-2">
                <i class="fa fa-envelope fa-1x px-2"></i>
                <a class="topbar-link"  href="mailto:{!!isset($Contact) ? $Contact->email : "admin@admin.com"!!}">{!!isset($Contact) ? $Contact->email : "admin@admin.com"!!}</a>
            </li>
            <li class="nav-item px-2">
                <i class="fa fa-map-marker fa-1x px-2"></i>
                <a class="topbar-link"> {!!isset($Contact) ? "$Contact->location" : "Bikaner"!!}</a>
            </li>
        </ul>
        <ul class="ul-icon ml-md-auto ml-auto my-md-0 my-2">
            <li class="nav-item px-2">
                <a href="http://{{isset($SocialMedia->facebook) ? $SocialMedia->facebook : null}}" target="_blank" class="topbar-link-social" id="social-1"><i class="fab fa-facebook-f"></i></a>
            </li>
            <li class="nav-item px-2">
                <a href="http://{{isset($SocialMedia->instagram) ? $SocialMedia->instagram : null}}" target="_blank" class="topbar-link-social" id="social-2"><i class="fab fa-instagram"></i></a>
            </li>
            <li class="nav-item px-2">
                <a href="http://{{isset($SocialMedia->twitter) ? $SocialMedia->twitter : null}}" target="_blank" class="topbar-link-social" id="social-3"><i class="fab fa-twitter"></i></a>
            </li>
            <li class="nav-item px-2">
                <a href="http://{{isset($SocialMedia->linkedin) ? $SocialMedia->linkedin : null}}" target="_blank" class="topbar-link-social" id="social-4"><i class="fab fa-linkedin-in"></i></a>
            </li>
            <li class="nav-item px-2">
                <a href="http://{{isset($SocialMedia->snapchat) ? $SocialMedia->snapchat : null}}" target="_blank" class="topbar-link-social" id="social-5"><i class="fab fa-snapchat-ghost"></i></a>
            </li>
        </ul>
    </nav>
</section>
<section id="starting">
    <nav class="navbar navbar-expand-lg navbar-dark py-4" style="background-color: #222">
        <a class="navbar-brand w-25" href="/
        ">
            <img src="{{ isset($logo) ? asset($logo->path) : asset('images/logo/logo.png')}}" class="w-md-75 w-150">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
            aria-controls="navbar" aria-expanded="false" aria-label="navbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse d-lg-none navbar-collapse" id="navbar">
            <ul class="navbar-nav ml-auto mt-lg-0 text-center">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('sevenat11') }}">7at11</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('whatwedo') }}">What we do?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('studiogear') }}">Studio gear</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('gallery') }}">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('mymusic') }}">My Music</a>
                </li>
                <div class="dropdown">
                <li class="nav-item">
                    <a class="nav-link dropdown-toggle" href="#" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                    <div class="dropdown-menu bg-light rounded-0" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item border-bottom" href="{{route('musicproduction')}}">Music Production </a>
                        <a class="dropdown-item border-bottom" href="{{route('audiorecording')}}">Audio recording </a>
                        <a class="dropdown-item border-bottom" href="{{route('mixingmastering')}}">Mixing Mastering </a>
                        <a class="dropdown-item border-bottom" href="{{route('onlinemixingmastering')}}">Online Mixing Mastering</a>
                        <a class="dropdown-item border-bottom" href="{{route('completemusicalbum')}}">Complete Music Album </a>
                        <a class="dropdown-item border-bottom" href="{{route('songwriting')}}">Song Writing </a>
                        <a class="dropdown-item border-bottom" href="{{route('dubbingnvoiceovers')}}">Dubbing & Voiceovers </a>
                        <a class="dropdown-item border-bottom" href="{{route('backgroundmusic')}}">Background Music</a>
                        <a class="dropdown-item border-bottom" href="{{route('commercialadsnjingles')}}">Commercial Ads & Jingles </a>
                        <a class="dropdown-item" href="{{route('digitalmediapromotion')}}">Digital Media Promotion</a>
                      </div>
                </li>
                </div>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('store') }}">Buy now</a>
                </li>

            </ul>
        </div>
    </nav>
    
</section>