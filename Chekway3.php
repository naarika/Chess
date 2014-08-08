<?php
if ((isset($_POST['leter']))and(isset($_POST['number'])))
{
//    $leter_new=htmlspecialchars( $_POST['leter']);
//    $number_new=htmlspecialchars( $_POST['number']);


    class Rook {
    // protected $letter_new ;
    // protected $number_new ;
    public $letter_new;
   // public $number_new;
   // public  $letter_old= 'a';
  //  public $number_old= '1';
    function rook($letter_new)
       {
      $this->letter_new=$letter_new;
       
       }


    //   public function set($letter_new)
    // {
   
    //  $this->letter_new=$letter_new;
    //  echo $this->letter_new;
    // }

    public function checkWay()
    {
        echo "this -> letter_new<br>";
       echo $this->letter_new;
   // return ( $this->letter_new);
     //   return (true);
    }


    }
//$X=htmlspecialchars( $_POST['leter']);
  
//$Y=htmlspecialchars( $_POST['number']) ;
     $x="a"; 
     $y="1"; 
  //  $rook_wight_left = new Rook( htmlspecialchars( $_POST['leter']), htmlspecialchars( $_POST['number']));
  //  $rook_wight_left = new Rook("e","1");
    // $rook_wight_left = new Rook('a');
  $rook_wight_left = new Rook('f');

  //$rook_wight_left->rook('f');
  $rook_wight_left->checkWay();

};
