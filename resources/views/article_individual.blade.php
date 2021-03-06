@extends('common_view.common')

@section('import')
    {{-- css等の読み込み場所 --}}

    <link rel="stylesheet" href="/css/article_individual.css" type="text/css">
@endsection

@section('title', 'コメントをした記事等')

@section('content')
    {{-- この下からbodyの中身を書き始める --}}

    <div class="main">
        <div id="me">
            <img src="/storage/{{ Auth::user()->image }}" alt="">
            <h2>{{ Auth::user()->user_name }}<br><span>のマイページ</span></h2>
        </div>
        <div class="choice">
            <div id="fav_button">
                お気に入りした記事
            </div>
            <div id="comment_button">
                コメントした記事
            </div>
        </div>
        <div class="article">
            <div id="fav_article">
                <x-fav-article />
            </div>
            <div id="comment_article">
                <x-comment-article />
            </div>
        </div>
    </div>
    <div id="pop_background"></div>
    <div id="main_modal"></div>
    <script src="/js/article_individual_ajax.js"></script>

@endsection
