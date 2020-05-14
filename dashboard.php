<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <?php include './includes/head.php';

    if (!isAdmin()) {
        //you can remove this message if you want .
        $_SESSION['msg'] = "You'r not allowed to enter this area!";
        header('location: index.php');
    }
    $sql = "SELECT * FROM users"; // SQL with parameters
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();
    ?>
</head>

<body>
    <?php include './includes/navbar.php' ?>
    <div class="container">
        <h1>Users</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($result)) : ?>
                    <tr>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['username'] ?></td>
                        <td><?php echo $row['user_type'] ?></td>
                        <?php if ($row['id'] != $_SESSION['user']['id']) : ?>
                            <td><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a></td>
                        <?php endif ?>
                    </tr>
                <?php endwhile ?>
            </tbody>
        </table>
        <div class="card">
            <div class="card-body">
                <h5>Delete Your Account</h5>
                <a href="delete.php?id=<?php echo $_SESSION['user']['id'] ?>" class="btn btn-raised btn-danger">Delete</a>
            </div>
        </div>

        <?php include './includes/footer.php' ?>
    </div>

</body>

</html>