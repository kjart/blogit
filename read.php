<?php
// required headers
class Read{
    public function readPost(){
        //this allows you to read all the posts
        $directory = "posts/";
        $dir = opendir($directory);
        while (($file = readdir($dir)) !== false) {
            $filename = $directory . $file;
            $type = filetype($filename);
            if ($type == 'file') {
                $contents = file_get_contents($filename);
                $items = explode('¬', $contents);
                return $contents;
                /*
                echo '<table width="500" border="1" cellpadding="4">';
                foreach ($items as $item) {
                    echo "<tr><td>$item</td></tr>\n";
                }
                echo '</table>';
                */
            }
        }
        closedir($dir);
    }
}
?>