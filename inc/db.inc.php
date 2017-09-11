    <?php
    $host    = 'localhost';
    $db      = 'psikotest';
    $user    = 'root';
    $pass    = '';
    $charset = 'utf8';
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
}
catch (Exception $e) {
    echo 'Exception -> ';
    var_dump($e->getMessage());
}
    ?>
