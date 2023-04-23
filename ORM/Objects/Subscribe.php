<?php
include_once 'IObjects.php';
    class Subscribe implements IObjects {
        private $id;
        private $title;
        private $isPremium;

        private function __construct($id,$title,$isPremium){
            $this->id = $id;
            $this->title = $title;
            $this->isPremium = $isPremium;
        }
        public function __toString()
        {
            return "ID: ".$this->id." Title: ".$this->title." isPremium".$this->isPremium;
        }

        public function equals($model)
        {
            if(gettype($model) == gettype($this)){
                if(get_class($model) == get_class($this)){
                   if($this->title == $model->title && $this->isPremium == $model->isPremium){
                       return  true;
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