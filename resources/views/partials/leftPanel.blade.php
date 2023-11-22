<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <div class="d-flex sidebar-profile">
                <div class="sidebar-profile-image">
                    <img src="{{asset('images/logo-1-1.png')}}" height="250px" width="15rem" alt="image">
                    <span class="sidebar-status-indicator"></span>
                </div>
                <div class="sidebar-profile-name" style="margin-left: 1rem">
                    <p class="sidebar-name">
                        {{ Auth::user()->name }}
                    </p>
                    <p class="sidebar-designation" >
                        Welcome
                    </p>
                </div>
            </div>


        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="fa-solid fa-gauge" style="padding-right: 1.4rem"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        {{-- <li class="nav-item">
        <a class="nav-link"  href="{{route('formelements')}}">
          <i class="typcn typcn-briefcase menu-icon"></i>
          <span class="menu-title" >From Elements </span>
        </a>
      </li> --}}


        <li class="nav-item">
            <a class="nav-link" href="{{ route('company.index') }}">
                <i class="fa-regular fa-id-card" style="padding-right: 1.4rem"></i>
                <span class="menu-title">Company Profile </span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('text.index') }}">
                <i class="fa-regular fa-star" style="padding-right: 1.4rem"></i>
                <span class="menu-title">Copmpany Speciality</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('client.index') }}">
                <i class="fa-solid fa-circle-user" style="padding-right: 1.4rem"></i>
                <span class="menu-title">Client</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('ProductFeature.index') }}">
                <i class="fa-solid fa-bars-progress" style="padding-right: 1.4rem"></i>
                <span class="menu-title">Product Feature</span>
            </a>
        </li>




        <li class="nav-item">
            <a class="nav-link" href="{{ route('service.index') }}">
                <i class="fa-brands fa-servicestack" style="padding-right: 1.3rem"></i>
                <span class="menu-title">Company Service</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('ServiceDev.index') }}">
                <i class="fa-solid fa-gears" style="padding-right: 1.2rem"></i>
                <span class="menu-title">Service Development</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('servicefeature.index') }}">
                <i class="fa-brands fa-uncharted" style="padding-right: 1.6rem"></i>
                <span class="menu-title">More Service Feature</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('project.index') }}">
                <i class="fa-regular fa-circle-info" style="padding-right: 1.6rem"></i>
                <span class="menu-title">Project Info</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('otherproject.index') }}">
                <i class="fa-solid fa-sitemap"  style="padding-right:1.2rem"></i>
                <span class="menu-title">Other Project Info</span>
            </a>
        </li>



        <li class="nav-item">
            <a class="nav-link" href="{{ route('pricing.index') }}">
                <i class="fa-solid fa-money-bill" style="padding-right: 1.2rem"></i>
                <span class="menu-title">Pricing</span>
            </a>
        </li>


        {{-- <li class="nav-item">
        <a class="nav-link" href="{{route('video.index')}}">
          <i class="typcn typcn-th-small-outline" style="padding-right: 1.4rem"></i>
          <span class="menu-title" >Video Gallery</span>
        </a>
      </li> --}}



        {{--
      <li class="nav-item">
        <a class="nav-link" href="{{route('news_event.index')}}">
          <i class="typcn typcn-th-small-outline" style="padding-right: 1.4rem"></i>
          <span class="menu-title" >News & Events</span>
        </a>
      </li> --}}



        <li class="nav-item">
            <a class="nav-link" href="{{ route('map.index') }}">
                <i class="fa-regular fa-map" style="padding-right: 1.3rem"></i>
                <span class="menu-title">Location/Map</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('question.index') }}">
                <i class="fa-solid fa-circle-question" style="padding-right: 1.3rem"></i>
                <span class="menu-title">Question </span>
            </a>
        </li>

        </li>
</nav>
