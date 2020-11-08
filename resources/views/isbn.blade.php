<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ $title }}</title>
        <style>
        body{
            background-color:#008ae6;
        }
           .container{
          
            width: 250px;
            height:100px;
            border: 5px solid #000d33;
  margin-top: 230px;
  margin-right:30px;
  background-image: linear-gradient(#ccebff,#b3e0ff,#80ccff,#4db8ff,#1aa3ff);
}

input[type=text]{
    margin-top:30px;
    margin-left:0px;
}
input[type=submit] {
    margin-top:0px;
    margin-left:10x;
}
        </style>
    </head>
    <body>
    <center>
        <div class="container">
            <form method="POST" action="{{ route('isbn.store') }}">
                @csrf
                <input type="text" id="isbn" name="isbn" placeholder="Enter ISBN"><br><br>

                <input type="submit" value="Submit" name="submit_button">
            </form>
        </div>
        </center>
    </body>

</html>
