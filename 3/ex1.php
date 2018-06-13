<?php
/**
 * Created by PhpStorm.
 * User: Виктор
 * Date: 13.06.2018
 * Time: 9:52
 */

function getFileList($path){
    $files_str = [];
    $files = @scandir($path);
    if (!empty($files)){
        foreach ($files as $file){
            if(is_dir($path.DIRECTORY_SEPARATOR.$file) && $file != '.' && $file != '..'){
                //echo $path.DIRECTORY_SEPARATOR.$file.PHP_EOL;
                $files_in = getFileList($path.DIRECTORY_SEPARATOR.$file);
                if ($files_in){
                    foreach ($files_in as $file_in){
                        $files_str[] = $file_in;
                    }
                }
            }
            elseif ($file != '.' && $file != '..') {
                $files_str[] = $file;
            }
        }
    }
    return $files_str;
}

$f = getFileList("D:\\Dropbox");
var_dump($f);