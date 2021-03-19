<!DOCTYPE html>
<html>
<body style="background-color: #F7CEFC">
</body>
</html>

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
		if ($txt1==10) 
		{
			echo "O ip inserido é um ip reservado!<br>";
		}

		/*localhost*/

		elseif ($txt1==127) 
		{
			echo "O ip inserido é um ip reservado!<br>";
		}

		/*erro*/

		elseif ($txt1==169) {
			echo "O ip inserido é um ip de erro!<br>";
		}

		/*classe A*/

		if (($txt1>=1 && $txt1<=126) && ($txt1!=10 && $txt1!=127)) 
		{
			
			echo "O ip inserido é da Classe A!<br>";
			echo "O ip inserido é um ip público!<br>";	
		}
		
		/*classe B*/

		elseif (($txt1>=128 && $txt1<=191) && ($txt1!=172 && $txt1!=169)) 
		{
			echo "O ip inserido é da Classe B!<br>";
			echo "O ip inserido é um ip público!<br>";
			
		}
		
		elseif ($txt1==172) 
		{
			echo "O ip inserido é um ip reservado!<br>";
		}

		/*classe C*/
		

		elseif (($txt1>=192 && $txt1<=223) && ($txt1!=192)) 
		{
			echo "O ip inserido é da Classe C!<br>";
			echo "O ip inserido é um ip público!<br>";	
		}

		elseif ($txt1==192) 
		{
			echo "O ip inserido é um ip reservado!<br>";
		}

		/*classe D*/

		elseif ($txt1>=224 && $txt1<=239) 
		{
			echo "O ip inserido é da Classe D!<br>";
			echo "O ip inserido é um ip público!<br>";
		}

		/*classe E*/

		elseif ($txt1>=240 && $txt1<=254) 
		{
			echo "O ip inserido é da Classe E!<br>";
			echo "O ip inserido é um ip público!<br>";
		}
	}
	else
	{
		echo "O ip inserido é invalido!<br>";
	}

	echo "<br><br>";
	/*---------Dropdown----------*/

	if (isset($_POST['protocolos']))
	{
		$protocolos=$_POST['protocolos'];
	}
	else
	{
		echo '<script>alert("É obrigatório o preenchimento do protocolo.");</script>';
	}

	if($protocolos=='http')
	{
		echo "HTTP [HyperText Transfer Protocol]<br>
              É o protocolo utilizado para controlar a comunicação entre o servidor de Internet e o browser, ou seja, serve de suporte à World Wide Web. É o que nos permite escrever na Barra de Endereços do nosso browser um endereço URL [Uniform Resource Locator] e rapidamente receber a página Web correspondente.";
	}

	elseif($protocolos=='ftp')
	{
		echo "FTP [File Transfer Protocol]<br>
              É o protocolo utilizado para a transferência de ficheiros. Serve para fazermos o download ou upload de ficheiros de ou para servidores FTP, aquele cujo endereço começa por ftp://.";
	}

	elseif($protocolos=='smtp')
	{
		echo "SMTP [Simple Mail Transfer Protocol]<br>
              É o protocolo usado para enviar mensagens de correio eletrónico dos computadores clientes para os servidores e também para transferir mensagens entre servidores.";
	}

	elseif($protocolos=='telnet')
	{
		echo "Telnet [Emulação de Terminal]<br>
              É o protocolo associado ao serviço de acesso remoto a outros computadores através de linha de comandos (terminal).";
	}

	elseif($protocolos=='tcp')
	{
		echo "TCP [Transmission Control Protocol]<br>
              É o protocolo utilizado no transporte de informação entre os computadores emissor e recetor e garante a segurança dessa mesma informação.";
	}

	elseif($protocolos=='udp')
	{
		echo "UDP [User Datagram Protocol]<br>
              É um protocolo de transporte de informação entre os computadores emissor e recetor, no entanto, não garante a segurança da informação transmitida.";
	}

	elseif($protocolos=='dns')
	{
		echo "DNS [Domain Name System]<br>
              É o protocolo utilizado para associar a cada endereço IP um nome, pois desta forma é mais fácil de ser memorizado pelos utilizadores. ";
	}

	elseif($protocolos=='ip')
	{
		echo "IP [Internet Protocol]<br>
              É o protocolo responsável por estabelecer a ligação entre os computadores emissor e recetor para que a informação não se perca na rede.";
	}

	elseif($protocolos=='icmp')
	{
		echo "ICMP [Internet Control Message Protocol]<br>
              É o protocolo responsável pelo envio de mensagens para responder a pacotes de dados que não foram entregues corretamente. Desta forma é enviada uma mensagem ICMP e volta a ser enviado o pacote de dados não recebido.";
	}
}
?>	