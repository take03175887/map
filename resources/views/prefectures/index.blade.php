<x-app-layout>
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <title>prefecture</title>
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
            <style>
                p{
                    margin-left:20px;
                    font-size: 30px;
                }
                .content{
                    display: flex;
	                flex-wrap: wrap;
	                position: relative;
	                font-size: 30px;
                }
                a{
                    margin-left:20px;
                }
                img{
                    width: 575px;
                    height: 420px;
                    position: relative;
	                margin: 20px;
                }
            </style>
        </head>
        <body class="antialiased">
            <p>日記一覧</p>
            <div class='content'>
                @foreach ($posts as $post)
                    @foreach ($photos as $photo)
                    <div class="a">
                        @if($post->id==$photo->id)
                            <a href="/prefectures/{{$post->id}}/{{$photo->id}}">{{ $post->title }}</a>
                            <br>
                            <img src="{{ $photo->image_url }}" alt="画像が読み込めません。"/>
                        @endif
                    </div>
                    @endforeach
                @endforeach
            </div>
            <div class='footer'>
                <a href="/">＜TOP＞</a>
            </div>
        </body>
    </html>
</x-app-layout>