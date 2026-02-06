@extends('layouts.base2')

@section('content')
<div class="container mx-auto p-0">
    <h1 class="text-2xl font-bold mb-5 text-gray-800">Programme des Trajets</h1>

    <div class="overflow-x-auto bg-white shadow-md rounded-lg">
        <table class="min-w-full leading-normal">
            <thead>
                <tr class="bg-blue-600 text-white text-left text-sm uppercase font-semibold">
                    <th class="px-5 py-3 border-b">ID Route</th>
                    <th class="px-5 py-3 border-b">Date de Départ</th>
                    <th class="px-5 py-3 border-b">Heure Départ</th>
                    <th class="px-5 py-3 border-b">Heure Arrivée</th>
                    <th class="px-5 py-3 border-b">Statut</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @foreach($programmes as $programme)
                <tr class="hover:bg-gray-100 transition-colors">
                    <td class="px-5 py-4 border-b">
                        <span class="font-bold text-blue-500">#{{ $programme->route_id }}</span>
                    </td>
                    <td class="px-5 py-4 border-b text-sm">
                        {{ \Carbon\Carbon::parse($programme->date_depart)->format('d/m/Y') }}
                    </td>
                    <td class="px-5 py-4 border-b text-sm">
                        <span class="bg-green-100 text-green-800 py-1 px-3 rounded-full text-xs font-semibold">
                            {{ $programme->heure_depart }}
                        </span>
                    </td>
                    <td class="px-5 py-4 border-b text-sm text-red-600 font-medium">
                        {{ $programme->heure_arrivee }}
                    </td>
                    <td class="px-5 py-4 border-b text-xs text-gray-400">
                        MaJ: {{ $programme->updated_at->diffForHumans() }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @if($programmes->isEmpty())
        <div class="text-center py-10">
            <p class="text-gray-500 text-lg">Aucun programme disponible pour le moment.</p>
        </div>
    @endif
</div>
@endsection