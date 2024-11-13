<div class="clever-main-menu">
    <div class="classy-nav-container breakpoint-off">
        <!-- Menu -->
        <nav class="classy-navbar justify-content-between" id="cleverNav">

            <!-- Logo -->
            <a class="nav-brand" href="/"><img src="{{ asset('img/icons') }}/laravel.jpg" width="50" alt=""> Kopi</a>

            <!-- Navbar Toggler -->
            <div class="classy-navbar-toggler">
                <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>

            <!-- Menu -->
            <div class="classy-menu">

                <!-- Close Button -->
                <div class="classycloseIcon">
                    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                </div>

                <!-- Nav Start -->
                <div class="classynav">
                    <ul>
                        <li><a href="/" class="{{ Request::is('/') || Request::is('home') ? 'text-primary' : '' }}">Home</a></li>
                        
                        <li><a href="{{ route('menu') }}" class="{{ Request::segment(1) == 'menu' ? 'text-primary' : '' }}">Menu</a></li>
                        <li><a href="{{ route('album') }}" class="{{ Request::segment(1) == 'album' ? 'text-primary' : '' }}">Album</a></li>

                        <li><a href="{{ route('contact') }}" class="{{ Request::is('contact') ? 'text-primary' : '' }}">Kontak</a></li>
                    </ul>

                

                </div>
                <!-- Nav End -->
            </div>
        </nav>
    </div>
</div>