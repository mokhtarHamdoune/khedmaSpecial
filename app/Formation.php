<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Cv;
class Formation extends Model
{
    public function cv(){
        return $this->belongsTo(Cv::class);
    }
}
