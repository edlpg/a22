<?php
class DesitionMaker {

 private $splitMany;
 private $tab;

    function __construct($splitMany,$tab)
    {
       $this->tab = $tab;
       $this->splitMany = $splitMany;
    }
    public function finalOutput()
    {
      $error = '';
      if($splitMany == ''){
        $error = 'No NUMBER of participants assigned<br>';
      }
      if($tab == ''){
        $error .='  No tab assigned' ;
      }
      return $error;

    }

}
