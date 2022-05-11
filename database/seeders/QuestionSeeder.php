<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('questions')->insert([
            [
                'type' => "B",
                'title' => 'Votre adresse mail',
                'propositions' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'type' => 'B',
                'title' => 'Votre âge',
                'propositions' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'type' => 'A',
                'title' => 'Votre sexe',
                'propositions' => json_encode(['Homme', 'Femme', 'Préfère de pas répondre']),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'type' => 'C',
                'title' => 'Nombre de personne dans votre foyer (adulte & enfants)',
                'propositions' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'type' => 'B',
                'title' => 'Votre profession',
                'propositions' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'type' => 'A',
                'title' => 'Quel marque de casque VR utilisez vous ?',
                'propositions' => json_encode(['Occulus Rift/s','HTC Vive','Windows Mixed Reality','PSVR',]),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'type' => 'A',
                'title' => 'Sur quel magasin d’application achetez vous des contenus VR ?',
                'propositions' => json_encode(['SteamVR','Occulus store','Viveport','Playstation VR','Google Play','Windows store',]),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'type' => 'A',
                'title' => 'Quel casque envisagez vous d’acheter dans un futur proche ?',
                'propositions' => json_encode(['Occulus Quest','Occulus Go','HTC Vive Pro','Autre','Aucun',]),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'type' => 'C',
                'title' => 'Au sein de votre foyer, combien de personne utilisent votre casque VR pour regarder Bigscreen ?',
                'propositions' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'type' => 'A',
                'title' => 'Vous utilisez principalement Bigscreen pour :',
                'propositions' => json_encode(['regarder des émissions TV en direct','regarder des films','jouer en solo','jouer en team',]),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'type' => 'C',
                'title' => 'Combien donnez vous de point pour la qualité de l’image sur Bigscreen ?',
                'propositions' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'type' => 'C',
                'title' => 'Combien donnez vous de point pour le confort d’utilisation de l’interface Bigscreen ?',
                'propositions' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'type' => 'C',
                'title' => 'Combien donnez vous de point pour la connection réseau de Bigscreen ?',
                'propositions' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'type' => 'C',
                'title' => 'Combien donnez vous de point pour la qualité des graphismes 3D dans Bigscreen ?',
                'propositions' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'type' => 'C',
                'title' => 'Combien donnez vous de point pour la qualité audio dans Bigscreen ?',
                'propositions' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'type' => 'A',
                'title' => 'Aimeriez vous avoir des notifications plus précises au cours de vos sessions Bigscreen ?',
                'propositions' => json_encode(['Oui', 'Non',]),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'type' => 'A',
                'title' => 'Aimeriez vous pouvoir inviter un ami à rejoindre votre session via son smartphone ?',
                'propositions' => json_encode(['Oui', 'Non',]),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'type' => 'C',
                'title' => 'Aimeriez vous pouvoir enregistrer des émissions TV pour pouvoir les regarder ultérieurement ?',
                'propositions' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'type' => 'C',
                'title' => 'Aimeriez vous jouer à des jeux exclusifs sur votre Bigscreen ?',
                'propositions' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'type' => 'B',
                'title' => 'Quelle nouvelle fonctionnalité de vos rêve devrait exister sur Bigscreen ?',
                'propositions' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}
