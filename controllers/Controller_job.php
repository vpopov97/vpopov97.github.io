<?php

class Job {
public $link;
public function __construct() {
		$this->model = new Job_model();
    	$this->link=mysqli_connect("localhost", "root", "", "integratest");
	}

	public function index() {
		
		 		    
		$slug=$_POST['jid'];
		$jobs = $this->model->getJobs($this->link,$slug);
		


		$table1 = '<table>

		<tr>

			<th>начало работы</th>
			<th>окончание работы</th>
			<th>компания</th>
			<th>
			<form method="POST">
				<input type="submit" id="addJob'.$slug.' " 
				  value="+" />
				</form>
			</th>

		</tr>';
		

		while ($row=mysqli_fetch_array($jobs,MYSQLI_ASSOC)) 
    {
    	
		$aaa="delJob".$row['id'];   
		 
    	//$row['name'] = mb_convert_encoding($row['name'], 'utf-8', 'cp1251');
		$table1 .= "<tr>";
		
		$table1 .= "<td><div  id='start".$row['id']." 'style='cursor:pointer'>".$row['start']."</div></td>";
		$table1 .= "<td><div  id='finish".$row['id']."'style='cursor:pointer'>".$row['finish']."</div></td>";
		$table1 .= "<td><div  id='company".$row['id']."'style='cursor:pointer'>".ucfirst($row['company'])."</div></td>";
		
		$table1 .= "<td>".'<form method="POST">
				<button  id="'.$aaa.'">-</button>
				
				</form>'."</td>";
		$table1 .= "</tr>";
		
		

		
      }
      $table1 .= "</table> ";
      $table1= "<div id=table1>".$table1."</div>"; 
      echo $table1;?>
      
  	<script  src="/js/buttonSend.js"></script>
  		<?php 

	}

	
	public function add() {
		
		//$ids = $this->model->getId($this->link);
		$slug = $_POST['slug'];
		$start = $_POST['jstart'];
		$finish = $_POST['jfinish'];
		$company = $_POST['jcompany'];
		echo "company".$slug;
		$this->model->addJobs($this->link, $slug, $start, $finish, $company);
	}

	public function send() {
		
		//$ids = $this->model->getId($this->link);
		$id = $_POST['id'];
		$start = $_POST['jstart'];
		$finish = $_POST['jfinish'];
		$company = $_POST['jcompany'];
		echo "company".$id;
		$this->model->sendJobs($this->link, $id, $start, $finish, $company);
	}

	public function delete() {
		
		$id=$_POST['jid'];

		//echo $id;
		$this->model->deleteJobs($this->link, $id);
		echo "company".$id;
	}
}
 ?>