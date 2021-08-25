<?php 

function checkEmailFormat($email) {
  return filter_var($email, FILTER_VALIDATE_EMAIL);
}


?>