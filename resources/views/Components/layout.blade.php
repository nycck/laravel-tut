<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    
<nav>
    <x-anchor-link href="/" text="Home" />
    <x-anchor-link href="/about" text="About" />
    <x-anchor-link href="/contact" text="Contact" />
</nav>

    {{ $slot}}
</body>
</html>