<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./app.css" rel="stylesheet">
    <title>Training App</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-slate-300">
    <section class="container pt-10">

        <header class="w-full bg-sky-400 p-4 flex items-center justify-between shadow-slate-400 shadow-2xl">
            <div class="">
                <img src="https://ui-avatars.com/api/?name={{auth()->user()->name ?? ''}}" class="rounded-full w-10 h-10" alt="">
            </div>


            <div>
                @if(session('success'))
                <div class="text-xl font-medium text-white p-2 bg-green-800">
                    {{ session('success') }}
                </div>
                @endif
            </div>

            <div class="text-right">
                @auth
                <div class="flex gap-2">
                    @if (request()->is('dashboard'))
                    <a href="/" class="bg-blue-600 hover:bg-blue-500 text-white font-semibold p-2 rounded">Back to Homepage</a>
                    @else
                    <a href="/dashboard" class="bg-blue-600 hover:bg-blue-500 text-white font-semibold p-2 rounded">Dashboard</a>
                    @endif

                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="bg-blue-600 hover:bg-blue-500 text-white font-semibold p-2 rounded" type="submit">Odhlásit se</button>
                    </form>
                </div>

                @endauth

                @guest
                <!-- Tady můžeš vložit tlačítko pro přihlášení nebo jiný obsah pro nepřihlášené uživatele -->
                <a href="/login" class="bg-blue-600 hover:bg-blue-500 text-white font-semibold p-2 rounded">Přihlásit se</a>
                @endguest
            </div>

        </header>
        <main>
            {{ $slot }}

        </main>
    </section>
</body>

</html>