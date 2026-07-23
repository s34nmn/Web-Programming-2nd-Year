<?php
$name = $_POST["employeename"];
$hrated = $_POST["hourlyrate"];
$hworked = $_POST["hourswork"];
$overtime = $_POST["overtimehours"];

$hrate = number_format($hrated, 2);   
$overtimerate = number_format($hrate * 1.5, 2);
$hourlycompute = number_format($hrate * $hworked, 2);

$basicsalary = number_format($hrate * $hworked, 2);
$overtimepay = number_format($overtime * $overtimerate, 2);
$grosspay = number_format($basicsalary + $overtimepay, 2);      #!!!
$tax = number_format($grosspay * 0.03, 2);
$sss = number_format($grosspay * 0.02, 2);
$totaldeduct = number_format($tax + $sss + 150 + 850, 2);
$netpay = number_format($grosspay - $totaldeduct, 2);     #!!!


echo "======================================================= <br><br>"; 
echo "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; EMPLOYEE PAYROLL SYSTEM <br><br>"; 
echo "======================================================= <br><br> "; 
echo "Employee Name : $name <br>";
echo "Hourly Rate : ₱$hrate <br>";
echo "Overtime Rate : ₱$overtimerate <br>";
echo "Hours Worked : $hworked <br>";
echo "Overtime Hours : $overtime <br><br>";
echo "======================================================= <br><br>"; 
echo "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; PAYROLL SUMMARY <br><br>"; 
echo "======================================================= <br><br>"; 
echo "Basic Salary : ₱$basicsalary <br>";
echo "Overtime Pay : ₱$overtimepay <br>";
echo "------------------------------------------------------- <br>";
echo "Gross Pay : ₱$grosspay <br><br>";
echo "Tax (3%) : ₱$tax <br>";
echo "SSS (2%) : ₱$sss <br>";
echo "Philhealth : ₱150.00 <br>";
echo "Pag-IBIG : ₱850.00 <br>";
echo "------------------------------------------------------- <br>";
echo "Total Deductions : $totaldeduct <br><br><br>";
echo "======================================================= <br><br>"; 
echo "Net Pay : $netpay <br><br>";
echo "======================================================= <br>"; 

?>