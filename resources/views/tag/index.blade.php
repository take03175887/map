<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            タグ
        </h2>
    </x-slot>
    <!DOCTYPE html>
        <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
            <head>
                <meta charset="utf-8">
                <title>Diary</title>
                <!-- Fonts -->
                <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
                <link href="{{('/assets/css/style_form.css')}}" rel="stylesheet" type="text/css">
            </head>
            <body>
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="mx-4 sm:p-8">
                        <div class="md:flex items-center mt-8">
                            <div class="w-full flex flex-col">
                                <div class="element">
                                    <form action="/tag" method="POST">
                                        @csrf
                                        <div class="title">
                                            <label for="body" class="font-semibold leading-none mt-4">タグの表示名</label>
                                            <br>
                                            <input type="text" name="tag_title">
                                            <p class="title__error" style="color:red">{{ $errors->first('tag.title') }}</p>
                                        </div>
                                        <button type="submit" class="bn15">保存</button>
                                        <a href="/" class="bn15">TOP</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </body>
        </html>
    </x-app-layout>