@props(["champ"])

@error($champ)
    <p class="bg-red-300 text-red-800">{{ $message }}</p>
@enderror
