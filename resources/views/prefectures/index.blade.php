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
                @foreach ($post as $po)
                    @foreach ($photo as $pho)
                    <div class="a">
                        @if($po->id==$pho->id)
                            <a href="/prefectures/{{$po->id}}/{{$pho->id}}">{{ $po->title }}</a>
                            <br>
                            <img src="{{ $pho->image_url }}" alt="画像が読み込めません。"/>
                        @endif
                    </div>
                    @endforeach
                @endforeach
            </div>
            <div class='footer'>
                <a href="/post/create">＜追加＞</a>
                <a href="/">＜TOP＞</a>
            </div>
        </body>
    </html>
</x-app-layout>