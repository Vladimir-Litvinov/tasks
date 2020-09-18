<?php
include_once 'connection.php';
$id = $_GET['id'];
if (isset($_POST['update'])) {
    $sql = "UPDATE `task8` SET first='$_POST[first]', last ='$_POST[last]',Username='$_POST[Username]' WHERE id='$_GET[id]'";
    $res = mysqli_query($link, $sql);
    header("location: http://{$_SERVER['SERVER_NAME']}/task_8.php");
}
?>
<link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
<link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
<link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
<link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
<link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
<link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
<link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
<link rel="stylesheet" media="screen, print" href="css/fa-regular.css">

<body class="mod-bg-1 mod-nav-link ">
<main id="js-page-content" role="main" class="page-content">
    <div class="col-md-6">
        <div id="panel-1" class="panel">
            <div class="panel-hdr">
                <h2>
                    Задание
                </h2>
                <div class="panel-toolbar">
                    <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse"
                            data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                    <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen"
                            data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                </div>
            </div>
            <?php include_once 'connection.php' ?>
            <div class="panel-container show">
                <div class="panel-content">
                    <h5 class="frame-heading">
                        Обычная таблица
                    </h5>

                    <div class="frame-wrap">
                        <table class="table m-0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                            </tr>
                            </thead>
                            <form action="" method="post">
                                <tbody>
                                <tr>
                                    <td><?php echo $_GET['id'] ?></td>
                                    <td><input type="text" name="first"></td>
                                    <td><input type="text" name="last"></td>
                                    <td><input type="text" name="Username"></td>
                                    <td>
                                        <button type="submit" name="update">Sent</button>
                                    </td>
                                </tr>
                                </tbody>

                            </form>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<script src="js/vendors.bundle.js"></script>
<script src="js/app.bundle.js"></script>
<script>
    // default list filter
    initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
    // custom response message
    initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
</script>
</body>