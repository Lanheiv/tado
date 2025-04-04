<x-layout>
    <x-slot:title>
        Reģistrācija
    </x-slot:title>

    <h1>Reģistrācija</h1>

    <form method="post" action="/register">
        @csrf

        <label>
            Lietotāja vārds:
            <input name="first_name" type="text">
        </label>

        <label>
            Lietotāja uzvārds:
            <input name="last_name" type="text">
        </label>

        <label>
            Email:
            <input name="email" type="email">
        </label>

        <label>
            Parole:
            <input name="password" type="password">
            <input name="password_confirmation" type="password">
        </label>

        <button>Reģtrēties</button>
    </form>
</x-layout>