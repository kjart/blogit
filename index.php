
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post page</title>
</head>
<body>
        <h1> Add Post</h1>
        <main>
           
        <form method = "post" action = "post.php" enctype = "multipart/form-data">
            <label for = "Title"></label>
            <input type = "text" placeholder = "Post Title" name = "title" required>
            </br>
            <label for = "Author"></label>
            <input type = "text" placeholder = "Author" name = "author" required> 
            </br>
            <label for="Post"></label>
            <textarea name="post" rows="10" cols="50">Write something here</textarea> 
            </br>
            <input type="submit" class="button" name = "submit">
        
        </form>
        
        </main>
</body>
</html>