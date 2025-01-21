<!DOCTYPE html>
<html>
<head>
    <title>Search</title>
    <style>
        body {
            font-family: 'Roboto', Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(to right, #6a11cb, #2575fc);
            color: #fff;
        }

        .container {
            text-align: center;
            background: #fff;
            color: #333;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
            width: 90%;
            max-width: 500px;
            animation: fadeIn 1s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: scale(0.9);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        h1 {
            margin-bottom: 20px;
            font-size: 2.5em;
            color: #333;
        }

        form {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }

        input[type="text"] {
            width: 100%;
            max-width: 300px;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 25px;
            font-size: 1em;
            transition: box-shadow 0.3s ease, border-color 0.3s ease;
        }

        input[type="text"]:focus {
            outline: none;
            box-shadow: 0 0 10px rgba(106, 17, 203, 0.5);
            border-color: #6a11cb;
        }

        button {
            margin-left: 10px;
            padding: 12px 20px;
            border: none;
            border-radius: 25px;
            background: #6a11cb;
            color: white;
            font-size: 1em;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        button:hover {
            background-color: #4a0dbb;
            transform: translateY(-3px);
        }

        ul {
            list-style: none;
            padding: 0;
            margin-top: 20px;
        }

        ul li {
            margin: 15px 0;
            padding: 15px;
            background: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        ul li h3 {
            margin: 0;
            font-size: 1.2em;
            color: #333;
        }

        ul li p {
            margin: 5px 0 0;
            color: #666;
        }

        h2 {
            margin-bottom: 15px;
            font-size: 1.8em;
            color: #333;
        }

        @media (max-width: 600px) {
            h1 {
                font-size: 2em;
            }

            h2 {
                font-size: 1.5em;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Search</h1>
        <form method="GET" action="{{ route('search.index') }}">
            <input type="text" name="query" placeholder="Search..." value="{{ old('query', $query) }}">
            <button type="submit">Search</button>
        </form>
        @if($query)
            <h2>Results for "{{ $query }}":</h2>
            <ul>
                @forelse ($results as $result)
                    <li>
                        <h3>{{ $result->name }}</h3>
                        <p>{{ $result->description }}</p>
                    </li>
                @empty
                    <li>No results found.</li>
                @endforelse
            </ul>
        @endif
    </div>
</body>
</html>
