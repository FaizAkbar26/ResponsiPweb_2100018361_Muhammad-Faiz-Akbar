<?php
    echo "<br><br><center><h1>Login Admin</h1>";
    echo "<form name='fform' method='POST' action='admin.php'>";
    echo "<div class='field'>";
    echo "<div class='col1'>";
    echo "<label for='fname'>Username</label>";
    echo "</div>";
    echo "<div class='col2'>";
    echo "<input type='text' name='username' id='username' placeholder='Username' >";
    echo "</div>";
    echo "</div>";
    echo "<div class='field'>";
    echo "<div class='col1'>";
    echo "<label for='fpass'>Password</label>";
    echo "</div>";
    echo "<div class='col2'>";
    echo "<input type='password' name='password' id='password' placeholder='Password' >";
    echo "</div>";
    echo "</div>";
    echo "<div class='field'>";
    echo "<div class='spasi'></div>";
    echo "<input type='submit' value='Login'>";
    echo "</div>";
    echo "</form>";
    echo "</center>";
?>