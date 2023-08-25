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
                .card {
                  width: auto;
                  height: auto;
                  position: relative;
                  background: #ffffff;
                  margin: 20px;
                  display: block;
                }
                .card__inner {
                 padding: 15px;
                }
                img {
                    width: 540px;
                    height: 300px;
                }
                .card__imgframe{
                  padding: 20px 18px;
                  position: relative;
                }
                .card__textbox{
                  width: 100%;
                  height: auto;
                  padding: 20px 18px;
                  box-sizing: border-box;
                }
                .card__textbox > * + *{
                  margin-top: 10px;
                }
                .card__titletext{
                  font-size: 20px;
                  font-weight: bold;
                  line-height: 125%;
                }
                .card__overviewtext{
                  font-size: 17px;
                  line-height: 150%;
                }
            </style>
        </head>
        <body>
            <h1>「{{$tag->tag_title}}」の検索結果　　<p class="bn1">詳細画面へ</p></h1>
            <div class='content'>
                @foreach ($posts as $post)
                    @for ($i = 1; $i <= $post->id; $i++)
                    <div class="a">
                        @if($post->id == $i)
                        <div class="card">
                            <div class="card__imgframe">
                                <a href="/prefectures/{{ $post->id }}/{{$i}}">
                                    <img src="{{ $photo_page[$post->id][1]->image_url }}" alt="画像が読み込めません。"/>
                                </a>
                            </div>
                            <div class="card__textbox">
                                <div class="card__titletext">{{ $post->title }}</div>
                                <div class="card__overviewtext">
                                    @foreach($post->tags as $tag)
                                    {{$tag->tag_title}}
                                    @endforeach
                                    <br>作成日：{{ $post->created_at }}<br>
                                    編集日：{{ $post->updated_at }}<br>
                                    <form action="/post/{{ $post->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" color="red">削除</button>
                                </form>
                                </div>
                            </div>
                        </div>
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