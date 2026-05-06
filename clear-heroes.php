<?php
$db = new PDO('sqlite:database/database.sqlite');
$db->exec('DELETE FROM heroes');
echo "Heroes table cleared successfully\n";
