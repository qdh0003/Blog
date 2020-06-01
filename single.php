<?php include("path.php") ?>
<?php include(ROOT_PATH . '/app/controllers/posts.php'); 

if (isset($_GET['id'])) {
    $post = selectOne('posts', ['id' => $_GET['id']]);
}

$topics = selectAll('topics');
$posts = selectAll('posts', ['published' => 1]);

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
    <link rel="stylesheet" href="assets/css/styles.css">
    <title><?php echo $post['title']; ?> | QUICKSAND</title>
</head>

<body>
    
    <?php include(ROOT_PATH . "/app/includes/header.php"); ?>

    <!-- Page Wrapper -->
    <div class="page-wrapper">


        <!-- Article Content -->
         <div class="content clearfix">

            <!-- Main Content-->
         <div class="main-content-wrapper">
            <div class="main-content single">
                <h1 class="post-title"><?php echo $post['title']; ?></h1>

                <div class="post-content">
                   <?php echo html_entity_decode($post['body']); ?>
                </div>
                
            </div>
        </div>
            <!-- Main Content -->
            <!-- Sidebar -->

            <div class="sidebar single">


            <!-- Quote of the Day -->
    
            <div style="width:350px;position:relative;background-color:none;padding:4px">
            <div style="font:bold 12pt '';color:#000000">Quote of the Day</div>
            <style>
            #QuoteOfTheDay {width:100%;border:1px #AFAFAF solid;background-color:none}
            #QuoteOfTheDay TD {font:normal 10pt '';color:#000000}
            #QuoteOfTheDay A {color:#0000FF}
            </style><div id="tfd_quote_div">
            <table id="QuoteOfTheDay"><tr><td align="left">
            Awake, arise, or be forever fallen!
            <br/><b><a href="//encyclopedia2.thefreedictionary.com/John+Milton" rel="nofollow">John Milton</a></b><br/>(1608-1674)</td></tr></table></div>
            <script type="text/javascript">document.getElementById("tfd_quote_div").style.visibility="hidden"</script>
            <script async type="text/javascript" src="//img.tfd.com/daily/quote-top.js" charset="UTF-8"></script>
            <div style="font:normal 8pt '';color:#000000">
            <a style="color:#000000" href="https://www.thefreedictionary.com/lookup.htm#Quote-of-the-Day" rel="nofollow">Quote of the Day</a>
            provided by <a style="color:#000000" href="https://www.thefreelibrary.com/" rel="nofollow">The Free Library</a>
            </div></div>

            <!--end of Quote of the Day-->
    <br>
    

                <div class="section popular">
                    <h2 class="section-title">Popular</h2>
                    
                    <?php foreach ($posts as $p): ?>
                        <div class="post clearfix">
                            <img src="<?php echo BASE_URL . '/assets/images/' . $p['image']; ?>" alt="">
                            <a href="" class="title">
                                <h4><?php echo $p['title']; ?></h4>
                            </a>
                        </div>
                    <?php endforeach; ?>


                </div>
                <!-- Topics Section Wrapper -->
                <div class="section topics">
                    <h2 class="section-title">Topics</h2>
                    <ul>
                        <?php foreach ($topics as $topic): ?>
                            <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name'] ?>"><?php echo $topic['name']; ?></a></li>
                        <?php endforeach; ?>
                    </ul>

                </div>

                <!-- End of Topics Section Wrapper-->

            </div>

            <!-- End of Sidebar -->

        </div>

        <!-- //Article Content -->

    </div>

    <!-- //Page Wrapper -->



    <!-- Footer Wrapper -->
    
    <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>

    <!-- End of Footer Wrapper-->


    
    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    
    <!-- Slick Carousel Library for Trending Posts Slider -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- Custom Script -->
    <script src="assets/js/scripts.js"></script>
</body>


</html>