<?php
/*
*Simple PHP class to fetch data from database
*@author Aryan R.H
*@instagram instagram.com/aryan_r_h
*@twitter twitter.com/aryan_r_h
*@github github.com/aryanrh
*@facebook facebook.com/aryanrh.official
*/

//db config
define('DB_HOST', 'localhost');
define('DB_HOST_USERNAME', 'admin');
define('DB_HOST_PASSWORD', '');
define('DB_DATABASE', 'testing');

// php class
class get_db_data_arh {
//function which sends data	
public function send_data($table_name,$primary_key,$primary_key_value,$col_name){
$conn =new mysqli(DB_HOST,DB_HOST_USERNAME,DB_HOST_PASSWORD,DB_DATABASE);
$mysql_query_arh=mysqli_query($conn,"select * from $table_name where $primary_key='$primary_key_value'");
while($fetch_row_arh = mysqli_fetch_assoc($mysql_query_arh)) {
$set_name_arh = $fetch_row_arh[$col_name];}
$this->set_name_arh = $set_name_arh;
}
//function which gets data
public function get_data(){
return $this->set_name_arh;
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Simple PHP class to fetch data from database</title>
	<!--bootstap css&js + fontawesom css + jquery-->	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://buttons.github.io/buttons.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://aryan-rh-cdn.web.app/arh.about-panel.css">	
</head>
<body>
	<h3>Ip finder using json and jquery built by Aryan R.H follow me to get more updates</h3>
<?php
$class_test=new get_db_data_arh();
$class_test->send_data('git_repo_test','id','1','value');
echo 'Data got from database is:- ' . $class_test->get_data();
?>
<!--repo author info panel (extra)-->	
<script src="https://aryan-rh-cdn.web.app/arh.about-panel.js"></script>
</body>
</html>