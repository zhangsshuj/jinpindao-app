<?php

require_once("init.php");
$output=[
		"banner"=>null,
		"selected"=>null,
		"articles"=>null
		];
#banner部分
$sql="select pic,rid,title from gk_articles where rid<5";

$banner=sql_execute($sql,MYSQLI_ASSOC);
$output["banner"]=$banner;

#selected部分

$sql="select lid,title,sm,lname,price from gk_selected_list,gk_selected_pic where";
$sql.=" gk_selected_list.lid=gk_selected_pic.product_list_id";
$selected=sql_execute($sql,MYSQLI_ASSOC);
$output["selected"]=$selected;


#articles部分

$sql="select * from gk_articles";

$articles=sql_execute($sql,MYSQLI_ASSOC);
$output["articles"]=$articles;

echo json_encode($output);

?>