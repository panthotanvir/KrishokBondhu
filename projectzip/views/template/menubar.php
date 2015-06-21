<div class="ddsmoothmenu_header">
            <div id="templatemo_menu" class="ddsmoothmenu">
              <ul>
                <li><?php echo "<a href=\"" . base_url() . "index.php/krishifirst/home\">প্রথম পাতা</a>"; ?></li>
                <li><?php echo "<a href=\"" . base_url() . "index.php/krishifirst/about\">আমাদের কথা</a>"; ?></li>
                <li><a href="#"> ব্যবসা বানিজ্য </a>
                  <ul>
                    <li><?php echo anchor('product/marketAnalysis','বাজার বিশ্লেষণ'); ?></li>
                    <li><?php echo anchor('product/buy', 'ক্রয়'); ?></li>
                    <li><?php echo anchor('product/sell', 'বিক্রয়'); ?></li>
                  </ul>
                </li>
                <li><a href="#">ঋণ দাতা সংস্থা </a>
                  <ul>
                    <li><?php echo "<a href=\"" . base_url() . "index.php/krishifirst/bankloan/0\">বাংলাদেশ ব্যাংক</a>"; ?></li>
                    <li><?php echo "<a href=\"" . base_url() . "index.php/krishifirst/bankloan/1\">কৃষি ব্যাংক</a>"; ?></li>
                    <li><?php echo "<a href=\"" . base_url() . "index.php/krishifirst/bankloan/2\">সোনালী ব্যাংক</a>"; ?></li>
                    <li><?php echo "<a href=\"" . base_url() . "index.php/krishifirst/bankloan/3\">অগ্রণী ব্যাংক</a>"; ?></li>
                    <li><?php echo "<a href=\"" . base_url() . "index.php/krishifirst/bankloan/4\">গ্রামীণ ব্যাংক</a>"; ?></li>
                    <li><?php echo "<a href=\"" . base_url() . "index.php/krishifirst/bankloan/5\">জনতা ব্যাংক</a>"; ?></li>
                  </ul>
                </li>
                <li><a href="#"> তথ্য ও প্রযুক্তি </a></li>
                <li><a href="#"> প্রশ্নসমূহ </a></li>
                <?php if($_SESSION['x']==1) { ?>
                             <li><?php echo "<a href=\"" .base_url(). "index.php/user/myProfile\">প্রোফাইল</a>";?></li>
                             <li><?php echo "<a href=\"" .base_url(). "index.php/user/unsetSession\">LOG OUT</a>";?></li>
                             <?php } ?>
                
              </ul>
              <br style="clear: left" />
            </div>
            <!-- end of templatemo_menu --> 
          </div>
          <!-- end of ddsmoothmenu_header class --> 
        </div>
        <!-- END of templatemo_header --> 
      </div>
      
      <!-- END of templatemo_header_wrapper -->
      
     
