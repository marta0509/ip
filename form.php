<!DOCTYPE html>
			<html>
			<head>
				<meta charset="utf-8">
				<title>Endereços Ip's</title>

			</head>
			<body>
				<form action="processar_form.php" method="post">
					<h2>Classes IP</h2>
					<p>Insira aqui o seu endereço IP.</p>
					<input type="text" name="txt1">
					<input type="text" name="txt2">
					<input type="text" name="txt3">
					<input type="text" name="txt4">
					<br><br>

					<p>Escolha o protocolo</p>

					<select name="protocolos">
	                    <option value="http">HTTP</option>
	                    <option value="ftp">FTP</option>
	                    <option value="smtp">SMTP</option>
	                    <option value="telnet">TELNET</option>
	                    <option value="tcp">TCP</option>
	                    <option value="udp">UDP</option>
	                    <option value="dns">DNS</option>
	                    <option value="ip">IP</option>
                    	<option value="icmp">ICMP</option>
                	</select>
                	<br><br>

					<input type="submit" name="Verificar">
				</form>
			</body>
			</html>