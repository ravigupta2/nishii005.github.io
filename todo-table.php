<?php
try {
    require "table_connection.php";
} catch (Exception $e) {
    echo "Connection failed: " . $e->getMessage();
}

/*if ($_GET["cmd"] == "delete" && $_GET["id"]) {
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    try {
        $sql = "DELETE FROM TODO_LIST WHERE id=" . $_GET['id'];
        $q = $dbh->prepare($sql);
        $q->execute();
        echo 'Record with ID ' . $_GET['id'] . 'just got deleted';
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}*/
?>

<!DOCTYPE html>
<html>
<head>
    <title>todo table</title>
    <link rel="stylesheet" type="text/css" href="todo-table.css">
</head>
<body>

    <div class="container">
        <h1> LIST OF TODO</h1>
        <div class="content">
            <table>
              <tr>
                <th>TODO LIST</th>
                <th>DEADLINE</th>
                <th>DELETE</th>
              </tr>
              <?php


              $query = 'SELECT id, todo, deadline FROM TODO_LIST ORDER BY id';
              $data = mysqli_query($conn,$query);
              

              ?>
              <?php while ($row = mysqli_fetch_assoc($data)): ?>
                <tr>
                  <td><?php echo htmlspecialchars($row['todo']); ?></td>
                  <td><?php echo htmlspecialchars($row['deadline']); ?></td>
                  <td>
                    <a href="?cmd=delete&id=<?php echo htmlspecialchars($row['id']);
                     ?>">Delete</a>
                  </td>
                 </tr>
<?php endwhile; ?>
            </table>
        </div>
    </div>

</body>
</html>