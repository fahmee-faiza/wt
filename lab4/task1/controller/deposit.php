<?php 

include '../model/dbcon.php';
include '../controller/action_login.php';
include '../view/balance.php';

   if($_SERVER["REQUEST_METHOD"] == "POST") {
            $deposit = mysqli_real_escape_string($conn,$_POST['balance']);
            $sql = "UPDATE moneywithdraw SET balance=balance-$deposite WHERE user = $myusername";
                if ($conn->query($sql) === TRUE) {
                      echo "Balance updated!";
                    } 
                else {

                      echo "Error updating: " . $conn->error;
                     }

                $conn->close() ;
            }

?>