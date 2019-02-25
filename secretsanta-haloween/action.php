<?php
session_start();


        $_POST['person'] = $_SESSION['person'];
        $_POST['email'] = $_SESSION['email'];
        $_POST['budget'] = $_SESSION['budget'];
        $_POST['date'] = $_SESSION['date'];
        $_POST['event'] = $_SESSION['event'];


        function blend($array)
        {
            $val = array();
            $keys = array_keys($array);
            shuffle($keys);
            foreach ($keys as $key) {
                $val[] = $array[$key];
                return $val;
                die();
            }

            $tab = '';
            $new_tab = blend($tab);
            print_r($new_tab);
        }

        function sorting()
        {

            $persons = $_SESSION['person'];
            $budget = $_SESSION['budget'];
            $date = $_SESSION['date'];
            $event = $_SESSION['event'];
            $email = $_SESSION['email'];
            $nbperson = count($persons, COUNT_NORMAL);
            $selectedperson[] = blend($persons);

            if ($persons = $selectedperson) {
                blend($selectedperson);
            }


            for ($i = 0; $i < $nbperson; $i++) {


                $to = $email[$i];
                $subject = "Secret Santa";
                $from = "From: santaclaus@lapland.com";

                $text = "hello $persons[$i],
        
                    you participate in the secret santa with:
                    $persons[]
        
                    You must find a present for : $selectedperson[$i]
        
                    I remind you that the budget is $budget
        
                    And the deadline is the $date at $event.
        
        
                    Good Luck
                    Santa Claus
                     ---------------
                    This is an automatic email please don't reply, thanks.';";


                mail($to, $subject, $text, $from);

                echo "The message has been sent to the participant";
            }


        }

        sorting();

