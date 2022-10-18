<?php

namespace autoload\model; 

use Illuminate\Database\Eloquent\Model;

class ItemCommande extends Model
{
    protected $table = 'item_commande';
    protected $primaryKey ='item_id,commande_id';

    public function commande()
    {
        return $this->belongsTo('autoload\model\Commande');
    }

    public function item()
    {
        return $this->hasMany('autoload\model\Item');
    }

}