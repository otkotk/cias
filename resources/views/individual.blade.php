@extends('common_view.common')

@section('import')
    {{-- css等の読み込み場所 --}}
    {{-- <link rel="stylesheet" href="/css/comment.css" type="text/css"> --}}
    <link rel="stylesheet" href="/css/individual.css" type="text/css">
@endsection

@section('content')
    <div class="main">
        <div id="main_left">
            <div class="me">
                <img src="" alt="">
                <h1>{{ $user->user_name }} &nbsp; のマイページ</h1>
            </div>
            @foreach ($articles as $article)
            <div id="myArticles">
                <div class="article_list">
                    <div class="a_l_img">
                        <a href="{{ route('article_detail', ['id' => $article->id]) }}">
                            <img src="/storage/{{ $article->image }}" alt="">
                        </a>
                    </div>
                    <div class="a_l_details">
                        <div class="a_l_d_link">
                            <a href="{{ route('article_detail', ['id' => $article->id]) }}">
                                {{ $article->title }}
                            </a>
                        </div>
                        <div class="a_l_com-twi-fav">
                            <a href=""><i class="far fa-comment fa-2x" style="color:#259b25;"></i></a>
                            <a href=""><i class="fab fa-twitter-square fa-2x" style="color:#1da1f2;"></i></a>
                            <a href=""><i class="far fa-heart fa-2x" style="color:#ff0000;"></i></a>
                        </div>
                    </div>
                    <div class="a_l_edit">
                        <a href="">編集</a>
                        <a href="">削除</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div id="main_right">
            <div id="ajax_commentList">
                <div class="a_c_title">
                    <h2>コメント一覧</h2>
                </div>
                <div class="a_c_details">
                    <div class="a_c_d_userInfo">
                        <a href=""><img src="" alt="ユーザーアイコン"></a>
                        <a href=""> ユーザー1</a>&nbsp;さん
                    </div>
                    <div class="a_c_d_commentDetail">
                        あああ
                    </div>
                    <div class="a_c_d_other">
                        <a href="">記事に移動</a>
                        <p>2020-10-20</p>
                    </div>
                </div>
            </div>
            {{-- <div id="ajax_favList"></div> --}}
        </div>
    </div>

    {{-- <div class="main">
        <div class="me">
            <div class="me_image"></div>
            <p>{{ $user->user_name }}さんのマイページ</p>
        </div>
        <div class="content">
            @foreach ($articles as $article)

                <div class="article">
                    <a href="{{ route('article_detail', ['id' => $article->id]) }}">
                        <img src="/storage/{{ $article->image }}" class="image">
                    </a>
                    <a href="{{ route('article_detail', ['id' => $article->id]) }}">
                        <p class="title">{{ $article->title }}</p>
                    </a>
                    <div class="add">
                        <div class="comment">※</div>
                        <div class="twitter">twi</div>
                        <div class="fav">fa</div>
                    </div>
                    <a href="{{ route('edit', ['id' => $article->id]) }}">
                        編集
                    </a>
                    <a href="{{ route('delete', ['id' => $article->id]) }}">
                        削除
                    </a>
                </div>

            @endforeach
        </div>
        @component('components.comment')

        @endcomponent
    </div> --}}
@endsection
