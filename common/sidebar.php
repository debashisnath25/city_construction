<?php
    $page = basename(substr($_SERVER['PHP_SELF'],0,strrpos($_SERVER['PHP_SELF'],'.'))); // get file name from url and strip extension
?>
		  <div class="page-sidebar custom-scroll" id="sidebar">
          <div class="sidebar-header center text-center" style="background:#3a1f47;margin:10px;border-radius:8px;padding:5px 5px;">
            <a class="sidebar-brand center text-center" href="dashboard.php">
              <img src="images/6.png" alt="logo" data-src="images/6.png" data-src-retina="images/6.png" height="47" style="background:#ccc;"> <span style="font-size:16px;color:#fff;">City Construction</span>
            </a>
            <a class="sidebar-brand-mini" href="dashboard.php">
              <img src="images/6.png" alt="logo" data-src="images/6.png" data-src-retina="images/6.png" height="25">
            </a>
          </div>
          <ul class="sidebar-menu metismenu">
			<!-- <li class="<?php echo (($page == 'emails')?'mm-active':'')?>">
              <a href="emails.php">
                <i class="sidebar-item-icon fa fa-envelope">
                </i>
                <span class="nav-label">Email
                </span> 
              </a>
            </li> -->
			<li class="<?php echo (($page == 'projects' || $page == 'add_projects')?'mm-active':'')?>">
              <a href="projects.php">
                <i class="sidebar-item-icon fas fa-landmark">
                </i>
                <span class="nav-label">Projects
                </span> 
              </a>
            </li>
			
			<li class="<?php echo (($page == 'employees' || $page == 'add_employee')?'mm-active':'')?>"><a href="javascript:;"><i class="sidebar-item-icon fa fa-users"></i><span class="nav-label">Employees</span><i class="arrow la la-angle-right"></i></a>
				<ul class="nav-2-level">
					<!-- 2-nd level-->
					<li><a href="add_employee.php">Add Employer</a></li>
					<li ><a href="employees.php">View Employees</a></li>
					
				</ul>
			</li>
			<li class="<?php echo (($page == 'suppliers' || $page == 'add_supplier')?'mm-active':'')?>"><a href="javascript:;"><i class="sidebar-item-icon fas fa-user-friends"></i><span class="nav-label">Suppliers</span><i class="arrow la la-angle-right"></i></a>
				<ul class="nav-2-level">
					<!-- 2-nd level-->
					<li><a href="add_supplier.php">Add Supplier</a></li>
					<li ><a href="suppliers.php">View Supplier</a></li>
					
				</ul>
			</li>
			<li class="<?php echo (($page == 'view_indent' || $page == 'add_indent'|| $page == 'indent')?'mm-active':'')?>"><a href="javascript:;"><i class="sidebar-item-icon fas fa-money-check-alt"></i><span class="nav-label">Indent</span><i class="arrow la la-angle-right"></i></a>
				<ul class="nav-2-level">
					<!-- 2-nd level-->
					<li><a href="add_indent.php">Add Indent</a></li>
					<li ><a href="indent.php">View Indent</a></li>
					
				</ul>
			</li>
			<li class="<?php echo (($page == 'grn' || $page == 'add_grn')?'mm-active':'')?>"><a href="javascript:;"><i class="sidebar-item-icon fas fa-file-invoice"></i><span class="nav-label">GRN</span><i class="arrow la la-angle-right"></i></a>
				<ul class="nav-2-level">
					<!-- 2-nd level-->
					<li><a href="add_grn.php">Add GRN</a></li>
					<li ><a href="grn.php">View GRN</a></li>
					
				</ul>
			</li>
			<li class="<?php echo (($page == 'gin' || $page == 'add_gin')?'mm-active':'')?>"><a href="javascript:;"><i class="sidebar-item-icon fas fa-receipt"></i><span class="nav-label">GIN</span><i class="arrow la la-angle-right"></i></a>
				<ul class="nav-2-level">
					<!-- 2-nd level-->
					<li><a href="add_gin.php">Add GIN</a></li>
					<li ><a href="gin.php">View GIN</a></li>
					
				</ul>
			</li>
          </ul>
        </div>
		<i class="fas fa-file-invoice"></i>
		<i class="fas fa-receipt"></i>
		<i class="fas fa-money-check-alt"></i>
		<i class="fas fa-user-friends"></i>
		<i class="fas fa-landmark"></i>
      