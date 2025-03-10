<x-layout>
    <x-slot:title>
        {{ $diarys->title }}
    </x-slot:title>
    
    <div class="box">
        <h1>{{ $diarys->title }}</h1>

        <p>Ieraksts: {{ $diarys->body}}</p>
        <p>Izveidots: {{ $diarys->date}}</p>

        @if($diarys->update_date)
            <p>Atjaunots: {{ $diarys->update_date }}</p>
        @endif
        <p><a href="/diary/{{ $diarys->id }}/edit">Rediģēt</a></p>

        <form class="create" method="POST" action="/diary/{{ $diarys->id }}">
            @csrf
            @method('delete')

            <button></button>
        </form>
    </div>
</x-layout>
