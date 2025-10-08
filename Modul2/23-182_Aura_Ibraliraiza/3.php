<?php
$t = date("H");

if ($t < "10") {

Halaman 13 / 49

echo "Have a good morning!";
} elseif ($t < "20") {
echo "Have a good day!";
} else {
echo "Have a good night!";
}
?>
