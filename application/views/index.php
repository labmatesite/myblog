<div class="content container">



  <!-- blog container start-->
  <div class="col-md-8 blog">
    <?php  foreach ($data as  $value) {
      // limiting blog character to show on blog page
        $postcon = word_limiter($value['post'],25);
     ?>
      <div class="clearfix">
      <img class="img thumbnail" src="assets/paris.jpg" alt="demo" width="170" height="170">
      <h2><strong><a href="<?= base_url('post')  ?>"><?= $value['email'] ?></a></strong></h2>
      <p><?= $postcon?></p>
      </div>  
      <?php } ?>
                                          <!-- pagination -->
          <div>
            <ul  class="pagination justify-content-center" style="margin:20px 0">
              <li class="page-item"><a class="page-link" href="#">Previous</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">Next</a></li>
             </ul>
        </div>
  </div>
  <!-- blog container end -->


<!-- rightbar start no-1-->
<div class="col-md-4">
  <div class="blogsidebar">
                                              <!-- search bar -->
      <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <form class="form-inline" action="/action_page.php">
          <input class="form-control mr-sm-2" type="text" placeholder="Search">
          <button class="btn btn-success" type="submit" style="width: 108px;">Search</button>
        </form>
     </nav>

    <h3><strong style="color: #4CAF50;">Popular Post</strong></h3>
        <?php for ($i=0; $i < 5; $i++) { ?>
    <div class="clearfix">
  <img class="img thumbnail" src="<?= base_url(); ?>assets/paris.jpg" alt="demo" width="170" height="170">
  <h2><strong><a href="<?= base_url('post')  ?>">Lorem Ipsum</a></strong></h2>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
  </div>
    <?php } ?>
  </div>  
  <!-- rightbar end -->

  <!-- rightbar start no-2-->
  <div class=" blogsidebar">
    <h3><strong style="color: #e8016c;">Latest Post</strong></h3>
        <?php for ($i=0; $i < 5; $i++) { ?>
    <div class="clearfix">
  <img class="img thumbnail" src="assets/paris.jpg" alt="demo" width="170" height="170">
  <h2><strong><a href="<?= base_url('post')  ?>">Lorem Ipsum</a></strong></h2>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
  </div>
    <?php } ?>
  </div>  
  <!-- rightbar end -->
</div>
</div>

