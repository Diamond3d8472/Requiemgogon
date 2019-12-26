<?php
	 if(isset($_SESSION['usuarioNome']) && ($_SESSION['usuarioNiveisAcessoId'] == "1")){
		
	 
	include("conexao.php");
	$result_usuarios = "SELECT * FROM usuarios";
	$resultado_usuarios = mysqli_query($conn, $result_usuarios);
?>
<div class="container">
            <div class="card border-0 shadow my-3">
                <div class="card-body p-3">
					<table class="table table-bordered">
					<thead>
						<tr>
							<th>Codigo</th>
							<th>Nome</th>
							<th>Email</th>
							<th>Username</th>
							<th>Açoes</th>
						</tr>
					</thead>
					<tbody>
					<?php
					while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
					?> 
						<tr>
							<td><?php echo ''.$row_usuario['id'];?></td>
							<td><?php echo ''.$row_usuario['nome'];?></td>
							<td><?php echo ''.$row_usuario['email'];?></td>
							<td><b><?php echo ''.$row_usuario['username'];?></b></td>
							<td><a href="del.php?contato=<?php echo $row_usuario['id']; ?>" type="button" class="btn btn-default btn-danger" aria-label="Excluir Contato">
   								Excluir<span class="glyphicon glyphicon-remove"></span>
   							</a></td>
						</tr>
				<?php
					}
				?>
				</tbody>
					</table>
					<p class="text-center mt-2 text-success">
                      <?php
                        if(isset($_SESSION['delerro'])){
                          echo  $_SESSION['delerro'];
                        unset($_SESSION['delerro']);
                        }
                      ?>
                      </p>
					</div>

				</div>
			</div>
<?php
	 }
	else
	echo'<div class="container">
			<div class="card border-0 shadow my-3">
				<div class="card-body p-3">
					<table class="table table-bordered">
				</div>
			</div>
		</div>
		'
	 ?>