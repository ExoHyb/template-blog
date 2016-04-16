<!DOCTYPE html>
<html>
  <?php include "head.php"; ?>
  <body>
    <div class="container">
      <!-- start title -->
      <?php include "header.php"; ?>
      <!-- end title -->
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8"> <!-- column display article! -->
          <!-- Start templating style article -->
          <?php include "article-video.php"; ?>
          <!-- End templating style article -->
          <!-- Start related post -->
          <?php include "related_posts.php"; ?>
          <!-- End related post -->
          <!-- Start Comments -->
          <?php include "comments.php"; ?>
          <!-- End Comments -->
          <!-- Start Leave a Comment -->
          <?php include "leave_comment.php"; ?>
          <!-- End Leave a Comment -->
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4"> <!-- column right (sidebar) -->
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
            <div class="col-xs-12 col-sm-12 col-md-12">
                <?php include "footer.php"; ?>
            </div>
        </div>
    </div>

    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>
