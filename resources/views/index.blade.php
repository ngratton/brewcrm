<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>brew CRM | Faites percoler vos ventes</title>
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js" defer></script>
    <script src="https://unpkg.com/vue-router/dist/vue-router.js" defer></script>
    <script src="{{ asset('js/app.js') }}" type="module" defer></script>
</head>
<body>
    <div id="app">
        <navmenu></navmenu>
        <pageheader></pageheader>
        <main>
            <router-view></router-view>
        </main>
    </div>
</body>
</html>
