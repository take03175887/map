<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            「{{$tag->tag_title}}」の検索結果
        </h2>

        <x-message :message="session('message')" />

    </x-slot>
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <title>prefecture</title>
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
            <link href="{{('/assets/css/style_form.css')}}" rel="stylesheet" type="text/css">
            <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        </head>
        
        <body class="bg-gray-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-4">
                    @foreach ($cards as $card)
                        <div class="mt-4 bg-white rounded-md overflow-hidden shadow-md">
                            <a href="/post/show/{{ $card->getId() }}">
                                <div class="p-4">
                                    <img class="w-full h-48 object-cover" src="{{ $card->getPhotosImage(0) }}" alt="画像が読み込めません。"/>
                                </div>
                            </a>
                            <div class="p-4">
                                <div class="text-xl font-semibold">{{ $card->getTitle() }}</div>
                                <div class="text-gray-600">
                                    @foreach($card->getTags() as $tag)
                                        <a href="/tag/{{$tag->id}}" class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $tag->tag_title }}</a>
                                        
                                    @endforeach
                                </div>
                                <div class="text-gray-600">
                                    作成日：{{ $card->getCreated_at() }}<br>
                                    編集日：{{ $card->getUpdated_at() }}
                                </div>
                                <form action="/card/{{ $card->getId() }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">削除</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                    <div class='footer'>
                        <a href="{{route('index')}}" class="bn15">TOP</a>
                    </div>
                </div>
            </div>
        </body>
    </html>
</x-app-layout>