<?php
// $current_index = isset($_GET["next"]) && is_numeric($_GET["next"]);
// $next_index = $current_index + __RECORDS_PER_PAGE__;
// $previous_index = ($current_index - __RECORDS_PER_PAGE__ > 0);
$items = $db->get_all_records_paginated(array(),0);
?>
<table>
    <tr>
        <th>Item ID</th>
        <th>Name</th>
        <th> Details </th>
    </tr>
    <?php
    $index = $current_index;
    foreach($items as $item){
        echo "<tr><td>".$item["id"]."</td>";
        echo "<td>".$item["product_name"]."</td>";
        echo "<td><a href='".$_SERVER["PHP_SELF"]."?id=".$item["id"].".> view item </a> </td></tr>";
         $index++;
    }
    
    ?>
</table>
<a href="<?php echo $_SERVER["PHP_SELF"]."?next=".$next_index; ?>">next >> </a>;
<a href=" <?php echo $_SERVER["PHP_SELF"]."?next=".$previous_index; ?>"> Previous </a>;
<<;