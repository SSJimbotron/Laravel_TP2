<x-layout titre="Ajoutez un fait">

    <div>
        {{-- FORMULAIRE --}}
        <form action="{{ route('faits.store') }}" method="POST">
            @csrf

            <div>
                {{-- Texte --}}
                <label for="texte"> Texte </label>
                <div class="mt-2">

                    <x-forms.erreur champ="texte" />
                    <input id="texte" name="texte" type="text" value="{{ old('texte') }}" autofocus />
                </div>
            </div>

            {{-- SUBMIT --}}
            <div>
                <input type="submit" value="Ajouter!" />
            </div>
        </form>

        {{-- LIEN RETOUR --}}
        <p>
            <a href="#">Retour aux faits</a>
        </p>
    </div>

</x-layout>
