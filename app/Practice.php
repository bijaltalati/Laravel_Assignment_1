<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Practice extends Model
{
    public function create_data($title,$body)
    {
        $this->title = $title;
        $this->body=$body;
        $this->save();

    }
}
