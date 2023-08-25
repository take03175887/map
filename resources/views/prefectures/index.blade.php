<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            「{{$prefecture->name}}」の検索結果
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
            
        </head>
        
        <body class="bg-gray-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
                    @foreach ($cards as $card)
                        <div class="mt-4 bg-white rounded-md overflow-hidden shadow-md">
                            <a href="/prefectures/show/{{ $card->getId() }}">
                                <div class="p-4">
                                    <img class="w-full h-48 object-cover" src="{{ $card->getPhotosImage(0) }}" alt="画像が読み込めません。"/>
                                </div>
                            </a>
                            <div class="p-4">
                                <div class="text-xl font-semibold">{{ $card->getTitle() }}</div>
                                <div class="text-gray-600">
                                    @foreach($card->getTags() as $tag)
                                        <a href="/tag/show/{{$tag->id}}" class="mr-1 inline-block bg-blue-500 text-black px-2 py-1 rounded-lg hover:bg-blue-600 bg-blue-500">{{ $tag->tag_title }}</a>
                                        
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
                </div>
            </div>
            <div class='footer'>
                <a href="/" class="bn15">TOP</a>
            </div>
        </body>
    </html>
</x-app-layout>