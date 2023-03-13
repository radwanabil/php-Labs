<?php
function remember_var($var)
{
    if (isset($_POST[$var]) && !empty($_POST[$var])) {
        return $_POST[$var];
    }
}
function save_to_file()
{
    $fp = fopen(_Saving_File_, "a+");
    // $string_written = implode(" , ",$_POST);
    $string_written_all = date("F j Y g:i a") . " , " . $_SERVER['REMOTE_ADDR'] . " , " . $_POST["name"] . " , " . $_POST["email"] . " , " . $_POST["message"];
    echo $string_written_all;
    fwrite($fp, $string_written_all . PHP_EOL);
    fclose($fp);
}
function read_from_file()
{
    $fp = fopen(_Saving_File_, "a+");
    $readed_string = fread($fp, filesize(_Saving_File_));
    fclose($fp);
    return $readed_string;
}

function convert_file_to_array()
{
    $arr = explode("\n", file_get_contents(_Saving_File_));
    return $arr;
}