<x-layout>
    <x-slot:title>
        Izveidot ierakstu
    </x-slot:title>

    <h1>Izveidot ierakstu</h1>

    <form method="POST" action="/diary">
        @csrf

        <input name="title" required />
        <input name="body" required />
        <input type="date" name="date"/>

        <button>Saglabāt</button>
    </form>
</x-layout>