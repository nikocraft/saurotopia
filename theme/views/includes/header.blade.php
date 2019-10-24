<header>
    <!-- Mountains image -->
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
    <h6 class="tagline">
        Aurora is a great blog & portfolio theme.
    </h6>

    <!-- Social Media icons -->
    <div class="social-media-icons">
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
    </div>

    <div class="hamburger-button-wrapper">
        <button id="hamburger-button" class="hamburger hamburger--collapse" type="button">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>
    </div>

</header>