


<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    @foreach ( $info as $item )
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html"><img style=" height: 65px; width:100%"
                src="{{ asset('images/icon/'.$item->icon) }}" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="" alt="" /></a>
        <button class="navbar-toggler navbar-toggler align-self-center d-none d-lg-flex" type="button"
            data-toggle="minimize">
            <span class="typcn typcn-th-menu"></span>
        </button>
    </div>
    @endforeach
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-2">



        </ul>
        <ul class="navbar-nav navbar-nav-right">

            </li>
            @if (Auth::check())
                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link dropdown-toggle  pl-0 pr-0" href="#" data-toggle="dropdown"
                        id="profileDropdown">
                        <i class="fa-solid fa-user"></i> </a>
                    <span class="nav-profile-name"><a class="dropdown-item" href="{{route('logout')}}"> Log-Out</span>
          </a></a>

                 {{-- <button onclick="myFunction('conf')">Log-Out</button></a>
                     <p id="conf"></p> --}}
                    {{-- <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown"> --}}
                        {{-- <a class="dropdown-item">
                <i class="fa-solid fa-user"> <a class="dropdown-item" href="{{route('logout')}}">
                    Logout
                    </a></i>

            </a> --}}
                        {{-- <a class="dropdown-item" href="{{ route('logout') }}">
                            Logout
                        </a> --}}
                    </div>
                </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-toggle="offcanvas">
            <span class="typcn typcn-th-menu"></span>
        </button>
    </div>
@else
    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
        <li class="nav-item"><a class="nav-link active" aria-current="page"
                href="{{ route('showregister') }}">Registration</a></li>
        <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ route('showLogin') }}">Login</a>
        </li>

    </ul>
    @endif
</nav>

{{-- <script>
    function myFunction() {
        var result;
        var r = confirm("Want to Log-out!");
        if (r == true) {
            result = " OK!";

        } else {
            result = "Cancelled!";
        }
        // document.getElementById("conf").innerHTML = result;
    }
</script> --}}
