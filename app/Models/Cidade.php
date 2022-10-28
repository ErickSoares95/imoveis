<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public static function index()
    {
        return Cidade::all();
    }

    public static function create_cidade(string $name)
    {
        $cidade = Cidade::where("name", $name)->first();
        if ($cidade !== null) {
            return false;
        }
        $cidade = new Cidade;
        $cidade->name = $name;
        return $cidade->save();
    }

    public static function edit_cidade(int $id)
    {
        return Cidade::where("id", $id)->first();
    }

    public static function update_cidade(int $id, string $name)
    {
        $cidade = Cidade::where("id", $id)->first();
        if ($cidade === null) {
            return false;
        }
        $cidade->name = $name;
        return $cidade->save();
    }

    public static function delete_cidade(int $id)
    {
        $cidade = Cidade::where("id", $id)->first();
        if ($cidade === null) {
            return false;
        }
        return $cidade->delete();
    }

    public function imoveis()
    {
        return $this->hasMany(Imovel::class);
    }
}
