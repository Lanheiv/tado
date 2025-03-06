<x-layout>
    <x-slot:title>
        {{ $title = "Tukšums" }}
    </x-slot:title>
    
    <h1>Te nekā nav</h1>

    <ul>
        <?php foreach ($todos as $todo) { ?>
            <li><a href="/todos/{{ $todo->id }}">{{ $todo->content }}</a></li>
        <?php } ?>
    </ul>
</x-layout>