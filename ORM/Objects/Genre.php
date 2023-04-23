<?php
include_once 'IObjects.php';
    class Genre implements IObjects {
        private $id;
        private $title;

        public function __construct($id,$title)
        {
            $this->id = $id;
            $this->title = $title;
        }
        public function __toString(){
            return "ID: ".$this->id." Title: ".$this->title;
        }

        public function equals($model)
        {
            if(gettype($model) == gettype($this)){
                if(get_class($model) == get_class($this)){
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