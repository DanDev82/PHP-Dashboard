<div class="container">
  <h1 class="my-4">Users</h1>
  <?php 

    require "db_connect.php";

    $result = mysqli_query($conn, "SELECT first_name, last_name, phone, email, status FROM users");

    echo "
      <table class=\"table table-hover\" id=\"users-table\">
        <caption>List of users</caption>
        <thead>
          <tr>
            <th scope=\"col\">Name</th>
            <th scope=\"col\">Phone</th>
            <th scope=\"col\">Email</th>
            <th scope=\"col\">Status</th>
            <th scope=\"col\">Action</th>
          </tr>
        </thead>

    ";

    while($row = mysqli_fetch_array($result)) {
      echo "<tbody>";
      echo "<tr>";
      echo "<td>" . $row['first_name'] . " " . $row['last_name'] . "</td>";
      echo "<td>" . $row['phone'] . "</td>";
      echo "<td>" . $row['email'] . "</td>";
      echo "<td>" . $row['status'] . "</td>";
      echo "<td><button class=\"btn edit-button\" title=\"Edit User\"><i class=\"fas fa-edit\"></i></button><button class=\"btn delete-button\" title=\"Delete user\"><i class=\"far fa-trash-alt\"></i></button></td>";
      echo "</tr>";
      echo "</tbody>";
    }
    echo "</table>";

    mysqli_close($conn);
  ?>

 
</div>