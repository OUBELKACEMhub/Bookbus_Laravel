@extends('layouts.base')

@section('content')
<div class="container mx-auto px-4 py-12">
    <div class="max-w-5xl mx-auto">
        <h1 class="text-3xl font-black text-blue-900 mb-8 italic uppercase text-center">Finaliser votre Réservation</h1>
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-1">
                <div class="bg-blue-900 text-white rounded-3xl p-8 shadow-xl sticky top-8">
                    <h3 class="text-xl font-bold mb-6 border-b border-blue-800 pb-4">Détails du voyage</h3>
                    
                    <div class="space-y-6">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-blue-300 text-xs uppercase font-bold tracking-widest">Départ</p>
                                <p class="text-lg font-bold">{{ $segment->departure_city }}</p>
                            </div>
                            <div class="text-right">
                                <p class="text-blue-300 text-xs uppercase font-bold tracking-widest">Arrivée</p>
                                <p class="text-lg font-bold">{{ $segment->arrival_city }}</p>
                            </div>
                        </div>

                        <div class="bg-blue-800 rounded-2xl p-4">
                            <div class="flex items-center gap-3 mb-2">
                                <i class="fas fa-calendar-alt text-yellow-500"></i>
                                <span class="font-bold">{{ \Carbon\Carbon::parse($programme->date_depart)->format('d M Y') }}</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <i class="fas fa-clock text-yellow-500"></i>
                                <span class="font-bold">{{ \Carbon\Carbon::parse($programme->heure_depart)->format('H:i') }}</span>
                            </div>
                        </div>

                        <div class="pt-6 border-t border-blue-800">
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-blue-300">Passagers</span>
                                <span class="font-bold">x{{ $passengerCount }}</span>
                            </div>
                            <div class="flex justify-between items-center text-yellow-500 font-black text-2xl pt-2 border-t border-blue-800">
                                <span>TOTAL</span>
                                <span>{{ number_format($totalPrice, 2) }} DH</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-2">
                <div class="bg-white rounded-3xl shadow-xl p-8 md:p-12 border border-gray-100">
                    <h3 class="text-2xl font-black text-blue-900 mb-8 flex items-center gap-3">
                        <i class="fas fa-credit-card text-yellow-500"></i>
                        Paiement par Carte
                    </h3>
<!--  -->
                    <form action="{{ route('reserver.store') }}" method="POST" id="payment-form">
                        @csrf
                        <input type="hidden" name="segment_id" value="{{ $segment->id }}">
                        <input type="hidden" name="programme_id" value="{{ $programme->id }}">

                        <div class="space-y-6">
                            <div class="flex flex-col gap-2">
                                <label class="text-sm font-bold text-gray-700 ml-1 uppercase tracking-tight">Nom Complet du titulaire</label>
                                <input type="text" name="card_name" required placeholder="Ahmed Oubelkacem"
                                    class="w-full px-5 py-4 bg-gray-50 border border-gray-200 rounded-2xl focus:ring-2 focus:ring-blue-900 focus:border-transparent outline-none transition-all">
                            </div>

                            <div class="flex flex-col gap-2">
                                <label class="text-sm font-bold text-gray-700 ml-1 uppercase tracking-tight">Numéro de Carte</label>
                                <div class="relative">
                                    <input type="text" name="card_number" required placeholder="xxxx xxxx xxxx xxxx" maxlength="19"
                                        class="w-full pl-5 pr-12 py-4 bg-gray-50 border border-gray-200 rounded-2xl focus:ring-2 focus:ring-blue-900 focus:border-transparent outline-none transition-all">
                                    <i class="fab fa-cc-visa absolute right-5 top-1/2 -translate-y-1/2 text-2xl text-gray-400"></i>
                                </div>
                            </div>

                            <div class="grid grid-cols-2 gap-6">
                                <div class="flex flex-col gap-2">
                                    <label class="text-sm font-bold text-gray-700 ml-1 uppercase tracking-tight">Date d'expiration</label>
                                    <input type="text" name="expiry" required placeholder="MM/YY" maxlength="5"
                                        class="w-full px-5 py-4 bg-gray-50 border border-gray-200 rounded-2xl focus:ring-2 focus:ring-blue-900 focus:border-transparent outline-none transition-all text-center">
                                </div>
                                <div class="flex flex-col gap-2">
                                    <label class="text-sm font-bold text-gray-700 ml-1 uppercase tracking-tight">CVC/CVV</label>
                                    <input type="text" name="cvv" required placeholder="123" maxlength="3"
                                        class="w-full px-5 py-4 bg-gray-50 border border-gray-200 rounded-2xl focus:ring-2 focus:ring-blue-900 focus:border-transparent outline-none transition-all text-center">
                                </div>
                            </div>

                            <div class="flex items-center gap-4 p-4 bg-yellow-50 rounded-2xl text-sm text-yellow-800 border border-yellow-100">
                                <i class="fas fa-lock"></i>
                                <p>Vos données de paiement sont cryptées et sécurisées. BookBus ne stocke pas vos codes secrets.</p>
                            </div>

                            <button type="submit" 
                                class="w-full bg-blue-900 text-white font-black text-xl py-5 rounded-2xl shadow-lg shadow-blue-100 hover:bg-blue-800 transition-all transform hover:scale-[1.01] active:scale-95 mt-4">
                                PAYER 
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection