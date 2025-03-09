<x-layout>
    <x-slot:title>
        Izveidot uzdevumu
    </x-slot:title>

    <div class="box">
        <h1>Izveidot uzdevumu</h1>
        
        <form class="create" method="POST" action="/todos">
            @csrf

            <input name="content" placeholder="Šeti ievadiet uzdevumu" require />
            @error("content")
                <p>{{ $message }}</p>
            @enderror
            <button>Saglabāt</button>
        </form>
    </div>
</x-layout>