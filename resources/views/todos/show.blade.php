<x-layout>
    <x-slot:title>
        {{ $todo->content }}
    </x-slot:title>
    
    <div class="box">
        <h1>{{ $todo->content }}</h1>
        
        <p>Izpildīts: {{ $todo->completed ? "Jā" : "Nē" }}</p>
        <p><a href="/todos/{{ $todo->id }}/edit">Rediģēt</a></p>
    </div>
</x-layout>
