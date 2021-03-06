@extends('layouts.layouts')
{{--layouts.blade.php内で定義している@yield('content')に埋め込む--}}
@section('title','OASISBAR | メニュー')
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
<section class="p-story inter-section" data-section="story style="padding-top: 100px">
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
@endsection
