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
                @php
                    $count1=0;
                    $count2=0;
                    $count3=0;
                    $count4=0;
                    $count5=0;
                    $count6=0;
                    $count7=0;
                    $count8=0;
                    $count9=0;
                    $count10=0;
                    $count11=0;
                    $count12=0;
                    $count13=0;
                    $count14=0;
                    $count15=0;
                    $count16=0;
                    $count17=0;
                    $count18=0;
                    $count19=0;
                    $count20=0;
                    $count21=0;
                    $count22=0;
                    $count23=0;
                    $count24=0;
                    $count25=0;
                    $count26=0;
                    $count27=0;
                    $count28=0;
                    $count29=0;
                    $count30=0;
                    $count31=0;
                    $count32=0;
                    $count33=0;
                    $count34=0;
                    $count35=0;
                    $count36=0;
                    $count37=0;
                    $count38=0;
                    $count39=0;
                    $count40=0;
                    $count41=0;
                    $count42=0;
                    $count43=0;
                    $count44=0;
                    $count45=0;
                    $count46=0;
                    $count47=0;
                    
                    foreach($post as $po){
                        if($po->prefecture_id==1){
                            $count1=$count1+1;
                        }elseif($po->prefecture_id==2){
                            $count2=$count2+1;
                        }elseif($po->prefecture_id==3){
                            $count3=$count3+1;
                        }elseif($po->prefecture_id==4){
                            $count4=$count4+1;
                        }elseif($po->prefecture_id==5){
                            $count5=$count5+1;
                        }elseif($po->prefecture_id==6){
                            $count6=$count6+1;
                        }elseif($po->prefecture_id==7){
                            $count7=$count7+1;
                        }elseif($po->prefecture_id==8){
                            $count8=$count8+1;
                        }elseif($po->prefecture_id==9){
                            $count9=$count9+1;
                        }elseif($po->prefecture_id==10){
                            $count10=$count10+1;
                        }elseif($po->prefecture_id==11){
                            $count11=$count11+1;
                        }elseif($po->prefecture_id==12){
                            $count12=$count12+1;
                        }elseif($po->prefecture_id==13){
                            $count13=$count13+1;
                        }elseif($po->prefecture_id==14){
                            $count14=$count14+1;
                        }elseif($po->prefecture_id==15){
                            $count15=$count15+1;
                        }elseif($po->prefecture_id==16){
                            $count16=$count16+1;
                        }elseif($po->prefecture_id==17){
                            $count17=$count17+1;
                        }elseif($po->prefecture_id==18){
                            $count18=$count18+1;
                        }elseif($po->prefecture_id==19){
                            $count19=$count19+1;
                        }elseif($po->prefecture_id==20){
                            $count20=$count20+1;
                        }elseif($po->prefecture_id==21){
                            $count21=$count21+1;
                        }elseif($po->prefecture_id==22){
                            $count22=$count22+1;
                        }elseif($po->prefecture_id==23){
                            $count23=$count23+1;
                        }elseif($po->prefecture_id==24){
                            $count24=$count24+1;
                        }elseif($po->prefecture_id==25){
                            $count25=$count25+1;
                        }elseif($po->prefecture_id==26){
                            $count26=$count26+1;
                        }elseif($po->prefecture_id==27){
                            $count27=$count27+1;
                        }elseif($po->prefecture_id==28){
                            $count28=$count28+1;
                        }elseif($po->prefecture_id==29){
                            $count29=$count29+1;
                        }elseif($po->prefecture_id==30){
                            $count30=$count30+1;
                        }elseif($po->prefecture_id==31){
                            $count31=$count31+1;
                        }elseif($po->prefecture_id==32){
                            $count32=$count32+1;
                        }elseif($po->prefecture_id==33){
                            $count33=$count33+1;
                        }elseif($po->prefecture_id==34){
                            $count34=$count34+1;
                        }elseif($po->prefecture_id==35){
                            $count35=$count35+1;
                        }elseif($po->prefecture_id==36){
                            $count36=$count36+1;
                        }elseif($po->prefecture_id==37){
                            $count37=$count37+1;
                        }elseif($po->prefecture_id==38){
                            $count38=$count38+1;
                        }elseif($po->prefecture_id==39){
                            $count39=$count39+1;
                        }elseif($po->prefecture_id==40){
                            $count40=$count40+1;
                        }elseif($po->prefecture_id==41){
                            $count41=$count41+1;
                        }elseif($po->prefecture_id==42){
                            $count42=$count42+1;
                        }elseif($po->prefecture_id==43){
                            $count43=$count43+1;
                        }elseif($po->prefecture_id==44){
                            $count44=$count44+1;
                        }elseif($po->prefecture_id==45){
                            $count45=$count45+1;
                        }elseif($po->prefecture_id==46){
                            $count46=$count46+1;
                        }elseif($po->prefecture_id==47){
                            $count47=$count47+1;
                        }
                    }
            
                @endphp
                
                <div id="hokkaido-touhoku" class="clearfix">
                    
                    <p class="area-title">北海道・東北</p>
                    <div class="area">
                        
                        <a href="/prefectures/prefecture_id?prefecture_id=1">
                            @if($count1==0)
                            <div id="hokkaido" style="background-color: #a9a9a9;">
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