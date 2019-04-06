<?php
require 'vendor/autoload.php';

use League\HTMLToMarkdown\HtmlConverter;

$converter = new HtmlConverter();
$converter->getConfig()->setOption('italic_style', '*');
$converter->getConfig()->setOption('bold_style', '__');
$converter->getConfig()->setOption('hard_break', true);


if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $author = $_POST['author'];
    $post = $_POST['post'];
    date_default_timezone_set('Africa/Lagos');
    $date = date('m/d/Y h:i:s a', time());

    //convert html to markdown
    $markdown = $converter->convert($post);

    //add the directory and file name
    $filename = '.'.DIRECTORY_SEPARATOR."posts".DIRECTORY_SEPARATOR.$date.$author.'.md';
    //php native function to write to the file
    $handle = file_put_contents($filename, $markdown);
}

?>
