<!doctype html>
<html>
	<head>
	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta http-equiv="Content-Type" content="text/html; ">
	<title>Сотрудники</title>
	<link rel="stylesheet" href="css/style.css">
</head>
	<body>
 <?php 
		
		$table = '<table>

		<tr>

			<th>ФИО Сотрудника</th>
			<th>Дата рождения</th>
			<th>Пол</th>
			<th>
			<form method="POST">
				<input type="submit" id="addWorker"  
				  value="+" />
				</form>
			</th>
		</tr>';
		

		while ($row=mysqli_fetch_array($workers,MYSQLI_ASSOC)) 
    {
    	
		$aaa="delWorker".$row['id'];   
		if ($row['gender']) {
                        $gender1=" Мужской";
                    } 
                    else    {$gender1=" Женский";}
    	//$row['name'] = mb_convert_encoding($row['name'], 'utf-8', 'cp1251');
		$table .= "<tr>";
		
		$table .= "<td><div  id='name".$row['id']." 'style='cursor:pointer'>".ucfirst($row['surname']).' '.ucfirst($row['name']).' '.ucfirst($row['patronymic'])."</div></td>";
		$table .= "<td><div  id='birth".$row['id']."'style='cursor:pointer'>".$row['birth']."</div></td>";
		$table .= "<td><div  id='gender".$row['id']."'style='cursor:pointer'>".$gender1."</div></td>";
		
		$table .= "<td>".'<form method="POST">
				<button  id="'.$aaa.'">-</button>
				
				</form>'."</td>";
		$table .= "</tr>";
		
		

		
      }
      $table .= "</table> ";
      
      $table= "<div id=table>".$table."</div>";
      
      $_SESSION['table'] = $table;
      
     
    
       		?> 
       		
	<div id="tableId"><?php echo $table; ?></div>	
	<div id="formSend"></div>	  
	<div id="formDelete"></div>	
	<div id="formAdd"></div>	
	<div class="results"></div>		
 
	     
	    
	</body>

</html>
