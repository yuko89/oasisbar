@extends('layouts.layouts')
{{--layouts.blade.php内で定義している@yield('content')に埋め込む--}}
@section('title','OASISBAR | トップページ')
@section('content')
<style>
  .p-course__menu__top>span:nth-child(1) {
    width: 100%;
    height: 1px;
    left: 0;
    top: 0;
    transform-origin: left;
    transform: scaleX(1);
    transition: .7s cubic-bezier(.08,.92,.35,1);
}
.drink_menu{
    transform: scaleX(1);
    opacity: 1;
    transition: transform .7s cubic-bezier(.08,.92,.35,1),opacity .4s;
    position: absolute;
    z-index: 1;
    left: 1px;
    top: -9px;
    right: 0;
    margin: auto;
    font-size: 16px;
    letter-spacing: 1.6px;
    
}
.drink_menu::before {
    content: '';
    position: absolute;
    z-index: -1;
    left: 0;
    right: 0;
    top: 4px;
    margin: auto;
    height: 10px;
    background: #000;
    width: 221px;
    transform: skewX(-26deg);
    border-right: solid 1px #c5c6c7;
    border-left: solid 1px #c5c6c7;
}
.food_menu{
    transform: scaleX(1);
    opacity: 1;
    transition: transform .7s cubic-bezier(.08,.92,.35,1),opacity .4s;
    position: absolute;
    z-index: 1;
    left: 1px;
    top: -9px;
    right: 0;
    margin: auto;
    font-size: 16px;
    letter-spacing: 1.6px;
    
}
.food_menu::before {
    content: '';
    position: absolute;
    z-index: -1;
    left: 0;
    right: 0;
    top: 4px;
    margin: auto;
    height: 10px;
    background: #000;
    width: 221px;
    transform: skewX(-26deg);
    border-right: solid 1px #c5c6c7;
    border-left: solid 1px #c5c6c7;
}
</style>
<section class="p-story inter-section" data-section="story style="padding-top: 193px>
  <h1 class="p-fixed__logo" style="position: relative;height: max-content;">
    <img src="{{ secure_asset('image/floor.jpeg') }}">
  </h1>
  <h1 style="text-align:center;padding-top: 80px;">
    About OASISBAR
  </h1>
  <h2 style="font=size:20px">
      <p>思いっきり飲んで食べて遊べるダーツ＆ビリヤードバーです。</p>
      <p>お酒はもちろん、料理も多数取り揃えております。</p>
      <p>ダーツ・ビリヤードのプロが丁寧に教えますので、初心者の方もお気軽に。</p>
  </h2>
  
</section>
  <div class="container" style="background-color:#191919;margin: 0px;max-width: 100%;">
    <h1 style="text-align:center;padding-top: 80px;">
    SERVICE
    </h1>
        <div class="row">
        　  <div class="" style="width: 50%;height: 400px;">
                <img src="{{ secure_asset('image/bil.jpeg') }}">
            </div>
            <div class="" style="color: white;width: 40%;padding: 20px;">
                <table class="table">
                    <tbody>
                        <div style="line-height:2;">
                            <p>
                            <h2 style="font-size:20px;">BILLIARDS</h2>
                            -料金-<br>
                            お一人様　500円/30分<br>
                            3名様〜　1500円/30分<br>
                            (何名様でもOK)<br>
                        　　  <br>
                            お一人様でもOK！<br>
                            気さくなスタッフがご一緒に対戦します！<br>
                            スタッフに勝つといいことがあるかも…？<br>
                            </p>
                        </div>
                        <p></p>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="" style="color: white;width: 40%;padding: 20px;">
                <table class="table">
                    <tbody>
                        <div style="line-height:2;">
                            <p>
                            <h2 style="font-size:20px;">DARTS</h2>
                            -料金-<br>
                            1ゲーム100円〜<br>
                        初心者の方にもスタッフが丁寧に教えます。<br>
                        　　<br>
                            ダーツライブ２EX導入店！！<br>
                            <img src="{{ secure_asset('image/dlive.gif') }}"><br>
                            ゲーム結果をネットワークで集計！<br>
                            ケータイやPCでいつでもチェックできます！<br>
                            </p>
                        </div>
                        <p></p>
                    </tbody>
                </table>
            </div>
            <div class="" style="width: 50%;height: 400px;">
                <img src="{{ secure_asset('image/darts.jpeg') }}">
            </div>
        </div>
　</div>
<section class="p-story inter-section" data-section="story style="padding-top: 100px">
  <h1 style="text-align:center;padding-top: 80px;">
    MENU
  </h1>
  <h1 class="p-fixed__logo" style="position: relative;height: max-content;">
    <img src="{{ secure_asset('image/menu_top.jpeg') }}">
</section>
 <div class="p-course__menu">
    <div class="p-course__menu__top js-inter" style="color: white; transform: none;">
      <span></span>
      <p class="drink_menu">DRINK MENU</p>
      <div class="drink" style="float:left;width:calc(100%/3);text-align: left;padding-left:200px;">
        <b>BEER　others</b>
      </div>
        <div class="drink1" style="float:left;width:calc(100%/3);text-align: initial;padding-left: 50px;">
          生ビール　キリン一番搾り330ml<br />
          ハイネケン<br />
          コロナ・エキストラ<br />
          バドワイザー<br />
          ギネス<br />
        </div>
        <div class="drink2"style="float:right;width:calc(100%/3);text-align: left;">
          370円(税抜)<br />
          620円(税抜)<br />
          620円(税抜)<br />
          710円(税抜)<br />
          710円(税抜)<br />
        </div>
        <span></span>
        <div class="cocktail" style="padding-top: 150px;">
          <div class="drink" style="float:left;width:calc(100%/3);text-align: left;padding-left:200px;">
            <b>COCKTAIL</b>
          </div>
          <div class="drink1" style="float:left;width:calc(100%/3);text-align: initial;padding-left: 50px;">
            ジントニック<br />
            カシスウーロン<br />
            モスコミュール<br />
            ホワイトレディ<br />
            サイドカー<br />
          </div>
          <div class="drink2"style="float:right;width:calc(100%/3);text-align: left;">
            620円(税抜)<br />
            570円(税抜)<br />
            620円(税抜)<br />
            710円(税抜)<br />
            760円(税抜)<br />
          </div>
        </div>
        <div class="annotation" style="padding-left:86px;">
          ※その他メニュー100種以上ご用意あります。
        </div>
        <div class="whisky" style="padding-top: 50px;">
          <div class="drink" style="float:left;width:calc(100%/3);text-align: left;padding-left:200px;">
            <b>WHISKY</b>
          </div>
          <div class="drink1" style="float:left;width:calc(100%/3);text-align: initial;padding-left: 50px;">
            アーリータイムス<br />
            ジャック・ダニエル<br />
            山崎　12年<br />
            ジョニーウォーカーブラックラベル<br />
            グレンフィディック　12年<br />
            ボウモア　12年<br />
            アードベッグ　10年<br />
          </div>
          <div class="drink2"style="float:right;width:calc(100%/3);text-align: left;">
            480円(税抜)<br />
            570円(税抜)<br />
            860円(税抜)<br />
            620円(税抜)<br />
            670円(税抜)<br />
            760円(税抜)<br />
            950円(税抜)<br />
          </div>
        </div>
        <div class="annotation" style="padding-left:115px;">
          ※シングルモルト・アイラモルト多数ございます。
        </div>
        <div class="wine" style="padding-top: 50px;">
          <div class="drink" style="float:left;width:calc(100%/3);text-align: left;padding-left:200px;">
            <b>WINE</b>
          </div>
          <div class="drink1" style="float:left;width:calc(100%/3);text-align: initial;padding-left: 50px;">
            グラスワイン（赤／白）<br />
            ボトルワイン（赤／白）<br />
            スパークリングワインボトル<br />
          </div>
          <div class="drink2"style="float:right;width:calc(100%/3);text-align: left;">
            460円(税抜)<br />
            1900円～(税抜)<br />
            3240円～(税抜)<br />
          </div>
        </div>
        <div class="shochu" style="padding-top: 100px;">
          <div class="drink" style="float:left;width:calc(100%/3);text-align: left;padding-left:200px;">
            <b>焼酎</b>
          </div>
          <div class="drink1" style="float:left;width:calc(100%/3);text-align: initial;padding-left: 50px;">
            焼き芋・黒糖・牛乳<br />
            その他<br />
          </div>
          <div class="drink2"style="float:right;width:calc(100%/3);text-align: left;">
            各480円(税抜)<br />
            　<br />
          </div>
        </div>
    </div>
 </div>
 <div class="p-course__menu">
    <div class="p-course__menu__top js-inter" style="color: white; transform: none;">
      <span></span>
      <p class="food_menu">FOOD MENU</p>
      <div class="food" style="float:left;width:calc(100%/3);text-align: left;padding-left:200px;">
        <b>SALAD</b>
      </div>
        <div class="food1" style="float:left;width:calc(100%/3);text-align: initial;padding-left: 50px;">
          野菜スティック<br />
          ～胡麻ディップソース～<br />
          色々キノコの和風サラダ<br />
          シーザーサラダ<br />
        </div>
        <div class="food2"style="float:right;width:calc(100%/3);text-align: left;">
          　<br />
          550円(税抜)<br />
          650円(税抜)<br />
          740円(税抜)<br />
        </div>
        <span></span>
        <div class="appetizer" style="padding-top: 130px;">
          <div class="food" style="float:left;width:calc(100%/3);text-align: left;padding-left:200px;">
            <b>APPETIZER</b>
          </div>
          <div class="food1" style="float:left;width:calc(100%/3);text-align: initial;padding-left: 50px;">
            彩り野菜の自家製ピクルス<br />
            自家製レーズンバター<br />
            オードブル盛り合わせ<br />
            自家製ポテトチップス<br />
            秘伝のタレで仕込んだ若鶏の唐揚げ<br />
            フィッシュ＆チップス<br />
          </div>
          <div class="food2"style="float:right;width:calc(100%/3);text-align: left;">
            360円(税抜)<br />
            460円(税抜)<br />
            930円(税抜)<br />
            460円(税抜)<br />
            550円(税抜)<br />
            650円(税抜)<br />
          </div>
        </div>
        <div class="pizza" style="padding-top: 170px;">
          <div class="food" style="float:left;width:calc(100%/3);text-align: left;padding-left:200px;">
            <b>PIZZA</b>
          </div>
          <div class="food1" style="float:left;width:calc(100%/3);text-align: initial;padding-left: 50px;">
            明太子とベーコンのピッツァ<br />
            マルゲリータピッツァ<br />
            オリーブとアンチョビのピッツァ<br />
            生ハムとフレッシュバジルのピッツァ<br />
          </div>
          <div class="drink2"style="float:right;width:calc(100%/3);text-align: left;">
            840円(税抜)<br />
            840円(税抜)<br />
            740円(税抜)<br />
            930円(税抜)<br />
          </div>
        </div>
        <div class="pasta" style="padding-top: 130px;">
          <div class="food" style="float:left;width:calc(100%/3);text-align: left;padding-left:200px;">
            <b>PASTA</b>
          </div>
          <div class="food1" style="float:left;width:calc(100%/3);text-align: initial;padding-left: 50px;">
            ピリ辛アラビアータ<br />
            キノコとベーコンのバター醤油パスタ<br />
            カルボナーラ<br />
          </div>
          <div class="food2"style="float:right;width:calc(100%/3);text-align: left;">
            650円(税抜)<br />
            740円(税抜)<br />
            840円(税抜)<br />
          </div>
        </div>
        <div class="rice" style="padding-top: 100px;">
          <div class="food" style="float:left;width:calc(100%/3);text-align: left;padding-left:200px;">
            <b>RICE</b>
          </div>
          <div class="food1" style="float:left;width:calc(100%/3);text-align: initial;padding-left: 50px;">
            バジルとチーズのトマトリゾット<br />
            とろとろ卵のオムライス<br />
          </div>
          <div class="food2"style="float:right;width:calc(100%/3);text-align: left;">
            550円(税抜)<br />
            840円(税込)<br />
          </div>
        </div>
        <div class="dry" style="padding-top: 80px;">
          <div class="food" style="float:left;width:calc(100%/3);text-align: left;padding-left:200px;">
            <b>DRY FOOD</b>
          </div>
          <div class="food1" style="float:left;width:calc(100%/3);text-align: initial;padding-left: 50px;">
            ミックスナッツ<br />
            チョコの盛合せ<br />
            トルティーヤチップス<br />
          </div>
          <div class="food2"style="float:right;width:calc(100%/3);text-align: left;">
            460円(税抜)<br />
            550円(税込)<br />
            550円(税込)<br />
          </div>
        </div>
    </div>
 </div>
　<div class="container" style="background-color:#191919;margin: 0px;max-width: 100%;">
　  <h1 style="text-align:center;margin-bottom:30px;">
    ACCESS
    </h1>
    <div class="row">
    　  <div class="" style="width: 50%;height: 400px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.1134257562144!2d139.77551545166298!3d35.674209017622786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018895e79440ea1%3A0xaf1effdf4e9022c0!2z44CSMTA0LTAwMzIg5p2x5Lqs6YO95Lit5aSu5Yy65YWr5LiB5aCA77yU5LiB55uu77yZ4oiS77yZ!5e0!3m2!1sja!2sjp!4v1640496877152!5m2!1sja!2sjp" style="border:0;width: 100%;height: 100%;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="" style="color: white;width: 40%;padding: 20px;">
            <table class="table">
                <tbody>
                    <div style="line-height:2;">
                        <p>
                        -住所-<br>
                        〒104-0032<br>
                        東京都中央区八丁堀4-9-9　八丁堀フロンティアビルB1<br>
                        </p>
                    </div>
                    <p></p>
                    <div style="line-height:2;">
                        <p>
                        -アクセス-<br>
                        地下鉄日比谷線八丁堀駅　A2番出口　徒歩1分<br>
                        ＪＲ京葉線八丁堀駅　徒歩2分<br>
                        都営浅草線宝町駅　徒歩7分<br>
                        </p>
                    </div>
                    <div style="line-height:2;">
                        <p>
                        -営業時間-<br>
                        18:00～05:00(第2日曜日は0:00まで)<br>
                        </p>
                    </div>
                    <div style="line-height:2;">
                        <p>
                        -電話番号-<br>
                        03-3555-1555<br>
                        </p>
                    </div>
                </tbody>
            </table>
        </div>   
        </div>
    </div>
  </div>
    
@endsection