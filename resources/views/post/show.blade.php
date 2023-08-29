<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            「{{ $card->getTitle() }}」の詳細画面
        </h2>
        <x-message :message="session('message')" />
    </x-slot>
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <title>show</title>
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
            <link href="{{('/assets/css/style_form.css')}}" rel="stylesheet" type="text/css">
            <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        </head>
        <body>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="mx-4 sm:p-8">
                    <div class="px-10 mt-4">
        
                        <div class="bg-white w-full  rounded-2xl px-10 py-8 shadow-lg hover:shadow-2xl transition duration-500">
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
                            </script>
                            
                            <!--編集画面へ-->
                            <a href="/post/edit/{{ $card->getId() }}" class="justify-end bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">編集</a>
                            <hr class="w-full">
                            
                            <p>撮影場所：{{$card->getPrefecture()->name}}</p>
                            
                            <div class="flex flex-col mt-4">
                                <img src="{{ $card->getPhotosImage($page) }}" class="mx-auto" style="height:600px;"/>
                                @if($card->getPageMax() != 1)
                                    <form action="/post/photo/{{ $card->getPhotoId($page) }}" id="form_{{ $card->getPhotoId($page) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" onclick="deletePost({{$card->getPhotoId($page)}})" class="mb-4 bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">削除</button>
                                    </form>
                                    <script>
                                        function deletePost(id){
                                            'use strict'
                                            if(confirm('削除すると復元できません。\n本当に削除しますか？')) {
                                                document.getElementById(`form_${id}`).submit();
                                            }
                                        }
                                    </script>
                                @endif
                                <p class="mt-4 text-gray-600 py-4 text-3xl">{{ $card->getBody() }}</p>
                            </div>
                        </div>
                        <div class='footer'>
                            <a href="javascript:history.back()" class="bn15">戻る</a>
                            <a href="{{route('index')}}" class="bn15">TOP</a>
                        </div>
                    </div>
                </div>
            </div>
        </body>
    </html>
</x-app-layout>