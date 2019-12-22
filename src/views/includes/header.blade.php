<header>
    <div class="logo">
        @if(get_theme_setting('sidebar.logo.logotype') == 'text')
            <a class="logo-link" href="{{ url('/') }}">
                {{ get_website_setting('website.general.title') }}
            </a>
        @else
            <a class="logo-link" href="{{ url('/') }}">
                <img src="{{ get_theme_setting('sidebar.logo.logoImage') }}" class="img-responsive" alt="logo">
            </a>
        @endif
    </div>
    <!-- Slogan -->
    <div class="tagline">
        {{ get_website_setting('website.general.tagline') }}
    </div>

    <!-- Social Media icons -->
    @include('includes/social-icons')

    <div class="hamburger-button-wrapper">
        <button id="hamburger-btn" onClick="theme.hamburgerToggle(this.id)" class="hamburger hamburger--collapse" type="button">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>
    </div>

</header>