<?php

class FileUtility
{
    // Method to write data to a file
    public static function writeToFile($filename, $data, $mode = 'w')
    {
        $file = fopen($filename, $mode);
        if ($file === false) {
            throw new Exception("Unable to open file: $filename");
        }
        foreach ($data as $line) {
            fputcsv($file, $line);
        }
        fclose($file);
    }

    // Method to read a file and return its content as an array
    public static function readFromFile($filename)
    {
        if (!file_exists($filename)) {
            throw new Exception("File not found: $filename");
        }
        $data = array_map('str_getcsv', file($filename));
        return $data;
    }
}