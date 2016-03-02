<!DOCTYPE html>
<html lang="en-US" class="14May15 gecko win">
<head>
<meta charset="UTF-8">
<title>D4 Development Zone</title>
<style>
html {
	background-color: #ddd;
}
.page-wrapper {
	background-color: #fff;
    text-align: center;
    margin: 100px auto 0;
    width: 220px;
    border: 1px solid #bbb;
    border-radius: 5px;
    padding: 25px;
}
.password-field {
    border: none;
    background-color: #ddd;
    padding: 5px;
    border-radius: 2px;
}
.submit-field {
    border: none;
    padding: 4px 11px;
    text-transform: uppercase;
}
</style>
</head>
<body>
<div class="page-wrapper">
<form method="post">
	<input type="password" class="password-field" name="passphrase" placeholder="Password">
	<input type="submit"   class="submit-field" name="submit" value="login">
</form>
</div>
</body>
</html>