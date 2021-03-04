<?php

// phpinfo(); This fonction get many information of server

var_dump($_ENV); // $_ENV get some many information about environment of execution / not hydrated here
// getenv() get some many information as variable if not hydrated

echo '<h2>$_ENV ARRAY</h2>';

foreach (getenv() as $envKey => $envValue) {
    echo "[$envKey] = $envValue <br>";
}

echo '<h2>$_SERVER ARRAY</h2>';

foreach ($_SERVER as $key => $value) {
    echo "[$key] = $value <br>";
}

// ACCESS TO THE ENV VARIABLE

// $_ENV['DATABASE_NAME'];
// // Or
// getenv('DATABAS_NAME');

// DISPLAY SERVER REQUEST

echo $_SERVER['REQUEST_METHOD'].'<br>'; // Get a method Variable
echo $_SERVER['REMOTE_ADDR'].'<br>'; // Get a IP address of Client
echo $_SERVER['SCRIPT_FILENAME'].'<br>'; // Get a file as current page / absolute path

// CREATE AN ENVIRONNEMENT VARIABLE SERVER

putenv('contexte=developpement'); // Add the variable
echo getenv('contexte'); // Display the variable with getenv()
