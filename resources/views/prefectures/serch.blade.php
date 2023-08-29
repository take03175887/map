<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            県から探す
        </h2>
    </x-slot>
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <title>Map</title>
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
            <link href="{{('/assets/css/style_map.css')}}" rel="stylesheet" type="text/css">
        </head>
        
        <body>
            <div id="japan-map" class="clearfix">
                <div id="hokkaido-touhoku" class="clearfix">
                    <p class="area-title">北海道・東北</p>
                    <div class="area">
                        @for($i = 1 ;$i <= 7; $i++)
                            @if($prefectureObjects[$i]->getCountPosts()==0)
                            <div id={{$prefectureObjects[$i]->getName()}} style="background-color: #a9a9a9;">
                            @else
                            <a href="/prefectures/{{$i}}">
                            <div id={{$prefectureObjects[$i]->getName()}} style="background-color: #7478c2; "opacity: 1.0";  onMouseOver="this.style.opacity=0.6" onMouseOut="this.style.opacity=1.0"">
                            @endif
                                <p>{{$prefectureObjects[$i]->getName()}}</p>
                            </div>
                        </a>
                        @endfor
                    </div>
                </div>
                
                <div id="kantou" class="clearfix">
                    <p class="area-title">関東</p>
                    <div class="area">
                        @for($i = 8 ;$i <= 14; $i++)
                            @if($prefectureObjects[$i]->getCountPosts()==0)
                            <div id={{$prefectureObjects[$i]->getName()}} style="background-color: #a9a9a9;">
                                @else
                            <a href="/prefectures/{{$i}}">
                            <div id={{$prefectureObjects[$i]->getName()}} style="background-color: #31beca; "opacity: 1.0";  onMouseOver="this.style.opacity=0.6" onMouseOut="this.style.opacity=1.0"">
                                @endif
                                <p>{{$prefectureObjects[$i]->getName()}}</p>
                            </div>
                        </a>
                        @endfor
                    </div>
                </div>
                
                <div id="tyubu" class="clearfix">
                    <p class="area-title">中部</p>
                    <div class="area">
                        @for($i = 15 ;$i <= 23; $i++)
                            @if($prefectureObjects[$i]->getCountPosts()==0)
                            <div id={{$prefectureObjects[$i]->getName()}} style="background-color: #a9a9a9;">
                                @else
                            <a href="/prefectures/{{$i}}">
                            <div id={{$prefectureObjects[$i]->getName()}} style="background-color: #4ab969; "opacity: 1.0";  onMouseOver="this.style.opacity=0.6" onMouseOut="this.style.opacity=1.0"">
                                @endif
                                <p>{{$prefectureObjects[$i]->getName()}}</p>
                            </div>
                        </a>
                        @endfor
                    </div>
                </div>
                
                <div id="kinki" class="clearfix">
                    <p class="area-title">近畿</p>
                    <div class="area">
                        @for($i = 24 ;$i <= 30; $i++)
                            @if($prefectureObjects[$i]->getCountPosts()==0)
                            <div id={{$prefectureObjects[$i]->getName()}} style="background-color: #a9a9a9;">
                                @else
                            <a href="/prefectures/{{$i}}">
                            <div id={{$prefectureObjects[$i]->getName()}} style="background-color: #b0b72f; "opacity: 1.0";  onMouseOver="this.style.opacity=0.6" onMouseOut="this.style.opacity=1.0"">
                                @endif
                                <p>{{$prefectureObjects[$i]->getName()}}</p>
                            </div>
                        </a>
                        @endfor
                    </div>
                </div>
                
                <div id="tyugoku" class="clearfix">
                    <p class="area-title">中国</p>
                    <div class="area">
                        @for($i = 31 ;$i <= 35; $i++)
                            @if($prefectureObjects[$i]->getCountPosts()==0)
                            <div id={{$prefectureObjects[$i]->getName()}} style="background-color: #a9a9a9;">
                                @else
                            <a href="/prefectures/{{$i}}">
                            <div id={{$prefectureObjects[$i]->getName()}} style="background-color: #ef9f27; "opacity: 1.0";  onMouseOver="this.style.opacity=0.6" onMouseOut="this.style.opacity=1.0"">
                                @endif
                                <p>{{$prefectureObjects[$i]->getName()}}</p>
                            </div>
                        </a>
                        @endfor
                    </div>
                </div>
                
                <div id="shikoku" class="clearfix">
                    <p class="area-title">四国</p>
                    <div class="area">
                        @for($i = 36 ;$i <= 39; $i++)
                            @if($prefectureObjects[$i]->getCountPosts()==0)
                            <div id={{$prefectureObjects[$i]->getName()}} style="background-color: #a9a9a9;">
                                @else
                            <a href="/prefectures/{{$i}}">
                            <div id={{$prefectureObjects[$i]->getName()}} style="background-color: #d08f68; "opacity: 1.0";  onMouseOver="this.style.opacity=0.6" onMouseOut="this.style.opacity=1.0"">
                                @endif
                                <p>{{$prefectureObjects[$i]->getName()}}</p>
                            </div>
                        </a>
                        @endfor
                    </div>
                </div>
                
                <div id="kyusyu" class="clearfix">
                    <p class="area-title">九州・沖縄</p>
                    <div class="area">
                        @for($i = 40 ;$i <= 47; $i++)
                            @if($prefectureObjects[$i]->getCountPosts()==0)
                            <div id={{$prefectureObjects[$i]->getName()}} style="background-color: #a9a9a9;">
                                @else
                            <a href="/prefectures/{{$i}}">
                            <div id={{$prefectureObjects[$i]->getName()}} style="background-color: #ff7575; "opacity: 1.0";  onMouseOver="this.style.opacity=0.6" onMouseOut="this.style.opacity=1.0"">
                                @endif
                                <p>{{$prefectureObjects[$i]->getName()}}</p>
                            </div>
                        </a>
                        @endfor
                    </div>
                </div>
            </div>
            
        </body>
    </html>
</x-app-layout>