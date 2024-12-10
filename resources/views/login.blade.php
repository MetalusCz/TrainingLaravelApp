<x-layouts.guest>

  <div class="row-flex justify-between">
    <div class="card px-8 py-6 rounded-lg bg-gray-800 w-72">
      <h1 class="text-center font-bold text-3xl text-white">Login</h1>
      <form action="/login" method="POST" class="my-6">
        @csrf

        <x-input placeholder="Email" type="email" name="email" />
        <x-input placeholder="Password" type="password" name="password" />
        <button class="bg-blue-600 hover:bg-blue-500 text-white font-semibold p-2 mt-3 rounded w-[100%]" type="submit">Login</button>
      </form>
    </div>

    
  </div>

</x-layouts.guest>