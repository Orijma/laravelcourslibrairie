<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Summary extends Model
{
    use HasFactory;

    public function user(){
        //Un résumé ($this) appartient (belongTo) a l'utilisateur (User)
        return $this->BelongsTo(User::class);
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
