<x-layout>
    <x-slot:title>
        Sākums
    </x-slot:title>

    <div class="welcome">
        <h1>Esiet sveicināts {{ Auth::user()->first_name }} Tado Mājaslapā!</h1>
        <h3>Jūs esat iegājuši savā kontā, japiiii</h3>

        <form method="POST" action="/logout">
            @csrf
            @method("delete")

            <button>Iziet</button>
        </form>
    </div>
</x-layout>