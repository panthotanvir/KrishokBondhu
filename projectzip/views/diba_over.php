<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> </title>

<link href="<?php echo base_url(); ?>assets/css/templatemo_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/ddsmoothmenu.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>assets/css/jquery.dualSlider.0.2.css" />

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/ddsmoothmenu.js">

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_side_menu", 
	orientation: 'v', 
	classname: 'ddsmoothmenu', 
	
	contentsource: "markup" 
})

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", 
	orientation: 'h', 
	classname: 'ddsmoothmenu', 
	
	contentsource: "markup" 
})

</script>

<script src="<?php echo base_url(); ?>assets/js/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.timers-1.2.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.dualSlider.0.3.min.js" type="text/javascript"></script>

<script type="text/javascript">
    
    $(document).ready(function() {
        
        $("#carousel").dualSlider({
            auto:true,
            autoDelay: 3000,
            easingCarousel: "swing",
            easingDetails: "easeOutBack",
            durationCarousel: 1000,
            durationDetails: 600
        });
        
    });
	
     
</script>

</head>
<body>
<table align="center" border="0" bgcolor="#DBFFB7">
    <tr>
        <td width="30" >
        <div id="templatemo_header_wrapper">
            <div id="templatemo_header">
                <div id="site_title"><a href="#">Free CSS Templates</a></div>
                <div class="ddsmoothmenu_header">
                    <div id="templatemo_menu" class="ddsmoothmenu">
                        <ul>
                            <li><?php echo "<a href=\"" .base_url(). "index.php/krishifirst/index\">প্রথম পাতা</a>";?></li>
                             <li><?php echo "<a href=\"" .base_url(). "index.php/krishifirst/about\">আমাদের কথা</a>";?></li>
                            <li><a href="#"> ব্যবসা বানিজ্য </a>
                                <ul>
                                    <li><a href="#"> বাজার-বিশ্লেষণ </a></li>
                                    <li><?php echo "<a href=\"" .base_url(). "index.php/krishifirst/business\">ক্রয় বিক্রয় </a>";?></li>
                                    
                                </ul>
                            </li>
                            <li><a href="#">ঋণ দাতা সংস্থা </a>
                                <ul>
                               
									<li><?php echo "<a href=\"" .base_url(). "index.php/krishifirst/bankloan/0\">বাংলাদেশ ব্যাংক</a>";?></li>                               
                                    <li><?php echo "<a href=\"" .base_url(). "index.php/krishifirst/bankloan/1\">কৃষি ব্যাংক</a>";?></li>
                                    <li><?php echo "<a href=\"" .base_url(). "index.php/krishifirst/bankloan/2\">সোনালী ব্যাংক</a>";?></li>
                                    <li><?php echo "<a href=\"" .base_url(). "index.php/krishifirst/bankloan/3\">অগ্রণী ব্যাংক</a>";?></li>
                                    <li><?php echo "<a href=\"" .base_url(). "index.php/krishifirst/bankloan/4\">গ্রামীণ ব্যাংক</a>";?></li>
                                    <li><?php echo "<a href=\"" .base_url(). "index.php/krishifirst/bankloan/5\">জনতা ব্যাংক</a>";?></li>
                                </ul>
                            </li>
                            <li><a href="#"> তথ্য ও প্রযুক্তি </a></li> 
                             <li><a href="#"> প্রশ্নসমূহ </a></li>
                        </ul>
                        <br style="clear: left" />
                    </div> <!-- end of templatemo_menu -->
                </div> <!-- end of ddsmoothmenu_header class -->
            </div> <!-- END of templatemo_header -->
        </div> <!-- END of templatemo_header_wrapper -->
        
        
         <div id="templatemo_main_wrapper">
            <div id="templatemo_main">
                <table >
                	<tr>
                    	<td>
                        	<div class="ddsmoothmenu_sider">
                                 <div id="templatemo_side_menu" class="ddsmoothmenu">
                                    <ul>
                                        <li><a href="#" > খাদ্য ও পুষ্টি </a></li>
                                     </ul>
                                     <ul>
                                        <li><a href="#" > পরিবেশ </a></li>
                                     </ul>
                                     <ul>
                                     	<li><a href="#">কৃষি অনুষ্ঠান </a>
                                            <ul>
                                                <li><a href="#">হৃদয়ে মাটি ও মানুষ</a>
                                                	<ul>
                                                    	<li><?php echo "<a href=\"" .base_url(). "index.php/krishifirst/program/0\">পরিদর্শন</a>";?></li>
                                                		<li><?php echo "<a href=\"" .base_url(). "index.php/krishifirst/program/1\">প্রোগ্রাম তালিকা</a>";?></li>
                                                    </ul>
                                                 </li>
                                                    <li><a href="#">কৃষি দিবানিশি</a>
                                                    	<ul>
                                                    	<li><?php echo "<a href=\"" .base_url(). "index.php/krishifirst/program/2\">পরিদর্শন</a>";?></li>
                                                		<li><?php echo "<a href=\"" .base_url(). "index.php/krishifirst/program/3\">প্রোগ্রাম তালিকা</a>";?></li>
                                                    	</ul>
                                                    </li>
                                                	<li><a href="#">হৃদয়ে মাটি ও মানুষের ডাক</a>
                                                    <ul>
                                                    	<li><?php echo "<a href=\"" .base_url(). "index.php/krishifirst/program/4\">পরিদর্শন</a>";?></li>
                                                		<li><?php echo "<a href=\"" .base_url(). "index.php/krishifirst/program/5\">প্রোগ্রাম তালিকা</a>";?></li>
                                                    </ul>
                                                    </li>
                                                
                                             </ul>
                                         </li>
                                                
                                       </ul>
                                      	
                                     
                                     <ul>
                                        <li><a href="#"> ফসল </a>
                                           
											<ul >
	
		<li>
			<a href="#">মাঠ ফসল</a>
				<ul>
                            		<li>
                                		<a href="#">দানা ফসল</a>
							<ul>
                                    				<li><a href="#">ধান</a></li>
								<li><a href="#">গম</a></li>
								<li><a href="#">ভুট্টা</a></li>
                                        			<li><a href="#">সরগম</a></li>
                                        			<li><a href="#">বার্লি</a></li>
							</ul>
					</li>
                                 	<li> 
						<a href="#">ডাল ফসল</a>
                                 		<ul>
                                    			<li><a href="#">মসুর</a></li>
							<li><a href="#">মুগ </a></li>
							<li><a href="#">মাসকলাই </a></li>
                                        		<li><a href="#">কাউন</a></li>
                                        		<li><a href="#">খেশারি</a></li>
                                        		<li><a href="#">ছোলা </a></li>
                                       		 	<li><a href="#">অঢ়রহ</a></li>
                                        		<li><a href="#">মটর</a></li>
                                        
						</ul>
                                 	</li>
                                 	<li> <a href="#">তেল ফসল</a>
                                  		<ul>
                                    			<li><a href="#">সরিষা</a></li>
							<li><a href="#">সয়াবিন </a></li>
							<li><a href="#">তিসি</a></li>
                                        		<li><a href="#">সূর্যমুখী </a></li>
                                        		<li><a href="#">বাদাম </a></li>
                                        		<li><a href="#">তিল </a></li>
                                        
                                        
						</ul>
                                 	</li>
                                 	<li> <a href="#">অর্থকরী ফসল</a>
                                 		<ul>
                                			<li><a href="#">পাট </a></li>
							<li><a href="#">চা </a></li>
							<li><a href="#">তুলা </a></li>
        		                                <li><a href="#">তামাক </a></li>
							<li><a href="#">আখঁ </a></li>                    
		                                        <li><a href="#">পান </a></li>
                	                        <li><a href="#">চিনাবাদাম </a></li>
                        	              </ul>
					</li>
                              
          
                                 </ul>
			</li>	
    			<li><a href="#">উদ্যান ফসল</a>
                        	   <ul>
                                	<li><a href="#">ফল </a>
                                		<ul>
                                			<li><a href="#">আম </a></li>
							<li><a href="#">কাঁঠাল </a></li>
							<li><a href="#">লিচু </a></li>
        		                                <li><a href="#">পেঁপে </a></li>
							<li><a href="#">পেয়ারা </a></li>                    
		                                        <li><a href="#">জলপাই </a></li>
                		                        <li><a href="#">আমরা </a></li>
                                		        <li><a href="#">সফেদা </a></li>
                                        		<li><a href="#">কুল </a></li>
                                        		<li><a href="#">লেবু </a></li>
						</ul>
					</li>
                            
					<li><a href="#">শাক সবজি </a>
        	                        	<ul>
                	                		<li><a href="#">আলু </a></li>
							<li><a href="#">পটল </a></li>
							<li><a href="#">ফুলকপি </a></li>
                                        		<li><a href="#">বাঁধাকপি </a></li>
							<li><a href="#">লালশাক </a></li>                    
                                		        <li><a href="#">বেগুন </a></li>
                                        		<li><a href="#">টমেটো </a></li>
                                        		<li><a href="#">মূলা </a></li>
                                        		<li><a href="#">সীল  </a></li>
                                        		<li><a href="#">লাউ </a></li>
						</ul>
					</li>
                             
					<li><a href="#">মশলা</a>
                                		<ul>
                                			<li><a href="#">পেয়াঁজ </a></li>
							<li><a href="#">মরিচ </a></li>
							<li><a href="#">আদা </a></li>
                                        		<li><a href="#">রসুন </a></li>
							<li><a href="#">ধনিয়া </a></li>                    
                                		        <li><a href="#">হলুদ </a></li>
                                        		<li><a href="#">জিরা </a></li>
                                       			 <li><a href="#">তেজপাতা </a></li>
                                       			 <li><a href="#">কালোজিরা  </a></li>
                                        		<li><a href="#">দারুচিনি </a></li>
						</ul>
					</li>
                                
                    
                                        
				</ul>
			</li>
			<li><a href="#">ভেষজ</a>
                        	<ul>
                                	<li><a href="#">আমলকি </a></li>
					<li><a href="#">চন্দন </a></li>
					<li><a href="#">শিমূল </a></li>
                                        <li><a href="#">আড়হর </a></li>
					<li><a href="#">নয়নতারা </a></li>                    
                                        <li><a href="#">পাথরকুঁচি</a></li>
                                        <li><a href="#">মেহেদী</a></li>
                                        <li><a href="#">সজিনা</a></li>
                                        <li><a href="#">থানকুনি </a></li>
                                        <li><a href="#">সর্পগন্ধা </a></li>
				</ul>
			</li>
                        	
		</ul>					


                                        </li>
                                     </ul>
  
                                     <ul>
                                        <li><a href="#"> চাষাবাদ </a>
                                            <ul>
                                                <li><a href="#">Sub menu 1</a></li>
                                                <li><a href="#">Sub menu 2</a></li>
                                                <li><a href="#">Sub menu 2</a></li>
                                                <li><a href="#">Sub menu 2</a></li>
                                                <li><a href="#">Sub menu 2</a></li>
                                                <li><a href="#">Sub menu 2</a></li>
                                            </ul>
                                        </li>
                                     </ul>
                                     <ul>
                                        <li><a href="#" > কীটনাষক </a></li>
                                     </ul>
                                     <ul>
                                        <li><a href="#" > যন্ত্রপাতি </a></li>
                                     </ul>
                                     <ul>
                                        <li><a href="#" > সার </a></li>
                                     </ul>
                                     
                                      <ul>
                                        <li><a href="#" > নীতিমালা </a></li>
                                     </ul>
                                                                   
                                </div> 
                             </div> 
                             
                        </td>
                       
                        <td width="500px">
                    <div class="emne">  
            				<h2 align="center"> কৃষি দিবানিশি</h2>
                            
                                
                               
                               
                            
                            <p>
							Shykh Seraj টেলিভিশনে তার কর্মজীবন শুরু করেন অন্তত 35 বছর পিছনে হয় এবং প্রায় 30 বছর সরাসরি জন্য উন্নয়ন সাংবাদিকতার সাথে জড়িত. 1982 সালে তিনি একটি BTV মধ্যে টেলিভিশন প্রোগ্রাম, Mati হে Manush (মাটি ও পুরুষ) জন্য উপস্থাপক (বাংলাদেশ টেলিভিসন, রাষ্ট্র শুধুমাত্র রান দেশের স্থলজ টেলিভিশন) হিসাবে নিয়োগ করেন. তিনি 1996 সাল পর্যন্ত অব্যাহত ছিল এবং যখন তিনি প্রোগ্রাম যাব তারপর উপস্থাপনার 588 পর্বের অভিজ্ঞতা তার ব্যাগে ইতিমধ্যে ছিল. তিনি দিয়েছিলেন একটি ভিন্ন চেহারা কৃষি. তিনি মন্তব্য করেন যে, 'বাংলাদেশে শুধুমাত্র কৃষি সংস্কৃতি হয়.' ঠিক কোন উপায় নাই যে আপনি এই অবশ্যম্ভাবী সত্য, যা আমাদের অর্থনীতিকে হয় pedaling পইঠা থেকে দূরে যেতে পারে এখন পর্যন্ত. পরে তিনি শুরু ইমপ্রেস টেলেফিল্ম লিঃ / চ্যানেল তোমার কাজ, তিনি কৃষি প্রকৃত সত্য খুঁজে পেতে আরও অনুপ্রবিষ্ট. Hridoye Mati Manush হে (মাটির & হার্ট মধ্যে পুরুষ), Hridoye Mati হে Manusher Daak (মাটি ও হার্ট মধ্যে পুরুষ Post ') চ্যানেল তোমার জন্য এবং: দীর্ঘ গবেষণা পরে উপরন্তু, তার দলের সঙ্গে তিনি বরাবর 3 বিভিন্ন কৃষি প্রোগ্রাম উত্পাদিত করেনি কৃষি Dibanishi (কৃষি: সারাদিন ধরে) শুধুমাত্র রাষ্ট্র রান বাংলাদেশ আঞ্চলিক টেলিভিশন, BTV (বাংলাদেশ টেলিভিশন) জন্য. তার এমনকি আরও বাংলাদেশের প্রান্তিক, দরিদ্র এবং অন্ধকারাচ্ছন্ন কৃষকদের সুবিধার জন্য চরম উচ্চতায় পৌছতে সরাতে. কৃষক এবং জানা Shykh Seraj মন্তব্য: 'অসময়ের বন্ধু প্রকৃত বন্ধুই'. Seraj সত্যিই মহান মানুষ, যিনি কৃষকদের জন্য করেনি কেবল টেলিভিশনের মাধ্যমে তার জীবন উত্সৃষ্ট প্রোগ্রাম-এই পুরোপুরি একটি বিশ্ব জুড়ে বিস্ময়কর বিবরণ. করেনি যে কৃষির ইতিহাস পূর্বে কেহ সম্পন্ন? কৃষকদের 'উদ্দেশ্যে টেলিভিশন বাক্স ব্যবহার করা হল উদীয়মান ধারণা যে Shykh Seraj দ্বারা সর্বোচ্চ যাও বাস্তবায়িত হয়েছিল.


কৃষি Dibanishi (কৃষি: সারাদিন ধরে)

বাংলাদেশ টেলিভিসন খুব সম্প্রতি,, Shykh Seraj একটি নতুন প্রোগ্রাম চালু করা হয়েছে, খেতাবধারী, 'কৃষি Dibanishi' (কৃষি: সারাদিন ধরে) 13 আগস্ট, 2007 থেকে তার নিজস্ব পরিকল্পনা, উপস্থাপনা ও দিক, যেখানে নিম্নলিখিত বিষয়গুলি সম্পর্কে আলোচনা হাইলাইট করা হয়:

    আধুনিক কৃষি বিজ্ঞান,
    প্রযুক্তি,
    পরিবেশ,
    কৃষি
    কমার্স অ্যান্ড ইন্ডাস্ট্রি
    বাজার ব্যবস্থাপনা এবং
    গ্রামীণ জীবনের বিভিন্ন সেক্টর


কৃষি Dibanishi, বা 'কৃষি: গোলাকার ক্লক', একটি বাংলাদেশ বিপ্লবী প্রোগ্রাম হিসাবে Shykh Seraj সমস্ত তথ্য কৃষি, পরিবেশ, কৃষি শিল্প, বাণিজ্যিকীকরণ, আধুনিক কৃষি প্রযুক্তি সংক্রান্ত আনয়ন করা হয়. ইতিমধ্যেই প্রান্তিক চাষীদের জন্য প্রযোজ্য উন্নত কৃষি সরঞ্জাম অঙ্কিত. পাশাপাশি নীতিনির্ধারকদের, বিজ্ঞানী, কৃষি শ্রমিকের এক্সটেনশান সংক্রান্ত সমস্যাগুলি, গবেষক এছাড়াও প্রোগ্রামের মধ্যে দিয়ে আচ্ছাদিত. যেমন কৃষি মন্ত্রণালয়ের হিসাবে কর্তৃপক্ষ একা বাকি কোনো প্রাসঙ্গিক কোয়েরি, যা তাদের কাছে যাকে জাহির করা যায়নি সংক্রান্ত না. স্বপ্ন যে তিনি এতক্ষণ জন্য বাসনা - সামগ্রিকভাবে, এই প্রোগ্রাম Shykh Seraj জন্য একটি স্বপ্ন হয়েছে. তিনি BTV, শুধুমাত্র সরকারী মালিকানাধীন স্থলজ বাংলাদেশে কৃষি Dibanishi সঙ্গে টেলিভিশন চ্যানেলে ফিরে. তথ্য যে তিনি BTV-র মাধ্যমে প্রদান করা হয় এবং গুরুত্বপূর্ণ অনিবার্য কারণে BTV এর স্থলজ সমগ্র বাংলাদেশ কাছাকাছি ডিস্ট্রিবিউশন. কোন কৃষক কৃষি Dibanishi ঘড়ি ঠিক খোলার সময় দেশের যে কোন জায়গা থেকে তাদের টেলিভিশন আপ করতে পারেন. প্রান্তিক কৃষকদের কারণে এই যাও খুব খুশি কারণ আবার তারা তাদের তথ্য আনা এবং সেই অনুযায়ী কাজ করার সুযোগ থাকবে. তারা খুব খুশি কারণ এটি শুধুমাত্র তাদের জন্য কৃষি সম্পদ, যা তাদের জীবনে সারগর্ভ উন্নয়ন, যা সম্ভবত হতে টেকসই করে আনতে পারেন. কৃষি Dibanishi একটি বাংলাদেশ কৃষি উন্নয়ন ভবিষ্যতের জন্য দীর্ঘ প্রতীক্ষিত আশা. কৃষি Dibanishi একটি সাপ্তাহিক প্রোগ্রাম হচ্ছে 8:30 PM তে পোস্ট (BST) & পরবর্তী দিন (মঙ্গলবার) উপর 5:00 PM তে পোস্ট (BST) BTV উপর (বাংলাদেশ টেলিভিশন) এ অনুষ্ঠান প্রচার করা পুনরাবৃত্তি এ অনুষ্ঠান প্রচারিত হয় প্রতি সোমবার.                            
                                      
                                    </p>
         			</div>
                        </td>
                        
                        <td width="0px">
                        </td>
                        
                        <td width="0px">
                        <div class="emne">
                        <h4> </h4>
                        </div>
                        </td>
                    </tr>
                 </table>
                        	
                        
                <div class="cleaner"></div>
            </div> <!-- END of templatemo_main_wrapper -->
        </div> <!-- END of templatemo_main -->
        
         <!-- END of templatemo_slider_wrapper -->
        
        
        <div id="templatemo_footer_wrapper">
            <div id="templatemo_footer">
                Copyright © 2048 <a href="#">Your Company Name</a> | Designed by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a>
            </div> <!-- END of templatemo_footer -->
        </div> <!-- END of templatemo_footer_wrapper -->
        </td>
    </tr>
</table>
</body>
</html>