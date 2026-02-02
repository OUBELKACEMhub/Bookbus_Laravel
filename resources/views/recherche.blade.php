@extends('layouts.base')

@section('content')
    <div class="relative -mt-16 md:-mt-24">
        <div class="bg-white p-6 md:p-10 rounded-3xl shadow-2xl border border-gray-100">
            <div class="mb-8">
                <h2 class="text-2xl font-extrabold text-blue-900 flex items-center gap-3">
                    <i class="fas fa-search-location text-yellow-500"></i>
                    Où voulez-vous aller ?
                </h2>
                <p class="text-gray-500">Trouvez les meilleurs trajets de bus au Maroc</p>
            </div>

            <form action="{{ route('search') }}" method="GET" class="grid grid-cols-1 md:grid-cols-4 gap-6 items-end">
                <div class="flex flex-col gap-2">
                    <label class="text-sm font-bold text-gray-700 ml-1">Départ</label>
                    <div class="relative">
                        <i class="fas fa-map-marker-alt absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                        <select name="departure" class="w-full pl-11 pr-4 py-4 bg-gray-50 border border-gray-200 rounded-2xl focus:ring-2 focus:ring-yellow-500 focus:border-transparent outline-none transition-all appearance-none cursor-pointer">
                            <option value="">Ville de départ</option>
                            @foreach($villes as $ville)
                                <option value="{{ $ville->nom }}">{{ $ville->nom }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="flex flex-col gap-2">
                    <label class="text-sm font-bold text-gray-700 ml-1">Arrivée</label>
                    <div class="relative">
                        <i class="fas fa-flag-checkered absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                        <select name="arrival" class="w-full pl-11 pr-4 py-4 bg-gray-50 border border-gray-200 rounded-2xl focus:ring-2 focus:ring-yellow-500 focus:border-transparent outline-none transition-all appearance-none cursor-pointer">
                            <option value="">Ville d'arrivée</option>
                            @foreach($villes as $ville)
                                <option value="{{ $ville->nom }}">{{ $ville->nom }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="flex flex-col gap-2">
                    <label class="text-sm font-bold text-gray-700 ml-1">Date</label>
                    <div class="relative">
                        <i class="fas fa-calendar-day absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                        <input type="date" name="date" class="w-full pl-11 pr-4 py-4 bg-gray-50 border border-gray-200 rounded-2xl focus:ring-2 focus:ring-yellow-500 focus:border-transparent outline-none transition-all cursor-pointer">
                    </div>
                </div>

                <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-blue-900 font-black text-lg py-4 rounded-2xl shadow-lg shadow-yellow-200 transition-all transform hover:scale-[1.02] active:scale-95">
                    CHERCHER
                </button>
            </form>
        </div>
    </div>

    <div class="mt-20 grid grid-cols-1 md:grid-cols-3 gap-10 pb-20">
        <div class="text-center">
            <div class="w-16 h-16 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl">
                <i class="fas fa-shield-alt"></i>
            </div>
            <h3 class="font-bold text-lg mb-2">Paiement Sécurisé</h3>
            <p class="text-gray-500 text-sm">Réservez en toute confiance avec nos systèmes de paiement.</p>
        </div>
        <div class="text-center">
            <div class="w-16 h-16 bg-yellow-100 text-yellow-600 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl">
                <i class="fas fa-clock"></i>
            </div>
            <h3 class="font-bold text-lg mb-2">Gain de Temps</h3>
            <p class="text-gray-500 text-sm">Évitez les files d'attente aux guichets des gares.</p>
        </div>
        <div class="text-center">
            <div class="w-16 h-16 bg-green-100 text-green-600 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl">
                <i class="fas fa-headset"></i>
            </div>
            <h3 class="font-bold text-lg mb-2">Support 24/7</h3>
            <p class="text-gray-500 text-sm">Notre équipe est là pour vous accompagner partout au Maroc.</p>
        </div>
    </div>
@endsection