<x-app-layout>
    <!DOCTYPE html>
        <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
            <head>
                <meta charset="utf-8">
                <title>Diary</title>
                <!-- Fonts -->
                <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
                <link href="{{('/assets/css/style_form.css')}}" rel="stylesheet" type="text/css">
            </head>
            <body>
                <h1>日記編集画面</h1>
                <div class="element">
                    <form action="/post/update/{{ $post->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="title">
                            <span class = "required">タイトル</span>
                            <br>
                            <input type="text" name="post[title]" value={{ $post->title }}>  
                            <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
                        </div>
                        
                        <div class="body">
                            <span class = "required">メモ</span>
                            <br>
                            <textarea name="post[body]">{{ $post->body }}</textarea>
                            <p class='body__error' style="color:red">{{ $errors->first('post.body') }}</p>
                        </div>
                        <br>
                        <button type="submit" class="bn15">編集</button>
                        <a href="/" class="bn15">TOP</a>
                    </form>
                </div>
            </body>
        </html>
    </x-app-layout>