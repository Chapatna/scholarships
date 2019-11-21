<?php


$page=$_REQUEST['page'];
		
		if($page=="scholarships-list") { include "scholarships-list.php"; }
		else if($page=="scholarships-create") { include "scholarships-create.php"; }
		else if($page=="scholarships-type-list") { include "scholarships-type-list.php"; }
		else if($page=="scholarships-type-create") { include "scholarships-type-create.php"; }
		else if($page=="scholarships-committes-list") { include "scholarships-committes-list.php"; }
		else if($page=="scholarships-committes-create") { include "scholarships-committes-create.php"; }


		else if($page=="students-list") { include "students-list.php"; }


		else if($page=="admin-user-list") { include "admin-user-list.php"; }
		else if($page=="admin-user-view") { include "admin-user-view.php"; }
		else if($page=="admin-user-edit") { include "admin-user-edit.php"; }
		
		else
		{

		include "page-coming-soon.php"; 

		}

?>
            
