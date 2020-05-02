<?php
function escape($mysqli, &...$strings) {
	foreach ($strings as $i => $str)
		$strings[$i] = mysqli_escape_string($mysqli, $str);
}

function create($login, $passwd) {
    $login = trim($login);
    if ($login === "" || $passwd === "") {
        if ($login === "")
            return "'Login' field must not be empty";
        if ($passwd === "")
            return "'Password' field must not be empty";
} else {
    $mysqli = mysqli_connect("localhost", "root", "", "ripailles");
	if (mysqli_connect_error())
		return "Couldn't connect to sql (" . mysqli_connect_errno() . ') '. mysqli_connect_error();
    escape($mysqli, $login);
	if (!$res = mysqli_query($mysqli, "SELECT * FROM users WHERE Username = '$login';"))
		return "sql error: couldn't fetch login!";

	if ((mysqli_fetch_array($res)) != null)
		return "Account already exists!";
    $salt = time();
	$hash = hash('whirlpool', $salt . $passwd);
    if (!mysqli_query($mysqli, "INSERT INTO users (Username, Password, Salt) VALUES ('$login', '$hash', $salt)"))
		return "Couldn't create account!";
	return NULL;
}
}
?>