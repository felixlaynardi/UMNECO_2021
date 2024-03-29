<nav class="navbar navbar-expand-md navbar-fixed-top">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button">
            <span class="navbar-toggler-icon">
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav col-12">
                <div class="nav-item-container mx-auto w-100 row">
                    <li class="nav-item col-3">
                        <a class="nav-link active" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item col-3">
                        <a class="nav-link" href="{{ route('about-greenate') }}">About Greenate</a>
                    </li>
                    <li class="nav-item col-3">
                        <a class="nav-link" href="{{ route('ourteam') }}">Our Team</a>
                    </li>
                    <li class="nav-item col-3">
                        @if(session()->has('user'))
                        <a class="nav-link" href="{{ route('profileView') }}">Profile</a>
                        @else
                        <a class="nav-link" href="{{ route('loginView') }}">Login</a>
                        @endif
                    </li>
                </div>
            </ul>
        </div>
    </div>
</nav>


<input type="checkbox" id="main-navigation-toggle" class="btn btn--close" title="Toggle main navigation" />
<div class="toggler-container">

</div>
<label for="main-navigation-toggle">
    <span class="navigation-toggle-span"></span>
</label>
<nav id="main-navigation" class="nav-main">
    <ul class="menu">
        <li class="menu__item">
            <a class="menu__link" href="{{ route('home') }}">Home</a>
        </li>
        <li class="menu__item">
            <a class="menu__link" href="{{ route('about-greenate') }}">About Greenate</a>
        </li>
        <li class="menu__item">
            <a class="menu__link" href="{{ route('ourteam') }}">Our Team</a>
        </li>
        <li class="menu__item">
            @if(session()->has('user'))
            <a class="menu__link" href="{{ route('profileView') }}">Profile</a>
            @else
            <a class="menu__link" href="{{ route('loginView') }}">Login</a>
            @endif
        </li>
    </ul>
</nav>