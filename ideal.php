<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<button><a href="beratbadan.php">BACK</a></button>
<br>
</body>
</html>
<?php 
/**
 * 
 */
class ideal{

	function hitung($bmi, $jk){
		if ($jk=="Laki-laki") {
			if ($bmi<17) {
				echo $bmi."&nbsp&nbsp|| Under Weight/Kurus";
			} elseif ($bmi>=17 && $bmi<=23) {
				echo $bmi." || Normal Weight/Normal";
			} elseif ($bmi>23 && $bmi<=27) {
				echo $bmi." || Over Weight/Kegemukan";
			} elseif ($bmi>27) {
				echo $bmi." || Obesitas";
			}
		} elseif ($jk=="Wanita") {
			if ($bmi<18) {
				echo $bmi." || Under Weight/Kurus";
			} elseif ($bmi>=18 && $bmi<=25) {
				echo $bmi." || Normal Weight/Normal";
			} elseif ($bmi>25 && $bmi<=27) {
				echo $bmi." || Over Weight/Kegemukan";
			} elseif ($bmi>27) {
				echo $bmi." || Obesitas";
			}
		}
	}

}

$reza = new ideal(); 
if (isset($_POST['submit'])) {
	$nama=$_POST['nama'];
	$bb= $_POST['bb'];
	$tb = $_POST['tb'];
	$jk = $_POST['jk'];
	$bmi = $bb/($tb*$tb/10000);
	$reza->hitung($bmi, $jk);
}

 ?>