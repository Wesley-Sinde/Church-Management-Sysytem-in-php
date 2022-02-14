<?php
include('./lib/dbcon.php');
dbcon();
if (isset($_POST['slot_delete'])) {
    $id = $_POST['selector'];
    $N = count($id);
    for ($i = 0; $i < $N; $i++) {
        $result = mysqli_query($conn, "DELETE FROm slotsreserved where eventId='$id[$i]'");
    }
    header("location: addResrveSlots.php");
}
