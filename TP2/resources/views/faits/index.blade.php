<x-layout titre="Fait aléatoire sur les chats">

    <div>
        <a href="{{ route('faits.create') }}">Ajoutez un fait</a>
    </div>

    <div class="fait">
        <h2>
            {{ $fait->texte }}
        </h2>
    </div>
    
</x-layout>
