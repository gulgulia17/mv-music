<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
</nav>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="/" class="brand-link">
        <img src="{{asset('images/logo/logo_single.png')}}" alt="AdminLTE Logo" class="brand-image elevation-3">
        <span class="brand-text font-weight-light">MV Music</span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="/details" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>General Details</p>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="/admin/gallery" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Gallery</p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Pages
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @php
                            use App\About;
                            use App\Contact;
                            $about = About::orderBy('id', 'desc')->first();
                            $Contact = Contact::orderBy('id', 'desc')->first();
                        @endphp
                        <li class="nav-item">
                            <a href={{ isset($about) ? "/admin/about/$about->id/edit" : route('about.index')}} class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>About</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                            href="{{route('inquiry')}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Inquiry</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-music nav-icon"></i>
                        <p>
                            My Music
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('mymusic.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Music</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('mymusic.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Music</p>
                            </a>
                        </li>
                        
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{ __('Logout') }}</p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
    </div>
</aside>