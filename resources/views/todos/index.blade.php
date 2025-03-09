<x-layout>
    <x-slot:title>
        Uzdevumi
    </x-slot:title>
    
    <div class="list box">
        <h1>Uzdevumi</h1>

        <ul>
            <?php foreach ($todos as $todo) { ?>
                <li><a href="/todos/{{ $todo->id }}">{{ $todo->content }}</a></li>
            <?php } ?>
        </ul>
    </div>
</x-layout>