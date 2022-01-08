@extends('layouts.layouts')
{{--layouts.blade.php内で定義している@yield('content')に埋め込む--}}
@section('title','OASISBAR | お問い合わせ')
@section('content')
<section class="p-story inter-section" data-section="story style="padding-top: 193px">
  <h1 style="text-align:center;">
    お問い合わせ
  </h1>
  <form style="width: 50%;margin: auto;" method="POST" action="/contact">
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
              <label for="content" class="form-label">お問い合わせ内容</label>
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