<?php
if(isset($data['logged_in']) && $data['logged_in']){
	echo '
		<ul class="login_button">
			<li>
				<a href="#"class="nav-item">Account</a>
				<div class="nav-content">
					<div class="nav-sub">
						<ul>
							<li><a href="/mattias/account/index">Profile</a></li>
							<li><a href="/mattias/account/settings">Settings</a></li>
							<li><a href="/mattias/home?logOut=1">Log Out</a></li>
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
				<a href="#"class="nav-item">Account</a>
				<div class="nav-content">
					<div class="nav-sub">
						<ul>
							<li><a href="/mattias/login">Logg In or Register</a></li>
						</ul>
					</div>
				</div>
			</li>
		</ul>
	';
}

echo '</nav>';
