<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php"); 
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

    <title>Admin Section - Manage Posts</title>
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
                <a href="create-posts.php" class="btn btn-big">Add Post</a>
                <a href="index.php" class="btn btn-big">Manage Post</a>
            </div>
            
            <div class="content">

                <h2 class="page-title">Manage Posts</h2>

                <?php include(ROOT_PATH . '/app/includes/messages.php'); ?>

                <table>
                    <thead>
                        <th>#</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th colspan="3">Action</th>
                    </thead>
                    <tbody>
                        <?php foreach ($posts as $key => $post): ?>
                            <tr>
                                <td><?php echo $key + 1; ?></td>
                                <td><?php echo $post['title']; ?></td>
                                <td>Quinterious</td>
                                <td><a href="edit.php?id=<?php echo $post['id']; ?>" class="edit">Edit</a></td>
                                <td><a href="edit.php?delete_id=<?php echo $post['id']; ?>" class="delete">Delete</a></td>
                                
                                <?php if ($post['published']): ?>
                                    <td><a href="edit.php?published=0&p_id=<?php echo $post['id'] ?>" class="unpublish">Unpublish</a></td>
                                <?php else: ?>
                                    <td><a href="edit.php?published=1&p_id=<?php echo $post['id'] ?>" class="publish">Publish</a></td>
                                <?php endif; ?>
                            </tr>
                        <?php endforeach; ?>
                       
                    </tbody>
                </table>


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