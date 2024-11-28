<?php
include 'connection.php';

$sql = "SELECT id, username, role FROM users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Login page for the project">
    <meta name="keywords" content="login, authentication, project">
    <meta name="author" content="Petar Rumiha">
    <link rel="stylesheet" href="auth/registration.css">
    <title>Login</title>
</head>
<body>
<h1>Manage user roles</h1>
<form action="auth/update_roles.php" method="POST" class="update-roles-form">
    <table>
        <tr>
            <th>Username</th>
            <th>Role</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['username']) . "</td>";
                echo "<td>";
                echo "<select name='roles[" . $row['id'] . "]'>";
                echo "<option value='user'" . ($row['role'] == 'user' ? ' selected' : '') . ">User</option>";
                echo "<option value='admin'" . ($row['role'] == 'admin' ? ' selected' : '') . ">Admin</option>";
                echo "<option value='editor'" . ($row['role'] == 'editor' ? ' selected' : '') . ">Editor</option>";
                echo "</select>";
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='2'>No users found</td></tr>";
        }
        ?>
    </table>
    <button type="submit">Update Roles</button>
</form>
</body>
</html>
