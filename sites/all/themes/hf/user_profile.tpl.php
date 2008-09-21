<?php  if($user->picture) {echo "<div id=upicture>"; print theme('user_picture', $user); echo "</div>";} ?>

<div class="custom_profiles">
	<div class="fields"><?php //print $user->name ?></div>

	<?php if ($user->profile_pd) { ?>
		<div class="namefloat"> <?php print $user->profile_name;?></div>
		<div class="pd"> , <?php print $user->profile_pd ?></div>
	<?php }else{ ?>
		<div class="name"> <?php print $user->profile_name;?></div>
	<?php } ?>
	<p><div class="utitle"> <?php print $user->profile_title ?></div></p>
	<p><div class="email"> <?php print $user->profile_email?></div></p>
	<p><div class="bio"><?php print $user->profile_biography ?></p>

	<p><a class="backlisting" href='javascript:history.go(-1)'> <br><< Back </a></p>
	</div>


</div>
