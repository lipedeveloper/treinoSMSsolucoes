        <div class="container">
        <table class="table">
        	<tr>
        		<th>Nome</th>
        		<th>Obs</th>
    		</tr>
          <?php
	           	foreach ($usuarios as $x) {
	           		echo "<tr>";
	           			echo "<td>".$x->nome."</td>";
	           			echo "<td>".$x->obs."</td>";
           			echo "</tr>";
	           	}
           ?>
            </table>
        </div>