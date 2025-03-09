<x-layout>
    <x-slot:title>
        Rediģēt: {{ $todo->content }}
    </x-slot:title>

    <h1>Uzdevuma rediģēšana</h1>

    <form method="POST" action=""/todos/ {{ $todo->id }}"">
        <input type="text">
        <button>Rediģēt</button>
    </form>
</x-layout>