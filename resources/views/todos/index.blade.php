<x-layout>
    <x-slot:title>
        Uzdevumi
    </x-slot:title>
    
    <div class="list box">
        <h1>Uzdevumi</h1>

        <ul>
            @foreach ($todo as $task)
                <li><a href="/todos/{{ $task->id }}">{{ $task->content }}</a></li>
            @endforeach
        </ul>
    </div>
</x-layout>
