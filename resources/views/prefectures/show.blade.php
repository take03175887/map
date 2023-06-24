<x-app-layout>
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <title>show</title>
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
            <link href="{{('/assets/css/style_form.css')}}" rel="stylesheet" type="text/css">
            <style>
                p{
                    font-size:25px;
                    margin:auto;
                }
                button{
                    top:500px;
                }
                img{
                    width: 1152px;
                    height: 780px;
                    margin:auto;
                }
            </style>
            <script>
                let x=1;
            </script>
        </head>
        <body>
            <h1>日記詳細</h1>
            <div class='element'>
                <p class="bn1">{{ $post->title}}</p>
                
                @if($count[$post->id]>$p)
                <form action="/up/{{$post->id}}" method="POST" class="bn15">
                    @csrf
                    <input type="hidden" name="p" value={{$p}}>
                    <button type="submit">＞</button>
                </form>
                @endif
                @if($p-1>0)
                <form action="/down/{{$post->id}}" method="POST" class="bn15">
                    @csrf
                    <input type="hidden" name="p" value={{$p}}>
                    <button type="submit">＜</button>
                </form>
                @endif
                <div class='a'>
                    <img src="{{ $photo_page[$post->id][$p]->image_url }}" alt="画像が読み込めません。"/>
                    <p class="box_css">{{ $post->body}}</p>
                </div>
            </div>
            <div class='footer'>
                <a href="/prefectures/prefecture_id?prefecture_id={{$post->prefecture_id}}" class="bn15">戻る</a>
                <a href="/" class="bn15">TOP</a>
            </div>
        </body>
    </html>
</x-app-layout>