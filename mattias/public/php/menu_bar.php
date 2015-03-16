<?php
if(isset($data['logged_in']) && $data['logged_in']){
	echo '
		<ul class="login_button">
			<li>
				<a href="#" onfocus="dropDown(\'nav-content5\');" onblur="riseUp(\'nav-content5\');" class="nav-item">Account</a>
				<div class="nav-content" id="nav-content5">
					<div class="nav-sub">
						<ul>
							<li><a href="/account/index">Profile</a></li>
							<li><a href="/account/files">My Files</a></li>
							<li><a href="/account/settings">Settings</a></li>
							<li><a href="/home?logOut=1">Log Out</a></li>
						</ul>
					</div>
				</div>
			</li>
		</ul>
	';
}
else{
	echo '
		<ul class="login_button">
			<li>
				<a href="#" onfocus="dropDown(\'nav-content5\');" onblur="riseUp(\'nav-content5\');" class="nav-item">Account</a>
				<div class="nav-content" id="nav-content5">
					<div class="nav-sub">
						<ul>
							<li><a href="/login">Log In or Register</a></li>
						</ul>
					</div>
				</div>
			</li>
		</ul>
	';
}

echo '</nav>';
