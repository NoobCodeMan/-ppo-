
  <?php 
$db = new mysqli('mysql13.000webhost.com','a7478215_ppo','antoine13','a7478215_search');
if(isset($_GET['keywords'])){
$keywords = $db->escape_string($_GET['keywords']);

$query = $db->query("
  SELECT Title,Description,Link
  FROM search
  WHERE Title LIKE '%{$keywords}%'
  ");
?>


<div class="result-countalert well alert-success" role="alert">
Found <?php echo $query->num_rows ;?> result<?php 
if($query->num_rows == '1'){
echo '';
}else{
echo's';
};


?>


</div>

<?php 
if($query->num_rows){
while($r = $query->fetch_object()){

?>
<div class="result well">

<a href="<?php echo $r->Link ;?>"><?php echo $r->Title ;?></a>
<br />
<span class="description"><?php echo $r->Description ;?></span>

</div>
<?php
};
};
};
?>
