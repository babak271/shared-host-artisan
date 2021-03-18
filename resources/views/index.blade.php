<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ config('share_host_artisan.blade_direction') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('_style')
    <title>@lang('shared_host_artisan::text.index_page_title')</title>
</head>
<body>
<div><a href="{{ route('share_host_artisan.clear_cache') }}">@lang('shared_host_artisan::text.clear_cache')</a></div>
<div><a href="{{ route('share_host_artisan.clear_route') }}">@lang('shared_host_artisan::text.clear_route')</a></div>
<div><a href="{{ route('share_host_artisan.cache_route') }}">@lang('shared_host_artisan::text.cache_route')</a></div>
<div><a href="{{ route('share_host_artisan.clear_view') }}">@lang('shared_host_artisan::text.clear_view')</a></div>
<div><a href="{{ route('share_host_artisan.cache_view') }}">@lang('shared_host_artisan::text.cache_view')</a></div>
<div><a href="{{ route('share_host_artisan.clear_config') }}">@lang('shared_host_artisan::text.clear_config')</a></div>
<div><a href="{{ route('share_host_artisan.cache_config') }}">@lang('shared_host_artisan::text.cache_config')</a></div>
</body>
</html>
