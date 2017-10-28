<?php
$slug=_slug("module/subtype/type/refid");

$type=$slug['subtype'];
if($type==null || strlen($type)<=0) {
	$type="inventory";
	header("Location:"._link("modules/catalog/inventory"));
	return;
}

$basePath=__DIR__."/{$type}/";

if(!is_dir($basePath)) {
	print_error("Component Not Supported Yet");
	return;
}

$report=$basePath."report.json";
$form=$basePath."form.json";

loadModule("datagrid");

switch($type) {
	case "inventory":
		//echo "A";
		break;
	case "categories":
		//echo "B";
		break;
	case "brands":
		//echo "C";
		break;
	case "models":
		//echo "C";
		break;
	default:
		echo "<br><h2 align=center>Sorry, Component Not Supported Yet</h2>";
		return;
}

?>
<style>
.formbox .formbox-content {
	border:0px !important;
	-webkit-box-shadow: none !important;
	-moz-box-shadow: none !important;
	box-shadow: none !important;
}
</style>
<div class='col-xs-12 col-md-12 col-lg-12'>
	<div class='row'>
		<?php
			printDataGrid($report,$form,$form,["slug"=>"module/subtype/type/refid","glink"=>_link("modules/catalog/{$type}")],"app");
		?>
	</div>
</div>