<!DOCTYPE html>
<html>
  <?php include "head.php"; ?>
  <body>
    <div class="container">
      <!-- start title -->
      <?php include "header.php"; ?>
      <!-- end title -->
      <div class="row">
        <div class="col-md-4"> <!-- column 1 (articles) -->
          <!-- Start templating style article -->
            <?php include "article-video.php"; ?>
            <?php include "article.php" ?>
          <!-- End templating style article -->
        </div>
        <div class="col-md-4"> <!-- column 2 (articles) -->
            <?php include "article.php"; ?>
            <?php include "article-video.php" ?>
        </div>
        <div class="col-md-4"> <!-- column 3 (sidebar) -->
            <!-- Start presentation -->
            <?php include "presentation.php"; ?>
            <!-- End presentation -->
            <!-- Start templating sidebar -->
            <?php include "sidebar.php"; ?>
            <!-- End templating sidebar -->
            <!-- Start embed Twitter -->
            <?php include "embed_twitter.php"; ?>
            <!-- End embed Twitter -->
        </div>
      </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <?php include "footer.php"; ?>
            </div>
        </div>
    </div>

    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>
