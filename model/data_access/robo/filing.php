<?php

/**
 * Created by PhpStorm.
 * User: peymanvalikhanli
 * Date: 6/13/17 AD
 * Time: 11:46
 */
class filing
{

    public static $root = "";

    public static function upload_file()
    {
        $target_dir = self::$root;
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
        //__________________ Check if image file is a actual image or fake image

        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if ($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        //___________________ Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        //___________________ Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        //___________________ Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        //___________________ Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            //___________________ if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }

    public static function upload_files()
    {

    }

    public static function get_file_name()
    {

    }

    public static function get_file_name_by_dir()
    {

    }

    public static function get_dir_name()
    {

    }

    public static function get_dir_name_by_dir()
    {

    }

    public static function create_dir($dir_name)
    {
        $path = self::$root . $dir_name;
        try {
            if (!file_exists($path)) {
                return mkdir($path);
            } else {
                return 0;
            }
        } catch (Exception $e) {
            //print_r($e);
            return -1;
        }
    }

    public static function create_file($file_name, $file_content)
    {
        try {
            $path = self::$root . $file_name;
            $file = fopen($path, "w") or die(-1);
            if ($file != -1) {
                fwrite($file, $file_content);
                fclose($file);
                return 1;
            } else {
                return -1;
            }
        } catch (Exception $e) {
            return $e;
        }
    }

    public static function open_file($file_name)
    {
        $path = self::$root . $file_name;
        try {
            $file_content = '';
            $file = fopen($path, "r") or die(-1);
            if ($file != -1) {
                // Output one character until end-of-file
                while (!feof($file)) {
                    $file_content .= fgetc($file);
                }
                fclose($file);
                return $file_content;
            } else {
                return -1;
            }
        } catch (Exception $e) {
            return $e;
        }

    }

    public static function copy_file($source_filename, $target_filename)
    {
        $path = self::$root . $source_filename;
        try {
            if (file_exists($path)) {
                return copy($path, self::$root . $target_filename);
            } else {
                return 0;
            }
        } catch (Exception $e) {
            return $e;
        }
    }

    ///summery function
    // rename("oldpath", "newpath");
    // in your case, assuming the script calling rename()
    // resides in the directory above 'myappdemo.com'
    // rename("myappdemo.com/VueGuides/services/iclean", "myappdemo.com/VueGuides/services/pics/iclean");
    // Or use full absolute paths
    // rename("/path/myappdemo.com/VueGuides/services/iclean", "/path/myappdemo.com/VueGuides/services/pics/iclean");

    public static function move_file($source_filename, $target_filename)
    {
        $path = self::$root . $source_filename;
        try {
            if (file_exists($path)) {
                return rename($path, self::$root . $target_filename);
            } else {
                return 0;
            }
        } catch (Exception $e) {
            return $e;
        }
    }

    public static function remove_file($filename)
    {
        $path = self::$root . $filename;
        try {
            if (file_exists($path)) {
                return unlink($path);
            } else {
                return 0;
            }
        } catch (Exception $e) {
            return $e;
        }
    }

    public static function rename_file($source_filename, $target_filename)
    {
        $path = self::$root . $source_filename;
        try {
            if (file_exists($path)) {
                return rename($path, self::$root . $target_filename);
            } else {
                return 0;
            }

        } catch (Exception $e) {
            return $e;
        }
    }

    ///summery function
    // url: https://stackoverflow.com/questions/2050859/copy-entire-contents-of-a-directory-to-another-using-php

    public static function copy_dir($source_filename, $target_filename)
    {
        $_source_filename = self::$root . $source_filename;
        $_target_filename = self::$root . $target_filename;

        $dir = opendir($_source_filename);
        @mkdir($_target_filename);
        while (false !== ($file = readdir($dir))) {
            if (($file != '.') && ($file != '..')) {
                if (is_dir($_source_filename . '/' . $file)) {
                    self::copy_dir($source_filename . '/' . $file, $target_filename . '/' . $file);
                } else {
                    copy($_source_filename . '/' . $file, $_target_filename . '/' . $file);
                }
            }
        }
        closedir($dir);
    }

    ///summery function
    //  rename("oldpath", "newpath");
    // in your case, assuming the script calling rename()
    // resides in the directory above 'myappdemo.com'
    // rename("myappdemo.com/VueGuides/services/iclean", "myappdemo.com/VueGuides/services/pics/iclean");
    // Or use full absolute paths
    // rename("/path/myappdemo.com/VueGuides/services/iclean", "/path/myappdemo.com/VueGuides/services/pics/iclean");

    public static function move_dir($source_filename, $target_filename)
    {
        try {
            return rename(self::$root . $source_filename, self::$root . $target_filename);
        } catch (Exception $e) {
            return $e;
        }
    }

    ///summery function
    //call error handeling php
    //throw new InvalidArgumentException("$dirPath must be a directory");

    public static function remove_dir($dirPath)
    {
        $dirPath = self::$root . $dirPath;
        if (!is_dir($dirPath)) {
            throw new InvalidArgumentException("$dirPath must be a directory");
        }
        if (substr($dirPath, strlen($dirPath) - 1, 1) != '/') {
            $dirPath .= '/';
        }
        $files = glob($dirPath . '*', GLOB_MARK);
        foreach ($files as $file) {
            if (is_dir($file)) {
                self::remove_dir($file);
            } else {
                unlink($file);
            }
        }
        rmdir($dirPath);
    }

    public static function rename_dir($source_filename, $target_filename)
    {
        try {
            return rename(self::$root . $source_filename, self::$root . $target_filename);
        } catch (Exception $e) {
            return $e;
        }
    }

}

/*
// up vote
//225
//down vote
//accepted
//There are at least two options available nowdays.

//Before deleting the folder, delete all it's files and folders (and this means recursion!). Here is an example:

public static function deleteDir($dirPath) {
    if (! is_dir($dirPath)) {
        throw new InvalidArgumentException("$dirPath must be a directory");
    }
    if (substr($dirPath, strlen($dirPath) - 1, 1) != '/') {
        $dirPath .= '/';
    }
    $files = glob($dirPath . '*', GLOB_MARK);
    foreach ($files as $file) {
        if (is_dir($file)) {
            self::deleteDir($file);
        } else {
            unlink($file);
        }
    }
    rmdir($dirPath);
}

//And if you are using 5.2+ you can use a RecursiveIterator to do it without needing to do the recursion yourself:

$dir = 'samples' . DIRECTORY_SEPARATOR . 'sampledirtree';
$it = new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS);
$files = new RecursiveIteratorIterator($it,
             RecursiveIteratorIterator::CHILD_FIRST);
foreach($files as $file) {
    if ($file->isDir()){
        rmdir($file->getRealPath());
    } else {
        unlink($file->getRealPath());
    }
}
rmdir($dir);

 */