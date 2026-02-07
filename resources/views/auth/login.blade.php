<x-guest-layout>
    <div class="w-full max-w-md mx-auto overflow-hidden">
        
        <div class="text-center mb-8">
            <div class="bg-blue-50 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4 text-[#1e3a8a]">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                </svg>
            </div>
            <h2 class="text-3xl font-black text-[#1e3a8a] tracking-tight">BookBus Login</h2>
            <p class="text-gray-500 mt-2 text-sm">Bienvenue ! Connectez-vous pour réserver</p>
        </div>

        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}" class="bg-white p-8 rounded-[2rem] shadow-2xl border border-blue-100">
            @csrf

            <div class="mb-5">
                <label for="email" class="block text-sm font-bold text-gray-700 mb-2 pl-1">Email</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                        </svg>
                    </div>
                    <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username"
                        class="w-full pl-11 pr-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-[#1e3a8a] focus:border-transparent outline-none transition-all text-gray-800 placeholder-gray-400"
                        placeholder="nom@exemple.com">
                </div>
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500 text-xs font-bold" />
            </div>

            <div class="mb-6">
                <label for="password" class="block text-sm font-bold text-gray-700 mb-2 pl-1">Mot de passe</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </div>
                    <input id="password" type="password" name="password" required autocomplete="current-password"
                        class="w-full pl-11 pr-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-[#1e3a8a] focus:border-transparent outline-none transition-all text-gray-800 placeholder-gray-400"
                        placeholder="••••••••">
                </div>
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500 text-xs font-bold" />
            </div>

            <div class="flex items-center justify-between mb-8">
                <label for="remember_me" class="inline-flex items-center cursor-pointer group">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-[#1e3a8a] shadow-sm focus:ring-[#1e3a8a] cursor-pointer" name="remember">
                    <span class="ms-2 text-sm text-gray-600 group-hover:text-[#1e3a8a] transition-colors">{{ __('Se souvenir de moi') }}</span>
                </label>

                @if (Route::has('password.request'))
                    <a class="text-sm font-bold text-[#1e3a8a] hover:text-yellow-500 transition-colors" href="{{ route('password.request') }}">
                        {{ __('Mot de passe oublié?') }}
                    </a>
                @endif
            </div>

            <button type="submit" class="w-full bg-[#1e3a8a] text-white font-black text-lg py-3.5 rounded-xl shadow-lg shadow-blue-200 hover:bg-[#152c6f] hover:shadow-xl hover:-translate-y-0.5 transition-all duration-300">
                {{ __('SE CONNECTER') }}
            </button>

            @if (Route::has('register'))
                <div class="mt-8 text-center">
                    <p class="text-gray-500 text-sm">
                        Pas encore de compte? 
                        <a href="{{ route('register') }}" class="font-bold text-[#1e3a8a] hover:text-yellow-500 hover:underline transition-colors ml-1">
                            Créer un compte
                        </a>
                    </p>
                </div>
            @endif
        </form>
    </div>
</x-guest-layout>