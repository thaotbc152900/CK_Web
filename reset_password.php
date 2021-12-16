<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="password.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <form method="post" action="results.php" align="center">
        <table align="center">
            <thead>
            <tr>
                <th>NO</th>
                <th>Tên người dùng</th>
                <th>Mật khẩu mới</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
<!--            --><?php
//            $sql = "SELECT * FROM admin";
//            $ad =$connect ->prepare($sql);
//            $ad ->execute();
//            $results = $ad->fetchAll(PDO::FETCH_OBJ);
//            if ($ad->rowCount() > 0) {
//                foreach ($results as $result) {
//                    ?>
<!--                    <tr>-->
<!--                        <td>--><?php //echo htmlentities($result->id); ?><!--</td>-->
<!--                        <td>--><?php //echo htmlentities($result->user); ?><!--</td>-->
<!--                        <td>--><?php //echo htmlentities($result->display_name); ?><!--</td>-->
<!--                    </tr>-->
<!--                    --><?php
//                }
//            }
//            ?>
            </tbody>
        </table>
    </form>
</div>
</body>
</html>
