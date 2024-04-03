define('DB_SERVER', 'localhost:3306');
define('DB_USERNAME', 'vihas');
define('DB_PASSWORD', 'Vihas8108@');
define('DB_DATABASE', 'mydatabase');

$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}