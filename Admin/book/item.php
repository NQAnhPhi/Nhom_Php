<?php echo "<tr class='alternatingRowStyle'>
    <td>
        <div class='img-container'><img src='../../images/books/$row[6]' /></div>
    </td>
    <td>$row[0]</td>
    <td>$row[1]</td>
    <td>$row[2]</td>
    <td>$row[3] %</td>
    <td>$row[4]</td>
    <td>$row[5]</td>
    <td>$row[10]</td>
    <td>
        <a href='/Admin/Books/Edit/BK-00001' class='edit-btn'><abbr title='Cập nhật dữ liệu'><img
                    src='../../images/edit.png' width='20' height='20' /></abbr></a>
        <a href='./detail.php?id=$row[0]' class='edit-btn'><abbr title='Xem chi tiết'><img
                    src='../../images/details.png' width='20' height='20' /></abbr></a>
        <a href='./action.php?delete=$row[0]' Onclick='return ConfirmDelete();' class='delete edit-btn'><abbr title='Xóa dữ liệu'><img
                    src='../../images/delete.png' width='20' height='20' /></abbr></a>
    </td>
</tr>";
?>
<script>
function ConfirmDelete() {
    var x = confirm("Are you sure you want to delete?");
    if (x)
        return true;
    else
        return false;
}
</script>