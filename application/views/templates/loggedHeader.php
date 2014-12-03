<div id="Header">  
	<div id="Logo" class="logo">
	    	<a ><img  src="../img/Logo.png"></a>
	</div>
    <div id="Search"></div>
    <div id="Login">
      	    <h1 style="text-align: center">Bienvenido de nuevo <?=$this->session->userdata('username')?></h1>
			<?=anchor(base_url().'login/logout_ci', 'Cerrar sesión')?>
    </div>
    </div>
    