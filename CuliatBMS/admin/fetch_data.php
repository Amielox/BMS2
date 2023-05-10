<?php include('connection.php');

$output= array();
$sql = "SELECT * FROM bmss";

$totalQuery = mysqli_query($con,$sql);
$total_all_rows = mysqli_num_rows($totalQuery);

$columns = array(
	// 0 => 'id',
	// 1 => 'username',
	// 2 => 'email',
	// 3 => 'mobile',
	// 4 => 'city',

	0 => 'trackingno',
	1 => 'purpose',
	2 => 'sname',
	3 => 'fname',
	4 => 'mname',
	5 => 'suf',
	6 => 'di',
	7 => 'status',

);

if(isset($_POST['search']['value']))
{
	$search_value = $_POST['search']['value'];
	$sql .= " WHERE trackingno like '%".$search_value."%'";
	$sql .= " OR sname like '%".$search_value."%'";
	$sql .= " OR fname like '%".$search_value."%'";
}

if(isset($_POST['order']))
{
	$column_name = $_POST['order'][0]['column'];
	$order = $_POST['order'][0]['dir'];
	$sql .= " ORDER BY ".$columns[$column_name]." ".$order."";
}
else
{
	$sql .= " ORDER BY id desc";
}

if($_POST['length'] != -1)
{
	$start = $_POST['start'];
	$length = $_POST['length'];
	$sql .= " LIMIT  ".$start.", ".$length;
}	

$query = mysqli_query($con,$sql);
$count_rows = mysqli_num_rows($query);
$data = array();
while($row = mysqli_fetch_assoc($query))
{
	$sub_array = array();
	$sub_array[] = $row['trackingno'];
	$sub_array[] = $row['purpose'];
	$sub_array[] = $row['sname'];
	$sub_array[] = $row['fname'];
	$sub_array[] = $row['mname'];
	$sub_array[] = $row['suf'];
	$sub_array[] = $row['di'];
	$sub_array[] = $row['status'];
	$sub_array[] = '<a href="javascript:void();" data-id="'.$row['id'].'"  class="btn btn-info btn-sm editbtn" >Edit</a>  <a href="javascript:void();" data-id="'.$row['id'].'"  class="btn btn-danger btn-sm deleteBtn" >Delete</a> <a target = "_blank" href="print-details.php?id='.$row['id'].'" data-id="'.$row['id'].'"  class="btn btn-success btn-sm printBtn" >Print</a>';
	$data[] = $sub_array;
}

$output = array(
	'draw'=> intval($_POST['draw']),
	'recordsTotal' =>$count_rows ,
	'recordsFiltered'=>   $total_all_rows,
	'data'=>$data,
);
echo  json_encode($output);
