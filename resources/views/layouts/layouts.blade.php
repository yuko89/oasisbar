<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{--bootstrap4が使えるようになる--}}
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:type" content="website">
<meta property="og:locale" content="ja_JP" />
<meta property="og:type" content="website" />
<script type='application/ld+json' class='yoast-schema-graph yoast-schema-graph--main'>{"@context":"https://schema.org","@graph":[{"@type":"Organization","@id":"https://ippukuandmatcha.jp/#organization","name":"","url":"https://ippukuandmatcha.jp/","sameAs":[],"logo":{"@type":"ImageObject","@id":"https://ippukuandmatcha.jp/#logo","url":"https://ippukuandmatcha.jp/wp-content/uploads/2019/07/ogp.png","width":1200,"height":630},"image":{"@id":"https://ippukuandmatcha.jp/#logo"}},{"@type":"WebSite","@id":"https://ippukuandmatcha.jp/#website","url":"https://ippukuandmatcha.jp/","name":"IPPUKU&amp;MATCHA","publisher":{"@id":"https://ippukuandmatcha.jp/#organization"},"potentialAction":{"@type":"SearchAction","target":"https://ippukuandmatcha.jp/?s={search_term_string}","query-input":"required name=search_term_string"}},{"@type":"WebPage","@id":"https://ippukuandmatcha.jp/#webpage","url":"https://ippukuandmatcha.jp/","inLanguage":"ja","name":"IPPUKU&amp;MATCHA","isPartOf":{"@id":"https://ippukuandmatcha.jp/#website"},"about":{"@id":"https://ippukuandmatcha.jp/#organization"},"datePublished":"2019-05-28T01:32:30+00:00","dateModified":"2019-05-28T06:21:40+00:00","description":"IPPUKU&MATCHA\u306f100%\u5b87\u6cbb\u5e02\u5185\u7523\u306e\u30b7\u30f3\u30b0\u30eb\u30aa\u30ea\u30b8\u30f3\u3092\u3054\u63d0\u4f9b\u3057\u307e\u3059\u3002\u624b\u6458\u3055\u308c\u308b\u53ce\u7a6b\u91cf\u304c\u3054\u304f\u308f\u305a\u304b\u306e\u8d05\u6ca2\u306a\u300c\u672c\u7269\u306e\u62b9\u8336\u300d\u4f53\u9a13\u3092\u304a\u697d\u3057\u307f\u304f\u3060\u3055\u3044\u3002"}]}</script>
<!-- / Yoast SEO plugin. -->

<link rel='stylesheet' id='wp-block-library-css'  href='{{ secure_asset('css/style.min.css') }}' type='text/css' media='all' />
<link rel='stylesheet' id='contact-form-7-css'  href='{{ secure_asset('css/styles.css') }}' type='text/css' media='all' />
<link rel='stylesheet' id='style-css'  href='{{ secure_asset('css/style.css') }}' type='text/css' media='all' />
  <script>
        document.documentElement.className = document.documentElement.className.replace("no-js", "js");
    </script>
    <link rel="icon" href="{{ secure_asset('/favicon.ico') }}">
</head>

<body class="is-loading-end is-story" style="background-color:#000;">
        {{--resources/views/componentsディレクトリ内のheader.blade.phpを呼び出す--}}
        @component('components.header')
        @endcomponent
        
            @yield('content')
        
        
        @component('components.footer')
        @endcomponent
        {{--bootstrap4が使えるようになる--}}
         <script src="{{ secure_asset('js/app.js') }}"></script>
    </body>
</html> 