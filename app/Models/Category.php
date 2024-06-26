<?php
namespace App\Models;
use App\Models\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use Translatable;
    //
    protected $guarded=false;
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}

