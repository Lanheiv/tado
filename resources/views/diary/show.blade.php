<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <x-layout>
        <x-slot:title>
            {{ $diarys->title }}
        </x-slot:title>
        
        <h1>{{ $diarys->title }}</h1>
    </x-layout>
</body>
</html>