<!DOCTYPE html>
<html>

<head>
    <title>Profile ADMIN PANEL</title>
</head>

<body>

    <?php include ("connect.php"); ?>
    <?php include ("function.php"); ?>
    <?php include ("titlebar.php"); ?>

    <h3>Profile - Admin Panel System</h3>

    <p>You are logged in as <b><?php echo $username;  ?></b> [ <?php echo $level_name; ?> ] </p>
  	<p>
        <?php
if ($user_level == 1) {
echo "<a href='adminpanel.php'>Admin Panel</a>";
}
?>
    </p>

</body>

</html>