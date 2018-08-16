<?php
function MemberNumberFormatter($Prev_Member_Number)
{
    preg_match_all('/^([^\d]+)(\d+)/', $Prev_Member_Number, $match); //separated them

    $Letter = $match[1][0]; //first letter
    $Number = $match[2][0];    //Number

    //increament to get the new Member Number
    if ($Number == '' || $Number == 0) {
        $Letter = 'A';
        $Number = 0;//Possibilities could be its the first record.
    }
    $Number = $Number + 1;
    //check if we are getting to the next letter
    if ($Number == 10000) {
        //Run Alphabet Increment here...
        $Letter++;
        $Number = 1;
    }
    if ($Number >= 1 && $Number <= 9999) {
        //count both of their length
        //begin with the Number
        $num_length = strlen($Number); //e.g =4
        if ($num_length <= 4) {
            if ($num_length == 1) {
                $Number = '000' . $Number;
                $FinalNumber = $Number;
            }
            if ($num_length == 2) {
                $Number = '00' . $Number;
                $FinalNumber = $Number;
            }
            if ($num_length == 3) {
                $Number = '0' . $Number;
                $FinalNumber = $Number;
            }
            if ($num_length == 4) {
                $FinalNumber = $Number;
            }
        } else {
            $FinalNumber = $Number;
        }
    }
    return $Letter . $FinalNumber;//return the Next customer Number
}

//Can test here
$Prev_Member_Number = 'ZMXXZ';
echo MemberNumberFormatter($Prev_Member_Number)

?>