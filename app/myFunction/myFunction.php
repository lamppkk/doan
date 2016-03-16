<?php
use App\Categorys;
use App\Products;
use App\Options;
function GetCat($parentid , $space = "", $trees = array()) {
	$data = Categorys::Select('id','name','parent_id')->where('parent_id',$parentid)->get()->toArray();
	foreach($data as  $row){
		$trees[] = array(
			'id' => $row['id'],
			'name' => $space . $row['name'],
		);
		$trees = GetCat($row['id'], $space . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', $trees);
	}
	return $trees;
}

function getMenu($data, $class = 'menu', $id = '') {
	echo "<ul id='$id' class='$class'>";
	foreach($data as $dt)  {
	?>
	<li><a href="<?=$dt['customSelect']?>" title="<?=$dt['title']?>"><?=$dt['title']?></a></li>
	<?php
		if(isset($dt['children'])) {
			getMenu($dt['children']);
		}
	}
	echo "</ul>";
}

function getOP($id) {
	$op =  Products::find($id)->poptions->toArray(); 
	foreach($op as $o) { 
	echo $o['name'].': '.$o['value'].'<br />';
	}
}
function getCatVal($cat_id, $name) {
	$cat = Categorys::Select()->where('id',$cat_id)->get()->first();
	echo $cat->$name;
}

function getCatName($cat_id) {
	$cat = Categorys::Select()->where('id',$cat_id)->get()->first();
	echo $cat->name;
}
function getCatAlias($cat_id) {
	$cat = Categorys::Select()->where('id',$cat_id)->get()->first();
	echo $cat->alias;
}

function getProductRelax($cat_id) {
	return $product = Products::where('cat_id', $cat_id )->get()->toArray();
	
}

function getOption($name) {
	$value = Options::select()->where('name', $name )->get()->first();
	echo  $value->value;
}