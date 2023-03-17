<?php
$current_index = isset($_GET["next"]) && is_numeric($_GET["next"]) ? (int) $_GET["next"] : 0;
$next_index =($current_index + __RECORDS_PER_PAGE__ < 15) ? $current_index + __RECORDS_PER_PAGE__ : 15;
$previous_index = ($current_index - __RECORDS_PER_PAGE__ > 0) ? $current_index - __RECORDS_PER_PAGE__ : 0;
$items = $db->get_all_records_paginated(array(), $current_index);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glasses store</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <table class="table table-striped w-75 text-center dp-flex" style="margin:0 auto;">
        <thead class="thead-dark">
            <tr>

                <th scope="col">Item ID</th>
                <th scope="col">Name</th>
                <th scope="col">Details</th>
            </tr>
        </thead>
        <tbody>

            <?php
            foreach ($items as $item) {
                echo "<tr><td>" . $item["id"] . "</td>";
                echo "<td>" . $item["product_name"] . "</td>";
                echo "<td><a href='" . $_SERVER["PHP_SELF"] . "?id=" . $item["id"] . "'> view item </a> </td></tr>";
            }

            ?>
        </tbody>
    </table>
    <div class="row">
        <div class="col text-center mt-2">
            <a href="<?php echo $_SERVER["PHP_SELF"] . "?next=" . $next_index; ?>"
                class="btn btn-primary btn-lg active text-center" role="button" aria-pressed="true"
                style="margin:0 auto;">Next</a>
            <a href="<?php echo $_SERVER["PHP_SELF"] . "?next=" . $previous_index; ?>"
                class="btn btn-primary btn-lg active" role="button" aria-pressed="true"
                style="margin:0 auto;">Previous</a>
        </div>
    </div>
</body>

</html>