<form action="" method="get">
    <input type"text" name="msg">
    <input type="submit">
</form>

<?php

    if(isset($_GET['msg'])){
        echo $_GET['msg'];
    }

?>