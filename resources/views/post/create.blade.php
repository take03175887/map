<x-app-layout>
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
            <h1>日記作成画面</h1>
            <div class="element">
                <form action="/post" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="title">
                        <span class = "required">タイトル</span>
                        <br>
                        <input type="text" name="post[title]" placeholder="タイトル" value="{{old('post.title')}}"/>  
                        <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
                    </div>
                    
                    <div class="photo">
                        <span class = "required">写真</span>
                        <br>
                        <input type="file" name="image[]" multiple="multiple" onchange="loadImage(this);">
                        <p id="preview"></p>
                    </div>
                    
                    <script>
                    function loadImage(obj)
                    {
    	                document.getElementById('preview').innerHTML='<p>プレビュー</p>';
    	                for(let i=0; i<obj.files.length; i++){
    	                    var fileReader = new FileReader();
    	                    fileReader.onload = (function (e) {
    	                        document.getElementById('preview').innerHTML += '<img src="' + e.target.result + '">';
    	                    });
    	                    fileReader.readAsDataURL(obj.files[i]);
    	                }
                    }
                    </script>
                    
                    <div class="body">
                        <span class = "required">メモ</span>
                        <br>
                        <textarea name="post[body]" placeholder="本文" {{old('post.body')}}></textarea>
                        <p class='body__error' style="color:red">{{ $errors->first('post.body') }}</p>
                    </div>
                    
                    <div class="prefecture">
                        <span class = "required">県を選択</span>
                        <br>
                        <select size=5 name="prefecture_id">
                            <option value="">登録したい県を選んでください</option>
                            <option value="1">北海道</option>
                            <option value="2">青森</option>
                            <option value="3">秋田</option>
                            <option value="4">岩手</option>
                            <option value="5">山形</option>
                            <option value="6">宮城</option>
                            <option value="7">福島</option>
                            <option value="8">群馬</option>
                            <option value="9">栃木</option>
                            <option value="10">茨城</option>
                            <option value="11">埼玉</option>
                            <option value="12">千葉</option>
                            <option value="13">東京</option>
                            <option value="14">神奈川</option>
                            <option value="15">新潟</option>
                            <option value="16">富山</option>
                            <option value="17">石川</option>
                            <option value="18">福井</option>
                            <option value="19">長野</option>
                            <option value="20">岐阜</option>
                            <option value="21">山梨</option>
                            <option value="22">愛知</option>
                            <option value="23">静岡</option>
                            <option value="24">京都</option>
                            <option value="25">滋賀</option>
                            <option value="26">大阪</option>
                            <option value="27">奈良</option>
                            <option value="28">三重</option>
                            <option value="29">和歌山</option>
                            <option value="30">兵庫</option>
                            <option value="31">鳥取</option>
                            <option value="32">岡山</option>
                            <option value="33">島根</option>
                            <option value="34">広島</option>
                            <option value="35">山口</option>
                            <option value="36">香川</option>
                            <option value="37">愛媛</option>
                            <option value="38">徳島</option>
                            <option value="39">高知</option>
                            <option value="40">福岡</option>
                            <option value="41">佐賀</option>
                            <option value="42">長崎</option>
                            <option value="43">大分</option>
                            <option value="44">熊本</option>
                            <option value="45">宮崎</option>
                            <option value="46">鹿児島</option>
                            <option value="47">沖縄</option>
                        </select>
                    </div>
                    <br>
                    <button type="submit" class="bn15">保存</button>
                    <a href="/" class="bn15">TOP</a>
                </form>
            </div>
        </body>
    </html>
</x-app-layout>