<?php
// namespace src;

class Posts {
    // Private property to get the path where posts are stored
    private $directory = "posts/";

    public function read()
    {
        $posts = [];
        
        $dir = opendir($this->directory);
        while (($file = readdir($dir)) !== false) {
            $filename = $this->directory . $file;
            $type = filetype($filename);
            if ($type == 'file') {
                $contents = file_get_contents($filename);
                $items = explode('¬', $contents);
                
                foreach ($items as $item) {
                    if($item !== ""){
                        array_push($posts, $item);
                    }
                }
            }
        }
        closedir($dir);
        
        return $posts;
    }

    public function dd($value) {
        echo '<pre>';
        die(var_dump($value));
        echo '</pre>';
    }
}