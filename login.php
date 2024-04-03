require_once "dbconfig.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT id FROM users WHERE username = '$username' and password = '$password'";
    $result = mysqli_query($db, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        echo "Login successful!";
    } else {
        echo "Invalid username or password";
    }
}