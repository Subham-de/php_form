<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagination with Bootstrap</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <?php
        // Sample data array
        $data = array(
            array("id" => 1, "name" => "John", "age" => 25),
            array("id" => 2, "name" => "Jane", "age" => 30),
            array("id" => 3, "name" => "Alice", "age" => 28),
            array("id" => 4, "name" => "Bob", "age" => 35),
            array("id" => 5, "name" => "Eve", "age" => 40),
            array("id" => 6, "name" => "Charlie", "age" => 22),
            array("id" => 7, "name" => "David", "age" => 27),
            array("id" => 8, "name" => "Emma", "age" => 32),
            array("id" => 9, "name" => "Frank", "age" => 38),
            array("id" => 10, "name" => "Grace", "age" => 29),
            array("id" => 11, "name" => "Helen", "age" => 31),
            array("id" => 12, "name" => "Ian", "age" => 26),
            array("id" => 13, "name" => "Julia", "age" => 33),
            array("id" => 14, "name" => "Kevin", "age" => 36),
            array("id" => 15, "name" => "Linda", "age" => 42),
            array("id" => 16, "name" => "Michael", "age" => 39),
            array("id" => 17, "name" => "Nancy", "age" => 34),
            array("id" => 18, "name" => "Olivia", "age" => 37),
            array("id" => 19, "name" => "Peter", "age" => 24),
            array("id" => 20, "name" => "Quinn", "age" => 41)
        );

        // Number of items per page
        $itemsPerPage = 3;

        // Get current page from URL parameter, default to 1 if not set
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;

        // Calculate total pages
        $totalPages = ceil(count($data) / $itemsPerPage);

        // Calculate the offset for fetching data
        $offset = ($current_page - 1) * $itemsPerPage;

        // Display data for current page
        echo "<h2>Pagination using PHP</h2>";
        echo "<div class='table-responsive'>";
        echo "<table class='table table-striped'>";
        echo "<thead><tr><th>ID</th><th>Name</th><th>Age</th></tr></thead>";
        echo "<tbody>";
        for ($i = $offset; $i < min($offset + $itemsPerPage, count($data)); $i++) {
            echo "<tr><td>{$data[$i]['id']}</td><td>{$data[$i]['name']}</td><td>{$data[$i]['age']}</td></tr>";
        }
        echo "</tbody>";
        echo "</table>";
        echo "</div>";

        // Display pagination links
        echo "<div>";
        echo "<ul class='pagination'>";
        for ($i = 1; $i <= $totalPages; $i++) {
            echo "<li class='page-item'><a class='page-link' href='?page=$i'>$i</a></li>";
        }
        echo "</ul>";
        echo "</div>";
        ?>
    </div>
</body>
</html>
