<?php

namespace App\Models;

use App\Traits\UploadTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use UploadTrait;
    use HasFactory;

    protected $fillable = [
        'name','description','price','image'
    ];

    public function getImageAttribute($value)
    {
        if($value == null){
            return '';
        }
        return asset('/storage/images/products/' . $value);
    }


    public function setImageAttribute($value)
    {
        if ($value != null)
        {
            $this->attributes['image'] = $this->uploadFile($value , 'products');
        }
    }
}
