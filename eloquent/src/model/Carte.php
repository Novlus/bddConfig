<?php

namespace autoload\model; 

use Illuminate\Database\Eloquent\Model;

class Carte extends Model
{
    protected $table = 'carte';
    protected $primaryKey ='id';

    public static function findByID(Int $id )
    {
        $carte = Carte::where('id', '=', $id)->first();
        if($carte == null)
        {
            //$e = new ModelNotFoundException("Carte non trouvée");
            //throw $e;
        }
        return $carte;
    }

    public function commande()
    {
        return $this->hasMany('autoload\model\Commande');
    }
 
    /*public static function orderByDescName() : array
    {
        return self::orderBy('nom_proprietaire', 'desc')->get();
    }*/
    
}

