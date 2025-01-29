<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Casts\Attribute;
use App\Models\Category;
use Str;
class Summary extends Model
{
    use HasFactory;

    protected $guarded = ['user_id'];


    protected function title(): Attribute
    {
        return Attribute::make(
            set: function (string $value) {
                return [
                    'title' => $value,
                    'slug' => Str::slug($value)
                ];
            }
        );
    }

    public function user(){
        //Un résumé ($this) appartient (belongTo) a l'utilisateur (User)
        return $this->BelongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class)->withDefault(['title' => 'Sans categorie']);
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
