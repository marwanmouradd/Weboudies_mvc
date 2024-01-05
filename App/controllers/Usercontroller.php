<?php
function InsertUser()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        include_once "../db/dbh.inc.php";
        $user_type=1;
        $name = htmlspecialchars($_POST["Full_Name"]);
        $email = htmlspecialchars($_POST["mail"]);
        $address = htmlspecialchars($_POST["Address"]);
        $password = htmlspecialchars($_POST["Password"]);
        $Phone = htmlspecialchars($_POST["Phone"]);

        $sqle = "SELECT * FROM user WHERE mail='$mail'";
        $result = $connection->query($sqle);

        if ($result->num_rows == 1) {
            echo "User Already Exists";
        } else {

            $sql = "INSERT INTO user (user_type,name, mail, address, password,Phone) VALUES ('$user_type','$name', '$email', '$address', '$password')";

            if ($connection->query($sql) === TRUE) {
                header("Location:../view/index.php");
            } else {
                echo "Error: " . $connection->error;
            }

            $connection->close();
        }
    }
}

function FindUser()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        session_start();
        include_once "../db/dbh.inc.php";
        $email = htmlspecialchars($_POST["mail"]);
        $password = $_POST["password"];

        $sql = "SELECT * FROM patient WHERE mail='$mail'";
        $result = $connection->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();

            if ($password == $row['password']) {
                $_SESSION["ID"] = $row["ID"];
                $_SESSION["Name"] = $row["Name"];
                $_SESSION["Address"] = $row["address"];
                $_SESSION["Password"] = $row["Password"];
                $_SESSION["Phone"] = $row["Phone"];
                $_SESSION["mail"] = $row["mail"];
                var_dump($_SESSION);
                header("Location:../view/profile.php");
            } else {
                echo "Incorrect Password";
            }
        } else {
            echo "User not Found";
        }
        $connection->close();
    }
}

function UpdateUser()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        session_start();
        include_once "../db/dbh.inc.php";

        $userID = $_SESSION["ID"];

       
        $name = htmlspecialchars($_POST["name"]);
        $email = htmlspecialchars($_POST["mail"]);
        $address = htmlspecialchars($_POST["address"]);
        $password = htmlspecialchars($_POST["password"]);

        $sql = "UPDATE user SET name='$name', mail='$mail', address='$address', password='$password' WHERE id='$ID'";

        if ($connection->query($sql) === TRUE) {
            $_SESSION["Name"] = $name;
            $_SESSION["Age"] = $age;
            $_SESSION["Address"] = $address;
            $_SESSION["Password"] = $password;
            $_SESSION["mail"] = $mail;

            header("Location:../view/profile.php");
        } else {
            echo "Error updating record: " . $connection->error;
        }

        $connection->close();
    }
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST["action"])) {
        $action = $_POST["action"];
        if ($action === "InsertUser") {
            insertUser();
        } elseif ($action === "FindUser") {
            FindUser();
        }elseif ($action === "UpdateUser") {
            UpdateUser();
        }else {
            echo "Invalid action";
        }
    }
}
?>