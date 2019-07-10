<?php 

/*
class company{


	var $company 
 

	function company_name($company){
		$this->company_name=$company;
	}

}

*/

class company {
		var $companyname;
		
			function show_companyname(){
				return "Company : DOT Indonesia  <br/>";
			}
		}
		
		$company = new company();
		
		echo $company->show_companyname();




class departmen{


	var $department;	
 

	function departmen_name($departmen){
		$this->departmen_name=$departmen;
	}
	
}

class employee extends departmen {


	var $employee;
	var $title;
	var $salary;
 

	function employee_name($employee){
		$this->employee_name=$employee;
	}
	
	function employee_title($title) {
		$this->employee_title=$title;
			}
			
	function employee_salary($salary) {
		$this->employee_salary=$salary;
			}
	
	
			
}


$dataemployee = new employee;


$dataemployee->departmen_name(" QA Engineer ");
$dataemployee->employee_name(" Sulastri ");
$dataemployee->employee_title(" Senior ");
$dataemployee->employee_salary(" 5.500.000 ");


echo "Department Name : " .$dataemployee->departmen_name . "<br/>";
echo "Employee Name :" . $dataemployee->employee_name . "<br/>";
echo "Title : " .$dataemployee->employee_title . "<br/>";
echo "Salary : " .$dataemployee->employee_salary . "<br/>";



 
?>