<?php

namespace App;
use App\Cv;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    public function cv(){
        $this->belongsTo(Cv::Class);
    }
}