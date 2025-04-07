<x-layout>
    <x-slot:title>
        Login
    </x-slot:title>

    <h1>Login</h1>

    <form method="POST" action="/login">
        @csrf

        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        
        <label>
            Gmail:
            <input name="email" type="email" require>
        </label>

        <label>
            Parole:
            <input name="password" type="password" require>
        </label>

        <button>Ieiet</button>
    </form>
</x-layout>