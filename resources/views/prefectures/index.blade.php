<x-app-layout>
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <title>prefecture</title>
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
            <link href="{{('/assets/css/style_form.css')}}" rel="stylesheet" type="text/css">
            <style>
                img{
                    width: 575px;
                    height: 420px;
                    position: relative;
	                margin: 20px;
                }
            </style>
        </head>
        <body>
            <h1>日記一覧　　<p class="bn1">詳細画面へ</p></h1>
            <div class='content'>
                @foreach ($posts as $post)
                    @for ($i = 1; $i <= $post->id; $i++)
                    <div class="a">
                        @if($post->id == $i)
                            <a href="/prefectures/{{$post->id}}/{{$i}}" class="bn1">{{ $post->title }}</a>
                            <br>
                            <img src="{{ $photo_page[$i][1]->image_url }}" alt="画像が読み込めません。"/>
                        @endif
                    </div>
                    @endfor
                @endforeach
            </div>
            <div class='footer'>
                <a href="/" class="bn15">TOP</a>
            </div>
        </body>
    </html>
</x-app-layout>