<?php
    include("functions/SwitchVariabel.php");
?>
<form name="Change_Variable" action="index.php" method="post">
Change Variabel. Silahkan masukkan angka yang ingin anda change.
        <table>
     <tr>
        <td>Variabel a : </td>
        <td><input type="text" name="Sa" id="Sa" value=""></td>
     </tr>
     <tr>
        <td>Variabel b: </td>
        <td><input type="text" name="Sb" id="Sb" value=""></td>
     </tr>
     <tr>
        <td><input type="submit" name="action" value="change"></td>
     </tr>
     </table>
</form>
<?php
if(!empty($_POST['Sa']) && !empty($_POST['Sb']))
    {
		$a = $_POST['Sa'];
        $b = $_POST['Sb'];
		$Test = new SwitchVariabel($a,$b);
		$Test->ubahVariabel();
?>
		<script>
					document.getElementById("Sa").value=<?php echo $Test->a ?>;
					document.getElementById("Sb").value=<?php echo $Test->b ?>;
		</script>
<?php
	} 
?>
