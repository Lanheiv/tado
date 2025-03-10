<x-layout>
    <x-slot:title>
        Rediģēt: {{ $todo->content }}
    </x-slot:title>

    <div class="box">
        <h1>{{ $todo->content}} rediģēšana</h1>

        <form class="create" method="POST" action="/todos/{{ $todo->id }}">
            @csrf
            @method('PUT')

            <label>
                Teksts:
                <input type="text" name="content" value="{{ $todo->content }}">
            </label>
            @error("content")
                <p>{{ $message }}</p>
            @enderror

            <label>
                Izpildīts:
                <input name="completed" type="hidden" value="0">
                <input name="completed" type="checkbox" value="1" {{ old("completed", $todo->completed) ? 'checked' : '' }}>   
            </label>
            @error("completed")
                <p>{{ $message }}</p>
            @enderror
            
            <button>Rediģēt</button>
        </form>
    </div>
</x-layout>