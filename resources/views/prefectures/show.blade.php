<x-app-layout>
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <title>show</title>
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
            <style>
                 .antialiased{
                    margin-left: 20px;
                 }
                p{
                    font-size: 30px;
                }
                img{
                    width: 1152px;
                    height: 780px;
                }
            </style>
        </head>
        <body class="antialiased">
            <div class='content'>
                <p>日記詳細</p>
                <div class='content_post'>
                    <p>{{ $po->title}}</p>
                    <img src="{{ $pho->image_url }}" alt="画像が読み込めません。"/>
                    <p>{{ $po->body}}</p>
                </div>
            </div>
            <div class='footer'>
                <a href="/prefectures/prefecture_id?prefecture_id={{$po->prefecture_id}}">＜戻る＞</a>
                <br>
                <a href="/">＜TOP＞</a>
            </div>
        </body>
    </html>
</x-app-layout>