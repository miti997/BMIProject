<?php
class Calc{

  //Validation
  public function validate(){
      if (isset ($_POST['submit'])) {
        if($_POST['weight'] > 0 &&  $_POST['height'] > 0){

        echo "Indicele dumneavoastră de masă corporală este:<br>";
        $bmi=new Calc();
        $bmi ->calculate();
        }
        else {
          echo "Introduceți valori valide";
        }
      }
    }

  //Constructor
  public function __construct(){
      if(isset($_POST['submit'])){
         $this->weight = $_POST['weight'];
         $this->height = $_POST['height'];
       }
     }

  //Math function
  public function calculate () {
      $result=round($this->weight / pow ($this->height,2),2);
      echo $result."<br>";
      if ($result < 18.5) {
        echo "Sunteți subponderal";
      }
      elseif ($result >= 18.5 && $result <=24.9) {
        echo "Aveți o greutate normală";
      }
      elseif ($result > 24.9 && $result <=29.9) {
        echo "Sunteti supraponderal";
      }
      else {
        echo "Sunteti obez";
      }
  }
}
?>
