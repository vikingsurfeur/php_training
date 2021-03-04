<?php

// SET MY FIRST COOKIE

setcookie('firstCookie', 'monPremierCookie'); // Create a new cookie
setcookie('secondCookie', 'monSecondCookie', time() + 86400);

// SET A COOKIE WILL EXPIRED IN ONE DAY

setcookie('username', 'davidBouscarle', time() + 86400); // 86400s in one day

// name of cookie : 'username';
// value of cookie : 'davidBouscarle';
// Expires of cookie : time() method + 86400s per one day

// DELETE A COOKIE

setcookie('username', '', time() - 60);

// SUPERGLOBAL

var_dump($_COOKIE); // display all the cookies
