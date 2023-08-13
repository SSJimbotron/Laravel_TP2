<x-layout titre="Tous les faits">
    <div>
        <h1>Tous les faits sur les chats</h1>
    </div>

    <main>
        @if ($faits->isEmpty())
            <h2>Aucun faits actuellement</h2>
        @else
            <ul>
                @foreach ($faits as $fait)
                    <li>
                        <p>{{ $fait->texte }}</p>
                    </li>

                    <div>
                        <a href="{{ route('faits.edit', ["id" => $fait->id]) }}">
                            <span class="material-icons">
                                edit
                            </span>
                        </a>
                        <a href="{{ route('faits.destroy', ["id" => $fait->id]) }}">
                            <span class="material-icons">
                                delete
                            </span>
                        </a>
                    </div>
                @endforeach
            </ul>
        @endif
    </main>

</x-layout>
