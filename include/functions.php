<?php
function say_hello() {
    echo("Say hello");
}

function print_page_address() {
    echo($_SERVER['SERVER_NAME']);
    echo($_SERVER['PHP_SELF']);
}
?>