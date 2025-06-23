<?php
session_start();

// Handle quantity update or remove
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['remove']) && isset($_POST['index'])) {
        unset($_SESSION['cart'][$_POST['index']]);
        $_SESSION['cart'] = array_values($_SESSION['cart']); // reindex
    }
    if (isset($_POST['update']) && isset($_POST['index']) && isset($_POST['quantity'])) {
        $qty = max(1, intval($_POST['quantity']));
        $_SESSION['cart'][$_POST['index']]['quantity'] = $qty;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php echo $brandName; ?> - Your Cart</title>
    <?php include 'includes/head.php'; ?>
</head>

<body>
    <?php include 'includes/navigation.php'; ?>
    <div class="container py-5">
        <h2>Your Cart</h2>
        <?php if (!empty($_SESSION['cart']) && is_array($_SESSION['cart'])): ?>
            <table class="table">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Subtotal</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $total = 0;
                    foreach ($_SESSION['cart'] as $index => $item):
                        $quantity = isset($item['quantity']) ? (int)$item['quantity'] : 1;
                        $subtotal = $item['price'] * $quantity;
                        $total += $subtotal;
                    ?>
                        <tr>
                            <td><img src="<?= htmlspecialchars($item['image']) ?>" alt="<?= htmlspecialchars($item['name']) ?>" width="60"></td>
                            <td><?= htmlspecialchars($item['name']) ?></td>
                            <td>$<?= number_format($item['price'], 2) ?></td>
                            <td>
                                <form method="post" class="form-inline">
                                    <input type="hidden" name="index" value="<?= $index ?>">
                                    <input type="number" name="quantity" value="<?= $quantity ?>" min="1" class="form-control form-control-sm" style="width:70px;display:inline-block;">
                                    <button type="submit" name="update" class="btn btn-primary btn-sm">Update</button>
                                </form>
                            </td>
                            <td>$<?= number_format($subtotal, 2) ?></td>
                            <td>
                                <form method="post" style="display:inline;">
                                    <input type="hidden" name="index" value="<?= $index ?>">
                                    <button type="submit" name="remove" class="btn btn-danger btn-sm">Remove</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="4" class="text-right">Total</th>
                        <th colspan="2">$<?= number_format($total, 2) ?></th>
                    </tr>
                </tfoot>
            </table>
            <div class="text-right">
                <a href="checkout.php" class="btn btn-success btn-lg">Proceed to Checkout</a>
            </div>
        <?php else: ?>
            <p>Your cart is empty.</p>
        <?php endif; ?>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>

</html>