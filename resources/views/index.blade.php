@extends('layouts.base')

@section('content')
<div class="container mx-auto px-4 py-12">
    <div class="flex items-center justify-between mb-8">
        <h1 class="text-3xl font-black text-blue-900 uppercase italic">
            <i class="fas fa-ticket-alt mr-2"></i> Mes Réservations
        </h1>
        <a href="{{ route('search') }}" class="text-sm font-bold text-blue-600 hover:text-blue-800 underline">
            + Nouvelle Réservation
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse($reservations as $reservation)
            <div class="bg-white rounded-3xl shadow-lg border border-blue-100 overflow-hidden hover:shadow-2xl transition-all duration-300 group">
                
                <div class="bg-[#1e3a8a] p-4 flex justify-between items-center text-white">
                    <div class="flex items-center gap-2">
                        <i class="far fa-calendar-alt text-yellow-400"></i>
                        <span class="font-bold text-sm">
                            {{ \Carbon\Carbon::parse($reservation->date_reservation)->format('d M Y') }}
                        </span>
                    </div>
                    
                    <span class="px-3 py-1 rounded-full text-xs font-black uppercase tracking-wider
                        {{ $reservation->statut === 'Payé' ? 'bg-green-500 text-white' : 'bg-yellow-500 text-blue-900' }}">
                        {{ $reservation->statut }}
                    </span>
                </div>

                <div class="p-6">
                    <div class="flex justify-between items-center mb-6 relative">
                        <div class="absolute top-1/2 left-0 w-full h-0.5 bg-gray-100 -z-10"></div>
                        
                        <div class="text-center bg-white px-2">
                            <p class="text-xs text-gray-400 font-bold uppercase mb-1">Départ</p>
                            <p class="text-blue-900 font-black text-lg">
                                {{ $reservation->segment->departure_city ?? '---' }}
                            </p>
                        </div>

                        <div class="bg-blue-50 text-blue-600 p-2 rounded-full">
                            <i class="fas fa-bus"></i>
                        </div>

                        <div class="text-center bg-white px-2">
                            <p class="text-xs text-gray-400 font-bold uppercase mb-1">Arrivée</p>
                            <p class="text-blue-900 font-black text-lg">
                                {{ $reservation->segment->arrival_city ?? '---' }}
                            </p>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4 bg-gray-50 rounded-xl p-4 mb-4">
                        <div>
                            <p class="text-xs text-gray-500 uppercase">Siège N°</p>
                            <p class="text-xl font-bold text-blue-900 flex items-center gap-2">
                                <i class="fas fa-chair text-blue-300"></i>
                                {{ $reservation->siege_numero }}
                            </p>
                        </div>
                        <div class="text-right">
                            <p class="text-xs text-gray-500 uppercase">État</p>
                            <p class="font-bold {{ $reservation->is_completed ? 'text-green-600' : 'text-orange-500' }}">
                                {{ $reservation->is_completed ? 'Terminé' : 'En cours' }}
                            </p>
                        </div>
                    </div>

                    <div class="pt-2">
                        <button class="w-full py-3 rounded-xl border-2 border-blue-900 text-blue-900 font-bold hover:bg-blue-900 hover:text-white transition-colors flex items-center justify-center gap-2">
                            <i class="fas fa-download"></i> Télécharger Ticket
                        </button>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-span-full flex flex-col items-center justify-center py-16 bg-gray-50 rounded-3xl border-2 border-dashed border-gray-200">
                <div class="bg-blue-100 p-4 rounded-full mb-4">
                    <i class="fas fa-ticket-alt text-4xl text-blue-500"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-700 mb-2">Aucune réservation trouvée</h3>
                <p class="text-gray-500 mb-6">Vous n'avez pas encore voyagé avec nous.</p>
                <a href="{{ route('search') }}" class="px-6 py-3 bg-blue-600 text-white rounded-xl font-bold hover:bg-blue-700 transition-colors">
                    Réserver maintenant
                </a>
            </div>
        @endforelse
    </div>
</div>
@endsection