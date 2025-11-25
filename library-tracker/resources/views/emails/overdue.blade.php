<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Over due loan</title>
</head>
<body>
Hello {{ $loan->user->name }}

The book {{ $loan->book->title }} you loan is overdue.
</body>
</html>
