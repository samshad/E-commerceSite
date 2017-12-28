<?php
include_once "view/inc_header.php";
include_once "view/inc_menu.php";

echo '
<section>
	<div class="wrapper">
		<div id="profile">';

require_once "view/customer/inc_leftbar.php";
require_once "view/customer/inc_editProfile.php";


echo '</div>
	</div>
</section>
';

include_once "view/inc_footer.php";
?>