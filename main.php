<?php
class Registration
{
    public function data()
    {
        $a = $_POST['name1'];
        $b = $_POST['name2'];
        $c = $_POST['email'];
        $d = $_POST['pass'];
        if (empty($a) or empty($b) or empty($c) or empty($d)) {
            echo "<h2>Empty is Not excepted</h2>";
        } else {
            echo "<h2>Registration Successful And Show your Data </h2>";
            echo "<br>";
            echo "Your Name is " . $a . $b;
            echo "<br>";
            echo "Your E-mail is " . $c;
            echo "<br>";
            echo "Your password is " . $d;
        }
    }
}
$obg=new Registration;
$obg->data();
?>