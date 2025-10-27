<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>

    @include('layouts.nav')  {{-- هنا الناف بار فوق ثابت --}}
    
    <main>
        @yield('content')  {{-- محتوى كل صفحة هون بيطلع --}}
    </main>

    @include('layouts.footer') {{-- هنا الفوتر تحت ثابت --}}

</body>
</html>
