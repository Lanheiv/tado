<x-layout>
    <x-slot:title>
        Diensgrāmata
    </x-slot:title>
    
    <div class="list box">
        <h1>Diensgrāmata</h1>

        <ul>
            <?php foreach ($diary as $diary) { ?>
                <li><a href="/diary/{{ $diary->id }}">{{ $diary->title }}</a></li>
            <?php } ?>
        </ul>
    </div>
</x-layout>