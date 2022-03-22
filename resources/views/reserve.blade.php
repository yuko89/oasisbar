@extends('layouts.layouts')
{{--layouts.blade.php内で定義している@yield('content')に埋め込む--}}
@section('title','OASISBAR | ご予約')
@section('content')
<section class="p-story inter-section" data-section="story style="padding-top: 193px">
  <h1 style="text-align:center;padding-top: inherit;">
    ご予約
  </h1>
  <h2 style="text-align:center;">
    下記必要事項をご記入の上、送信してください。<br>
    予約状況を確認後、ご登録いただいたメールアドレスまたは<br>
    電話番号にご連絡させていただきます。<br>
    ご予約をお急ぎの方はお電話ください。03-3555-1555<br>
  </h2>
  
  <form style="width: 50%;margin: auto;" method="POST" action="/reserve">
  @csrf
    <div class="row g-3">
            <div class="col-12">
              <label for="name" class="form-label">お名前</label>
              <input type="text" class="form-control" id="name" name="name">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>
            
            <div class="col-12">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com" name="email">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>
            
            <div class="col-12">
              <label for="tel" class="form-label">TEL</label>
              <input type="tel" class="form-control" id="tel" name="tel">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>
            
            <div class="col-12">
              <label for="date" class="form-label">ご予約希望日時</label>
              <input type="datetime-local" class="form-control" id="datetime" name="datetime">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>
            
            <div class="col-12">
              <label for="number" class="form-label">ご予約人数</label>
              <select name="number" class="form-control" id="number">
            		<option value="">選択してください</option>
            		<option value="1">1人</option>
            		<option value="2">2人</option>
            		<option value="3">3人</option>
            		<option value="4">4人</option>
            		</select>
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>
            
            <div class="col-12">
              <label for="content" class="form-label">ご質問など</label>
              <textarea class="form-control" name="content"></textarea>
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit" style="margin-top: 30px; margin-left: 15px; margin-right: 15px;">送信</button>
  </form>
 </section>
 
@endsection