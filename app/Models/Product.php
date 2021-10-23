<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable =['code','name','slug', 'category_id','sub_category_id','price','image','thum_image','discount','product_size','color','short_details','description','is_featured','is_offer','status','save_by','update_by','ip_address'];
     
    public function productImage(){
        return $this->hasMany(productImage::class);
    }
}
