<x-app-layout>
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
            <h1>ホーム画面　　<p class="text">上のCreateから日記を作成できます。</p></h1>
            <div id="japan-map" class="clearfix">
                <div id="hokkaido-touhoku" class="clearfix">
                    <p class="area-title">北海道・東北</p>
                    <div class="area">
                        @for($i = 1 ;$i <= 7; $i++)
                        <a href="/prefectures/prefecture_id?prefecture_id={{$i}}">
                            @if($count[0][$i]==0)
                            <div id={{$count[1][$i]}} style="background-color: #a9a9a9;">
                                @else
                            
                            <div id={{$count[1][$i]}} style="background-color: #7478c2;">
                                @endif
                                <p>{{$count[1][$i]}}</p>
                            </div>
                        </a>
                        @endfor
                    </div>
                </div>
                
                <div id="kantou" class="clearfix">
                    <p class="area-title">関東</p>
                    <div class="area">
                        @for($i = 8 ;$i <= 14; $i++)
                        <a href="/prefectures/prefecture_id?prefecture_id={{$i}}">
                            @if($count[0][$i]==0)
                            <div id={{$count[1][$i]}} style="background-color: #a9a9a9;">
                                @else
                            
                            <div id={{$count[1][$i]}} style="background-color: #31beca;">
                                @endif
                                <p>{{$count[1][$i]}}</p>
                            </div>
                        </a>
                        @endfor
                    </div>
                </div>
                
                <div id="tyubu" class="clearfix">
                    <p class="area-title">中部</p>
                    <div class="area">
                        @for($i = 15 ;$i <= 23; $i++)
                        <a href="/prefectures/prefecture_id?prefecture_id={{$i}}">
                            @if($count[0][$i]==0)
                            <div id={{$count[1][$i]}} style="background-color: #a9a9a9;">
                                @else
                            
                            <div id={{$count[1][$i]}} style="background-color: #4ab969;">
                                @endif
                                <p>{{$count[1][$i]}}</p>
                            </div>
                        </a>
                        @endfor
                    </div>
                </div>
                
                <div id="kinki" class="clearfix">
                    <p class="area-title">近畿</p>
                    <div class="area">
                        @for($i = 24 ;$i <= 30; $i++)
                        <a href="/prefectures/prefecture_id?prefecture_id={{$i}}">
                            @if($count[0][$i]==0)
                            <div id={{$count[1][$i]}} style="background-color: #a9a9a9;">
                                @else
                            
                            <div id={{$count[1][$i]}} style="background-color: #b0b72f;">
                                @endif
                                <p>{{$count[1][$i]}}</p>
                            </div>
                        </a>
                        @endfor
                    </div>
                </div>
                
                <div id="tyugoku" class="clearfix">
                    <p class="area-title">中国</p>
                    <div class="area">
                        @for($i = 31 ;$i <= 35; $i++)
                        <a href="/prefectures/prefecture_id?prefecture_id={{$i}}">
                            @if($count[0][$i]==0)
                            <div id={{$count[1][$i]}} style="background-color: #a9a9a9;">
                                @else
                            
                            <div id={{$count[1][$i]}} style="background-color: #ef9f27;">
                                @endif
                                <p>{{$count[1][$i]}}</p>
                            </div>
                        </a>
                        @endfor
                    </div>
                </div>
                
                <div id="shikoku" class="clearfix">
                    <p class="area-title">四国</p>
                    <div class="area">
                        @for($i = 36 ;$i <= 39; $i++)
                        <a href="/prefectures/prefecture_id?prefecture_id={{$i}}">
                            @if($count[0][$i]==0)
                            <div id={{$count[1][$i]}} style="background-color: #a9a9a9;">
                                @else
                            
                            <div id={{$count[1][$i]}} style="background-color: #d08f68;">
                                @endif
                                <p>{{$count[1][$i]}}</p>
                            </div>
                        </a>
                        @endfor
                    </div>
                </div>
                
                <div id="kyusyu" class="clearfix">
                    <p class="area-title">九州・沖縄</p>
                    <div class="area">
                        @for($i = 40 ;$i <= 47; $i++)
                        <a href="/prefectures/prefecture_id?prefecture_id={{$i}}">
                            @if($count[0][$i]==0)
                            <div id={{$count[1][$i]}} style="background-color: #a9a9a9;">
                                @else
                            
                            <div id={{$count[1][$i]}} style="background-color: #ff7575;">
                                @endif
                                <p>{{$count[1][$i]}}</p>
                            </div>
                        </a>
                        @endfor
                    </div>
                </div>
            </div>
            
        </body>
    </html>
</x-app-layout>