<?php
  // connect to the database
  // INSERT INTO `crud` (`slNo.`, `title`, `description`, `date`) VALUES (NULL, 'JQuery', 'adfasdf dsfd fdsf f ', current_timestamp());

$servername = "localhost";
$username = "root";
$password = "";
$database = "crud";
$conn = mysqli_connect($servername, $username, $password, $database);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $title = $_POST['title'];
    $description = $_POST['desc'];

    $sql = "INSERT INTO `crud` (`title`, `description`) VALUES ('$title','$description')";
    $result = mysqli_query($conn, $sql);

}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0"
      crossorigin="anonymous"
    />

    <title>CRUD Application</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">CRUD Application</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Sections
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item" href="#">Something else here</a>
                </li>
              </ul>
            </li>
          </ul>
          <form class="d-flex">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-outline-success" type="submit">
              Search
            </button>
          </form>
        </div>
      </div>
    </nav>
    <div class="container mt-3">
      <form action = "/Php Course/Project.php" method="post">
        <h2>Write your Notes</h2>
        <div class="mb-3">
          <label for="title" class="form-label">Notes Title</label>
          <input type="text" class="form-control" id="title" name="title" />
        </div>
        <div class="mb-3">
          <label for="desc" class="form-label">Notes Description</label>
          <textarea
            class="form-control"
            id="desc"
            name="desc"
            rows="3"
          ></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Add Notes</button>
      </form>
    </div>

    <div class="container my-5">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">S.No</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
        <?php
        $sql = "SELECT * FROM `crud`";
        // $slNo = 0;
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)){
        //   $slNo = $slNo + 1;
          echo "<tr>
          <th scope='row'>".$row['slNo']. "</th>
          <td>".$row['title']. "</td>
          <td>".$row['description']. "</td>
          <td> Action</td>
        </tr>";
          echo "<br>";
       }

     ?>

        </tbody>
      </table>
      <hr>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
