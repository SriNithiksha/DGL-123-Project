<?php include 'partials/header.php'; ?>

<div class="container3">
    <h1>Payment</h1>
    <form action="process_payment.php" method="post">
        <label for="cardNumber">Card Number</label>
        <input type="text" id="cardNumber" name="cardNumber" placeholder="Enter your card number" required>

        <label for="expirationDate">Expiration Date</label>
        <input type="text" id="expirationDate" name="expirationDate" placeholder="MM/YYYY" required>

        <label for="cvv">CVV</label>
        <input type="text" id="cvv" name="cvv" placeholder="CVV" required>

        <label for="amount">Total</label>
        <input type="text" id="amount" name="amount" placeholder="$1500" required>

       <!-- <button type="submit">Pay Now</button>-->
        <a href="popup" class="popup">Pay Now</a>
    </form>
</div>