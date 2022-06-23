<?php
include("include/functions.php");
include("include/header.php");
print_page_address();
include("include/menu.php");
?>
<h1>Guestbook</h1>
<form action="lesson14_submit.php" method="post">
<input name="name" placeholder="Name"><br>
<textarea name="comment" placeholder="Message" cols="50" rows="7"></textarea><br>
<input type="submit">
<input type="reset"><br>
</form><br>
<?php

include("include/footer.php");
?>