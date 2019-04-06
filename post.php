<?php
if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $author = $_POST['author'];
    $post = $_POST['post'];
    date_default_timezone_set('Africa/Lagos');
$date = date('m/d/Y h:i:s a', time());
    $result = array("title"=>$title, "Author"=>$author, "post"=>$post, "date"=>$date);
    echo json_encode($result);
}

?>
