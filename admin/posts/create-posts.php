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

    <title>Admin Section - Create Post</title>
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

                <h2 class="page-title">Create Post</h2>

                <?php include(ROOT_PATH . '/app/helpers/formErrors.php'); ?>

                <form action="create-posts.php" method="post" enctype="multipart/form-data">
                    <div>
                        <label>Title</label>
                        <input type="text" name="title" value="<?php echo $title ?>" class="text-input">
                    </div>

                    <div>
                        <label>Body</label>
                        <textarea name="body" id="body"><?php echo $body ?></textarea>
                    </div>

                    <div>
                        <label>Image</label>
                        <input type="file" name="image" class="text-input">
                    </div>

                    <div>
                        <label>Topic</label>
                        <select name="topic_id" class="text-input">
                            <option value=""></option>
                            <?php foreach ($topics as $key => $topic): ?>
                                <?php if (!empty($topic_id) && $topic_id == $topic['id']): ?>
                                    <option selected value="<?php echo $topic['id']; ?>"><?php echo $topic['name']; ?></option>
                                <?php else: ?>
                                    <option value="<?php echo $topic['id']; ?>"><?php echo $topic['name']; ?></option>
                                <?php endif; ?>
                                
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div>
                        <?php if (empty($published)): ?>
                            <label>
                            <input type="checkbox" name="published">
                            Publish
                        </label>
                        <?php else: ?>
                            <label>
                            <input type="checkbox" name="published" checked> 
                            Publish
                        </label>
                        <?php endif; ?>
                       
                    </div>
                    <div>
                        <button type="submit" name="add-post" class="btn btn-big">Add Post</button>
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