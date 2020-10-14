<?php

#creating the getuniqueid function to generate Alphanumeric unique ids
#function is defined with four parameters; two of type int and two of type bool; default parameter values are 4, 0, true, and false.

function getuniqueid(int $nm=4,int $lt=0,bool $upr=true, bool $swap=false){
    $getnum = ''; //variable to hold numbers generated
    while(strlen($getnum)< $nm){
        $getnum .= mt_rand(0,9);
    }
    
    $getlet = ''; //variable to hold letters generated
    $lett = ($upr) ? range('A','Z') : range('a','z'); //check if user specified to use uppercase letters
    while(strlen($getlet) < $lt){        
        $getlet .= $lett[mt_rand(0,25)];
    }

    //check if user specified to place letters before numbers
    $uniqueid = ($swap) ? $getlet.$getnum : $getnum.$getlet;

    return $uniqueid;
}

#Example 1 to use the getuniqueid() function 
 $regnum = getuniqueid() //calls the function without any parameters, hence the function will return a result (a unique id that is 4 characters in length, all numbers without letters)
 
#Example 2 to use the getuniqueid() function
 $regnum = getuniqueid(4,3) //function will return an alphanumeric id that is 7 characters in length (4 numbers, 3 alphabets in upper case, e.g. 9845HTD)

#Example 3 to use the getuniqueid() function
 $regnum = getuniqueid(3,2,false,true) //function will return an alphanumeric id that is 5 characters in length (3 numbers, 2 alphabets in lowercase, with alphabets before letters, eg. rh839)    


?>
