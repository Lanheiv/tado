<x-layout>
    <x-slot:title>
        Rediģēt: {{ $diarys->title }}
    </x-slot:title>
    
    <div class="box">
        <h1>{{ $diarys->title }} reģidēšana</h1>

        <form class="create" method="POST" action="/diary/{{ $diarys->id }}">
            @csrf
            @method('PUT')

            <label>
                Virsraksts:
                <input type="text" name="title" value="{{ $diarys->title }}">
            </label>
            @error("title")
                <p>{{ $message }}</p>
            @enderror

            <label>
                Datums:
                <input type="date" name="date" value="{{ $diarys->date }}">
            </label>
            @error("date")
                <p>{{ $message }}</p>
            @enderror

            <label>
                Ieraksts:
                <input type="text" name="body" value="{{ $diarys->body }}">
            </label>
            @error("body")
                <p>{{ $message }}</p>
            @enderror
            
            <button>Rediģēt</button>
        </form>
    </div>
</x-layout>