<!-- order.php -->
<?php
$item = $_POST['item'] ?? '';
$quantity = $_POST['quantity'] ?? 0;

// Example: Process the order
if ($item && $quantity > 0) {
    // Here you would typically save the order to a database or perform further processing
    echo "Order placed successfully!<br>";
    echo "Item: $item, Quantity: $quantity";
} else {
    echo "Invalid order. Please select an item and quantity.";
}
?>
