<?php
$section = $_GET['section'];
?>
<?php
function createRandomPassword() {
    $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ023456789";
    srand((double)microtime()*1000000);
    $i = 0;
    $pass = '' ;
    while ($i <= 7) {

        $num = rand() % 33;

        $tmp = substr($chars, $num, 1);

        $pass = $pass . $tmp;

        $i++;

    }
    return $pass;
}
$finalcode='Paharang-'.createRandomPassword();
?>
<style type="text/css">



input[type=text],input[type=email],input[type=date], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
#facebox .body {
    width: 100%;
}
</style>
<h3>Enroll Student</h3>
<hr style="width:500px">
<center>
<img src="./profile.jpg" style="width:200px;height:200px" id="img">
</center>
<form name="myForm" action="addstudexec1.php" method="post" enctype="multipart/form-data" name="addroom" onsubmit="return validateForm()">
Name <br />
<input name="fname" type="text" class="ed" id="brnu" required autofocus />
<br>
			
Student Number <br />
<input name="idnumber" type="number" class="ed" id="brnu" value="" required/>
Grade<br>
<input name="course" type="text" class="ed" id="brnu" value="<?php echo $_GET['course']; ?>" readonly/>
<br>
Gender<br />
<select name="gender" class="ed" required>
<option></option>
<option>Male</option>
<option>Female</option>
</select>
<br>
Guardian:<br>
<input type="text" name="guardian" required>
Section:<br>
<input type="text" name="section" value="<?php echo $section ?>" readonly required>
<br>
Guardian Number:<br>
<input name="cguardian" type="text" class="ed" id="brnu"  required/>
Email Address:<br>
<input name="email" type="email" class="ed" id="brnu"  required/>
Birthday<br />
<input name="bday" type="date" class="ed" id="brnu"  required/>
<br>
<input type="submit" name="Submit" value="Enroll Student"  style="width:100%" class="btn"/>
</form>

	<script>
const fileInput = document.getElementById('upload');
fileInput.addEventListener('change', (e) => {
// get a reference to the file
const file = e.target.files[0];

// encode the file using the FileReader API
const reader = new FileReader();
reader.onloadend = () => {

    // use a regex to remove data url part
    const base64String = reader.result;
        document.getElementById('file').value =reader.result; 
		document.getElementById('img').src = reader.result; 
    console.log(base64String);
};
reader.readAsDataURL(file);});
				</script>