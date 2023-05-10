<div>
<form name="techBMI">
  <div class="col-4">
     <input type="text" class="form-control" id="gender" name="weight" placeholder="Enter Weight (kg)" size="20" required>
  </div>
  <div class="col-4">
  <input type="text"  class="form-control" id="gender" name="weight" placeholder="Enter Weight (kg)" size="20" required>
  </div>

  
<input type="text" name="height" placeholder="Enter Height (Meters)" size="20"><br /><br/>
<input class="decoration-one px-3 py-2" type="button" value="Calculate BMI" onClick="calculateBmi()"><br /><br/>
<input type="text" name="bmi" placeholder="Your BMI Will be here" size="20"><br /><br/>
<input type="text" name="meaning" size="35"><br /><br/>
<input class="decoration-one px-3 py-2" type="reset" value="Reset" />
<br/>
</form>
</div>  
<script>
function calculateBmi() {
var weight = document.techBMI.weight.value
var height = document.techBMI.height.value
if(weight > 0 && height > 0){	
var finalBmi = weight/(height*height)
document.techBMI.bmi.value = finalBmi.toFixed(3);
if(finalBmi < 18.5){
document.techBMI.meaning.value = "You are unhealthy, too thin."
    }
if(finalBmi > 18.5 && finalBmi < 25){
document.techBMI.meaning.value = "You are healthy enough."
    }
if(finalBmi > 25 &&  finalBmi <30){
document.techBMI.meaning.value = "You have overweight."
    }
if(finalBmi > 30){
document.techBMI.meaning.value = "Your condition is serious."
    }
    }
    else{
    alert("Data you've entered might be incorrect. Please check and try again.")
    }

    }
</script>
