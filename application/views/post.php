<div class="content container">
  <!-- blog container start-->
  <div class="col-md-8 post">
        <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>
        <div class="chip">
  <img src="assets/paris.jpg" alt="Person" width="96" height="96">
  John Doe
</div>
<div>
        <div class="postimage">
          <img src="#" alt="post-image">
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
  </div>                                     

                                               <!-- Author Section -->
        <div class="media border p-3 author row">
          <div class="media-body">
            <h4>John Doe <small><i>Posted on February 19, 2016</i></small></h4>
          </div>
          <div>
          <div class="col-md-2">
          <img src="assets/paris.jpg" alt="John Doe" class="ml-3 mt-3 rounded-circle" style="width:70px; height: 70px; border-radius: 50%;">
        </div>
        <div class="col-md-10 aboutpost">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
        </div>
      </div>
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
  <img class="img thumbnail" src="assets/paris.jpg" alt="demo" width="170" height="170">
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

