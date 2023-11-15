<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Nabila Wijaya");


$company->programmer = new BackendProgrammer("Refi Oryza");

$company->programmer = new FrontendProgrammer("Rega Pramudya");

sayHelloProgrammer(new Programmer("Nabila Wijaya<br>"));
sayHelloProgrammer(new BackendProgrammer("Refi Oryza<br>"));
sayHelloProgrammer(new FrontendProgrammer("Rega Pramudya<br>"));