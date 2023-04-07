<!DOCTYPE html>
<html>
<head>

	<link rel="icon" type="image/x-icon" href="asset/ico1.ico">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700" rel="stylesheet">
  
</head>

	<div class="header">
		<h2>Welcome to digital library</h2>
	</div>

	<div class="form1"> 
		<form action="output.php" method="post">
			
			<h3 style="text-align: center;">Welcome to digital library</h3>
			<div class="title"><p>Create new member</p></div>
			
			<label for="fLname" >name </label><br>
			<input type="text" id="FLname" name="FLname" size="55" style="margin-bottom: 10px"><br>

			<label for="email-sis" >E-mail</label><br>
			<input type="E-mail" name="email-sis" size="55"  placeholder="contoh abc@gmail.com" style="margin-bottom: 10px"><br>

            <label>Password</label><br>
			<input type="text" name="kontak-sis" size="55"  placeholder="+62" maxlength="13" name="kontak-sis" style="margin-bottom: 10px"><br>

			<label>Phone number</label><br>
			<input type="text" name="kontak-sis" size="55"  placeholder="+62" maxlength="13" name="kontak-sis" style="margin-bottom: 10px"><br>

	        <label for="alamat-sis">Alamat</label><br>
			<textarea id="alamat-sis" name="alamat-sis" placeholder="JL.Besuki 1"  rows="4" cols="50"  style="resize: none;"></textarea> <br>


	  	<div class="radio1">
	<label class="radio">	Jenis kelamin</label><br>
		<input required type="radio" name="jenis_kelamin" value="Laki-laki">Laki Laki
	<label class="radio">
		<input required type="radio" name="jenis_kelamin" value="Perempuan">Perempuan

</div>
</div>

	<div class="form2"> 
		<form action="output.php" method="post">
			<p style="padding: 0px 0px 10px 0px;">Form data orang tua</p>
			

	</div>
</div>
</div>

<div class="time" style="background: #f2f2f2;">
	<p>Jam terkini</p>
	<div class="kotak">
		<p id="j"></p>
	</div>
	<div class="kotak">
		<p id="m"></p>
	</div>
	<div class="kotak">
		<p id="d"></p>
	</div>

<script>
	window.setTimeout("timer()", 1000);
 
	function timer() {
		var timer = new Date();
		setTimeout("timer()", 1000);
		document.getElementById("j").innerHTML = timer.getHours();
		document.getElementById("m").innerHTML = timer.getMinutes();
		document.getElementById("d").innerHTML = timer.getSeconds();
	}
</script>	
</div>
</div>
<script>
      window.addEventListener("beforeunload", function (e) {
        e.preventDefault(); 
        e.returnValue = "";
      });
    </script>

	<footer class="footer">&copy;Copyright belongs to Muhamad Nur Fajjri Zenitandrio - QE Alterra web builder</footer>
</div>



</body>
</html>