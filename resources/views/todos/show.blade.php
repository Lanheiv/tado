<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <x-layout>
        <x-slot:title>
            {{ $todo->content }}
        </x-slot:title>
        
        <h1>{{ $todo->content }}</h1>
        <p>Izpildīts: {{ $todo->completed ? "Jā" : "Nē" }}</p>
    </x-layout>
</body>
</html>