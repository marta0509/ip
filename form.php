<!DOCTYPE html>
			<html>
			<head>
				<meta charset="utf-8">
				<title>Endereços Ip's</title>
				  <link href="css/bootstrap.min.css" rel="stylesheet" >
 				  <link rel="stylesheet" href="css/jumbotrom.css">
				  <link rel="stylesheet" type="text/css" href="CSS/slick.css"/>
 				  <link rel="stylesheet" type="text/css" href="CSS/slick-theme.css"/>
 				  <link rel="stylesheet" type="text/css" href="CSS/estilos.css">
			</head>
			<body style="background-color: #F7CEFC">
				<form action="processar_form.php" method="post">
					<h2>Classes IP</h2>
					<p>Insira aqui o seu endereço IP.</p>
					<input type="text" name="txt1">
					<input type="text" name="txt2">
					<input type="text" name="txt3">
					<input type="text" name="txt4">
					<br><br>

					<p>Escolha o protocolo</p>

					<select name="protocolos" class="form-select" aria-label="Default select example">
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


				<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
			    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
			    <script src="JS/jquery-3.5.1.min.js"></script>
			    <script src="JS/bootstrap.min.js"></script>
			    <script src="JS/all.min.js"></script>
			    <script type="text/javascript" src="JS/slick.min.js"></script>
			    <script type="text/javascript" src="JS/estilos.js"></script>
			</body>
			</html>