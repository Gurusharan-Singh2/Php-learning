<?php

// traits is use for multiple inheritence

// trait parentCompany1{
//   function getTotalEmployee(){

//   echo "1000";

//   }
// }
// trait parentCompany2{
//   function getTotalOffice(){

//   echo "500";

//   }
// }


// class Company{
//   use  parentCompany1;
//   use  parentCompany2;


// }

// $c1=new Company();
// // $c1->getTotalEmployee();
// $c1->getTotalOffice();



trait A1{
  function getEmp(){
    echo "100";
  }
};
trait A2{
  function getEmp(){
    echo "50";
  }
};


class x1{
  use A1;
  use A2{
    A1::getEmp insteadof A2;
    A2::getEmp as getEmpA2;
  }

}

$x=new x1();
$x->getEmp();
$x->getEmpA2();


?>