@vite(['resources/css/app.css', 'resources/js/app.js'])
<meta name="viewport" content="width=device-width, initial-scale=1.0">
@include("layouts.navbar")

@yield("main")

@include("layouts.footer")
