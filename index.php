<?php

#creating the getuniqueid function to generate Alphanumeric unique ids
#function is defined with two parameters of type int; default parameter values are 4 and 0.

function getuniqueid(int $nm=4,int $lt=0){
    $getnum = ''; //variable to hold digits generated
    while(strlen($getnum)< $nm){
        $getnum .= mt_rand(1,10);
    }
    
    $getlet = ''; //variable to hold letters generated
    while(strlen($getlet) < $lt){
        $lett = range('A','Z');
        $getlet .= $lett[mt_rand(0,25)];
    }
    
    $uniqueid = $getnum.$getlet; //combining digits and letters to form alphanumeric unique id
    return $uniqueid;
}

#Example 1 to use the getuniqueid() function 
 var userregnum = getuniqueid() //calls the function without any parameters, hence the function will return a result (a unique id that is 4 in length, all numbers not alphabets)
 
#Example 2 to use the getuniqueid() function
 var regnum = getuniqueid(4,3) //function will return an alphanumeric id that is 7 in length (4 numbers, 3 alphabets)
 
##You can swap the position of the generated alphabets and numbers by modifying their position on line 18 in the function definition.

?>