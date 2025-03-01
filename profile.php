<?php
// Connect to the database
$host = 'localhost';
$dbuser = 'root';
$dbpwd = '';
$dbname = 'account';

$dsn = 'mysql:host=' . $host .';dbname=' . $dbname;
$dbh = new PDO($dsn, $dbuser, $dbpwd);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Query the database to retrieve user data
$email = $_GET['ID']; // Get the user email from the URL parameter
$stmt = $dbh->prepare('SELECT * FROM account WHERE YourEmali = :email');
$stmt->bindParam(':email', $YourEmali, PDO::PARAM_STR);
$stmt->execute();
$account = $stmt->fetch();

// Display the user data in an HTML table
echo '<table border="0" cellspacing="2" cellpadding="2">
      <tr>
        <td>Name:</td>
        <td>' . $account['UserName'] . '</td>
      </tr>
      <tr>
        <td>Email:</td>
        <td>' . $account['YourEmali'] . '</td>
      </tr>
      <tr>
        <td>Phone:</td>
        <td>' . $account['playerLevel'] . '</td>
      </tr>
      <tr>
        <td>Address:</td>
        <td>' . $account['address'] . '</td>
      </tr>
    </table>';
?>