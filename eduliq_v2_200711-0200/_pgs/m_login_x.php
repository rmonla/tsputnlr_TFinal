<?php  
	include_once '_main/fxs.php';
	

	// if (isset($_SESSION['uIDE'])) { /* Logeado */
		
	// 	$lModo = 'Logeado';
		
	// 	$uID  = $_SESSION['uIDE'];
		
	// 	/*<®> Obtengo los datos del usuario <®>*/
	// 		$q = "SELECT u.*, p.perfil 
	// 				FROM usuarios u
	// 				INNER JOIN perfiles p ON p.id = u.idperfil
	// 				WHERE u.id = $uID";
	// 		$rg = mysqli_fetch_array(ejecutar($q));

	// 	/*<®> Datos del usuario <®>*/
	// 		$uPerf = $rg['perfil'];
	// 		$uLogi = $rg['usr']." ($uPerf)";
	// 		$uNomb = utf8_encode($rg['nomb'].' '.strtoupper($rg['ape']));
	// 		$uDocu = number_format($rg['docu'], '0', ",", ".");
	// 		$uDire = utf8_encode($rg['dir']);
	// 		$uTele = $rg['tel'];
	// 		$uMail = $rg['email'];

	// 	/*<®> Cargo las Vars de SESSION <®>*/
	// 		$_SESSION['uIDE'] = $rg['id'];
	// 		$_SESSION['uUSR'] = $rg['usr'];
	// 		$_SESSION['uPER'] = $rg['idperfil'];
	
	// } else

	
					switch ($usr_perfil) {
						case 'ADM':
								header('location:_pgs/p_adm.php');
							break;
						case 'LIQ':
								header('location:index_liq.php');
							break;
						case 'SEC':
								header('location:index_sec.php');
							break;
						
						default:
								header('location:index.php');
							break;
					}

	
		/*<®> Login Normal <®>*/
		case 'Logeado': ?>
			<h2>Usuario en el Sistema</h2>
			<form action="salir.php" method="post">
				<div style="text-align:left">Nombre y Apellido:</div>
				<h2><div style="text-align:right; font-style:italic"><?php echo $usr_nomb; ?></div></h2>
				<div style="text-align:left">Usuario:</div>
				<div style="text-align:right"><?php echo $usr_login; ?></div>
				<div style="text-align:left">Documento:</div>
				<div style="text-align:right"><?php echo $usr_docu; ?></div>
				<div style="text-align:left">Dirección:</div>
				<div style="text-align:right"><?php echo $usr_dir; ?></div>
				<div style="text-align:left">Teléfono:</div>
				<div style="text-align:right"><?php echo $usr_tel; ?></div>
				<div style="text-align:left">E-Mail:</div>
				<div style="text-align:right"><?php echo $usr_email; ?></div>
				<input type="submit" value="Salir del Sistema">
			</form>
<?php break;
		/*<®> No Logeado <®>*/
		default: ?>
		<h2>Login del Sistema</h2>
		<form action="#" method="post">
			<fieldset>
				<legend>Formulario de Login</legend> 
				<label for="usr">Usuario: 
					<input type="text" name="usr" id="usr" value="">
				</label> 
				<label for="pass">Contraseña: 
					<input type="password" name="pass" id="pass" value="">
				</label> 
				<p>
					<input type="submit" name="boton" value="Ingresar">
					<input type="hidden" name="login" id="login" value="log-in">
				</p>
HTML;
			break;
		}

	$hTIT = ($lModo == 'Logeado') ? 'Usuario en el Sistema' : 'Login del Sistema' ;

	$hLogin = <<<HTML
		<div id="formLogin">
			<h2>$hTIT</h2>
			<form action="#" method="post">
				<fieldset>
					$hLabels
				</fieldset>
			</form>
		</div>
		<!-- largo script del msj -->
		<script type="text/javascript">
			window.setTimeout(function(){
					$('.loginbutton').click();
				}, 1000);
			
		</script>
			</fieldset>
		</form>
		<br>
		<br>
		<br>
<?php break;
	} ?>

			<!-- largo script del msj -->
			<script type="text/javascript">
				window.setTimeout(function(){
						$('.loginbutton').click();
					}, 1000);
				
			</script>
	<!-- <input type="button" value="Cartel" class="loginbutton" data-type="zoomin"> -->
	<div class="overlay-container" style="display: none;">
		<div class="msjlogin-container zoomin">
			<center>
				<h3>$mTitu</h3> 
				$mDesc
				<br>
				<br>
				<span class="loginclose" align="center">Cerrar</span>
			</center>
		</div>
	</div>
