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
                <p class="bn1">{{ $card->getTitle() }}</p>
                <!--写真ページボタン-->
                @if($page + 1 < $card->getPageMax())
                <form action="/up/{{$card->getId()}}" method="POST" class="bn15">
                    @csrf
                    <input type="hidden" name="page" value={{$page}}>
                    <button type="submit">＞</button>
                </form>
                @endif
                @if($page  > 0)
                <form action="/down/{{ $card->getId() }}" method="POST" class="bn15">
                    @csrf
                    <input type="hidden" name="page" value={{$page}}>
                    <button type="submit">＜</button>
                </form>
                @endif
                <!--写真追加機能-->
                <form action="/prefectures/store/{{ $card->getId() }}" method="POST" enctype="multipart/form-data">
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
                <form action="/prefectures/{{ $card->getPhotoId($page) }}" id = "form_{{ $card->getPhotoId($page) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="deletePost({{ $card->getPhotoId($page) }})">写真を削除</button>
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
                <a href="/post/edit/{{ $card->getId() }}">入力の編集</a>
                
                <div class='a'>
                    <img src="{{ $card->getPhotosImage($page) }}" alt="画像が読み込めません。"/>
                    <p class="box_css">{{ $card->getBody() }}</p>
                </div>
            </div>
            <div class='footer'>
                <a href="/prefectures/{{ $card->getPrefecture_id() }}" class="bn15">戻る</a>
                <a href="/" class="bn15">TOP</a>
            </div>
            
        </body>
    </html>
</x-app-layout>