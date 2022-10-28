<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\Cast\Double;
use Ramsey\Uuid\Type\Decimal;

class Imovel extends Model
{
    use HasFactory;

    protected $table = "imoveis";

    protected $fillable = ["name", "terreno", "salas", "banheiros", "dormitorios", "garagnes", "descricao", "preco", "cidade_id", "tipo_id", "finalidade_id"];

    public static function index()
    {
        return Imovel::index();
    }

    public static function create_imovel(string $name, int $terreno, int $salas, int $banheiros, int $dormitorios, int $garagens, string $descricao, float $preco, int $cidade_id, int $tipo_id, int $finalidade_id)
    {
        $imovel = Imovel::where("name", $name)->first();
        if ($imovel !== null) {
            return false;
        }
        $imovel = new Cidade;
        $imovel->name = $name;
        $imovel->terreno = $terreno;
        $imovel->salas = $salas;
        $imovel->banheiros = $banheiros;
        $imovel->dormitorios = $dormitorios;
        $imovel->garagens = $garagens;
        $imovel->descricao = $descricao;
        $imovel->price = $preco;
        $imovel->cidade_id = $cidade_id;
        $imovel->tipo_id = $tipo_id;
        $imovel->finalidade_id = $finalidade_id;
        return $imovel->save();
    }

    public static function edit_imovel(int $id)
    {
        return Imovel::where("id", $id)->first();
    }

    public static function update_imovel(int $id, string $name, int $terreno, int $salas, int $banheiros, int $dormitorios, int $garagens, string $descricao, float $preco, int $cidade_id, int $tipo_id, int $finalidade_id)
    {
        $imovel = Imovel::where("id", $id)->first();
        if ($imovel === null) {
            return false;
        }
        $imovel->name = $name;
        $imovel->terreno = $terreno;
        $imovel->salas = $salas;
        $imovel->banheiros = $banheiros;
        $imovel->dormitorios = $dormitorios;
        $imovel->garagens = $garagens;
        $imovel->descricao = $descricao;
        $imovel->price = $preco;
        $imovel->cidade_id = $cidade_id;
        $imovel->tipo_id = $tipo_id;
        $imovel->finalidade_id = $finalidade_id;
        return $imovel->save();
    }

    public static function delete_imovel(int $id)
    {
        $imovel = Imovel::where("id", $id)->first();
        if ($imovel === null) {
            return false;
        }
        return $imovel->delete();
    }



   public function endereco()
   {
    return $this->hasOne(Endereco::class);
   } 

   public function cidade()
   {
    return $this->belongsTo(Cidade::class);
   }

   public function finalidade()
   {
    return $this->belongsTo(Finalidade::class);
   }

   public function tipo()
   {
    return $this->belongsTo(Tipo::class);
   }

   public function proximidades()
   {
        return $this->belongsToMany(Proximidade::class)->withTimestamps();
   }
}
