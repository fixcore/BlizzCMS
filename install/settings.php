<?php

function connect($website_host, $website_user, $website_pass, $website_dbweb)
{
    $fixcore = new mysqli($website_host, $website_user, $website_pass, $website_dbweb);
    if (mysqli_connect_error())
        die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
    return $fixcore;
}

function SplitSQL($fixcore, $file, $delimiter = ';')
{
    set_time_limit(0);

    if (is_file($file) === true)
    {
        $file = fopen($file, 'r');

        if (is_resource($file) === true)
        {
            $query = array();

            while(feof($file) === false)
            {
                $query[] = fgets($file);

                if (preg_match('~' . preg_quote($delimiter, '~') . '\s*$~iS', end($query)) === 1)
                {
                    $query = trim(implode('', $query));

                    if (!$fixcore->query($query))
                        die($fixcore->error);

                    while(ob_get_level() > 0)
                    {
                        ob_end_flush();
                    }

                    flush();
                }

                if (is_string($query) === true)
                {
                    $query = array();
                }
            }
            return fclose($file);
        }
    }
    return false;
}

function delete_files($target) {
    if (is_dir($target)) {
        $files = glob($target . '*', GLOB_MARK);

        foreach($files as $file)
        {
            delete_files($file);      
        }
        rmdir($target);
    }
    else if (is_file($target)) {
        unlink($target);  
    }
}

class Install
{
    private $fixcore;

    public function __construct() { }

    private function check()
    {
        $folder = $_GET['test'];

        $file = fopen("../application/".$folder."/write_test.txt", "w");

        fwrite($file, "success");
        fclose($file);

        unlink("../application/".$folder."/write_test.txt");

        die("1");
    }

    private function connect()
    {
        $fixcore = new mysqli($website_host, $website_user, $website_pass, $website_dbweb);
        if (mysqli_connect_error())
            die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
        return $fixcore;
    }
}

$install = new Install();
