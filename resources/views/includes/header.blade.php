<header>

    <nav class="navbar navbar-expand-md bg-body-tertiary">
        <div class="container">
          <a class="navbar-brand" href="{{ route('home') }}">{{ config('app.name') }}</a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-collapse" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbar-collapse">
            
            <ul class="navbar-nav me-auto " style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                <a class="nav-link {{ active_link('home') }}" aria-current="page" href="{{ route('home') }}">{{ __('Home') }}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ active_link('blog') }}" aria-current="page" href="{{ route('blog') }}">{{ __('Blog') }}</a>
              </li>
            </ul>

            <ul class="navbar-nav ms-auto " style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                <a class="nav-link {{ active_link('login') }}" aria-current="page" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ active_link('register') }}" aria-current="page" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
            </ul>

          </div>
        </div>
      </nav>

</header>