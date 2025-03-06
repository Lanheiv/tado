<x-layout>
    <x-slot:title>
        {{ $title = "Diensgrāmata" }}
    </x-slot:title>
        
    <h1>Diensgrāmata</h1>

    <ul>
        <?php foreach ($diary as $diary) { ?>
            <li><a href="/diary/{{ $diary->id }}">{{ $diary->title }}</a></li>
        <?php } ?>
    </ul>
</x-layout>