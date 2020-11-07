<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ $title }}</title>
    </head>

    <body>
        <div class="container">
            <form method="POST" action="{{ route('isbn.store') }}">
                @csrf
                <input type="text" id="isbn" name="isbn" placeholder="Enter ISBN">

                <input type="submit" value="Submit" name="submit_button">
            </form>
        </div>
    </body>

</html>
