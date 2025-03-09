<x-layout>
    <x-slot:title>
        Izveidot ierakstu
    </x-slot:title>

    <div class="box">
        <h1>Izveidot ierakstu</h1>

        <form class="create" method="POST" action="/diary">
            @csrf

            <input name="title" placeholder="Šeit ievadiet virsraksts" required />
            <input name="body" placeholder="Šeti ievaiet rakstu" required />
            <input type="date" name="date"/>

            <button>Saglabāt</button>
        </form>
    </div>
</x-layout>