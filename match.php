<?php
protected static function _match($line, $number, $offset) {
    $string = substr($line, $offset);
 
    foreach(static::$_terminals as $pattern => $name) {
        if(preg_match($pattern, $string, $matches)) {
            return array(
                'match' => $matches[1],
                'token' => $name,
                'line' => $number+1
            );
        }
    }
 
    return false;
}
?>
