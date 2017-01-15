<?php
    array_key_exists('File', $_GET) AND file_exists($_GET['File']) OR DIE('Restricted Access');
    echo file_get_contents($_GET['File']);
?>