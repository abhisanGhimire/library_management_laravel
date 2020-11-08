<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ $title }}</title>
        <style>
               .container{
          
          width: 250px;
          height:100px;
margin-top: 15px;
margin-right:30px;
}
body{
    background-color:#799CDE;
}
        </style>
    </head>

    <body>
        <center>
        <div class="container">
            <form method="POST">
                @csrf
                <img src="{{ $decoded_info->items[0]->volumeInfo->imageLinks->thumbnail }}" alt="Book Image"><br>
                <label>Title:</label><br>
                <textarea type="text" id="title"
                    name="title" rows="2" cols="22">{{$decoded_info->items[0]->volumeInfo->title}}</textarea><br>
                <label>Authors:</label><br>
                <input type="text" id="author" name="author"
                    value={{$decoded_info->items[0]->volumeInfo->authors[0]}}><br>
                <label>Publisher:</label><br>
                <input type="text" id="publisher" name="publisher"
                    value={{  $decoded_info->items[0]->volumeInfo->publisher}}><br>
                <label>Published Date:</label><br>
                <input type="text" id="published_date" name="published_date"
                    value={{ $decoded_info->items[0]->volumeInfo->publishedDate }}><br>
                <label>Description:</label><br>
                <textarea type="text" id="description"
                    name="description" rows="5" cols="22">{{$decoded_info->items[0]->volumeInfo->description}}</textarea><br>
                <label>Page Count:</label><br>
                <input type="text" id="page_count" name="page_count"
                    value={{$decoded_info->items[0]->volumeInfo->pageCount  }}><br>
                <label>Category:</label><br>
                <input type="text" id="category" name="category"
                    value={{$decoded_info->items[0]->volumeInfo->categories[0]  }}<br>

                <br><br><input type="submit" value="Submit" name="submit_button">
            </form>
        </div>
        </center>
    </body>

</html>
