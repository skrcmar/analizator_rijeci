<?php

if (isset($_REQUEST['analyze'])){
    
    function word_validation($string){
        
        if(!empty($string)){
            if(strlen($string) >2 ){
                if(preg_match('/^[A-zšđčćžŠĐČĆŽ]+$/', $string)){
                    return $string;
                }else{
                    return 'Riječ za analizu ne smije sadržavati brojeve';
                }
            }else{
                return 'Riječ za analizu mora sadržavati najmanje 3 slova';
            }
        }else{
            return 'Upišite riječ u polje!';
        }
    }
  
}   
 

    function to_uppercase($string){

    }
    
    function separate_into_letters($string){
        //implode()        
    }
    
    function vowels($string){
        //izbrojati samoglasnike
    }
    
    function consonants($string){
        //izbrojati suglasnike
    }
    
    function cro_letters($string){
        //ispisati hrv znakove
    }
    
    function print($string){
        
    }
  


?>