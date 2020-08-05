<?php
$ifsc_textbox='';
if(isset($_POST['ifsc_textbox'])){
	$ifsc_textbox=$_POST['ifsc_textbox'];
	$ch=curl_init();
	$url="https://ifsc.razorpay.com/".$ifsc_textbox;
	curl_setopt($ch,CURLOPT_URL,$url);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
	$data=curl_exec($ch);
	curl_close($ch);
	$arr=json_decode($data);
}
?>
<style>
.ifsc_textbox{height:56px;}
</style>
<form method="post">
	<input type="textbox" name="ifsc_textbox" class="ifsc_textbox" value="<?php echo $ifsc_textbox?>"/>
	<input type="submit" name="submit"/>
</form>
<?php
if(isset($arr->BRANCH)){
	echo "<strong>BRANCH:-</strong> ".$arr->BRANCH.'<br/>';
	echo "<strong>ADDRESS:-</strong> ".$arr->ADDRESS.'<br/>';
	echo "<strong>CENTRE:-</strong> ".$arr->CENTRE.'<br/>';
	echo "<strong>STATE:-</strong> ".$arr->STATE.'<br/>';
	echo "<strong>CONTACT:-</strong> ".$arr->CONTACT.'<br/>';
}else{
	if($ifsc_textbox!=''){
		echo "No record found";
	}
}
?>