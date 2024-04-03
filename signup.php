require_once "dbconfig.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    if (mysqli_query($db, $sql)) {
        echo "Signup successful!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($db);
    }
