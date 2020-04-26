<?php
function auth($login, $passwd) {
	if ($login || $passwd){
        $list = unserialize(file_get_contents('private/passwd'));
        if ($list) {
            foreach ($list as $key => $value) {
                if ($value['login'] === $login && $value['passwd'] === hash('whirlpool', $passwd))
                    return TRUE;
            }
        }
    }
	return FALSE;
}
?>