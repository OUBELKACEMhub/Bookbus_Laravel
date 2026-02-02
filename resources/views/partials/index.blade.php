<div class="max-w-5xl mx-auto p-6 bg-gray-50 min-h-screen">
    <div class="mb-8 bg-white p-6 rounded-xl shadow-sm border border-gray-100">
        <h2 class="text-2xl font-bold text-blue-900 mb-2">Voyages disponibles</h2>
        <p class="text-gray-600">Résultats pour : <span class="font-semibold text-yellow-600">{{ $departure }} ➔ {{ $arrival }}</span></p>
    </div>

    <div class="space-y-4">
        @forelse($trips as $trip)
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow duration-300 overflow-hidden">
                <div class="p-6 flex flex-col md:flex-row justify-between items-center gap-6">
                    
                    <div class="flex items-center gap-8 flex-1">
                        <div class="text-center">
                            <span class="block text-2xl font-bold text-gray-800">{{ $trip->departure_time->format('H:i') }}</span>
                            <span class="text-xs text-gray-500 uppercase">{{ $trip->departure_city }}</span>
                        </div>

                        <div class="flex-1 flex items-center gap-2">
                            <div class="w-3 h-3 rounded-full border-2 border-yellow-500"></div>
                            <div class="flex-1 border-t-2 border-dashed border-gray-200 relative">
                                <span class="absolute -top-6 left-1/2 -translate-x-1/2 text-xs text-blue-600 font-medium bg-blue-50 px-2 py-1 rounded">
                                    {{ $trip->duree_estimee }}
                                </span>
                            </div>
                            <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                        </div>

                        <div class="text-center">
                            <span class="block text-2xl font-bold text-gray-800">
                                {{ $trip->departure_time->addHours(3)->format('H:i') }} </span>
                            <span class="text-xs text-gray-500 uppercase">{{ $trip->arrival_city }}</span>
                        </div>
                    </div>

                    <div class="flex items-center gap-6 border-l pl-6 border-gray-100 w-full md:w-auto justify-between md:justify-end">
                        <div class="text-left md:text-right">
                            <span class="block text-sm text-gray-400">À partir de</span>
                            <span class="block text-3xl font-extrabold text-blue-900">{{ $trip->tarif }} <small class="text-sm font-normal">DH</small></span>
                            <span class="text-xs text-green-600 font-semibold bg-green-50 px-2 py-1 rounded">Sièges dispos</span>
                        </div>
                        
                        <a href="{{ route('booking.step2', $trip->id) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-3 px-8 rounded-lg transition-colors shadow-lg shadow-yellow-100">
                            RÉSERVER
                        </a>
                    </div>
                </div>

                <div class="bg-gray-50 px-6 py-3 flex justify-between items-center text-sm border-t border-gray-100">
                    <div class="flex gap-4 text-gray-600">
                        <span><i class="fas fa-bus mr-1"></i> {{ $trip->bus->matricule }}</span>
                        <span class="text-gray-300">|</span>
                        <span><i class="fas fa-route mr-1"></i> {{ $trip->distance_km }} KM</span>
                    </div>
                    <button class="text-blue-600 hover:underline font-medium">Voir les étapes du trajet</button>
                </div>
            </div>
        @empty
            <div class="text-center py-20 bg-white rounded-xl">
                <p class="text-gray-500 text-xl">Désolé, aucun voyage trouvé pour cette date.</p>
            </div>
        @endforelse
    </div>
</div>