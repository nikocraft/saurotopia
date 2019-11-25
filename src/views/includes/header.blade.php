<header>
    <div class="logo">
        @if(get_theme_setting('sidebar.logo.logotype') == 'text')
            <a class="logo-link" href="{{ url('/') }}">
                {{ get_website_setting('website.title') }}
            </a>
        @else
            <a class="logo-link" href="{{ url('/') }}">
                <img src="{{ get_theme_setting('sidebar.logo.logoImage') }}" class="img-responsive" alt="logo">
            </a>
        @endif
    </div>
    <!-- Slogan -->
    <div class="tagline">
        {{ get_website_setting('website.tagline') }}
    </div>

    <!-- Social Media icons -->
    {{-- <div class="social-media-icons">
        <div class="social-icon">
            <a href="#">
                <i class="fab fa-facebook-f"></i>
            </a>
        </div>
        <div class="social-icon">
            <a href="#">
                <i class="fab fa-twitter"></i>
            </a>
        </div>
        <div class="social-icon">
            <a href="#">
                <i class="fab fa-instagram"></i>
            </a>
        </div>
    </div> --}}

    <div class="hamburger-button-wrapper">
        <button id="hamburger-btn" onClick="theme.hamburgerToggle(this.id)" class="hamburger hamburger--collapse" type="button">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>
    </div>

</header>