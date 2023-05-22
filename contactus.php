<?php
    session_start();
?>

<form method="POST" action="contact.php">
    <?php
        $_token = md5(time());
        $_SESSION["_token"] = $_token;
    ?>
    <input type="hidden" name="_token" value="<?php echo $_token; ?>" />

    <p>
        <label>Name</label>
        <input type="text" name="name" required>
    </p>

    <p>
        <label>Email</label>
        <input type="email" name="email" required>
    </p>

    <p>
        <label>Message</label>
        <textarea name="message" required></textarea>
    </p>

    <p>
        <input type="submit" name="contact_us" value="Send message">
    </p>
</form>