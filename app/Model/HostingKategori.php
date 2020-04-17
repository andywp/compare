<?php
namespace App\Model;
  
use Illuminate\Database\Eloquent\Model;
   
class HostingKategori extends Model
{
    protected $table = 'hosting_kategori';
    protected $primaryKey= 'id';
    public $timestamps = false;
    protected $fillable = [
        'kategori'
    ];

}