<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Barang extends Model
{
    use HasFactory;

    protected $table="barang";

    protected $primaryKey="id";

    use SoftDeletes;

    protected $fillable = [
        'insert_user',
        'update_user'
    ];
}
