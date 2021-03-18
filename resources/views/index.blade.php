<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('_style')
    <title>Share host artisan commands</title>
</head>
<body>
<div><a href="{{ route('share_host_artisan.clear_cache') }}">Clear cache</a></div>
<div><a href="{{ route('share_host_artisan.clear_route') }}">Clear Route</a></div>
<div><a href="{{ route('share_host_artisan.cache_route') }}">Cache Route</a></div>
<div><a href="{{ route('share_host_artisan.clear_view') }}">Clear View</a></div>
<div><a href="{{ route('share_host_artisan.cache_view') }}">Cache View</a></div>
<div><a href="{{ route('share_host_artisan.clear_config') }}">Clear config</a></div>
<div><a href="{{ route('share_host_artisan.cache_config') }}">Cache config</a></div>
</body>
</html>
