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
            <form method="POST">
                @csrf
                <label>Image</label><br>
                <img src="{{ $decoded_info->items[0]->volumeInfo->imageLinks->thumbnail }}" alt="Book Image"><br>
                <label>Title</label><br>
                <input type="text" id="title" name="title" value={{$decoded_info->items[0]->volumeInfo->title}}
                    style="width:100%;"><br>
                <label>Authors</label><br>
                <input type="text" id="author" name="author"
                    value={{$decoded_info->items[0]->volumeInfo->authors[0]}}><br>
                <label>Publisher</label><br>
                <input type="text" id="publisher" name="publisher"
                    value={{  $decoded_info->items[0]->volumeInfo->publisher}}><br>
                <label>Published Date</label><br>
                <input type="text" id="published_date" name="published_date"
                    value={{ $decoded_info->items[0]->volumeInfo->publishedDate }}><br>
                <label>Description</label><br>
                <textarea type="text" id="description"
                    name="description">{{$decoded_info->items[0]->volumeInfo->description}}</textarea><br>
                <label>Page Count</label><br>
                <input type="text" id="page_count" name="page_count"
                    value={{$decoded_info->items[0]->volumeInfo->pageCount  }}><br>
                <label>Category</label><br>
                <input type="text" id="category" name="category"
                    value={{$decoded_info->items[0]->volumeInfo->categories[0]  }}>

                <input type="submit" value="Submit" name="submit_button">
            </form>
        </div>
    </body>

</html>
