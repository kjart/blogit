<?php
if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $author = $_POST['author'];
    $post = $_POST['post'];
    $result = array("title"=>$title, "Author"=>$author, "post"=>$post);
    echo json_encode($result);
}

?>
