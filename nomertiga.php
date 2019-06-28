<?php 
	class company {
		var $companyname;
		
			function show_companyname(){
				return "DOT Indonesia  <br/>";
			}
		}
		
		$company = new company();
		
		echo $company->show_companyname();
	
	class department {
		var $departmentname;
		
			function show_departmenname(){
				return "QA Engineer <br/>";
			}
		}
		
		$department = new department();
		
		echo $department->show_departmenname();
	
	class employee {
		var $name;
		var $title;
		var $salary;
		
			function show_name(){
				return "Nama : Sulastri <br/>";
			}
			
			function show_title() {
				return "Title : Senior <br/>";
			}
			
			function show_salary() {
				return "Salary : 550000  <br/>";
			}
			
		}
		
		$employee = new employee();
		echo $employee->show_name();
		echo $employee->show_title();
		echo $employee->show_salary();
		
?>
