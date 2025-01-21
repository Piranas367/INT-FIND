<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoekbalk</title>
</head>
<body>
    <h1>Zoekbalk</h1>
    <form method="GET" action="{{ url('/') }}">
        <input type="text" name="q" placeholder="Zoeken..." value="{{ $query ?? '' }}">
        <button type="submit">Zoeken</button>
    </form>

    <h2>Resultaten:</h2>
    <ul>
        @forelse ($data as $item)
            <li>
                <strong>{{ $item['name'] }}</strong>: {{ $item['description'] }}
            </li>
        @empty
            <li>Geen resultaten gevonden.</li>
        @endforelse
    </ul>
</body>
</html>
