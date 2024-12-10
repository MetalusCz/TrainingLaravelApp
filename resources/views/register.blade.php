<x-layouts.guest>

  <div class="card px-8 py-6 rounded-lg bg-gray-800 w-72">
    <h1 class="text-center font-bold text-3xl text-white">Register</h1>
    <form class="my-6" action="/register" method="POST">
      @csrf

      <x-input placeholder="Name" type="text" name="name" id="name"/>
      <x-input  placeholder="Email" type="email" name="email" id="email"/>
      <x-input  placeholder="Password" type="password" name="password" id="password"/>
      <x-input  placeholder="Again Password" type="password" name="password_confirmation" id="password_confirmation"/>
      <button class="bg-blue-600 hover:bg-blue-500 text-white font-semibold p-2 mt-3 rounded w-[100%]" type="submit">Register</button>
    </form>
  
  </div>

</x-layouts.guest>