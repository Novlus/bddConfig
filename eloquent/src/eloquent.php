<?php

require_once __DIR__ . '/../../vendor/autoload.php';
use Illuminate\Database\Capsule\Manager as DB;

$db = new DB();
print("eloquent est installé : \n");

$config = parse_ini_file(__DIR__."./../../config/db.config.ini");
if($config) $db->addConnection($config);

$db->setAsGlobal();
$db->bootEloquent();

print "connecté à la base de données\n";

$items = \autoload\model\Item::all();
$cartes = \autoload\model\Carte::all();

$listeNomArian =\autoload\model\Carte::where('nom_proprietaire', 'like', 'Ariane%')->OrderBy('nom_proprietaire')->get();
$listeTrie = \autoload\model\Carte::orderBy('nom_proprietaire', 'desc')->get();

// \autoload\model\Carte::insert(['password'=>'aDQZFdfgdfgh','nom_proprietaire'=>'Crémon Damien','mail_proprietaire'=>'damien.cremon@gmail.com','created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s'),'cumul'=>1234]);

/*foreach($listeNomArian as $carte)
{
    print 'nom: '.$carte->nom_proprietaire;
    print ' mail: '.$carte->mail_proprietaire;
    print ' argent cumulé: '.$carte->cumul."\n";
}*/

/*$CarteNumero = \autoload\model\Carte::find(7342);
if($CarteNumero == null)
{
    print "carte non trouvée\n";
}
else
{
    print 'nom: '.$CarteNumero->nom_proprietaire;
    print ' mail: '.$CarteNumero->mail_proprietaire;
    print ' argent cumulé: '.$CarteNumero->cumul."\n";
}
*/



/*foreach($listeTrie as $carte)
{
    print 'nom: '.$carte->nom_proprietaire;
    print ' mail: '.$carte->mail_proprietaire;
    print ' argent cumulé: '.$carte->cumul."\n";
}
*/


/*foreach ($cartes as $carte)
    {
        print'nom: '.$carte->nom_proprietaire.'  mail: '.$carte->mail_proprietaire.' argent cumulés: '.$carte->cumul."\n";
        
    }

$carte1 = \autoload\model\Carte::orderByDescName();*/


/*$CarteNumero = \autoload\model\Carte::find(42);
if($CarteNumero == null)
{
    print "carte non trouvée\n";
}
else
{
    print 'nom: '.$CarteNumero->nom_proprietaire;
    print ' mail: '.$CarteNumero->mail_proprietaire;
    print ' argent cumulé: '.$CarteNumero->cumul."\n";
}

$commandes = $carteNumero->commande()->get();
*/

/*$tests = \autoload\model\Carte::where('id', '=', 42)->with('commande')->get();


foreach($tests as $test)
{
    print 'nom: '.$test->nom_proprietaire;
    print ' mail: '.$test->mail_proprietaire;
    print ' argent cumulé: '.$test->cumul."\n";
    foreach($test->commande as $commande)
    {
        print 'id: '.$commande->id;
        print ' nom client: '.$commande->nom_client;
        print ' date livraison: '.$commande->date_livraison;
        print ' prix: '.$commande->montant."\n";
    }
}*/

/*$tests2 = \autoload\model\Carte::where('cumul', '>', 1000)->orderBy('id')->with('commande')->get();
foreach($tests2 as $test)
{
    print 'id carte: ' .$test->id;
    print ' nom: '.$test->nom_proprietaire;
    print ' mail: '.$test->mail_proprietaire;
    print ' argent cumulé: '.$test->cumul."\n";
    foreach($test->commande as $commande)
    {
        print 'id: '.$commande->id;
        print ' nom client: '.$commande->nom_client;
        print ' date livraison: '.$commande->date_livraison;
        print ' prix: '.$commande->montant."\n";
    }
}*/

/*$tests3 = \autoload\model\Commande::where('carte_id', '!=', "")->with('carte')->get();
$i =0;
foreach($tests3 as $test)
{
    print 'id commande: '.$test->id;
    print ' nom client: '.$test->nom_client;
    print ' date livraison: '.$test->date_livraison."\n";
    foreach($test->carte as $carte)
    {
        print $test->carte."\n";
        //print 'nom: '.$carte->nom_proprietaire;
        //print ' mail: '.$carte->mail_proprietaire;
        //print ' argent cumulé: '.$carte->cumul."\n";
    }
    $i=$i+1;
}
print $i;*/

//  \autoload\model\Commande::insert(['id'=>'test3-test3-test3-test3','created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s'),'date_livraison'=>date('Y-m-d H:i:s'),'montant'=>500,'etat'=>0,'nom_client'=>'Kory Goyette','carte_id'=>10]);
//  \autoload\model\Commande::where('id','0049915b-9c68-41f7-8414-acd707a30842')->update(['carte_id'=>11]);

$test3 = \autoload\model\Commande::where('id', '=', "000b2a0b-d055-4499-9c1b-84441a254a36","and","commande.id"," =", "item_commande.commande_id ","and","item_commande.item_id","=","item.id")->get();

//$test3 = \autoload\model\Commande::where('id', '=', "000b2a0b-d055-4499-9c1b-84441a254a36")->with('item')->get();
foreach($test3 as $test)
{
   /* print 'id commande: '.$test->id;
    print ' nom client: '.$test->nom_client;
    print ' date livraison: '.$test->date_livraison."\n";
    foreach($test->itemCommande as $itemCommande)
    {
        print ' quantité: '.$itemCommande->quantite."\n";
        foreach($itemCommande->item as $item)
        {
            print 'libelle item: '.$item->libelle;
            print ' description: '.$item->description;
            print ' tarif: '.$item->tarif."\n";
        }
    }*/
    print $test;
}