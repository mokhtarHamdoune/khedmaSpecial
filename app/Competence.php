<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competence extends Model
{
    public function cv(){
        $this->belongsTo(Cv::Class);
    }
}
