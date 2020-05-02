<?php
function escape($mysqli, &...$strings) {
	foreach ($strings as $i => $str)
		$strings[$i] = mysqli_escape_string($mysqli, $str);
}

function connect($mysqli, $login, $passwd, &$data) {
	$data = null;
	if (!$res = mysqli_query($mysqli, "SELECT * FROM users WHERE Username = '$login';"))
		return "sql error: couldn't fetch from database!";
    print_r($res);
	if (($usrdata = mysqli_fetch_array($res, MYSQLI_ASSOC)) == null)
		return "Account doesn't exists!";

	if ($usrdata['Password'] != hash('whirlpool', $usrdata['Salt'] . $passwd))
		return "Invalid password!";
	$data = $usrdata;
	return null;
}

function auth($login, $passwd, &$admin) {
	$login = trim($login);
	if ($login === "" || $passwd === "") {
        if ($login === "")
            return "'Login' field must not be empty";
        if ($passwd === "")
            return "'Password' field must not be empty";
    }

	$mysqli = mysqli_connect("localhost", "root", "", "ripailles");
	if (mysqli_connect_error())
		return "couldn't connect to sql (" . mysqli_connect_errno() . ') '. mysqli_connect_error();

	escape($mysqli, $login);
	$ret = connect($mysqli, $login, $passwd, $data);
	$admin = $data !== null ? $data['IsAdmin'] : false;
	return $ret;
}
?>