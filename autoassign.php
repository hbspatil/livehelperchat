<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
header('Content-Type: application/json');

exec('php cron.php -s site_admin -c cron/workflow');
print("tes");
exit();
?>
