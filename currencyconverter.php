<html>
<head>
<style>
	#box
	{
		width:350px;
		height:270px;
		margin:0px auto;
		border:2px solid black;
	}
	h2{
		text-align: center;
	}
	table{
		margin:0px auto;
	}
</style>
</head>

<body>

<form align="center" action="currencyconverter.php" method="post">

<div id="box">
<h2><center>Currency Converter</center></h2>
<table>
	<tr>
	<td>
		Enter Amount:<input type="text" name="amount"><br>
	</td>
</tr>
<tr>
<td>
	<br><center>From:<select name='cur1'>
	<option value="AUD">Australian Dollar(AUD)</option>
	 <option value="EUR" selected>Euro (EUR)</option>
	 <option value="JPY" selected>Japanese Yen(JPY)</option>
	 <option value="PHP" selected>Philipines Peso(PHP)</option>
	 <option value="SGD" selected>Singapore Dollar(SGD)</option>
	 <option value="AED" selected>United Arab Emirates Dirham(AED)</option>
	 </select>
</td>
</tr>
<tr>
	<td>
	<br><center>To:<select name='cur2'>
	<option value="AUD">Australian Dollar(AUD)</option>
	 <option value="EUR" selected>Euro (EUR)</option>
	 <option value="JPY" selected>Japanese Yen(JPY)</option>
	 <option value="PHP" selected>Philipines Peso(PHP)</option>
	 <option value="SGD" selected>Singapore Dollar(SGD)</option>
	 <option value="AED" selected>United Arab Emirates Dirham(AED)</option>
	
	</select>
</td>
</tr>
<tr>
<td><center><br>
<input type='submit' name='submit' value="ConvertNow"></center>
</td>
</tr>
</table>
</form>
<?php
if(isset($_POST['submit'])){
	
$amount = $_POST['amount'];
$cur1 = $_POST['cur1'];
$cur2 = $_POST['cur2'];

if($cur1=="AUD" AND $cur2=="JPY"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*76 . "</center>";
}

if($cur1=="AUD" AND $cur2=="EUR"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 0.62 . "</center>";
}

if($cur1=="AUD" AND $cur2=="PHP"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 36.30 . "</center>";
}

if($cur1=="AUD" AND $cur2=="SGD"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 0.96 . "</center>";
}

if($cur1=="AUD" AND $cur2=="AED"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 2.50 . "</center>";
}

if($cur1=="EUR" AND $cur2=="AUD"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*1.60  . "</center>";
}

if($cur1=="EUR" AND $cur2=="JPY"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 122 . "</center>";
}

if($cur1=="EUR" AND $cur2=="PHP"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*58.32  . "</center>";
}

if($cur1=="EUR" AND $cur2=="SGD"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*1.54  . "</center>";
}

if($cur1=="EUR" AND $cur2=="AED"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*4.00  . "</center>";
}

if($cur1=="JPY" AND $cur2=="AUD"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.013  . "</center>";
}

if($cur1=="JPY" AND $cur2=="EUR"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.01  . "</center>";
}

if($cur1=="JPY" AND $cur2=="PHP"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.48  . "</center>";
}

if($cur1=="JPY" AND $cur2=="SGD"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.48  . "</center>";
}

if($cur1=="JPY" AND $cur2=="AED"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0325  . "</center>";
}

if($cur1=="PHP" AND $cur2=="AUD"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.05  . "</center>";
}

if($cur1=="PHP" AND $cur2=="EUR"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.02  . "</center>";
}

if($cur1=="PHP" AND $cur2=="JPY"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*2  . "</center>";
}

if($cur1=="PHP" AND $cur2=="SGD"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.03  . "</center>";
}

if($cur1=="PHP" AND $cur2=="AED"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.701  . "</center>";
}

if($cur1=="SGD" AND $cur2=="AUD"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*1.05  . "</center>";
}

if($cur1=="SGD" AND $cur2=="EUR"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.65  . "</center>";
}

if($cur1=="SGD" AND $cur2=="JPY"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*79  . "</center>";
}

if($cur1=="SGD" AND $cur2=="PHP"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*37.98  . "</center>";
}

if($cur1=="SGD" AND $cur2=="AED"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*2.75  . "</center>";
}

if($cur1=="AED" AND $cur2=="AUD"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.40  . "</center>";
}

if($cur1=="AED" AND $cur2=="EUR"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.24  . "</center>";
}

if($cur1=="AED" AND $cur2=="JPY"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*30  . "</center>";
}

if($cur1=="AED" AND $cur2=="PHP"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*14.26  . "</center>";
}

if($cur1=="AED" AND $cur2=="SGD"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.38  . "</center>";
}

}

?>

</body>
</html>