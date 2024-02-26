<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $fillable = ['nama_kelas'];

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function scopeFilter($query, array $filters){
        if(isset($filters['search']) ? $filters['search'] : false){
            return  $query->where('nama_kelas', 'like', '%' . request('search') . '%');
        }
    }
}
