<nav class="navbar navbar-expand-lg navbar-light bg-light border">
  <a class="navbar-brand" href="/">{{config("app.name", "Laravel")}}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <ul class="navbar-nav navbar-right mr-5">
        <!-- Authentication Links -->
        @guest
            <li><a class="nav-link text-primary" href="{{ route('login') }}">Login</a></li>
            <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
        @else
            <li class="dropdown nav-link">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                    {{ Auth::user()->full_name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
            </li>
        @endguest

        <li class="dropdown nav-link">
          <a href="#" class="dropdown-toggle oi oi-cart" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
            <span class="caret"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-right mh-75" style="width: 400px; max-height: 75vh; overflow-y: auto;">
            <ul class="container">
              <li class="dropdown-item d-block container">
                <div class="row">
                  <a href="#" class="col-4 pl-0">
                    <img src="https://placehold.it/100x100" alt="thumb" style="width: 100%; height: auto; min-height: 86px;">
                  </a>
                  <div class="col-6 pl-0">
                    <a href="#">
                      <h3 class="my-1 mb-0">item name</h3>
                    </a>
                    <small>small description</small>
                  </div>
                  <div class="col-2">
                    tools
                  </div>
                </div>
              </li>
              <li class="dropdown-item d-block container">
                <div class="row">
                  <a href="#" class="col-4 pl-0">
                    <img src="https://placehold.it/100x100" alt="thumb" style="width: 100%; height: auto; min-height: 86px;">
                  </a>
                  <div class="col-6 pl-0">
                    <a href="#">
                      <h3 class="my-1 mb-0">item name</h3>
                    </a>
                    <small>small description</small>
                  </div>
                  <div class="col-2">
                    tools
                  </div>
                </div>
              </li>
              <li class="dropdown-item d-block container">
                <div class="row">
                  <a href="#" class="col-4 pl-0">
                    <img src="https://placehold.it/100x100" alt="thumb" style="width: 100%; height: auto; min-height: 86px;">
                  </a>
                  <div class="col-6 pl-0">
                    <a href="#">
                      <h3 class="my-1 mb-0">item name</h3>
                    </a>
                    <small>small description</small>
                  </div>
                  <div class="col-2">
                    tools
                  </div>
                </div>
              </li>
              <li class="dropdown-item d-block container">
                <div class="row">
                  <a href="#" class="col-4 pl-0">
                    <img src="https://placehold.it/100x100" alt="thumb" style="width: 100%; height: auto; min-height: 86px;">
                  </a>
                  <div class="col-6 pl-0">
                    <a href="#">
                      <h3 class="my-1 mb-0">item name</h3>
                    </a>
                    <small>small description</small>
                  </div>
                  <div class="col-2">
                    tools
                  </div>
                </div>
              </li>
              <li class="dropdown-item d-block container">
                <div class="row">
                  <a href="#" class="col-4 pl-0">
                    <img src="https://placehold.it/100x100" alt="thumb" style="width: 100%; height: auto; min-height: 86px;">
                  </a>
                  <div class="col-6 pl-0">
                    <a href="#">
                      <h3 class="my-1 mb-0">item name</h3>
                    </a>
                    <small>small description</small>
                  </div>
                  <div class="col-2">
                    tools
                  </div>
                </div>
              </li>
              <li class="dropdown-item d-block container">
                <div class="row">
                  <a href="#" class="col-4 pl-0">
                    <img src="https://placehold.it/100x100" alt="thumb" style="width: 100%; height: auto; min-height: 86px;">
                  </a>
                  <div class="col-6 pl-0">
                    <a href="#">
                      <h3 class="my-1 mb-0">item name</h3>
                    </a>
                    <small>small description</small>
                  </div>
                  <div class="col-2">
                    tools
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </li>

    </ul>
  </div>
</nav>