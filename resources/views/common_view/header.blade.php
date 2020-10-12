<div class="header clearfix">
    <div class="top">
        {{-- <i class="far fa-bars"></i> --}}
        @guest
        <a href="{{ url('top') }}" class="ztext">具志川<br>訓練校</a>
        <a href="{{ url('/register') }}">Sign up</a>
        <a href="{{ url('/login') }}">Login</a>
        @else
        <a href="{{ url('top') }}" class="ztext" style="margin-right:170px">具志川<br>訓練校</a>
        <a href="{{ route('individual', ['id' => Auth::id()]) }}" style="margin-right:0;">{{ Auth::user()->user_name }}</a>
        <a href="{{ route('individual', ['id' => Auth::id()]) }}"><img src="/storage/{{ Auth::user()->image }}" alt="{{ Auth::user()->image }}" style="height:56px;border-radius:100%;margin-right:30px;"></a>
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        @endguest
    </div>
    <div class="header_bot">
        <div class="tp_intro">
            <a href="#">ポートフォリオページへ</a>
            <a href="#">ゲームページへ</a>
            <br>
            <h2>心眼を極めるべし、いつでも傍には不都合な真実がある。<br>{{ url()->current() }}</h2>
        </div>
        <div class="ad">
            {{-- 広告を入れる場所 --}}
        </div>
    </div>
</div>
