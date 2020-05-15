

<footer>
    <div class="section-container footer-container">
        <div class="container">
            <div class="row">
                    <div class="col-md-4">
                        <h4>About us</h4>
                        <p><?php echo $footer_short;?></p>
                    </div>

                    <div class="col-md-4">
                        <h4>Do you like ? Share this !</h4>
                        <p>
                            <a href="https://facebook.com/<?php echo $fb_link;?>" target="_blank" class="social-round-icon white-round-icon fa-icon" title="">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                          </a>
                          <a href="https://twitter.com/<?php echo $tw_link;?>"  target="_blank" class="social-round-icon white-round-icon fa-icon" title="">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                          </a>
                          <a href="https://www.youtube.com/<?php echo $yt_link;?>"  target="_blank"  class="social-round-icon white-round-icon fa-icon" title="">
                            <i class="fa fa-youtube" aria-hidden="true"></i>
                          </a>
                        </p>
                       
                    </div>

                    <div class="col-md-4">
                        <h4>Email Us</h4>
                        
                        <div class="form-group">
                          
                            <?php echo $site_mail; ?>
                            </div>
                        </div>


                    </div>
            </div>
        </div>
    </div>
</footer>