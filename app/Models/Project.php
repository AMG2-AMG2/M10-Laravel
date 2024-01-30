<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    /**
     * Elements that are allowed to be filled in directly
     *
     * @var string[]
     */
    protected $fillable = ['titel', 'beschrijving']; // Voeg hier alle velden toe die je wilt invullen

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'projects';
}
