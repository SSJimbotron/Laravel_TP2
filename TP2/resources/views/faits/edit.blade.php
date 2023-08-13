<x-layout titre="Modifiez un fait">

    {{-- FORMULAIRE --}}
    <form action="{{ route('faits.update') }}" method="POST">
        @csrf

        <input type="hidden" name="id" value="{{ $fait->id }}">

        {{-- TEXTE --}}
        <div>
            <label for="texte">Texte</label>

            <x-forms.erreur champ="texte" />
            <textarea name="texte" id="texte" cols="10" rows="4">{{ old('texte') ?? $fait->texte }}</textarea>
        </div>

        {{-- SUBMIT --}}
        <div>
            <input type="submit" value="Modifier!" />
        </div>
    </form>
</x-layout>
