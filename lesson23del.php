<?php
include("include/functions.php");
include("include/header.php");
print_page_address();
echo("<br>\n");
include("include/menu.php");
include("include/db_config.php");

$max = 1;
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    echo("Connection failed: " . mysqli_connect_error());
} else {
    $sql = "SELECT * FROM `lessons`";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $max = mysqli_num_rows($result);
    }
}
?>
?>
<h3>DELETE:</h3>
<div style="background-color: #e8eb34"><th>
<form action="lesson23del_post.php" method="post">
<label for="id">ID:</label>
<input type="number" id="quantity" name="id" min="1" max="<?php echo($max); ?>"><br>
<input type="submit">
<input type="reset">
</form>
</div>
<?php
include("include/footer.php");
?>



