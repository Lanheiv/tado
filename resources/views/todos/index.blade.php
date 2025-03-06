<x-layout>
    <x-slot:title>
        {{ $title = "Todo" }}
    </x-slot:title>
    
    <h1>Visi veicamie uzdevumi</h1>

    <ul>
        <?php foreach ($todos as $todo) { ?>
            <li><a href="/todos/{{ $todo->id }}">{{ $todo->content }}</a></li>
        <?php } ?>
    </ul>
</x-layout>