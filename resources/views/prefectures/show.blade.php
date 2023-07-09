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
                    width: 60%;
                    height: 60%;
                    margin:auto;
                }
            </style>
        </head>
        <body>
            <h1>日記詳細</h1>
            <div class='element'>
                <p class="bn1">{{ $post->title}}</p>
                <!--写真ページボタン-->
                @if($count [$post->id] > $page)
                <form action="/up/{{$post->id}}" method="POST" class="bn15">
                    @csrf
                    <input type="hidden" name="page" value={{$page}}>
                    <button type="submit">＞</button>
                </form>
                @endif
                @if($page - 1 > 0)
                <form action="/down/{{ $post->id }}" method="POST" class="bn15">
                    @csrf
                    <input type="hidden" name="page" value={{ $page }}>
                    <button type="submit">＜</button>
                </form>
                @endif
                <!--写真追加機能-->
                <form action="/prefectures/store/{{ $post->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="image[]" multiple="multiple" onchange="loadImage(this);">
                    <p id="preview"></p>
                    <!--プレビュー機能-->
                    <script>
                    function loadImage(obj){
        	        document.getElementById('preview').innerHTML='<p>プレビュー</p>';
        	        for(let i=0; i<obj.files.length; i++){
        	            var fileReader = new FileReader();
        	            fileReader.onload = (function (e) {
        	            document.getElementById('preview').innerHTML += '<img src="' + e.target.result + '">';
        	            });
        	            fileReader.readAsDataURL(obj.files[i]);}
                    }
                    </script>
                    <button type="submit">写真を追加</button>
                </form>
                
                <!--写真の削除機能-->
                <form action="/prefectures/{{ $photo_page[$post->id][$page]->id }}" id="form_{{ $photo_page[$post->id][$page]->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="deletePost({{$photo_page[$post->id][$page]->id}})">写真を削除</button>
                </form>
                <script>
                    function deletePost(id){
                        'use strict'
                        
                        if(confirm('削除すると復元できません。\n本当に削除しますか？')) {
                            document.getElementById(`form_${id}`).submit();
                        }
                    }
                </script>
                
                <!--編集画面へ-->
                <a href="/post/edit/{{ $post->id }}">入力の編集</a>
                
                <div class='a'>
                    <img src="{{ $photo_page[$post->id][$page]->image_url }}" alt="画像が読み込めません。"/>
                    <p class="box_css">{{ $post->body }}</p>
                </div>
            </div>
            <div class='footer'>
                <a href="/prefectures/prefecture_id?prefecture_id={{$post->prefecture_id}}" class="bn15">戻る</a>
                <a href="/" class="bn15">TOP</a>
            </div>
            
        </body>
    </html>
</x-app-layout>