<?php include("src/header.php"); ?>

<div class="container" >
   <div class="card main bg-light">
     
   <?php include("src/logo.php"); ?>
   <?php include("src/navigation.php"); ?>

         <div class="row">
              <div class="hhj col-md-6 mx-auto">
                  <div class="card mt-4 p-1">
                      <div class="card-body">
                        <h5 class="btne card-header text-white text-center"><i class="fa fa-comment" aria-hidden="true"></i> Contact</h5>
                        <form class="form-horizontal" action="" method="post">
          <fieldset>
           <p></p>
            <div class="form-group ">
              <label class="col-md-3 control-label" for="name">Name*</label>
              <div class="col-md-9">
                <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
              </div>
            </div>
    
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">Your E-mail*</label>
              <div class="col-md-9">
                <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
              </div>
            </div>
    
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Your message*</label>
              <div class="col-md-9">
                <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
              </div>
            </div>
    
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btne btn-lg">Submit</button>
              </div>
            </div>
          </fieldset>
          </form>
                    </div>
                  </div>
              </div>
       

         </div>

</div>

          

<?php include("src/footer.php"); ?>
