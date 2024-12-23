<?php
include 'database.php';

$sql = "SELECT id, name, email, gender, created_at FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
          </thead>";
    echo "<tbody>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['gender']}</td>
                <td>{$row['created_at']}</td>
                <td>
                    <a href='edit_user.php?id={$row['id']}'>Edit</a> | 
                    <a href='process_delete_user.php?id={$row['id']}'>Delete</a>
                </td>
              </tr>";
    }
    echo "</tbody>";
    echo "</table>";
} else {
    echo "Tidak ada data ditemukan.";
}

$conn->close();
?>
