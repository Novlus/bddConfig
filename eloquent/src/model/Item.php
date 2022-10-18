<?php

namespace autoload\model; 

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'item';
    protected $primaryKey ='id';

    public function commande()
    {
        return $this->belongsToMany('autoload\model\Commande',
                                    'item_commande',
                                    'item_id',
                                    'commande_id'); 
    }

    public function itemcommande()
    {
        return $this->belongsTo('autoload\model\ItemCommande');
    }
}

