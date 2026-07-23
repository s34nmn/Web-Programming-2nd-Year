<?php
$name = $_POST["employeename"];
$hrated = $_POST["hourlyrate"];
$hworked = $_POST["hourswork"];
$overtime = $_POST["overtimehours"];


$hrate = $hrated;
$overtimerate = $hrate * 1.5;
$basicsalary = $hrate * $hworked;
$overtimepay = $overtime * $overtimerate;
$grosspay = $basicsalary + $overtimepay;
$tax = $grosspay * 0.03;
$sss = $grosspay * 0.02;
$totaldeduct = $tax + $sss + 150 + 850;
$netpay = $grosspay - $totaldeduct;

$hrate = number_format($hrate, 2);
$overtimerate = number_format($overtimerate, 2);
$basicsalary = number_format($basicsalary, 2);
$overtimepay = number_format($overtimepay, 2);
$grosspay = number_format($grosspay, 2);
$tax = number_format($tax, 2);
$sss = number_format($sss, 2);
$totaldeduct = number_format($totaldeduct, 2);
$netpay = number_format($netpay, 2);


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