@extends('layouts.base')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-blue-900 mb-8 text-center uppercase">Mes Réservations</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        
        @forelse($reservations as $reservation)
            <div class="bg-[#1e3a8a] text-white rounded-2xl p-6 shadow-xl font-sans relative overflow-hidden transition-transform hover:scale-[1.02]">
                
                <div class="absolute -top-10 -right-10 w-32 h-32 bg-blue-500 rounded-full opacity-20 blur-2xl"></div>

                <h2 class="text-xl font-bold mb-2 flex justify-between items-center">
                    <span>Ticket #{{ $reservation->id }}</span>
                    <span class="text-xs px-2 py-1 rounded bg-yellow-500 text-blue-900 uppercase">
                        {{ $reservation->status ?? 'Confirmé' }}
                    </span>
                </h2>
                
                <div class="h-0.5 w-full bg-blue-700 mb-6"></div>

                <div class="mb-6 flex items-center justify-between relative z-10">
                    <span class="text-blue-200 text-sm uppercase tracking-wider">Client</span>
                    <span class="font-semibold text-lg">{{ $reservation->user->name ?? 'Invité' }}</span>
                </div>

                <div class="flex justify-between items-start mb-6 relative z-10">
                    <div>
                        <p class="text-blue-200 text-xs uppercase font-bold mb-1">DÉPART</p>
                        <p class="text-2xl font-bold">{{ $reservation->departure_city ?? 'Ville Départ' }}</p>
                    </div>

                    <div class="text-right">
                        <p class="text-blue-200 text-xs uppercase font-bold mb-1">ARRIVÉE</p>
                        <p class="text-2xl font-bold">{{ $reservation->arrival_city ?? 'Ville Arrivée' }}</p>
                    </div>
                </div>

                <div class="bg-[#2a4db5] rounded-xl p-4 mb-6 space-y-3 relative z-10">
                    <div class="flex items-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <span class="font-bold text-lg">
                            {{ \Carbon\Carbon::parse($reservation->date_depart)->format('d M Y') }}
                        </span>
                    </div>

                    <div class="flex items-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="font-bold text-lg">
                            {{ \Carbon\Carbon::parse($reservation->time_depart ?? '00:00')->format('H:i') }}
                        </span>
                    </div>
                </div>

                <div class="h-px w-full bg-blue-700 mb-4"></div>

                <div class="flex justify-between items-center mb-4 relative z-10">
                    <span class="text-blue-200 text-lg">Passagers</span>
                    <span class="font-bold text-xl">x{{ $reservation->passengers_count ?? 1 }}</span>
                </div>

                <div class="flex justify-between items-center mt-6 relative z-10">
                    <span class="text-yellow-400 text-xl font-black uppercase">TOTAL</span>
                    <span class="text-yellow-400 text-2xl font-black">
                        {{ number_format($reservation->total_price, 2) }} DH
                    </span>
                </div>
            </div>
            @empty
            <div class="col-span-1 md:col-span-2 lg:col-span-3 text-center py-12">
                <div class="bg-gray-100 rounded-3xl p-12">
                    <p class="text-gray-500 text-xl mb-4">Aucune réservation trouvée.</p>
                    <a href="{{ route('search') }}" class="text-blue-900 font-bold hover:underline">Réserver un voyage maintenant &rarr;</a>
                </div>
            </div>
        @endforelse
        
    </div>
</div>
@endsection