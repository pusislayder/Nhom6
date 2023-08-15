<?php

namespace App\Models;

use App\Http\Controllers\Admin\MenuController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable =  [
        'name',
        'description',
        'content',
        'menu_id',
        'quantity',
        'price',
        'price_sale',
        'active',
        'thumb'
    ];
    public function menu()
    {
        return $this->hasOne(Menu::class, 'id', 'menu_id')
            ->withDefault(['name' => '']);
    }
}
