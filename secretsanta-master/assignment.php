<?php
//
//
//class assignment{
//
//
//    public static function blend($array)
//    {
//        $val = array();
//        $keys = array_keys($array);
//        shuffle($keys);
//        foreach ($keys as $key) {
//            $val[] = $array[$key];
//            return $val;
//        }
//
//        $tab = '';
//        $new_tab = blend($tab);
//        print_r($new_tab);
//    }
//
//    public static function sorting(){
//        $_SESSION['person']= $persons[];
//        $_SESSION['budget']= $budget;
//        $_SESSION['date']= $date;
//        $_SESSION['event']= $event;
//        $_SESSION['email']= $email[];
//        $nbperson = count($persons, COUNT_NORMAL);
//        $selectedperson[] = blend($persons[]);
//
//        if($persons = $selectedperson){
//            blend($selectedperson[]);
//        }
//
//
//
//        for ($i=0; $i<$nbperson; $i++){
//
//
//
//            $to = $email[$i];
//            $subject = "Secret Santa" ;
//            $from = "From: santaclaus@lapland.com" ;
//
//            $text = "hello $persons[$i],
//
//            you participate in the secret santa with:
//            persons[]
//
//            You must find a present for : $selectedperson[$i]
//
//            I remind you that the budget is $budget
//
//            And the deadline is the $date at $event.
//
//
//            Good Luck
//            Santa Claus
//             ---------------
//            This is an automatic email please don't reply, thanks.';";
//
//
//
//            mail($to, $subject, $text, $from) ;
//
//
//        }
//
//
//
//
//
//
//    }
//}