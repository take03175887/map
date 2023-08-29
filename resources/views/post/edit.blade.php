<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            投稿の編集
        </h2>
        <x-message :message="session('message')" />
        <x-input-error class="mb-4" :messages="$errors->all()"/>
    </x-slot>
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <title>Diary</title>
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
            <link href="{{('/assets/css/style_form.css')}}" rel="stylesheet" type="text/css">
            <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        </head>
        <body>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="mx-4 sm:p-8">
                    <div class="md:flex items-center mt-8">
                        <div class="w-full flex flex-col">
                            <div class="element">
                                <form action="/post/update/{{ $card->getId() }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="w-full flex flex-col">
                                        <label for="body" class="font-semibold leading-none mt-4">件名</label>
                                        <input type="text" class="mb-4" name="post[title]" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="title" placeholder="Enter Title" value="{{ $card->getTitle() }}">
                                    </div>
                                    
                                    <div class="photo">
                                        <label class = "font-semibold leading-none mt-4">写真（写真は複数選択することができます）</label></br>
                                        <input type="file" class="mb-4" name="image[]" multiple="multiple" onchange="loadImage(this);">
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
                                            <!--<button type="submit">追加</button>-->
                                        @foreach($card->getPhotos() as $photo)
                                            <img src="{{ $photo->image_url }}" class="mx-auto mb-4" style="height:600px;"/>
                                        @endforeach
                                    </div>
                                    
                                    <div class="w-full flex flex-col">
                                        <label for="body" class="font-semibold leading-none mt-4">本文</label>
                                        <textarea name="post[body]" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{$card->getBody()}}</textarea>
                                    </div>
                                    <br>
                                    <button type="submit" class="bn15">編集</button>
                                    <a href="/post/show/{{ $card->getId() }}" class="bn15">詳細画面へ</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </body>
    </html>
</x-app-layout>