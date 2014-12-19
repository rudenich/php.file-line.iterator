<?php

class FileLinesIterator implements Iterator{
    private $_descriptor;
    private $_count = 0;
    public function __construct($file){
        if(!is_file($file)){
            throw new Exception("error file - \"{$file}\" don't exist");
        }
        $this->_descriptor = fopen($file,'r');
    }

    public function __destruct(){
        fclose($this->_descriptor);
    }

    public function key(){
        return $this->_count;
    }
    public function next(){
        $this->_count++;
    }

    public function valid(){
        return !feof($this->_descriptor);
    }

    public function rewind(){
        rewind($this->_descriptor);
    }
    public function current(){
        return  stream_get_line($this->_descriptor, 1000000, "\n");
    }
}