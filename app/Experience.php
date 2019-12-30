<?php

namespace App;
use App\Cv;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    public function cv(){
        $this->belongsTo(Cv::Class);
    }
}
