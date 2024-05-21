<?php
include_once 'db.php';
$sql = "DELETE FROM ingredient_inventory WHERE Item_ID='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Book Data has been deleted');</script>"; 
    echo "<script>window.location.href = 'index.php'</script>";     
  
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>