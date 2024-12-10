<div class="w-full mx-auto">
    <input {{$attributes}} 
        class="p-2 my-2 rounded w-[100%] focus:outline-blue-600" />
        
        @error($attributes['name'])
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror
</div>