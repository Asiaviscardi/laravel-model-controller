<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-light {{ Route::currentRouteName() === 'home' ? 'active' : '' }}" aria-current="page" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light {{ Route::currentRouteName() === 'movies' ? 'active' : '' }}" href="{{ route('movies') }}">Film</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
