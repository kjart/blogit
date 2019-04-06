
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=yf2ew3qagtmjjleadr668l8choppcsnxno3lflkpbi98hj4t"></script>
  <script>tinymce.init({ selector:'textarea', plugins: 'a11ychecker advcode casechange formatpainter linkchecker link lists checklist media mediaembed pageembed permanentpen powerpaste tinydrive tinymcespellchecker',
   toolbar: 'a11ycheck addcomment link showcomments casechange checklist code formatpainter insertfile pageembed permanentpen',
   toolbar_drawer: 'sliding',menubar:"insert" });</script>
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
            <textarea name="post"></textarea>
            </br>
            <input type="submit" class="button" name = "submit">

        </form>

        </main>
</body>
</html>