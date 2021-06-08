<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Form;
class FormField extends Model
{
    protected $fillable = ['sort_id'];

    // Primary key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    public function form() {
        $this->belongsTo(Form::class);
    }
}
