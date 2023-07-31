<?php
$temp_in =  __DIR__ . "/temp_in/";
$temp_done =  __DIR__ . "/temp_done/";

if ($handle = opendir($temp_in)) {
    while (false !== ($file = readdir($handle))) {
        if ('.' === $file) continue;
        if ('..' === $file) continue;

        $result = shell_exec('gs -sDEVICE=pdfwrite -dCompatibilityLevel=1.4 -dNOPAUSE -dBATCH -sColorConversionStrategy=RGB -sOutputFile="' . $temp_done . $file . '" "' . $temp_in . $file . '" 2>&1');
        echo $result;
    }
    closedir($handle);
}
