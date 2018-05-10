<!DOCTYPE html>
<html>

<head>
    <title>Profile ADMIN PANEL</title>
</head>

<body>

    <?php include ("connect.php"); ?>
    <?php include ("function.php"); ?>
    <?php include ("titlebar.php"); ?>

    <h3>Admin Panel</h3>

    <?php
if ($user_level != 1) {
	header("location: profile.php");
}
?>
        <p>
            <a href="adminpanel.php?type=user">User Settings</a> |
            <a href="">Level Settings</a>
        </p>

        <p>
            <?php
	if (isset($_GET['type']) && !empty($_GET['type'])) {
	?>
                <table>
                    <tr>
                        <td>Users</td>
                        <td>Options</td>
                    </tr>
                    <?php
		$list_query = mysqli_query($conn, "SELECT id, type, username FROM users");
		// var_dump($list_query);
		while ($run =  mysqli_fetch_array($list_query)) {
			$uid = $run['id'];
			$username = $run['username'];
			$type = $run['type']; 
			?>
                        <tr>
                            <td>
                                <?php echo $username; ?>
                            </td>
                            <td>
                                <?php
			if ($type == 'a') {
				echo "<a href='option.php?uid=$uid&type=$type'>Deactive</a>";
			}else {
				echo "<a href='option.php?uid=$uid&type=$type'>activate</a>";
			}
			?>
                            </td>
                        </tr>
                        <?php
		}
		?>
                </table>
                <?php
	} 
	?>
        </p>

</body>

</html>