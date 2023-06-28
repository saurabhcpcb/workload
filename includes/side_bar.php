<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
    
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
   <li><a href="priority_list.php"><i class="fa fa-fw fa-angle-double-right"></i>Default Priorities </a></li>  
<?php

if($_SESSION['userId']['user_type']=="Admin"){

?>
<li class="treeview">
<a href="#">
<i class="fa fa-fw fa-users"></i>
<span>User Registrations</span>
<span class="pull-right-container">
<i class="fa fa-angle-left pull-right"></i>
</span>
</a>
<ul class="treeview-menu">

<li><a href="create_user.php"><i class="fa fa-fw fa-angle-double-right"></i>Create User</a></li>
<li><a href="view_user.php"><i class="fa fa-fw fa-angle-double-right"></i>View User </a></li>


</ul>

</li> 

<li class="treeview">
<a href="#">
<i class="fa fa-fw fa-file-text"></i>
<span>Manage RD/DH Data</span>
<span class="pull-right-container">
<i class="fa fa-angle-left pull-right"></i>
</span>
</a>
<ul class="treeview-menu">

<li><a href="cpcb_data_list.php"><i class="fa fa-fw fa-angle-double-right"></i>DH Data</a></li>
<li><a href="rd_data_list.php"><i class="fa fa-fw fa-angle-double-right"></i>RD Data </a></li>


</ul>

</li>

<li class="treeview">
<a href="#">
<i class="fa fa-envelope-o"></i>
<span>Agenda</span>
<span class="pull-right-container">
<i class="fa fa-angle-left pull-right"></i>
</span>
</a>
<ul class="treeview-menu">


<li><a href="view_agenda_list.php"><i class="fa fa-fw fa-angle-double-right"></i>View Agenda</a></li>
</ul>
</li>
<?php } ?>
<?php

if($_SESSION['userId']['user_type']=="CPCB"){

?>
  



<li class="treeview">
<a href="#">
<i class="fa fa-envelope-o"></i>
<span>Add Work</span>
<span class="pull-right-container">
<i class="fa fa-angle-left pull-right"></i>
</span>
</a>
<ul class="treeview-menu">

<li><a href="add_monthly.php">Add Work</a></li> 
<?php
$month= date("m");
$year= date("Y");


$queryByCPCB0=mysqli_num_rows(mysqli_query("select * from tbl_activities0 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month."  AND user_id='".$_SESSION['userId']['id']."'"));
$queryByCPCB1=mysqli_num_rows(mysqli_query("select * from tbl_activities1 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month."  AND user_id='".$_SESSION['userId']['id']."'"));
$queryByCPCB2=mysqli_num_rows(mysqli_query("select * from tbl_activities2 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month."  AND user_id='".$_SESSION['userId']['id']."'"));
$queryByCPCB3=mysqli_num_rows(mysqli_query("select * from tbl_activities3 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month."  AND user_id='".$_SESSION['userId']['id']."'"));
$queryByCPCB4=mysqli_num_rows(mysqli_query("select * from tbl_activities4 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month."  AND user_id='".$_SESSION['userId']['id']."'"));
$queryByCPCB5=mysqli_num_rows(mysqli_query("select * from tbl_activities5 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month."  AND user_id='".$_SESSION['userId']['id']."'"));
$queryByCPCB6=mysqli_num_rows(mysqli_query("select * from tbl_activities6 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month."  AND user_id='".$_SESSION['userId']['id']."'"));
$queryByCPCB7=mysqli_num_rows(mysqli_query("select * from tbl_activities7 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month."  AND user_id='".$_SESSION['userId']['id']."'"));
$queryByCPCB8=mysqli_num_rows(mysqli_query("select * from tbl_activities8 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month."  AND user_id='".$_SESSION['userId']['id']."'"));
$queryByCPCB9=mysqli_num_rows(mysqli_query("select * from tbl_activities9 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month."  AND user_id='".$_SESSION['userId']['id']."'"));
$queryByCPCB10=mysqli_num_rows(mysqli_query("select * from tbl_activities10 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month."  AND user_id='".$_SESSION['userId']['id']."'"));
$queryByCPCB11=mysqli_num_rows(mysqli_query("select * from tbl_activities11 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month."  AND user_id='".$_SESSION['userId']['id']."'"));
$queryByCPCB12=mysqli_num_rows(mysqli_query("select * from tbl_activities12 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month."  AND user_id='".$_SESSION['userId']['id']."'"));
$queryByCPCB13=mysqli_num_rows(mysqli_query("select * from tbl_activities13 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month."  AND user_id='".$_SESSION['userId']['id']."'"));
$queryByCPCB14=mysqli_num_rows(mysqli_query("select * from tbl_activities14 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month."  AND user_id='".$_SESSION['userId']['id']."'"));
$queryByCPCB15=mysqli_num_rows(mysqli_query("select * from tbl_activities15 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month."  AND user_id='".$_SESSION['userId']['id']."'"));
$queryByCPCB16=mysqli_num_rows(mysqli_query("select * from tbl_activities16 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month."  AND user_id='".$_SESSION['userId']['id']."'"));
$queryByCPCB17=mysqli_num_rows(mysqli_query("select * from tbl_activities17 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month."  AND user_id='".$_SESSION['userId']['id']."'"));


$totalqueryByCPCB=$queryByCPCB0+$queryByCPCB1+$queryByCPCB2+$queryByCPCB3+$queryByCPCB4+$queryByCPCB5+$queryByCPCB6+$queryByCPCB7+$queryByCPCB8+$queryByCPCB9+$queryByCPCB10+$queryByCPCB11+$queryByCPCB12+$queryByCPCB13+$queryByCPCB14+$queryByCPCB15+$queryByCPCB16+$queryByCPCB17;
?>




<li><a href="view_monthly_cpcb.php">View Proposed Work <span class="pull-right-container">
                  <span class="label bg-orange pull-right"><?=$totalqueryByCPCB?></span>
                </span></a></li>
</ul>
</li>
<li class="treeview">
<a href="#">
<i class="fa fa-envelope-o"></i>
<span>Agenda</span>
<span class="pull-right-container">
<i class="fa fa-angle-left pull-right"></i>
</span>
</a>
<ul class="treeview-menu">

<li><a href="add_agenda.php"><i class="fa fa-fw fa-angle-double-right"></i>Add Video Conferencing Agenda</a></li> 
<li><a href="view_agenda.php"><i class="fa fa-fw fa-angle-double-right"></i>View Agenda</a></li>
</ul>
</li>
 

<?php } ?>
<?php

if($_SESSION['userId']['user_type']=="MS"){

?>
  
<li><a href="dashboard.php"><i class="fa fa-circle-o nav-icon"></i>Dashboard</a></li>
<li class="treeview">
<a href="#">
<i class="fa fa-envelope-o"></i>
<span>Allot Work</span>
<span class="pull-right-container">
<i class="fa fa-angle-left pull-right"></i>
</span>
</a>
<ul class="treeview-menu">

 
<!--<li><a href="View_Monthly_Report.php">View Monthly Report</a></li>
<li><a href="View_Monthly_Report_graph.php">View Monthly Report(Graph)</a></li>-->
<!---<li><a href="view_report.php?month=<?=date("M-Y")?>&rd_id12=RD+Bengaluru&searchRegionalDirectors=Search">Allot</a></li>--->
<li><a href="view_report_rd.php?month=<?=date("M-Y")?>&rd_id12=RD+Bengaluru&searchRegionalDirectors=Search">RD Work Data</a></li>
<li><a href="view_ms.php?month=<?=date("M-Y")?>&user_id=102&searchRegionalDirectors=Search">DH Work Data</a></li>
<li><a href="view_ms_by_priority.php?month=<?=date("M-Y")?>&user_id=102&searchRegionalDirectors=Search">DH Work Data By Priority</a></li>
<li><a href="pending_work.php">Pending Work</a></li>


</ul>
</li>

<li class="treeview">
<a href="#">
<i class="fa fa-envelope-o"></i>
<span>Agenda</span>
<span class="pull-right-container">
<i class="fa fa-angle-left pull-right"></i>
</span>
</a>
<ul class="treeview-menu">


<li><a href="view_agenda_list.php"><i class="fa fa-fw fa-angle-double-right"></i>View Agenda</a></li>
</ul>
</li>
<?php } ?>   
<?php

if($_SESSION['userId']['user_type']=="SPCB"){

?>
  


<li class="treeview">
<a href="#">
<i class="fa fa-envelope-o"></i>
<span>Monthly Report</span>
<span class="pull-right-container">
<i class="fa fa-angle-left pull-right"></i>
</span>
</a>
<ul class="treeview-menu">

<li><a href="add_monthly_rd.php">Add Monthly Report</a></li> 
 

<li><a href="view_final_report_rd.php?month=<?=date("M-Y")?>">View Allotted Work 
<?php
$month= date("m");
$year= date("Y");


$proposedQuery0=mysqli_num_rows(mysqli_query("select * from tbl_activities0 where  YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."'"));
$proposedQuery1=mysqli_num_rows(mysqli_query("select * from tbl_activities1 where  YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."'"));

$proposedQuery2=mysqli_num_rows(mysqli_query("select * from tbl_activities2 where  YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."'"));

$proposedQuery3=mysqli_num_rows(mysqli_query("select * from tbl_activities3 where  YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."'"));

$proposedQuery4=mysqli_num_rows(mysqli_query("select * from tbl_activities4 where  YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."'"));

$proposedQuery5=mysqli_num_rows(mysqli_query("select * from tbl_activities5 where  YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."'"));

$proposedQuery6=mysqli_num_rows(mysqli_query("select * from tbl_activities6 where  YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."'"));

$proposedQuery7=mysqli_num_rows(mysqli_query("select * from tbl_activities7 where  YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."'"));

$proposedQuery8=mysqli_num_rows(mysqli_query("select * from tbl_activities8 where  YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."'"));
$proposedQuery9=mysqli_num_rows(mysqli_query("select * from tbl_activities9 where  YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."'"));

$proposedQuery10=mysqli_num_rows(mysqli_query("select * from tbl_activities10 where  YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."'"));

$proposedQuery11=mysqli_num_rows(mysqli_query("select * from tbl_activities11 where  YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."'"));

$proposedQuery12=mysqli_num_rows(mysqli_query("select * from tbl_activities12 where  YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."'"));

$proposedQuery13=mysqli_num_rows(mysqli_query("select * from tbl_activities13 where  YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."'"));

$proposedQuery14=mysqli_num_rows(mysqli_query("select * from tbl_activities14 where  YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."'"));

$proposedQuery15=mysqli_num_rows(mysqli_query("select * from tbl_activities15 where  YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."'"));

$proposedQuery16=mysqli_num_rows(mysqli_query("select * from tbl_activities16 where  YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."'"));

$proposedQuery17=mysqli_num_rows(mysqli_query("select * from tbl_activities17 where  YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."'"));


$totalProposed=$proposedQuery0+$proposedQuery1+$proposedQuery2+$proposedQuery3+$proposedQuery4+$proposedQuery5+$proposedQuery6+$proposedQuery7+$proposedQuery8+$proposedQuery9+$proposedQuery10+$proposedQuery11+$proposedQuery12+$proposedQuery13+$proposedQuery14+$proposedQuery15+$proposedQuery16+$proposedQuery17;
?>



<span class="pull-right-container">
                  <span class="label bg-orange pull-right"><?=$totalProposed?></span>
                </span></a></li>
</ul>
</li>
<li class="treeview">
<a href="#">
<i class="fa fa-envelope-o"></i>
<span>Agenda</span>
<span class="pull-right-container">
<i class="fa fa-angle-left pull-right"></i>
</span>
</a>
<ul class="treeview-menu">

<li><a href="add_agenda_rd.php"><i class="fa fa-fw fa-angle-double-right"></i>Add Video Conferencing Agenda</a></li> 
<li><a href="view_agenda_rd.php"><i class="fa fa-fw fa-angle-double-right"></i>View Agenda</a></li>
</ul>
</li>
<li><a href="view_references_data.php"><i class="fa fa-fw fa-angle-double-right"></i>View References</a></li>

<?php } ?>    
 
     
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>