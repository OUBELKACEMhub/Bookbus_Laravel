<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookBus - Réservation de bus au Maroc</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-50 text-gray-900">

    <nav class="bg-white shadow-sm border-b sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 h-20 flex justify-between items-center">
            <a href="/" class="flex items-center gap-2">
                <div class="bg-yellow-500 p-2 rounded-lg">
                    <i class="fas fa-bus text-white text-xl"></i>
                </div>
                <span class="text-2xl font-black text-blue-900">BOOK<span class="text-yellow-500">BUS</span></span>
            </a>

            <div class="hidden md:flex items-center gap-8 font-medium">
                <a href="/index" class="hover:text-yellow-600 transition">Accueil</a>
                <a href="/horaires" class="hover:text-yellow-600 transition">Horaires</a>
                @auth
                    <a href="/mesResevation" class="text-blue-900 font-bold">Mes Réservations</a>
                    <a href="/logout" class="text-gray-600">Déconnexion</a>
                @else
                    <a href="/login" class="text-gray-600">Connexion</a>
                    <a href="/register" class="bg-blue-900 text-white px-5 py-2 rounded-lg hover:bg-blue-800 transition">S'inscrire</a>
                @endauth
            </div>
        </div>
    </nav>

    <header class="bg-blue-900 py-16 text-white text-center relative overflow-hidden">
        <div class="max-w-4xl mx-auto px-4 relative z-10">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-4 italic">Voyagez partout au Maroc au meilleur prix</h1>
            <p class="text-blue-100 text-lg md:text-xl">Réservez vos tickets de bus en quelques clics avec BookBus.</p>
        </div>
        <div class="absolute top-0 right-0 opacity-10 transform translate-x-1/4 -translate-y-1/4">
            <i class="fas fa-route text-[20rem]"></i>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-4 -mt-8">
        @yield('content')
    </main>

    <footer class="bg-white border-t mt-20 py-10">
        <div class="max-w-7xl mx-auto px-4 text-center text-gray-500 text-sm">
            <p>&copy; 2026 BookBus. Réalisé par un Full-Stack Developer de YouCode.</p>
        </div>
    </footer>

</body>
</html>