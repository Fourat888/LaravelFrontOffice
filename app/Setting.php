<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    //
    protected $fillable = [
        'homepage_content','homepage_img', 'hr_color', 'btn_color', 'btn_hover_color', 
    ];
}
