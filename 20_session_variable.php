<?php

/*steps to follow

1> session_start();    for starting the session
2> $_SESSION[name]=value;  set session name & value
3> echo $_SESSION[name];  get session value

delete the session

step 1 : session_unset();  remove all session variables
step 2 : session_destroy();  destroy all the session */

session_start();

$_SESSION["favcolor"]="green";

echo "session variable is set";
?>