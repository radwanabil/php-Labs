<?php

class Count{
    private $count;
    
    public function __construct(){
        $this->count = $this->get_count();
    }
    
    public function get_count(){
        if(file_exists(_counter_file_)){
            return intval(file_get_contents(_counter_file_));
        }
            return 0;
        
    }
    
    public function increment(){
        if(isset($_SESSION[_session_key_counter])) return false;
        $this->count++;
        $_SESSION[_session_key_counter]=true;
        return $this->count;
        
    
    }

    public function update_counter(){
        $fp = fopen(_counter_file_,"w+");
        fwrite($fp, $this->count);
        fclose($fp);
    }
    public function increment_and_update(){
        if($this->increment() != false){
            $this->update_counter();
        }
        
    }
    
}