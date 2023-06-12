<x-app-layout>
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <title>Map</title>
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
            <link href="{{('/assets/css/style_map.css')}}" rel="stylesheet" type="text/css">
            <style>
                a{
                    font-size:50px;
                }
            </style>
        </head>
        
        <body>
            <a href="/post/create">＜追加＞</a>
            <div id="japan-map" class="clearfix">
                
                <div id="hokkaido-touhoku" class="clearfix">
                    {{$count[1][1]}}
                    <p class="area-title">北海道・東北</p>
                    <div class="area">
                        
                        <a href="/prefectures/prefecture_id?prefecture_id=1">
                            @if($count[1][1]==0)
                            <div id="$count[2][1]" style="background-color: #a9a9a9;">
                                @else
                            
                            <div id="hokkaido" style="background-color: #7478c2;">
                                @endif
                                <p>北海道</p>
                            </div>
                        </a>
                        
                        <a href="/prefectures/prefecture_id?prefecture_id=2">
                             @if($count2==0)
                            <div id="aomori" style="background-color: #a9a9a9;">
                                @else
                            
                            <div id="aomori" style="background-color: #7478c2;">
                                @endif
                                <p>青森</p>
                            </div>
                        </a>
                        
                        <a href="/prefectures/prefecture_id?prefecture_id=3">
                             @if($count3==0)
                            <div id="akita" style="background-color: #a9a9a9;">
                                @else
                            
                            <div id="akita" style="background-color: #7478c2;">
                                @endif
                                <p>秋田</p>
                            </div>
                        </a>
                        
                        <a href="/prefectures/prefecture_id?prefecture_id=4">
                             @if($count4==0)
                            <div id="iwate" style="background-color: #a9a9a9;">
                                @else
                            
                            <div id="iwate" style="background-color: #7478c2;">
                                @endif
                                <p>岩手</p>
                            </div>
                        </a>
                        
                        <a href="/prefectures/prefecture_id?prefecture_id=5">
                             @if($count5==0)
                            <div id="yamagata" style="background-color: #a9a9a9;">
                                @else
                            
                            <div id="yamagata" style="background-color: #7478c2;">
                                @endif
                                <p>山形</p>
                            </div>
                        </a>
                        
                        <a href="/prefectures/prefecture_id?prefecture_id=6">
                             @if($count6==0)
                            <div id="miyagi" style="background-color: #a9a9a9;">
                                @else
                            
                            <div id="miyagi" style="background-color: #7478c2;">
                                @endif
                                <p>宮城</p>
                            </div>
                        </a>
                        
                        <a href="/prefectures/prefecture_id?prefecture_id=7">
                             @if($count7==0)
                            <div id="fukushima" style="background-color: #a9a9a9;">
                                @else
                            
                            <div id="fukushima" style="background-color: #7478c2;">
                                @endif
                                <p>福島</p>
                            </div>
                        </a>
                    </div>
                </div>
                
                <div id="kantou">
                    <p class="area-title">関東</p>
                    <div class="area">
                        <a href="/prefectures/prefecture_id?prefecture_id=8">
                             @if($count8==0)
                            <div id="gunma" style="background-color: #a9a9a9;">
                                @else
                            
                            <div id="gunma" style="background-color: #31beca;">
                                @endif
                                <p>群馬</p>
                            </div>
                        </a>
                        
                        <a href="/prefectures/prefecture_id?prefecture_id=9">
                             @if($count9==0)
                            <div id="tochigi" style="background-color: #a9a9a9;">
                                @else
                            
                            <div id="tochigi" style="background-color: #31beca;">
                                @endif
                                <p>栃木</p>
                            </div>
                        </a>
                        
                        <a href="/prefectures/prefecture_id?prefecture_id=10">
                             @if($count10==0)
                            <div id="ibaraki" style="background-color: #a9a9a9;">
                                @else
                            
                            <div id="ibaraki" style="background-color: #31beca;">
                                @endif
                                <p>茨城</p>
                            </div>
                        </a>
                        
                        <a href="/prefectures/prefecture_id?prefecture_id=11">
                             @if($count11==0)
                            <div id="saitama" style="background-color: #a9a9a9;">
                                @else
                            
                            <div id="saitama" style="background-color: #31beca;">
                                @endif
                                <p>埼玉</p>
                            </div>
                        </a>
                        
                        <a href="/prefectures/prefecture_id?prefecture_id=12">
                             @if($count12==0)
                            <div id="chiba" style="background-color: #a9a9a9;">
                                @else
                            
                            <div id="chiba" style="background-color: #31beca;">
                                @endif
                                <p>千葉</p>
                            </div>
                        </a>
                        
                        <a href="/prefectures/prefecture_id?prefecture_id=13">
                             @if($count13==0)
                            <div id="tokyo" style="background-color: #a9a9a9;">
                                @else
                            
                            <div id="tokyo" style="background-color: #31beca;">
                                @endif
                                <p>東京</p>
                            </div>
                        </a>
                        
                        <a href="/prefectures/prefecture_id?prefecture_id=14">
                             @if($count14==0)
                            <div id="kanagawa" style="background-color: #a9a9a9;">
                                @else
                            
                            <div id="kanagawa" style="background-color: #31beca;">
                                @endif
                                <p>神奈川</p>
                            </div>
                        </a>
                    </div>
                </div>
                
                <div id="tyubu" class="clearfix">
                    <p class="area-title">中部</p>
                    <div class="area">
                        <a href="/prefectures/prefecture_id?prefecture_id=15">
                             @if($count15==0)
                            <div id="nigata" style="background-color: #a9a9a9;">
                                @else
                            
                            <div id="nigata" style="background-color: #4ab969;">
                                @endif
                                <p>新潟</p>
                            </div>
                        </a>
                        
                        <a href="/prefectures/prefecture_id?prefecture_id=16">
                             @if($count16==0)
                            <div id="toyama" style="background-color: #a9a9a9;">
                                @else
                            
                            <div id="toyama" style="background-color: #4ab969;">
                                @endif
                                <p>富山</p>
                            </div>
                        </a>
                        
                        <a href="/prefectures/prefecture_id?prefecture_id=17">
                             @if($count17==0)
                            <div id="ishikawa" style="background-color: #a9a9a9;">
                                @else
                            
                            <div id="ishikawa" style="background-color: #4ab969;">
                                @endif
                                <p>石川</p>
                            </div>
                        </a>
                        
                        <a href="/prefectures/prefecture_id?prefecture_id=18">
                             @if($count18==0)
                            <div id="fukui" style="background-color: #a9a9a9;">
                                @else
                            
                            <div id="fukui" style="background-color: #4ab969;">
                                @endif
                                <p>福井</p>
                            </div>
                        </a>
                        
                        <a href="/prefectures/prefecture_id?prefecture_id=19">
                             @if($count19==0)
                            <div id="nagano" style="background-color: #a9a9a9;">
                                @else
                            
                            <div id="nagano" style="background-color: #4ab969;">
                                @endif
                                <p>長野</p>
                            </div>
                        </a>
                        
                        <a href="/prefectures/prefecture_id?prefecture_id=20">
                             @if($count20==0)
                            <div id="gifu" style="background-color: #a9a9a9;">
                                @else
                            
                            <div id="gifu" style="background-color: #4ab969;">
                                @endif
                                <p>岐阜</p>
                            </div>
                        </a>
                        
                        <a href="/prefectures/prefecture_id?prefecture_id=21">
                             @if($count21==0)
                            <div id="yamanashi" style="background-color: #a9a9a9;">
                                @else
                            
                            <div id="yamanashi" style="background-color: #4ab969;">
                                @endif
                                <p>山梨</p>
                            </div>
                        </a>
                        
                        <a href="/prefectures/prefecture_id?prefecture_id=22">
                             @if($count22==0)
                            <div id="aichi" style="background-color: #a9a9a9;">
                                @else
                            
                            <div id="aichi" style="background-color: #4ab969;">
                                @endif
                                <p>愛知</p>
                            </div>
                        </a>
                        
                        <a href="/prefectures/prefecture_id?prefecture_id=23">
                             @if($count23==0)
                            <div id="shizuoka" style="background-color: #a9a9a9;">
                                @else
                            
                            <div id="shizuoka" style="background-color: #4ab969;">
                                @endif
                                <p>静岡</p>
                            </div>
                        </a>
                    </div>
                </div>
                
                <div id="kinki" class="clearfix">
                    <p class="area-title">近畿</p>
                    <div class="area">
                        <a href="/prefectures/prefecture_id?prefecture_id=24">
                             @if($count24==0)
                            <div id="kyoto" style="background-color: #a9a9a9;">
                                @else
                            
                            <div id="kyoto" style="background-color: #b0b72f;">
                                @endif
                                <p>京都</p>
                            </div>
                        </a>
                        
                        <a href="/prefectures/prefecture_id?prefecture_id=25">
                             @if($count25==0)
                            <div id="shiga" style="background-color: #a9a9a9;">
                                @else
                            
                            <div id="shiga" style="background-color: #b0b72f;">
                                @endif
                                <p>滋賀</p>
                            </div>
                        </a>
                        
                        <a href="/prefectures/prefecture_id?prefecture_id=26">
                             @if($count26==0)
                            <div id="osaka" style="background-color: #a9a9a9;">
                                @else
                            
                            <div id="osaka" style="background-color: #b0b72f;">
                                @endif
                                <p>大阪</p>
                            </div>
                        </a>
                        
                        <a href="/prefectures/prefecture_id?prefecture_id=27">
                             @if($count27==0)
                            <div id="nara" style="background-color: #a9a9a9;">
                                @else
                            
                            <div id="nara" style="background-color: #b0b72f;">
                                @endif
                                <p>奈良</p>
                            </div>
                        </a>
                        
                        <a href="/prefectures/prefecture_id?prefecture_id=28">
                             @if($count28==0)
                            <div id="mie" style="background-color: #a9a9a9;">
                                @else
                            
                            <div id="mie" style="background-color: #b0b72f;">
                                @endif
                                <p>三重</p>
                            </div>
                        </a>
                        
                        <a href="/prefectures/prefecture_id?prefecture_id=29">
                             @if($count29==0)
                            <div id="wakayama" style="background-color: #a9a9a9;">
                                @else
                            
                            <div id="wakayama" style="background-color: #b0b72f;">
                                @endif
                                <p>和歌山</p>
                            </div>
                        </a>
                        
                        <a href="/prefectures/prefecture_id?prefecture_id=30">
                             @if($count30==0)
                            <div id="hyougo" style="background-color: #a9a9a9;">
                                @else
                            
                            <div id="hyougo" style="background-color: #b0b72f;">
                                @endif
                                <p>兵庫</p>
                            </div>
                        </a>
                        
                    </div>
                </div>
                
                <div id="tyugoku" class="clearfix">
                    <p class="area-title">中国</p>
                    <div class="area">
                        <a href="/prefectures/prefecture_id?prefecture_id=31">
                             @if($count31==0)
                            <div id="tottori" style="background-color: #a9a9a9;">
                                @else
                            
                            <div id="tottori" style="background-color: #ef9f27;">
                                @endif
                                <p>鳥取</p>
                            </div>
                        </a>
                        
                        <a href="/prefectures/prefecture_id?prefecture_id=32">
                             @if($count32==0)
                            <div id="okayama" style="background-color: #a9a9a9;">
                                @else
                            
                            <div id="okayama" style="background-color: #ef9f27;">
                                @endif
                                <p>岡山</p>
                            </div>
                        </a>
                        
                        <a href="/prefectures/prefecture_id?prefecture_id=33">
                             @if($count33==0)
                            <div id="shimane" style="background-color: #a9a9a9;">
                                @else
                            
                            <div id="shimane" style="background-color: #ef9f27;">
                                @endif
                                <p>島根</p>
                            </div>
                        </a>
                        
                        <a href="/prefectures/prefecture_id?prefecture_id=34">
                             @if($count34==0)
                            <div id="hiroshima" style="background-color: #a9a9a9;">
                                @else
                            
                            <div id="hiroshima" style="background-color: #ef9f27;">
                                @endif
                                <p>広島</p>
                            </div>
                        </a>
                        
                        <a href="/prefectures/prefecture_id?prefecture_id=35">
                             @if($count35==0)
                            <div id="yamaguchi" style="background-color: #a9a9a9;">
                                @else
                            
                            <div id="yamaguchi" style="background-color: #ef9f27;">
                                @endif
                                <p>山口</p>
                            </div>
                        </a>
                    </div>
                </div>
                
                <div id="shikoku" class="clearfix">
                    <p class="area-title">四国</p>
                    <div class="area">
                        <a href="/prefectures/prefecture_id?prefecture_id=36">
                             @if($count36==0)
                            <div id="kagawa" style="background-color: #a9a9a9;">
                                @else
                            
                            <div id="kagawa" style="background-color: #d08f68;">
                                @endif
                                <p>香川</p>
                            </div>
                        </a>
                        
                        <a href="/prefectures/prefecture_id?prefecture_id=37">
                             @if($count37==0)
                            <div id="ehime" style="background-color: #a9a9a9;">
                                @else
                            
                            <div id="ehime" style="background-color: #d08f68;">
                                @endif
                                <p>愛媛</p>
                            </div>
                        </a>
                        <a href="/prefectures/prefecture_id?prefecture_id=38">
                             @if($count38==0)
                            <div id="tokushima" style="background-color: #a9a9a9;">
                                @else
                            
                            <div id="tokushima" style="background-color: #d08f68;">
                                @endif
                                <p>徳島</p>
                            </div>
                        </a>
                        <a href="/prefectures/prefecture_id?prefecture_id=39">
                             @if($count39==0)
                            <div id="kouchi" style="background-color: #a9a9a9;">
                                @else
                            
                            <div id="kouchi" style="background-color: #d08f68;">
                                @endif
                                <p>高知</p>
                            </div>
                        </a>
                    </div>
                </div>
                
                <div id="kyusyu" class="clearfix">
                    <p class="area-title">九州・沖縄</p>
                    <div class="area">
                        <a href="/prefectures/prefecture_id?prefecture_id=40">
                             @if($count40==0)
                            <div id="fukuoka" style="background-color: #a9a9a9;">
                                @else
                            
                            <div id="fukuoka" style="background-color: #ff7575;">
                                @endif
                                <p>福岡</p>
                            </div>
                        </a>
                        <a href="/prefectures/prefecture_id?prefecture_id=41">
                             @if($count41==0)
                            <div id="saga" style="background-color: #a9a9a9;">
                                @else
                            
                            <div id="saga" style="background-color: #ff7575;">
                                @endif
                                <p>佐賀</p>
                            </div>
                        </a>
                        <a href="/prefectures/prefecture_id?prefecture_id=42">
                             @if($count42==0)
                            <div id="nagasaki" style="background-color: #a9a9a9;">
                                @else
                            
                            <div id="nagasaki" style="background-color: #ff7575;">
                                @endif
                                <p>長崎</p>
                            </div>
                        </a>
                        <a href="/prefectures/prefecture_id?prefecture_id=43">
                             @if($count43==0)
                            <div id="oita" style="background-color: #a9a9a9;">
                                @else
                            
                            <div id="oita" style="background-color: #ff7575;">
                                @endif
                                <p>大分</p>
                            </div>
                        </a>
                        <a href="/prefectures/prefecture_id?prefecture_id=44">
                             @if($count44==0)
                            <div id="kumamoto" style="background-color: #a9a9a9;">
                                @else
                            
                            <div id="kumamoto" style="background-color: #ff7575;">
                                @endif
                                <p>熊本</p>
                            </div>
                        </a>
                        <a href="/prefectures/prefecture_id?prefecture_id=45">
                             @if($count45==0)
                            <div id="miyazaki" style="background-color: #a9a9a9;">
                                @else
                            
                            <div id="miyazaki" style="background-color: #ff7575;">
                                @endif
                                <p>宮崎</p>
                            </div>
                        </a>
                        <a href="/prefectures/prefecture_id?prefecture_id=46">
                             @if($count46==0)
                            <div id="kagoshima" style="background-color: #a9a9a9;">
                                @else
                            
                            <div id="kagoshima" style="background-color: #ff7575;">
                                @endif
                                <p>鹿児島</p>
                            </div>
                        </a>
                        <a href="/prefectures/prefecture_id?prefecture_id=47">
                             @if($count47==0)
                            <div id="okinawa" style="background-color: #a9a9a9;">
                                @else
                            
                            <div id="okinawa" style="background-color: #ff7575;">
                                @endif
                                <p>沖縄</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
        </body>
    </html>
</x-app-layout>