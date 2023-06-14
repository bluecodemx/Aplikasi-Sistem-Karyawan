<?php
// START INPUT FUNCTION
/**
 * Summary of input
 * @return void
 */
function input (string $info):string{
    echo "$info: ";
    $result = fgets(STDIN);
    return trim ($result);

}
