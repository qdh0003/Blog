<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php");
adminOnly();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Used Font Awesome for icons -->
    <script src="https://kit.fontawesome.com/eb85bc995f.js" crossorigin="anonymous"></script>

    <!-- Fonts from Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:wght@500&display=swap" rel="stylesheet">

    <!-- Custom Styling -->
    <link rel="stylesheet" href="../../assets/css/styles.css">

    <!-- Admin Styling -->
    <link rel="stylesheet" href="../../assets/css/admin.css">

    <title>Admin Section - Create User</title>
</head>

<body>
    
    
    <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

    <!-- Admin Page Wrapper -->
    <div class="admin-wrapper">

        <!-- Left Sidebar-->
        <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>
        

        <!-- Admin Content -->
        <div class="admin-content">
            <div class="button-group">
                <a href="create-user.php" class="btn btn-big">Add User</a>
                <a href="index.php" class="btn btn-big">Manage Users</a>
            </div>
            
            <div class="content">

                <h2 class="page-title">Add User</h2>

                <?php include(ROOT_PATH . "/app/helpers/formErrors.php") ?>

                <form action="create-user.php" method="post">
                    <div>
                        <label>Username</label>
                        <input type="text" name="username" value="<?php echo $username; ?>" id="" class="text-input">
                    </div>
        
                    <div>
                        <label>Email</label>
                        <input type="email" name="email" value="<?php echo $email; ?>" id="" class="text-input">
                    </div>
        
                    <div>
                        <label>Password</label>
                        <input type="password" name="password" value="<?php echo $password; ?>" id="" class="text-input">
                    </div>
        
                    <div>
                        <label>Password Confirmation</label>
                        <input type="password" name="passwordConf" value="<?php echo $passwordConf; ?>" id="" class="text-input">
                    </div>

                    <div>
                        <?php if (isset($admin) && $admin == 1): ?>
                            <label>
                                <input type="checkbox" name="admin" checked>
                                Admin
                            </label>
                        <?php else: ?>
                            <label>
                                <input type="checkbox" name="admin">
                                Admin
                            </label>
                        <?php endif; ?>    
                        
                        
                    </div>

                    <div>
                        <button type="submit" name="create-admin" class="btn btn-big">Add User</button>
                    </div>

                </form>

            </div>

        </div>
        <!-- End of Admin Content-->

    </div>

    <!-- //Page Wrapper -->


    
    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <!-- CKeditor Text editor for Adding Posts-->
    <script src="https://cdn.ckeditor.com/ckeditor5/19.0.0/classic/ckeditor.js"></script>

    <!-- Custom Script -->
    <script src="../../assets/js/scripts.js"></script>
</body>


</html>