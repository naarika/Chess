<?php
if ((isset($_POST['leter']))and(isset($_POST['number'])))
{
//       $leter_new=htmlspecialchars( $_POST['leter']);
//    $number_new=htmlspecialchars( $_POST['number']);

    
    class Rook {
    protected $letterindex_new;
    protected $number_new;
    public  $letterindex_old= '1'; //a
    public $number_old= '1';
    
    public $leter_to_index=array('a'=>'1','b'=>'2','c'=>'3','d'=>'4','e'=>'5','f'=>'6','g'=>'7','h'=>'8');

    function __construct($letterindex_new, $number_new)
       {
      $this->letterindex_new=$leter_to_index[$letterindex_new];
      $this->number_new=$number_new; 
       }

    public function checkWay()
       {
       echo "this -> letterindex_new<br>";
       echo $this->letterindex_new;
       echo "<br>";
       echo "this -> number_new<br>";
       echo $this->number_new;
   // return ( $this->letter_new);
     //   return (true);
        }


    }


// $x=htmlspecialchars( $_POST['leter']);
  
// $y=htmlspecialchars( $_POST['number']) ;

     // $x="a"; 
     // $y="1"; 
    $rook_wight_left = new Rook( htmlspecialchars( $_POST['leter']), htmlspecialchars( $_POST['number']));
  //  $rook_wight_left = new Rook("e","1");
    // $rook_wight_left = new Rook('a');
 // $rook_wight_left = new Rook($x,$y);

  $rook_wight_left->checkWay();

};
