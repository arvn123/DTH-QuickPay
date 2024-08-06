<?php
$districtid = $_POST["districtid"];
include_once("../dboperation.php");
$sql="select * from tbllocation where districtid=$districtid";
$obj=new dboperation();
$res=$obj->query($sql);
?>
<label class="block uppercase tracking-wide text-grey-darker text-xs font-light 
mb-1">
location  Name
</label>
<select class="appearance-none block w-full bg-grey-200 text-grey-darker border 
border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white 
focus:border-grey" name="sellocation" id="sellocation">
<option value="0">--select--</option>
<?php
while($r=mysqli_fetch_array($res))
{
?>
<option value="<?php echo $r["locationid"];?>"><?php echo
$r["locationname"];?></option>
<?php
}
?>