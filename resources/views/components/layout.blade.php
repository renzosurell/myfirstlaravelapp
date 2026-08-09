@props([
    "title" => "Default Title",
]);

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{$title}} </title>

    <style>
        .card {
            background: #e3e3e3;
            padding: 1rem;
            text-align: center;
            max-width: 400px;
            margin: auto;
        }
    </style>
</head>
<body>
    
    <nav>
    <a href="/">Home</a>
    <a href="/about">About Us</a>
    <a href="/contact">Contact Us</a>
    </nav>

	<main>
	    {{ $slot }}
	</main>
    
</body>
</html>