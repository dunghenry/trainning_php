<?php
    echo "<h1>Cookies in PHP</h1>";
    //! set cookie
    // setcookie("name", "Dung", time() + 24 * 3600);
    if(isset($_COOKIE["name"])){
        echo $_COOKIE["name"];
    }

    //! delete cookie
    //setcookie("name", "", time() - 24 * 3600)
?>