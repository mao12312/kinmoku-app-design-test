
{{--@extends('layouts.lesson')--}}
@include('partials.head-lesson')
<body>
@include('partials.nav-lesson')

@section('template_title')
    {{ $user->name }}'s Profile
@endsection

@section('template_fastload_css')

    #map-canvas{
    min-height: 300px;R
    height: 100%;
    width: 100%;
    }

@endsection

{{--@section('content')--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">--}}
                {{--<div class="card">--}}
                    {{--<div class="card-header">--}}

                        {{--{{ trans('profile.showProfileTitle',['username' => $user->name]) }}--}}

                    {{--</div>--}}
                    {{--<div class="card-body">--}}

                        {{--<img src="@if ($user->profile->avatar_status == 1) {{ $user->profile->avatar }} @else {{ Gravatar::get($user->email) }} @endif"--}}
                             {{--alt="{{ $user->name }}" class="user-avatar">--}}

                        {{--<dl class="user-info">--}}

                            {{--<dt>--}}
                                {{--{{ trans('profile.showProfileUsername') }}--}}
                            {{--</dt>--}}
                            {{--<dd>--}}
                                {{--{{ $user->name }}--}}
                            {{--</dd>--}}

                            {{--<dt>--}}
                                {{--{{ trans('profile.showProfileFirstName') }}--}}
                            {{--</dt>--}}
                            {{--<dd>--}}
                                {{--{{ $user->first_name }}--}}
                            {{--</dd>--}}

                            {{--@if ($user->last_name)--}}
                                {{--<dt>--}}
                                    {{--{{ trans('profile.showProfileLastName') }}--}}
                                {{--</dt>--}}
                                {{--<dd>--}}
                                    {{--{{ $user->last_name }}--}}
                                {{--</dd>--}}
                            {{--@endif--}}

                            {{--<dt>--}}
                                {{--{{ trans('profile.showProfileEmail') }}--}}
                            {{--</dt>--}}
                            {{--<dd>--}}
                                {{--{{ $user->email }}--}}
                            {{--</dd>--}}

                            {{--@if ($user->profile)--}}

                                {{--@if ($user->profile->theme_id)--}}
                                    {{--<dt>--}}
                                        {{--{{ trans('profile.showProfileTheme') }}--}}
                                    {{--</dt>--}}
                                    {{--<dd>--}}
                                        {{--{{ $currentTheme->name }}--}}
                                    {{--</dd>--}}
                                {{--@endif--}}

                                {{--@if ($user->profile->location)--}}
                                    {{--<dt>--}}
                                        {{--{{ trans('profile.showProfileLocation') }}--}}
                                    {{--</dt>--}}
                                    {{--<dd>--}}
                                        {{--{{ $user->profile->location }} <br/>--}}

                                        {{--@if(config('settings.googleMapsAPIStatus'))--}}
                                            {{--Latitude: <span id="latitude"></span> / Longitude: <span--}}
                                                    {{--id="longitude"></span> <br/>--}}

                                            {{--<div id="map-canvas"></div>--}}
                                        {{--@endif--}}
                                    {{--</dd>--}}
                                {{--@endif--}}

                                {{--@if ($user->profile->bio)--}}
                                    {{--<dt>--}}
                                        {{--{{ trans('profile.showProfileBio') }}--}}
                                    {{--</dt>--}}
                                    {{--<dd>--}}
                                        {{--{{ $user->profile->bio }}--}}
                                    {{--</dd>--}}
                                {{--@endif--}}

                                {{--@if ($user->profile->twitter_username)--}}
                                    {{--<dt>--}}
                                        {{--{{ trans('profile.showProfileTwitterUsername') }}--}}
                                    {{--</dt>--}}
                                    {{--<dd>--}}
                                        {{--{!! HTML::link('https://twitter.com/'.$user->profile->twitter_username, $user->profile->twitter_username, array('class' => 'twitter-link', 'target' => '_blank')) !!}--}}
                                    {{--</dd>--}}
                                {{--@endif--}}

                                {{--@if ($user->profile->github_username)--}}
                                    {{--<dt>--}}
                                        {{--{{ trans('profile.showProfileGitHubUsername') }}--}}
                                    {{--</dt>--}}
                                    {{--<dd>--}}
                                        {{--{!! HTML::link('https://github.com/'.$user->profile->github_username, $user->profile->github_username, array('class' => 'github-link', 'target' => '_blank')) !!}--}}
                                    {{--</dd>--}}
                                {{--@endif--}}
                            {{--@endif--}}

                        {{--</dl>--}}

                        {{--@if ($user->profile)--}}
                            {{--@if (Auth::user()->id == $user->id)--}}

                                {{--{!! HTML::icon_link(URL::to('/profile/'.Auth::user()->name.'/edit'), 'fa fa-fw fa-cog', trans('titles.editProfile'), array('class' => 'btn btn-small btn-info btn-block')) !!}--}}

                            {{--@endif--}}
                        {{--@else--}}

                            {{--<p>{{ trans('profile.noProfileYet') }}</p>--}}
                            {{--{!! HTML::icon_link(URL::to('/profile/'.Auth::user()->name.'/edit'), 'fa fa-fw fa-plus ', trans('titles.createProfile'), array('class' => 'btn btn-small btn-info btn-block')) !!}--}}

                        {{--@endif--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    <main>
        <div class="container">

            <!-- user -->
            <div class="user-show">
                <div class="row align-items-center user_row">
                    <div class="user-img col-lg-6">
                        {{--<img src="@if ($user->profile->avatar_status == 1) {{ $user->profile->avatar }} @else {{ Gravatar::get($user->email) }} @endif"--}}
                             {{--alt="{{ $user->name }}" class="user-avatar" >--}}
                    </div>

                    <div class="user-info col-lg-6">
                        <div class="user-text">
                            <h5></h5>
                            <h3>{{ $user->name }}</h3>

                            <p>
                                {{ $user->profile->bio }}
                            </p>
                        </div>
                        @if ($user->profile)
                            @if (Auth::user()->id == $user->id)

                                {!! HTML::icon_link(URL::to('/profile/'.Auth::user()->name.'/edit'), 'fa fa-fw fa-cog', trans('titles.editProfile'), array('class' => 'btn btn-small btn-info btn-block')) !!}

                            @endif
                        @else

                            <p>{{ trans('profile.noProfileYet') }}</p>
                            {!! HTML::icon_link(URL::to('/profile/'.Auth::user()->name.'/edit'), 'fa fa-fw fa-plus ', trans('titles.createProfile'), array('class' => 'btn btn-small btn-info btn-block')) !!}

                        @endif
                    </div>
                </div>
            </div>
            <!-- user -->

        </div>
    </main>
<style>
.user-img {
background: url({{ Gravatar::get(Auth::user()->email) }}) 50% 50% no-repeat;
background-size: auto 100%;
}
</style>

<footer id="footer">

    <div class="footer-right">

        <a href="#">
            <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#">
            <i class="fab fa-twitter"></i>
        </a>

    </div>

    <div class="footer-left">

        <div class="footer-links">
            <a href="#">近もく会</a>
            <p>異なる"言語"で、共に作る"空想"</p>
            <p class="mt-2">近もく会 &copy; 2018</p>
        </div>

    </div>

</footer>
<!-- footer -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

{{--@endsection--}}

{{--@section('footer_scripts')--}}

    {{--@if(config('settings.googleMapsAPIStatus'))--}}
        {{--@include('scripts.google-maps-geocode-and-map')--}}
    {{--@endif--}}

{{--@endsection--}}

