<?php
include_once 'IObjects.php';
    class Role implements IObjects {
        private $id;
        private $title;

        public function __construct($id,$title){
            $this->id = $id;
            $this->title = $title;
        }

        public function equals($model)
        {
            if(gettype($model) == gettype($this)){
                if(get_class($model) == get_class($this)){
                    //
                    //  if???
                    //
                   if($this->title == $model->title){
                      return true;
                   }
                   else{
                       return false;
                   }
                }
                else{
                    return false;
                }
            }
            else{
                return false;
            }
        }
    }
?>