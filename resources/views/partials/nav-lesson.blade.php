<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <a class="logomark" href="#">
        <img src="{{asset('/images/kinmoku-logo.svg')}}" alt="" class="logo">
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
            aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-ellipsis-h"></i>
    </button>

    <div class="collapse navbar-collapse nav-list" id="navbarNav">
        <ul class="navbar-nav">
            @guest
                <li><a class="nav-link" href="{{ route('login') }}">{{ trans('titles.login') }}</a></li>
                <li><a class="nav-link" href="{{ route('register') }}">{{ trans('titles.register') }}</a></li>
            @else
            <li class="nav-item text-uppercase">
                <a class="nav-link" href="{{route('welcome')}}">Home</a>
            </li>
            <li class="nav-item text-uppercase active">
                <a class="nav-link" href="{{route('lesson-index2')}}">products</a>
            </li>
            {{--<li class="nav-item text-uppercase">--}}
                {{--<a class="nav-link" href="{{route('lesson-user')}}">--}}
                    {{--@if ((Auth::User()->profile) && Auth::user()->profile->avatar_status == 1)--}}
                        {{--<img src="{{ Auth::user()->profile->avatar }}" alt="{{ Auth::user()->name }}" class="user-avatar-nav">--}}
                    {{--@else--}}
                        {{--<div class="user-avatar-nav"></div>--}}
                    {{--@endif--}}
                {{--</a>--}}
            {{--</li>--}}

                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        @if ((Auth::User()->profile) && Auth::user()->profile->avatar_status == 1)
                            <img src="{{ Auth::user()->profile->avatar }}" alt="{{ Auth::user()->name }}" class="user-avatar-nav">
                        @else
                            <div class="user-avatar-nav"></div>
                        @endif
                        {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item {{ Request::is('profile/'.Auth::user()->name, 'profile/'.Auth::user()->name . '/edit') ? 'active' : null }}" href="{{ url('/profile/'.Auth::user()->name) }}">
                            {!! trans('titles.profile') !!}
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
</nav>

