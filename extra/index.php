<!DOCTYPE html>
<html>
<head>
    <title>Functions</title>
</head>
<body>
<?php
echo("<h1>Extra lesson</h1><br>\n");

echo('<br>$_SERVER:<br><ul>');
foreach ($_SERVER as $key => $value) {
    echo "<li><b>$key</b> - $value</li>";
}
echo('</ul>$GLOBALS:<br><ul>');
foreach ($GLOBALS as $key => $value) {
    echo "<li><b>$key</b> - $value</li>";
}
echo('</ul>$_POST:<br><ul>');
foreach ($_POST as $key => $value) {
    echo "<li><b>$key</b> - $value</li>";
}
echo('</ul>$_GET:<br><ul>');
foreach ($_GET as $key => $value) {
    echo "<li><b>$key</b> - $value</li>";
}
echo('</ul>$_FILES:<br><ul>');
foreach ($_FILES as $key => $value) {
    echo "<li><b>$key</b> - $value</li>";
}
echo('</ul>$_ENV:<br><ul>');
foreach ($_ENV as $key => $value) {
    echo "<li><b>$key</b> - $value</li>";
}
echo('</ul>$_COOKIE:<br><ul>');
foreach ($_COOKIE as $key => $value) {
    echo "<li><b>$key</b> - $value</li>";
}
echo('</ul>$_SESSION:<br><ul>');
foreach ($_SESSION as $key => $value) {
    echo "<li><b>$key</b> - $value</li>";
}
?>
</body>
</html>