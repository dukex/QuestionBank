<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <title>Question Bank</title>
</head>
<body>
   	<div id="nav">
   	    <ul>
   	        <li><a>Create a Test</a></li>
   	        <li>Take a Test</li>
   	        <li>Create a Survey</li>
			<li>Enter Parent Survey Data</li>
   	    </ul>
   	</div>
</body>
</html>-->

<?php include 'layout/_head.php'; ?>

			<div class="generic twotwenty">
			    <h2>Criar um Teste</h2>
			    <p>Se seu desejo for <strong>criar</strong> uma prova, basta  clicar no botão abaixo.</p>
			    <form method="POST" action="test/create">
					<input id="form" name="form" value="start" type="hidden" />
					<button>Iniciar</button>
			    </form>
			</div>
           	<div class="generic twotwenty">
			    <h2>Take a Test</h2>
			    <p>Description for <strong>Take a Test</strong></p>
			</div>			
           	<div class="generic twotwenty">
			    <h2>Create a Survey</h2>
			    <p>Description for <strong>Create a Survey</strong></p>
			</div>			
			<div class="generic twotwenty end">
				<h2>Enter Parent Survey Data</h2>
			  	<p>Description for <strong>Enter Parent Survey Data</strong></p>
			</div>
			<br class="clear" />
			<div class="generic threeforty">
			    <h2>Continuar Criação de Teste</h2>
			    <p>Se desejar continuar a prova que estava fazendo digite o código da prova abaixo para <strong>continuar</strong>.</p>
			    <form method="POST">
					<input id="form" name="form" value="continue" type="hidden" />
					<input id="code" class="ui-autocomplete" value="Digite o Código" name="code" />
				<button>></button>
			    </form>
			</div>
			<span class="generic threeforty"></span>

			<div class="generic twotwenty end">
			    <h2>Admnistrar</h2>
			    <p>Para <strong>administrar</strong> o Banco de perguntas entre com o usuario e a senha.</p>
			    <form method="POST">
				<input id="form" name="form" value="login" type="hidden" />
				<div class="input">
				    <label for="username">Usuario:</label>
				    <input id="username" value="" name="username" />
				</div>
				<div class="input">
				    <label for="password">Senha:</label>
				    <input id="password" value="" name="password" />
				</div>
				<button>Entrar</button>
			    </form>
			</div>
         

<?php include 'layout/_footer.php'; ?>
			
	<!--
			Typogridphy Demo Page &mdash; Use this page <span class="amp">&amp;</span> its grids as a basis for your typographical front-end development.</h1></div>
			<div class="generic nineforty"><h2>940px</h2></div>
			<div class="generic twotwenty"><h2>220px</h2></div>
			<div class="generic sevenhun end"><h2>700px</h2></div>
			<div class="generic twoeighty break"><h2>280px</h2></div>
			<div class="generic sixforty end"><h2>640px</h2></div>
			<div class="generic threeforty break"><h2>340px</h2></div>
			<div class="generic fiveeighty end"><h2>580px</h2></div>
			<div class="generic fourhun break"><h2>400px</h2></div>
			<div class="generic fivetwenty end"><h2>520px</h2></div>
			<div class="generic foursixty break"><h2>460px</h2></div>
			<div class="generic foursixty end"><h2>460px</h2></div>
		<-->
