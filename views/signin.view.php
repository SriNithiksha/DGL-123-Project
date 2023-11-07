<?php include'partials/header.php'; ?>

<div class="container2">
        <form action="login.php" method="POST">
            <h2></Sign inh2>
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            <button class="button1">Login</button>
        </form>
        <form action="guest.php" method="POST">
            
           <!-- <button type="submit">Login as Guest</button>-->

            <a href="/" class="button2">Login as Guest</a>
        </form>
        <?php if(isset($error)): ?>
            <?= $error['error'] ?>
        <?php endif; ?>
    </div>

    <?php include 'partials/footer.php'; ?>