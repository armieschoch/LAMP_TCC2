<?php 
    class FileHandler {

        private $filename;

        public function __construct($filename)
        {
            $this->filename = $filename;
        }

        public function readFile()
        {
            file_get_contents($this->filename) or
                          die("Can't create file!");
        
            //code to read data from the file goes here
            $contacts = json_decode($data);
            return $contacts;
        }


        public function writeFile($contacts)
        {
            $data = json_encode($contacts);
            //code to write data to the file goes here

            fwrite($filename) or 
                     die("Can't write to the file!");
            fclose($filename);

        }
    }
?>