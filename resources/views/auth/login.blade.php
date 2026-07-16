<x-guest-layout>
    <h1 class="text-xl font-bold text-gray-900 dark:text-white text-center mb-1">Masuk</h1>
    <p class="text-sm text-gray-500 dark:text-gray-400 text-center mb-6">Masukkan email dan password untuk masuk</p>

    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-4">
        @csrf

        <div class="flex flex-col gap-1.5">
            <label for="email" class="text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
            <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username"
                   placeholder="name@example.com"
                   class="w-full border-gray-300 dark:border-gray-700 bg-gray-50 dark:bg-gray-800 rounded-xl text-sm shadow-sm focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all">
            <x-input-error :messages="$errors->get('email')" class="mt-1" />
        </div>

        <div class="flex flex-col gap-1.5">
            <div class="flex justify-between items-center">
                <label for="password" class="text-sm font-medium text-gray-700 dark:text-gray-300">Password</label>
                @if (Route::has('password.request'))
                    <a class="text-xs font-semibold text-primary-600 dark:text-primary-400 hover:underline" href="{{ route('password.request') }}">
                        Lupa password?
                    </a>
                @endif
            </div>
            <input id="password" type="password" name="password" required autocomplete="current-password"
                   placeholder="Masukkan password"
                   class="w-full border-gray-300 dark:border-gray-700 bg-gray-50 dark:bg-gray-800 rounded-xl text-sm shadow-sm focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all">
            <x-input-error :messages="$errors->get('password')" class="mt-1" />
        </div>

        <div class="flex items-center">
            <label for="remember_me" class="inline-flex items-center cursor-pointer">
                <input id="remember_me" type="checkbox" name="remember"
                       class="rounded border-gray-300 dark:border-gray-700 text-primary-600 shadow-sm focus:ring-primary-500 focus:ring-offset-0 bg-gray-50 dark:bg-gray-800">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">Ingat saya</span>
            </label>
        </div>

        <div>
            <button type="submit"
                    class="w-full bg-primary-600 hover:bg-primary-700 text-white rounded-xl px-4 py-2.5 text-sm font-semibold transition-colors shadow-sm">
                Masuk
            </button>
        </div>
    </form>

    <p class="mt-5 text-center text-sm text-gray-600 dark:text-gray-400">
        Belum punya akun?
        <a href="{{ route('register') }}" class="font-semibold text-primary-600 dark:text-primary-400 hover:underline">
            Daftar
        </a>
    </p>
</x-guest-layout>
