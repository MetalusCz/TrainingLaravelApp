<x-layouts.app>

    <main>
        <div class="container mx-auto p-6">
            <h1 class="text-3xl font-bold mb-6">Správa učitelů</h1>
            
            <!-- Tlačítko pro vytvoření nového učitele -->
            <div class="mb-4">
                <a href="{{ route('teacher.create') }}" class="bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-500">
                    Vytvořit nového učitele
                </a>
            </div>

            <!-- Seznam učitelů -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @if (auth()->check())
                    @foreach ($teachers as $teacher)
                        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                            <h2 class="text-xl font-semibold mb-2">{{ $teacher->title }} {{ $teacher->name }}</h2>
                            
                         

                            <!-- Tlačítka pro editaci a smazání -->
                            <div class="flex space-x-4">
                                <a href="{{ route('teacher.edit', $teacher->id) }}" class="text-blue-600 hover:text-blue-500">
                                    Upravit
                                </a>
                                <form action="{{ route('teacher.destroy', $teacher->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-500">
                                        Smazat
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </main>

</x-layouts.app>
