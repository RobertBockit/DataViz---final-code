<?php include 'header.php'?>
<br> 
<div align='center'> <a class='footerT'>  <span style='color:red;'><</span>
    CIK LABI JŪSU BIZNESS PAZĪST LATVIJU? 
    <span style='color:red;'>></span>  </a> </div> 
<br><br>

<div align='center' class='Topbar' style='width:80%; background-color:#F8F8F8;'> 
<form action='/result.php' method="post"> 

<p class='paragraph' style='font-weight: bold'> 
Cik daudz cilvēku dzīvo Latvijā? </p> 
  <input type="range" min="0.1" max="3" value="0.1" class="slider" id="myRange" step="0.05" style='width: 60%' name='slider'>
  <p class='paragraph'>Jūsu atbilde: <span id="demo"></span></p>

<p class='paragraph' style='font-weight: bold'> Kurā no šiem reģioniem ir procentuāli vairāk sieviešu? </p>
  <input type="radio" id="riga" name="q2" value="riga1">
  <label for="riga">Rīgā</label>
  <input type="radio" id="daugavpils" name="q2" value="daugavpils1">
    <label for="daugavpils">Daugavpilī</label>
  <input type="radio" id="liepaja" name="q2" value="liepaja1">
    <label for="liepaja">Liepajā</label>

<p class='paragraph' style='font-weight: bold'> Kurā no šiem reģioniem ir cilvēku ar augstāko izglītību lielākais procents? </p>

  <input type="radio" id="garkalnes" name="q3" value="garkalnes1">
  <label for="garkalnes">Garkalnes novadā</label>
  <input type="radio" id="jurmala" name="q3" value="jurmala1">
    <label for="jurmala">Jūrmalā</label>
  <input type="radio" id="ventspils" name="q3" value="ventspils1">
    <label for="ventspils">Venstpilī</label>

    <p class='paragraph' style='font-weight: bold'> Kāda ir Latvijas vidējā alga? </p>
  <input type="radio" id="847" name="q4" value="eiro1">
  <label for="847">847 eiro</label>
  <input type="radio" id="978" name="q4" value="eiro2">
    <label for="978">978 eiro</label>
  <input type="radio" id="789" name="q4" value="eiro3">
    <label for="789">789 eiro </label>
    

    <p class='paragraph' style='font-weight: bold'> Kāda ir Latvijas mediānas alga? </p>
  <input type="radio" id="886" name="q5" value="eiro11">
  <label for="886">886 eiro</label>
  <input type="radio" id="686" name="q5" value="eiro22">
    <label for="686">686 eiro</label>
  <input type="radio" id="734" name="q5" value="eiro33">
    <label for="734">734 eiro </label>
      
        <p class='paragraph' style='font-weight: bold'> Kāda ir Latvijas gada vidējā pievienota vērtība uz 1 nodarbinato? </p>
  <input type="radio" id="15 153" name="q6" value="eiro111">
  <label for="15 153">15 153 eiro</label>
  <input type="radio" id="7 845" name="q6" value="eiro222">
    <label for="7 845">7 845 eiro</label>
  <input type="radio" id="34 789" name="q6" value="eiro333">
    <label for="34 789">34 789 eiro </label>

        <p class='paragraph' style='font-weight: bold'> Kāda ir Latvijas gada vidēja produkcijas vērtībā uz 1 nodarbinato? </p>
  <input type="radio" id="20 543" name="q7" value="a1">
  <label for="20 543">20 543 eiro</label>
  <input type="radio" id="60 364" name="q7" value="a2">
    <label for="60 364">60 364 eiro</label>
  <input type="radio" id="38 574" name="q7" value="a3">
    <label for="38 574">38 574 eiro </label>

 <p class='paragraph' style='font-weight: bold'> Cik daudz krievu iedzīvotāju ir Latvijā? (Tie, kuri atzīmēja 'krievs' kā tautību)</p>
  <input type="radio" id="14" name="q8" value="a11">
  <label for="14">14%</label>
  <input type="radio" id="34" name="q8" value="a22">
    <label for="34">34%</label>
  <input type="radio" id="49" name="q8" value="a33">
    <label for="49">49% </label>

<br> 
<input type='submit'> 
</form>


</div>
<script>
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value + ' miljoni';
}
</script>

<?php include 'footer.php'?>