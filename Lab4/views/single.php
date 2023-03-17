<?php
$id = (isset($_GET["id"])) ? intval($_GET["id"])  : 0;
$current_item = $db->get_record_by_id($id)[0]; ?>

<html>
<div style="display:flex;justify-content:center;">
    <table border="1">
        <caption style="font-weight:bold; font-size: 24px; padding-bottom:2%;">
            <?php echo "Type: " . $current_item["product_name"] ?></caption>
        <thead>

            <tr>
                <th colspan=" 3" style="padding: 2%; font-size: 16px;">
                    <?php echo "Type:" . $current_item["category"]; ?></th>
                <th><?php echo "price:" . $current_item["list_price"]; ?>

                    <br>
                </th>
            </tr>
            <tr>
                <td colspan="3" style="padding: 2%; font-size: 16px;"><strong>Details</strong>
                    <br><?php echo "code:" . $current_item["product_code"]; ?>
                    <br><?php echo "Item id:" . $current_item["id"]; ?>
                    <br><?php echo "rating:" . $current_item["rating"]; ?>
                </td>
                <td colspan="2"><strong></strong>
                    <img src="<?php echo "images/" . $current_item["photo"]; ?>">
                </td>
            </tr>
        </thead>
    </table>
</div>


</html>