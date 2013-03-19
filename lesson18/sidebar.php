<div id="sidebar">
		
		<?php if(is_front_page()): ?>
			<ul class="nav2">
				<li class="mail"><a href="#"><h3>Mail</h3>Rostrud tionsequet. Met lan et, vullumny num</a></li>
				<li class="phone2"><a href="#"><h3>Phone Service</h3>Rostrud tionsequet. Met lan et, vullumny num</a></li>
				<li class="office"><a href="#"><h3>Office</h3>Rostrud tionsequet. Met lan et, vullumny num</a></li>
				<li class="conference"><a href="#"><h3>Conference Room</h3>Rostrud tionsequet. Met lan et, vullumny num</a></li>
			</ul>
			
		<?php elseif (is_home()): ?>
			<ul class="feedback">
				<li class="grey-tel"><a href="#"><h4>Denver Virtual Offices</h4><span>303.501.1801</span></a></li>
				<li class="skype"><a href="#"><h4>Skype</h4><span>denver.vo</span></a></li>
				<li class="grey-mail"><a href="#"><span>info@denvervirtualoffices.com</span></a></li>
			</ul>
			<ul class="nav2">
				<li class="mail"><a href="#"><h3>Mail</h3>Rostrud tionsequet. Met lan et, vullumny num</a></li>
				<li class="phone2"><a href="#"><h3>Phone Service</h3>Rostrud tionsequet. Met lan et, vullumny num</a></li>
				<li class="conference"><a href="#"><h3>Conference Room</h3>Rostrud tionsequet. Met lan et, vullumny num</a></li>
				<li class="office" id="none-border"><a href="#"><h3>Office</h3>Rostrud tionsequet. Met lan et, vullumny num</a></li>
			</ul>
			
		<?php elseif (is_page()): ?>
			<ul class="feedback">
				<li class="grey-tel"><a href="#"><h4>Denver Virtual Offices</h4><span>303.501.1801</span></a></li>
				<li class="grey-mail"><a href="#"><h4>Email</h4><span>info@denvervirtualoffices.com</span></a></li>
				<li class="earth"><a href="#"><h4>Need more than a virtual office?</h4><span>http://boardroomdenver.com</span></a></li>
			</ul>
			
		<?php endif; ?>
</div>		