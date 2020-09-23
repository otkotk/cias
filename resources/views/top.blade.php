@extends('common_view.common')

@section('import')
    {{-- css等の読み込み場所 --}}
    <link rel="stylesheet" href="/css/side_bar.css" type="text/css">
    <link rel="stylesheet" href="/css/top.css" type="text/css">
@endsection

@section('content')
    {{-- この下からbodyの中身を書き始める --}}
    <div class="main">
        <div class="content">
            <form action="/" method="post">
                <div class="search">
                    <i class="fas fa-search"></i>
                    <input type="text" name="search">
                    <input type="submit" value="検索">
            </div>
        @endif

                </div>
            </form>
            @foreach ($articles as $article)

                <div class="article">
                    <a href="article_detail">
                        <div class="article_image">
                            {{-- route('名前', ['クエリパラメータ' => 渡したい値])  --}}
                            {{-- ↓/fake?id=1 になる --}}
                            <a href="{{ route('fake', ['id' => \App\User::find($article->id)->id]) }}">
                                <p>{{ \App\User::find($article->id)->user_name }}</p>
                            </a>
                        </div>
                    </a>
                    <a href="{{ route('article_detail', ['id' => $article->id]) }}">
                        <p class="article_title">{{ $article->title }}</p>
                    </a>

                    <p class="article_description">{{ $article->description }}</p>
                    <p class="date">{{ $article->created_at }}</p>
                    <div class="comment">
                    </div>
                    <div class="twitter"></div>
                    <div class="fav"></div>
                </div>

            @endforeach
        </div>
        @component('components.side-bar')
            {{-- ここはサイドバーです --}}
        @endcomponent
    </div>
@endsection
