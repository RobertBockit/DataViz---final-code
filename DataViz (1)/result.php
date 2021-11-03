<?php 
include 'header.php';
$result=0;

If ($_POST['slider'] >= 1.85 and $_POST['slider'] <= 1.95){
  $result = $result+1;
}
If ($_POST['q2']=='daugavpils1'){
    $result = $result+1;
}
If ($_POST['q3']=='garkalnes1'){
    $result = $result+1;
}
If ($_POST['q4']=='eiro1'){
    $result = $result+1;
}
If ($_POST['q5']=='eiro22'){
    $result = $result+1;
}
If ($_POST['q6']=='eiro111'){
    $result = $result+1;
}
If ($_POST['q7']=='a3'){
    $result = $result+1;
}
If ($_POST['q8']=='a11'){
    $result = $result+1;
}
?>

<br> 
<div align='center'> 
  <a class='footerT'>
    <span style='color:red;'><</span>
     JŪSU REZULTĀTS
    <span style='color:red;'>></span>  
  </a> 
</div> 

<br> 
<br> 

<?php 
if ($result >= 6){
echo "<div align='center' ><a class='footerT' style='color:green;'>".strval($result/8*100)."%</a> </div> 
<br> 
<div class='paragraph'> 
<a>
Jūsu rezultāts ir ļoti labs! Bet visiem vienmer ir jāmācas, tāpēc aicinam apskatīt mūsu vizualizētus datus par Latviju! 
</a> 
</div> 
";

} else { 

echo "<div align='center' ><a class='footerT' style='color:red;'>".strval($result/8*100)."%</a> </div> 
<br>
<div class='paragraph'> 
<a>
Jūsu rezultāts varētu būt labāk! Aicinam apskatīt mūsu vizualizētus datus par Latviju, lai zinātu vairāk!
</a> 
</div> 

";
}; ?>
<div align='center'>
 <a class='button' href='/data.php'> Apskatīt datus </a> <br> 
</div> 
<br> <br> <br> 
<?php include 'footer.php';?>
