<?php

namespace Database\Seeders;

use App\Models\Direction;
use Illuminate\Database\Seeder;
use Database\Seeders\DirectionSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DirectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Direction::create([
            "nom_direction" => "Direction du Patrimoine, des Achats et Logistique",
            "sigle" => "DPAL"
        ]);

        Direction::create([
            "nom_direction" => "Direction Administrative et Financière",
            "sigle" => "DAF"
        ]);

        Direction::create([
            "nom_direction" => "Direction Technique",
            "sigle" => "DT"
        ]);

        Direction::create([
            "nom_direction" => "Secrétariat Général et Administratif",
            "sigle" => "SGA"
        ]);

        Direction::create([
            "nom_direction" => "Direction de l'Ethique et de la Conformité",
            "sigle" => "DEC"
        ]);

        Direction::create([
            "nom_direction" => "Direction Commerciale et Clientèle",
            "sigle" => "DCC"
        ]);

        Direction::create([
            "nom_direction" => "Direction Générale",
            "sigle" => "DG"
        ]);

        Direction::create([
            "nom_direction" => "Direction des Ressources Humaines",
            "sigle" => "DRH"
        ]);

        Direction::create([
            "nom_direction" => "Direction de l'Audit Interne",
            "sigle" => "DAI"
        ]);

        Direction::create([
            "nom_direction" => "Direction Etudes, Planification et Projets",
            "sigle" => "DEPP"
        ]);

        Direction::create([
            "nom_direction" => "Direction de la Gouvernance et de la Gestion des Risques",
            "sigle" => "DGGR"
        ]);

        Direction::create([
            "nom_direction" => "Cellule de l'Environnement, du Social et de la Sécurité",
            "sigle" => "CESS"
        ]);
        
        Direction::create([
            "nom_direction" => "Projet Déffisol",
            "sigle" => "PROJET DEFFISOL"
        ]);

        Direction::create([
            "nom_direction" => "Cellule Communication et Relations Publiques",
            "sigle" => "CCRP"
        ]);

        Direction::create([
            "nom_direction" => "Personne Responsable des Marchés Publics",
            "sigle" => "PRMP"
        ]);

        Direction::create([
            "nom_direction" =>"Cellule de Contrôle des Marchés Publics",
            "sigle" => "CCMP"
        ]);
    }
}
