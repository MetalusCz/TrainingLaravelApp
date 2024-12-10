<x-layouts.app>

    <main>
        <div class="container mx-auto p-6">
            <h1 class="text-3xl font-bold mb-6">Vytvořit nového učitele</h1>

            <form action="{{ route('teacher.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="title" class="block text-gray-700">Titul</label>
                    <input type="text" id="title" name="title" class="w-full p-2 border rounded" required>
                </div>
                <div class="mb-4">
                    <label for="name" class="block text-gray-700">Jméno</label>
                    <input type="text" id="name" name="name" class="w-full p-2 border rounded" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email</label>
                    <input type="email" id="email" name="email" class="w-full p-2 border rounded" required>
                </div>
                <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-500">Uložit učitele</button>
            </form>
        </div>
    </main>

</x-layouts.app>
