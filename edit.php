<?php
if(isset($_SESSION['usuarioNome'])){
		
	    $userid = $_SESSION['usuarioId'];
        include("conexao.php");
        $result_usuarios = "SELECT * FROM usuarios where id = $userid";
        $resultado_usuarios = mysqli_query($conn, $result_usuarios);
        $row_usuario = mysqli_fetch_assoc($resultado_usuarios);

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
						<tr>
							<td><?php echo ''.$row_usuario['id'];?></td>
							<td><?php echo ''.$row_usuario['nome'];?></td>
							<td><?php echo ''.$row_usuario['email'];?></td>
							<td><b><?php echo ''.$row_usuario['username'];?></b></td>
						</tr>
				</tbody>
					</table>
					<p class="text-center mt-2 text-success">
                      </p>
					</div>

				</div>
			</div>
            <?php
}
?>