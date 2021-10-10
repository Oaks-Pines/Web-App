<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title','Oaks & Pines Landscaping LTD')</title>

        <!--Facebook Meta -->
        <meta property="og:url" content="{{url()->current()}}"/>
        <meta property="og:image" content="{{config('app.url')}}/@yield('og:image')"/>
        <meta property="og:title" content="@yield('og:title')"/>


        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}"/>
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script defer src="https://unpkg.com/alpinejs@3.4.2/dist/cdn.min.js"></script>

        <!-- Livewire -->
        @livewireStyles