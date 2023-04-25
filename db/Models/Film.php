<?php

namespace db\Models;

include_once 'IObjects.php';

class Film implements IObjects
{
    public $id;
    public $title;
    public $desc;
    public $imdb;
    public $isPremium;
    public $img;
    public $year;
    public $isPop;
    public $genreID;
    public $country;
    public $participantID;

    public function __construct($id, $title, $isPremium, $country, $desc, $img, $imdb, $genreID, $isPop, $year, $participantID)
    {
        $this->id = $id;
        $this->country = $country;
        $this->isPremium = $isPremium;
        $this->desc = $desc;
        $this->genreID = $genreID;
        $this->title = $title;
        $this->isPop = $isPop;
        $this->imdb = $imdb;
        $this->year = $year;
        $this->participantID = $participantID;
        $this->img = $img;
    }

    public function __toString()
    {
        return "ID: " . $this->id . " Title: " . $this->title . " isPremium: " . $this->isPremium . " 
            Country: " . $this->country . " Description: " . $this->desc . " IMG: " . $this->img . " 
            IMDB: " . $this->imdb . " GenreID: " . $this->genreID . " isPopular: " . $this->isPop . " 
            Year: " . $this->year . " ParticipantID" . $this->participantID;
    }

    public function equals($model)
    {
        if (gettype($model) == gettype($this)) {
            if (get_class($model) == get_class($this)) {
                if (
                    $this->title == $model->title && $this->year == $model->year
                    && $this->img == $model->img && $this->isPop == $model->isPop
                    && $this->genreID == $model->genreID && $this->imdb == $model->imdb
                    && $this->country == $model->country && $this->desc == $model->desc
                    && $this->participantID == $model->participantID
                ) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}

?>