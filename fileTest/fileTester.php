<?php
    $result = file_exists("foo2.txt");

    if($result) 
    {
        echo "File exists <br />";

    } else {
        echo "Can't find the file <br />";
    }

    // $file_handle = fopen("myfile.txt", 'w') or
    //                 die("Can't create file!");

    //  $text = "blah blah blah";

    //  fwrite($file_handle, $text) or 
    //             die("Can't write to the file!");
    //  fclose($file_handle);

    // $file_handle = fopen("foo.txt", 'r') or 
    //                 die("Can't open file");
    // $first_line = fgets($file_handle);
    // $second_line = fgets($file_handle);
    // fclose($file_handle);

    // echo "$first_line <br />";
    // echo "$second_line <br />";

//     $file_handle = fopen("foo.txt", 'r') or 
//     die("Can't open file");
//     while($line = fgets($file_handle))
//     {
//         echo "$line <br />";
//     }
// fclose($file_handle);

// $file_handle = fopen("foo2.txt", 'r') or 
//      die("Can't open file");

//      $text = fread($file_handle, 6);
//      echo "$text<br />";
//      fclose($file_handle);

    //  copy("foo.txt", "foo.txt.copy")
    //  or die("Can't copy file");

    //  rename("foo.txt", "foo2.txt")
    //   or die("Can't copy file");

    // unlink("foo2.txt") or die("Can't rename file!");

    $file_handle = fopen("myfile.txt", 'w') or
                    die("Can't create file!");

     $text = "blah blah blah";

     fwrite($file_handle, $text) or 
                die("Can't write to the file!");
     fclose($file_handle);

?>