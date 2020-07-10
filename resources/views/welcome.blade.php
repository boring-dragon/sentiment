<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sentiment Analysis Data Collection</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    @livewireStyles
</head>
<body>
    <div class="container mx-auto">
        <div class="flex justify-center items-center">
            @livewire('sentiment')
        </div>
       
    </div>
    

    @livewireScripts
</body>
</html>