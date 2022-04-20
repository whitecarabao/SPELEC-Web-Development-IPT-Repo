<?php
echo '<h1> You won! </h1>';
session_start();
session_unset();
session_destroy();
echo '<a href="newGame.php">New Game</a>';

?>