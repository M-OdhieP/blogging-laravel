<nav class="navbar navbar-expand-lg navbar-dark bg-danger shadow-sm sticky-md-top">
    <div class="container">
        <a class="navbar-brand" href="">Odhie</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link {{ ($active==="home") ? 'active':'' }}" href="/">Home</a>
                <a class="nav-link {{ ($active==="about") ? 'active':'' }}" href="/about">About</a>
                <a class="nav-link {{ ($active==="posts") ? 'active':'' }}" href="/posts">Post</a>
                <a class="nav-link {{ ($active==="categories") ? 'active':'' }}" href="/categories">Categories</a>

            </div>
         <div class="navbar-nav ms-auto">
            @auth

            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Welcome Back, {{ auth()->user()->name }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
                    <li>
                      <form action="/logout" method="post">
                        @csrf
                          <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                      </form>
                    </li>
                </ul>
              </div>
            @else   
                <div class="navbar-nav ms-auto">
                    <a class="nav-link {{ ($active==="login") ? 'active':'' }}" href="/login"><i class="bi bi-box-arrow-in-right"></i> login</a>
                </div> 
            @endauth
        </div>
        </div>
    </div>

</nav>