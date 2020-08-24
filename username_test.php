<?php

$password = 'Chocolate';

$bcrypt_password = password_hash($password, PASSWORD_BCRYPT);
echo "<br>Bcrypt Password: " . $bcrypt_password;
