<?php
	$info = array(
		1 => array(
			'id' => 1000,
			'fullname' => 'Lê Linh',
			'email' => 'minh@gmail.com'
		),
		2 => array(
			'id' => 2068,
			'fullname' => 'Quỳnh Nga',
			'email' => 'nga@gmail.com',
			'website' => 'unitop.vn'
		)
	);
?>
<html>

<head>
    <title>Nhúng mảng vào html mảng đa chiều</title>
</head>

<body>
    <table border="1">
        <thead>
            <tr>
                <th align="center" width="50">stt</th>
                <th align="center" width="50">ID</th>
                <th align="center" width="250">Họ và tên</th>
                <th align="center" width="250">email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            	if (!empty($info)) {
            		$count = 0;
            		foreach ($info as $user) {
            			$count++;
            		?>
            <tr>
                <td align="center"><?php echo $count; ?></td>
                <td align="center"><?php echo $user['id']; ?></td>
                <td align="center"><?php echo $user['fullname']; ?></td>
                <td align="center"><?php echo $user['email']; ?></td>
            </tr>
            <?php

            		}
            	}
            ?>
        </tbody>
    </table>
</body>

</html>