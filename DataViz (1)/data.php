<?php include 'header.php'?>
 


<div class="clearfix">
   <img class="img2" src="/photos/illustration-6.svg" alt="Discover new data">
   <p class='main'> Pētiet, pārbaudiet un iegūstiet rezultātu. 
   </p>
   <br> 
   <a class='buttonmain1'> <span style='color:red'> DataViz </span> </a>
</div>

<br> 
<div align='center' style='margin-top: 4%;'> 
  <a class='footerT'>
    <span style='color:red;'><</span>
     KOPĒJA TABULA
    <span style='color:red;'>></span>  
  </a> 
  <br> <p class='paragraph' style='color: black; width: 60%; margin-top: 1%; font-size: 20px; margin-bottom: 1%;'> 
  Iedzīvotāju valstiskā piederība - <span onclick="window.location.href='https://data.gov.lv/dati/lv/dataset/valstiska-piederiba';" style='color:red'> datu kopa </span> <br> 
  Iedzīvotāju vidējais vecums -<span onclick="window.location.href='https://data.gov.lv/dati/lv/dataset/videjais-vecums';"style='color:red'> datu kopa </span> <br>
  Mēneša darba samaksa -<span onclick="window.location.href='https://data.gov.lv/dati/lv/dataset/menesa-darba-samaksa';"style='color:red'> datu kopa </span> <br>
  Ekonomiskie rādītāji -<span onclick="window.location.href='https://data.gov.lv/dati/lv/dataset/tea';"style='color:red'> datu kopa </span> <br>
  Iedzīvotāju skaits pēc dzimuma  -<span onclick="window.location.href='https://data.gov.lv/dati/lv/dataset/iedzivotaju-skaits';"style='color:red'> datu kopa </span> <br>
  Iedzīvotāju īpatsvars ar augstāko izglītību  -<span onclick="window.location.href='https://data.gov.lv/dati/lv/dataset/augstaka-izglitiba';"style='color:red'> datu kopa </span> <br>






  
   </p> 
</div> 
<div align='center' class='table'>
  <?php include 'tables/Overalltable.php'?>
</div>

<!-- Sex and people quantity table --> 

<br> 
<div align='center'> 
  <a class='footerT'>
    <span style='color:red;'><</span>
     DZIMUMS UN IEDZĪVOTĀJU SKAITS
    <span style='color:red;'>></span>  
  </a> 
</div> 
<br> <p class='paragraph' style='color: black; width: 60%; margin-top: 1%; font-size: 20px; margin-bottom: 1%;'> 
Iedzīvotāju skaits pēc dzimuma  -<span onclick="window.location.href='https://data.gov.lv/dati/lv/dataset/iedzivotaju-skaits';"style='color:red'> datu kopa </span> <br>
  Iedzīvotāju vidējais vecums -<span onclick="window.location.href='https://data.gov.lv/dati/lv/dataset/videjais-vecums';"style='color:red'> datu kopa </span> <br>


</p> 
<div align='center' class='table'>
  <?php include 'tables/Gendertable.php'?>
</div>

<!-- Age and ethnicity table  --> 

<br> 
<div align='center'> 
  <a class='footerT'>
    <span style='color:red;'><</span>
     VECUMS UN TAUTĪBA
    <span style='color:red;'>></span>  
  </a>  <br> 
  <p class='paragraph' style='color: black; width: 60%; margin-top: 1%; font-size: 20px; margin-bottom: 1%;'> 
  Iedzīvotāju vidējais vecums -<span onclick="window.location.href='https://data.gov.lv/dati/lv/dataset/videjais-vecums';"style='color:red'> datu kopa </span> <br>
Iedzīvotāju valstiskā piederība - <span onclick="window.location.href='https://data.gov.lv/dati/lv/dataset/valstiska-piederiba';" style='color:red'> datu kopa </span> <br> 

</p> 
</div> 
<div align='center' class='table'>
  <?php include 'tables/Agetable.php'?>
</div>

<!-- Average and median income   --> 

<br> 
<div align='center'> 
  <a class='footerT'>
    <span style='color:red;'><</span>
     VIDĒJIE IEDZĪVOTĀJU IENĀKUMI
    <span style='color:red;'>></span>  
  </a> 
</div> 
<br> <p class='paragraph' style='color: black; width: 60%; margin-top: 1%; font-size: 20px; margin-bottom: 1%;'> 

  Mēneša darba samaksa -<span onclick="window.location.href='https://data.gov.lv/dati/lv/dataset/menesa-darba-samaksa';"style='color:red'> datu kopa </span> <br>

</p> 
<div align='center' class='table'>
  <?php include 'tables/Incometable.php'?>
</div>

<!-- High education and economic values   --> 

<br> 
<div align='center'> 
  <a class='footerT'>
    <span style='color:red;'><</span>
     AUGSTĀKA IZGLĪTĪBA UN EKONOMISKE RADITĀJI
    <span style='color:red;'>></span>  
  </a> 
</div> 
<br> <p class='paragraph' style='color: black; width: 60%; margin-top: 1%; font-size: 20px; margin-bottom: 1%;'> 


  Iedzīvotāju īpatsvars ar augstāko izglītību  -<span onclick="window.location.href='https://data.gov.lv/dati/lv/dataset/augstaka-izglitiba';"style='color:red'> datu kopa </span> <br>
  Ekonomiskie rādītāji -<span onclick="window.location.href='https://data.gov.lv/dati/lv/dataset/tea';"style='color:red'> datu kopa </span> <br>
</p> 
<div align='center' class='table'>
  <?php include 'tables/Edutable.php'?>
</div>

<?php include 'footer.php'?>