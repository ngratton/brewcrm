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
        <nav id="main-nav">
            <div id="top-logo-ham">
                <span class="logo-nav-open">brew CRM</span> <span class="hamburger">|||</span>
            </div>
            <div class="nav-menu">
                <h5>CONTACTS</h5>
                <ul>
                    <li>Contacts</li>
                    <li>Entreprises</li>
                    <li>Prospects</li>
                </ul>
                <h5>TRAVAIL</h5>
                <ul>
                    <li>Tableau de bord</li>
                    <li>Tâches</li>
                    <li>Calendrier</li>
                    <li>Notes de rencontres</li>
                    <li>Appels téléphoniques</li>
                </ul>

                <h5>ANALYSE</h5>
                <ul>
                    <li>Statistiques</li>
                    <li>Rapports</li>
                </ul>

                <h5>ADMINISTRATION</h5>
                <ul>
                    <li>Utilisateurs</li>
                </ul>
            </div>
        </nav>
        <header id="top-header">
            <div id="logo-nav-close">brew CRM</div>
            <div id="search-box">
                <input type="text" name="search" id="search" placeholder="Search">
            </div>
            <div id="profile">
                [Notif] [Profile]
            </div>
        </header>
        <main>
            <contacts></contacts>
            <contacts></contacts>
            <contacts></contacts>
            <contacts></contacts>

            </div>
        </main>
    </div>
</body>
</html>
