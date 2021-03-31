	<div class="container main-menu">
			<div class="row align-items-center justify-content-between d-flex">
				<div id="logo">
				<a href="<?php echo site_url(); ?>">
					<img src="<?php echo base_url() . 'theme/img/' . $logo; ?>" width="147" height="30" alt="" />
				</a>
				</div>
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						<!-- Multiple column menu example -->
						<?php
							$query = $this->db->get_where('tbl_navbar', array('navbar_parent_id' => 0));
							if ($query->num_rows() > 0) :
							?>
						<?php foreach ($query->result() as $row) : ?>
						<?php
							$nav_id = $row->navbar_id;
							$query2 = $this->db->get_where('tbl_navbar', array('navbar_parent_id' => $nav_id));
							?>
						<?php if ($query2->num_rows() > 0) : ?>
						<li class="menu-has-children">
						<!-- <i class="fa fa-angle-down"></i> -->
							<a href="<?php echo site_url($row->navbar_slug); ?>"
								class="menu-down"><?php echo $row->navbar_name; ?> </a>
							<!-- Sub -->
							<ul class="nav-sub">
								<?php foreach ($query2->result() as $row2) : ?>
								<li>
									<a href="<?php echo site_url($row2->navbar_slug); ?>"><?php echo $row2->navbar_name; ?></a>
								</li>
								<?php endforeach; ?>
							</ul>
							<!-- End Sub -->
						</li>
						<?php else : ?>
						<li>
							<a href="<?php echo site_url($row->navbar_slug); ?>"><?php echo $row->navbar_name; ?></a>
						</li>
						<?php endif; ?>
						<?php endforeach; ?>
						<?php else : ?>
						<li>
							<a href="#">Belum ada menu</a>
						</li>
						<?php endif; ?>
						<!-- End Multiple column menu example -->
						<li><a href="javascript:void(0)" class="btn-search"><span class="fa fa-search"></span></a></li>
						<!-- <li><a href="index.html">Home</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="courses.html">Courses</a></li>
						<li><a href="events.html">Events</a></li>
						<li><a href="gallery.html">Gallery</a></li>
						<li class="menu-has-children"><a href="">Blog</a>
							<ul>
								<li><a href="blog-home.html">Blog Home</a></li>
								<li><a href="blog-single.html">Blog Single</a></li>
							</ul>
						</li>
						<li class="menu-has-children"><a href="">Pages</a>
							<ul>
								<li><a href="course-details.html">Course Details</a></li>
								<li><a href="event-details.html">Event Details</a></li>
								<li><a href="elements.html">Elements</a></li>
								<li class="menu-has-children"><a href="">Level 2 </a>
									<ul>
										<li><a href="#">Item One</a></li>
										<li><a href="#">Item Two</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a href="contact.html">Contact</a></li> -->
					</ul>
				</nav><!-- #nav-menu-container -->
			</div>
		</div>
