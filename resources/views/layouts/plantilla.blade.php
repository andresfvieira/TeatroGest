@vite(['resources/css/app.css', 'resources/js/app.js'])

@include("layouts.navbar")

@yield("main")

@include("layouts.footer")
