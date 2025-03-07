<x-layout>
    <x-slot:title>
        {{ $diarys->title }}
    </x-slot:title>
        
    <h1>{{ $diarys->title }}</h1>

    <p>Ieraksts: {{ $diarys->body}}</p>
    <p>Izveidots: {{ $diarys->date}}</p>
</x-layout>
