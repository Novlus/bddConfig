<?php

namespace autoload\model; 

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    protected $table = 'commande';
    protected $primaryKey ='id';

    public function carte()
    {
        return $this->belongsTo('autoload\model\Carte');
    }

    public function itemcommande()
    {
        return $this->hasMany('autoload\model\ItemCommande');
    }

    public function item()
    {
        return $this->belongsToMany('autoload\model\Item',
                                    'item_commande',
                                    'commande_id',
                                    'item_id');
    }


 

}