<nav class="navbar navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #FCAEC7;">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <img src="https://i.pinimg.com/564x/35/b8/5a/35b85a702cff0969ec80058922bb1201.jpg" alt="" style="width: 80px">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li> --}}
            </ul>
            <!-- Left links -->
            <div class="text-end">
                @guest
                <a href="{{ route('login') }}" type="button" class="btn btn-outline-light me-2">Login</a>
                <a href="{{ route('register') }}" type="button" class="btn btn-light">Sign-up</a>
                @else
                <a href="{{ route('logout') }}" type="button" class="btn btn-outline-light me-2" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">{{ Auth::user()->name }}</a>
                @endguest
                <form action="{{ route('logout') }}" id="logout-form" method="POST">
                    @csrf
                </form>
            </div>
        </div>
    </div>
    <!-- Container wrapper -->
</nav>
