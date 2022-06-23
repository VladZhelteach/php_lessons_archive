<?php
include("include/functions.php");
include("include/header.php");
print_page_address();
echo("<br>\n");
include("include/menu.php");
include("include/db_config.php");
?>
<h3>INSERT:</h3>
<div style="background-color: #e8eb34"><th>
<form action="lesson23ins_post.php" method="post">
<label for="fname">First name:</label><br>
<input type="text" id="fname" name="fname"><br>
<label for="lname">Last name:</label><br>
<input type="text" id="lname" name="lname"><br>
<label for="bdate">Birthday:</label><br>
<input type="date" id="bdate" name="bdate"><br>
<label for="phone">Phone:</label><br>
<input type="number" id="phone" name="phone"><br>
<label for="fav_lang">Favourite language:</label><br>
<input type="text" id="fav_lang" name="fav_lang"><br>
<input type="checkbox" id="knowsphp" name="knowsphp">
<label for="knowsphp">Knows PHP</label><br>
<input type="submit">
<input type="reset">
</form>
</div>
<?php
include("include/footer.php");
?>



