<header id="hamburger_menu">
    @guest
    <nav class="nav fadein" id="nav_f">
        <ul>
            <li class="li_pro_img"></li>
            <li class="li_pro_name">ほげ太郎</li>
            <hr>
            <ul class="li_pro_comment_fav">
                <li><a href="#">Login</a></li>
                <li><a href="#">Sign Up</a></li>
            </ul>
            <li class="li_pro_mypage">マイページへのリンクが入ります</li>
            <ul class="li_pro_comment_fav">
                <p>記事にコメントが来ています！</p>
                <li><a href="#">記事のタイトル</a></li>
            </ul>
            <li class="li_pro_ad">ADが入ります</li>
        </ul>
    </nav>
    @else
    <nav class="nav fadein" id="nav_f">
        <ul>
            <li class="li_pro_img">
                <a href="{{ route('individual', ['id' => Auth::id()]) }}"><img src="/storage/{{ Auth::user()->image }}" alt=""></a>
            </li>
            <li class="li_pro_name">
                <a href="{{ route('individual', ['id' => Auth::id()]) }}">
                    {{ Auth::user()->user_name }}
                </a>
            </li>
            <hr>
            <ul class="li_pro_comment_fav">
                <p style="color:whitesmoke;">通知ですよー<span style="font-size:3em; color:whitesmoke;">✌</span>^o^<span style="font-size:3em; color:whitesmoke;">✌</span></p>
                @foreach ($hamburgerNotice as $hamburger)
                @empty($hamburger)
                <ul>
                    <li>通知はありません</li>
                </ul>
                @break
                @endempty
                @if ($loop->index < 10)
                    @if($hamburger->detail == null)
                    <ul>
                        <li>
                            {{ Illuminate\Support\Facades\DB::table('users')->where('id', '=', $hamburger->user_id)->first()->user_name }}&nbsp;が、
                            お気に入り
                            <i id="" class="fa-heart fas" style="color:#ff0000;"></i>
                            しました！
                        </li>
                        <li>
                            <a href="{{ route('article_detail', ['id' => $hamburger->article_id]) }}">{{ Illuminate\Support\Facades\DB::table('articles')->where('id', '=', $hamburger->article_id)->first()->title }}</a>
                        </li>
                        <li>
                            {{ $hamburger->created_at }}
                        </li>
                    </ul>
                    @else
                    <ul>
                        <li>
                            {{ Illuminate\Support\Facades\DB::table('users')->where('id', '=', $hamburger->user_id)->first()->user_name }}&nbsp;から、
                            コメント
                            <i class="fas fa-comment" style="color:#71f371;"></i>
                            が来ています！
                        </li>
                        <li>
                            <a href="{{ route('article_detail', ['id' => $hamburger->article_id]) }}">{{ Illuminate\Support\Facades\DB::table('articles')->where('id', '=', $hamburger->article_id)->first()->title }}</a>
                        </li>
                        <li>
                            {{ $hamburger->created_at }}
                        </li>
                    </ul>
                    @endif
                @endif
                @endforeach
            </ul>
            <li class="li_pro_ad">ADが入ります</li>
        </ul>
    </nav>
    @endguest
</header>
<div id="hum_target">
    <div class="hum_t_inner">
        <span class="hum_t_i_line hum_t_i_0" id="line0"></span>
        <span class="hum_t_i_line hum_t_i_1" id="line1"></span>
        <span class="hum_t_i_line hum_t_i_2" id="line2"></span>
    </div>
</div>