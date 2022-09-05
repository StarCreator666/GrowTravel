<!-- header section starts  -->

<header class="header">
    
    <a href="#" class="logo"><img class="logo" src="images/logo-gt.png" alt=""></a>

    <nav class="navbar">
        <div id="nav-close" class="fas fa-times"></div>
        <a href="/">{{ __('main.home') }}</a>
        <a href="/wisata">{{ __('main.tour') }} </a>
        <a href="/cars">{{ __('main.rent') }}</a>
        <a href="#packages">{{ __('main.info') }}</a>
        <a href="#shop">{{ __('main.about') }}</a>



        <div class="dropdown" ><a href="" id="navbarDropdown" class="nav-link dropdown-menutoggle"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img class="flag-icon" width="25rem" src="{{ __('icon/'.app()->getLocale().'.png') }}" alt=""></a>


            <div class="dropdown-menu dropdown-menu-" aria-labelledby="navbarDropdown">
                @if (app()->getLocale()=='id')
                <a href="{{ url('lang/en') }}" class="dropdown-item" style="margin:0;"><img width="25rem" src="{{ __('icon/en.png') }}" alt=""> {{ __('english') }}</a>
                @endif
                @if (app()->getLocale()=='en')
                <a href="{{ url('lang/id') }}" class="dropdown-item" style="margin:0;"><img width="25rem" src="{{ __('icon/id.png') }}" alt=""> {{ __('indonesian') }}</a>
                @endif
            </div>
       </div>
       @if(Auth::user())
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="btn btn-light-primary font-weight-bold">Log Out</button>
        </form>
       @else
       <a href="{{ url('login') }}" >Login</a>
       @endif
    </nav>

    <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>
        <div id="search-btn" class="fas fa-search"></div>
    </div>

</header>

<!-- header section ends -->

<!-- WhatApp icon float -->

<a href="https://api.whatsapp.com/send?phone=12341234" target="_blank">
    <button class="btn-floating wa">
        <img src="{{ asset('images/wa.png') }}" width="32rem" alt="whatsapp">
        <span>Any questions? Chat with us on WhatsApp</span>
    </button>
</a>

<!-- WhatApp icon float End -->

<!-- search form  -->

<div class="search-form">

    <div id="close-search" class="fas fa-times"></div>

    <form action="">
        <input type="search" name="" placeholder="search here..." id="search-box">
        <label for="search-box" class="fas fa-search"></label>
    </form>
</div>


<!-- search form ends  -->