<?php

class Database
{
    public $connection;

    public function __construct($config, $username = 'root', $password = '')
    {
        $dsn = 'mysql:' . http_build_query($config, '', ';');

        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query, $params = [])
    {
        $statement = $this->connection->prepare($query);

        $statement->execute($params);

        return $statement;
    }
}
 
$config = require('config.php');

$db = new Database($config['database']);

$user = $db->query('select * from users')->fetch();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Replace this with your user authentication logic, e.g., database lookup.
    $validUsername = $user['email'];
    $validPassword = $user['password'];
    $error = [];
    if ($username !== $validUsername || $password !== $validPassword) {
        $error['error'] = "Invalid username or password" ;
        require ('views/signin.view.php');
    } else {
        
        require ('views/india.view.php');
    }
}
?>
