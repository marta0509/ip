<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
	
	if (isset($_POST['txt1']))
	{
		$txt1=$_POST['txt1'];
	}
	else
	{
		echo '<script>alert("É obrigatório o preenchimento da primeira parte.");</script>';
	}
	if (isset($_POST['txt2']))
	{
		$txt2=$_POST['txt2'];
	}
	else
	{
		echo '<script>alert("É obrigatório o preenchimento da segunda parte.");</script>';
	}
	if (isset($_POST['txt3']))
	{
		$txt3=$_POST['txt3'];
	}
	else
	{
		echo '<script>alert("É obrigatório o preenchimento da terceira parte.");</script>';
	}
	if (isset($_POST['txt4']))
	{
		$txt4=$_POST['txt4'];
	}
	else
	{
		echo '<script>alert("É obrigatório o preenchimento da quarta parte.");</script>';
	}

	if ($txt1>=0 && $txt1<=255 && $txt2>=0 && $txt2<=255 && $txt3>=0 && $txt3<=255 && $txt4>=0 && $txt4<=255) 
	{
		/*erro*/

		if ($txt1==169) {
			echo "O ip inserido é um ip de erro!<br>";
		}

		/*localhost*/

		elseif ($txt1==127) 
		{
			echo "O ip inserido é um ip reservado!<br>";
		}

		/*classe A*/

		elseif ($txt1==10) 
		{
			echo "O ip inserido é um ip reservado!<br>";
		}

		elseif ($txt1>=1||$txt1<=126 && $txt%10 && $txt%127) 
		{
			
			echo "O ip inserido é da Classe A!<br>";
			echo "O ip inserido é um ip público!<br>";
			
		}

		/*classe B*/

		elseif ($txt1>=128||$txt1<=191 && $txt%172) 
		{
			echo "O ip inserido é da Classe B!<br>";
			echo "O ip inserido é um ip público!<br>";
			
		}
		
		elseif ($txt1==172) 
		{
			echo "O ip inserido é um ip reservado!<br>";
		}

		/*classe C*/
		elseif ($txt1==192) 
		{
			echo "O ip inserido é um ip reservado!<br>";
		}

		elseif ($txt1>=192||$txt1<=223 && $txt1%192) 
		{
			echo "O ip inserido é da Classe C!<br>";
			echo "O ip inserido é um ip público!<br>";		
		}

		/*classe D*/

		elseif ($txt1>=224||$txt1<=239) 
		{
			echo "O ip inserido é da Classe D!<br>";
			echo "O ip inserido é um ip público!<br>";
		}

		/*classe E*/

		elseif ($txt1>=240||$txt1<=254) 
		{
			echo "O ip inserido é da Classe E!<br>";
			echo "O ip inserido é um ip público!<br>";
		}
	}
	else
	{
		echo "O ip inserido é invalido!<br>";
	}

}
?>	