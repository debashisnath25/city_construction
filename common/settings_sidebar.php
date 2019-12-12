<div class="col-lg-3">
	  <div class="card" style="border:1px solid #7c1ab5;">
		<div class="card-body">
		  <div class="card-fullwidth-block px-3">
			<div class="nav nav-pills flex-column faq-tabs" role="tablist">
			   <!-- <a class="nav-link media align-items-center  <?php echo (($page == 'budget')?'active':'')?>"  href="budget.php" >
				<i class="fa fa-rupee-sign text-muted font-26 mr-3">
				</i>
				<div class="media-body">
				  <div class="mb-1 h6" style="font-size:12px;">Budget
				  </div>
				  
				</div>
			  </a> -->
			  <a class="nav-link media align-items-center  <?php echo (($page == 'indent' || $page == 'pending_indent_details' )?'active':'')?>"  href="indent.php">
				<i class="fas fa-scroll text-muted font-26 mr-3">
				</i>
				<div class="media-body">
				  <div class="mb-1 h6" style="font-size:12px;">Pending Indent
				  </div>
				  
				</div>
			  </a>
			  <a class="nav-link media align-items-center <?php echo (($page == 'approved_indent' || $page == 'approved_indent_details')?'active':'')?>" href="approved_indent.php" >
				<i class="fa fa-archive text-muted font-26 mr-3">
				</i>
				<div class="media-body">
				  <div class="mb-1 h6" style="font-size:12px;">Approved Indent
				  </div>
				  
				</div>
			  </a>
			  <a class="nav-link media align-items-center <?php echo (($page == 'completed_indent' || $page == 'completed_indent_details')?'active':'')?>"  href="completed_indent.php" >
				<i class="fa fa-list text-muted font-26 mr-3">
				</i>
				<div class="media-body">
				  <div class="mb-1 h6" style="font-size:12px;">Completed Indent
				  </div>
				</div>
			  </a>
			  <a class="nav-link media align-items-center <?php echo (($page == 'unapproved_indent' || $page == 'unapproved_indent_details')?'active':'')?>"  href="unapproved_indent.php" >
				<i class="fa fa-list text-muted font-26 mr-3">
				</i>
				<div class="media-body">
				  <div class="mb-1 h6" style="font-size:12px;">Not approved Indent
				  </div>
				</div>
			  </a>
			</div>
		  </div>
		</div>
	  </div>
	</div>