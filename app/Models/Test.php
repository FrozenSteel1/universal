<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable = ['name', 'factory', 'typeeffects', 'ral_color', 'price_purchase_id', 'margin', 'price_final', 'min_order', 'discount', 'stock_product_id'];
    protected $guarded = ['id', 'created_at', 'updated_at', 'deleted_at'];

    public static function saveDate($request)
    {
        dd($request);
    }
    public static function viewData(){
        $test= new Test();
        return ['fillable'=>$test->getFillable(),'guarded'=>$test->getGuarded()];
    }
}
