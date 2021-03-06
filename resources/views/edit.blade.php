@extends('common_view.common')

@section('import')
    {{-- css等の読み込み場所 --}}

    <link rel="stylesheet" href="/css/post_page.css" type="text/css">
@endsection

@section('title', '記事編集ページ')

@section('content')
    {{-- この下からbodyの中身を書き始める --}}
    <div class="main">
        <div class="content">
            <form action="{{ route('update', ['id' => $post->id]) }}" method="POST" enctype='multipart/form-data'  onsubmit="return article_edit()">
                @csrf
                <input type="text" name="title" value="{{ $article->title }}">

                <input type="text" name="hash1" value="{{ $article->hash1_id }}">
                <input type="text" name="hash2" value="{{ $article->hash2_id }}">
                <input type="text" name="hash3" value="{{ $article->hash3_id }}">

                <input type="file" class="file" name="image1">
                <img src="/storage/{{ $post->image1 }}" alt="">
                <textarea name="text1" id="" cols="30" rows="10" class="text">{{ $post->text1 }}</textarea>

                <input type="file" class="file" name="image2">
                <img src="/storage/{{ $post->image2 }}" alt="">
                <textarea name="text2" id="" cols="30" rows="10" class="text">{{ $post->text2 }}</textarea>

                <input type="file" class="file" name="image3">
                <img src="/storage/{{ $post->image3 }}" alt="">
                <textarea name="text3" id="" cols="30" rows="10" class="text">{{ $post->text3 }}</textarea>

                <input type="file" class="file" name="image4">
                <img src="/storage/{{ $post->image4 }}" alt="">
                <textarea name="text4" id="" cols="30" rows="10" class="text">{{ $post->text4 }}</textarea>

                <input type="file" class="file" name="image5">
                <img src="/storage/{{ $post->image5 }}" alt="">
                <textarea name="text5" id="" cols="30" rows="10" class="text">{{ $post->text5 }}</textarea>

                <input type="file" class="file" name="image6">
                <img src="/storage/{{ $post->image6 }}" alt="">
                <textarea name="text6" id="" cols="30" rows="10" class="text">{{ $post->text6 }}</textarea>

                <input type="submit" value="編集する" id="post">
            </form>
        </div>
    </div>

@endsection
