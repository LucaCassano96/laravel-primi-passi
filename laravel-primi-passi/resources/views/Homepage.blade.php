<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <nav>

            <a href="http://127.0.0.1:8000/contacts">Contacts</a>
            <a href="http://127.0.0.1:8000">Home</a>

        </nav>

        <h1>{{$title}} from {{ $name }}!</h1>


    </body>
</html>
