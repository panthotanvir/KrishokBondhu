<div class="row-fluid"> 
	<div class="span12 well">
		<h2 align="center">প্রবেশ করুন</h2>
        <form class="navbar-form" method="post" action="<?php echo $url['login']; ?>">
            <input class="span2" type="text" placeholder="ব্যবহারকারীর নাম" name="user"/>
            <input class="span2" type="password" placeholder="শব্দ চাবি" name="password" />
            <input class="btn btn-primary" type="submit" value="প্রবেশ করুন" name="login" />
            <a class="btn btn-info" href="<?php echo $url['signup']; ?>">নিবন্ধন করুন</a>
        </form>
	</div>
</div>
                       
