<?php
require 'vendor/autoload.php';

use League\HTMLToMarkdown\HtmlConverter;

$converter = new HtmlConverter(array('strip_tags' => true));
$converter->getConfig()->setOption('italic_style', '*');
$converter->getConfig()->setOption('bold_style', '__');
$converter->getConfig()->setOption('hard_break', true);

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $post = $_POST['post'];
    date_default_timezone_set('Africa/Lagos');
    $date = date('m-d-Y', time());
    $time = time();

    try {
        //convert html to markdown
        $markdownPost = $converter->convert($post);

        $markdown = ["Author" => $author, "Title" => $title, "Post" => $post, "Date" => $date, "Time" => $time];

        $redactedTitle = strtolower(preg_replace('/\s+/', '-', $title));
        //add the directory and file name
        $filename = '.' . DIRECTORY_SEPARATOR . "posts" . DIRECTORY_SEPARATOR . $redactedTitle . "-" . $date . "-" . $time . '.md';
        //php native function to write to the file
        foreach ($markdown as $key => $value) {
            $handle = file_put_contents($filename, $key . ": " . $value . "\r\n", FILE_APPEND);
        }
        //Paul codes from here
        
    } catch (\Throwable $th) {

        throw new Exception("Error Processing Request", 1);
    }
}
