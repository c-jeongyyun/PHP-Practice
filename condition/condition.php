<?php
$inputId = $_POST["id"];
$inputPw = $_POST["password"];
if($inputId =="admin" && $inputPw == "1111" ){
    echo "Hello admin";
} else {
    echo "Who are you?";
}
?>