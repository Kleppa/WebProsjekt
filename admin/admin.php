<?php function server_root()
{
    $out = '';
    if (isset($_SERVER['CONTEXT_PREFIX'])) {
        $out .= $_SERVER['CONTEXT_PREFIX'];
    }

    return $out;
}

require_once server_root() . '/header.php';

$pagetitle = 'Admin Dashboard';
?>


<?php require_once server_root() . '/footer.php';