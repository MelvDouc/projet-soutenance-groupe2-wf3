<?php

namespace App\DataFixtures;


use Faker\Factory;
use App\Entity\Produits;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class AppFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $produits = [ 
            1 => [
                'nom' => 'Ballon de football F100 taille 5 jaune',
                'description' => 'Nous avons conçu et développé ce ballon pour les jeunes footballeurs qui débutent le football en club ou qui jouent de manière occasionnelle.',
                'img' => '1614346646.webp',
                'prix' => 5,
                'categorie' => 1,
                'sous_categorie' => 1,
            ],
            2 => [
                'nom' => 'Ballon de football Hybride F500 taille 4 blanc',
                'description' => 'Pour ce ballon de football F500 hybride, nos équipes de conception ont choisi un revêtement intérieur en mousse pour plus de confort, de plus ses coutures invisibles apportent une grande résistance.',
                'img' => '1614346735.webp',
                'prix' => 10,
                'categorie' => 1,
                'sous_categorie' => 1,
            ],
            3 => [
                'nom' => 'Ballon Adidas UNIFORIA Top Capitano EURO 2020',
                'description' => 'Conçu pour les matchs improvisés, ce modèle s&#039;inspire de celui utilisé en phase de poule de l&#039;EURO 2020.  Ballon cousu à la machine pour des finitions de qualité.',
                'img' => '1614351695.webp',
                'prix' => 25,
                'categorie' => 1,
                'sous_categorie' => 1,
            ],
            4 => [
                'nom' => 'Maillot Los Angeles FC Domicile 2019/20',
                'description' => 'Maillot adidas Los Angeles FC Domicile 2019/20, coloris Noir. Confectionnée en polyester recyclé pour préserver les ressources de la planète et réduire les émissions carbone. Tissu respirant. Confort maximisé.',
                'img' => '1614346912.jpg',
                'prix' => 44.9,
                'categorie' => 1,
                'sous_categorie' => 2,
            ],
            5 => [
                'nom' => 'Maillot FFF Domicile Nike 2018 Junior 1 etoile',
                'description' => 'Supportez les Bleus lors de la Coupe du Monde 2018 avec le Maillot France FFF 2018 1 etoile Junior signé Nike ! Ce modèle est spécialement conçu pour les jeunes supporters.',
                'img' => '1614347043.jpg',
                'prix' => 14.9,
                'categorie' => 1,
                'sous_categorie' => 2,
            ],
            6 => [
                'nom' => 'Maillot France Extérieur 2019',
                'description' => 'Maillot France Extérieur 2019',
                'img' => '1614347119.jpg',
                'prix' => 35,
                'categorie' => 1,
                'sous_categorie' => 2,
            ],
            7 => [
                'nom' => 'Chaussure football Copa Mundial FG ADIDAS adulte',
                'description' => 'le footballeur expert qui joue sur terrain en herbe ou synthétique, qui recherche une chaussure en cuir résistante et souple.',
                'img' => '1614347251.webp',
                'prix' => 90,
                'categorie' => 1,
                'sous_categorie' => 3,
            ],
            8 => [
                'nom' => 'Chaussure de football enfant terrain sec AGILITY 500 MG basse grise et marine',
                'description' => 'Nos équipes ont créé la chaussure de football Agility 500 MG pour le jeune footballeur confirmé, en match ou en entraînement 2 à 3 fois par semaine',
                'img' => '1614347373.webp',
                'prix' => 20,
                'categorie' => 1,
                'sous_categorie' => 3,
            ],
            9 => [
                'nom' => 'Chaussure de football adulte terrains secs Agility 100 FG adulte noire',
                'description' => 'Notre équipe de mordus du football a conçu cette chaussure AGILITY 100, souple, pour le footballeur qui joue sur terrains secs, 1 fois par semaine.',
                'img' => '1614347436.webp',
                'prix' => 15,
                'categorie' => 1,
                'sous_categorie' => 3,
            ],
            10 => [
                'nom' => 'SAC DE SPORT Football NIKE TEAM DUFFLE',
                'description' => 'Le sac de sport parfait pour les sessions de sport en extérieur. Conçu avec l’imperméabilité et le confort de rangement en tête, le NIKE TEAM DUFFLE est le choix évident pour transporter votre équipement de sport en extérieur.',
                'img' => '1614351242.webp',
                'prix' => 16.79,
                'categorie' => 1,
                'sous_categorie' => 4,
            ],
            11 => [
                'nom' => 'HOMCOM But de football - cage de foot - but d&#039;entrainement dim. 301L x 126l x 200H cm - châssis métal époxy filet PE - piquets inclus - blanc',
                'description' => 'Ce but de football sera idéal pour pratiquer votre sport favori à domicile, à l&#039;entrainement dans un club, dans votre jardin, etc... Très résistant, rapide à monter',
                'img' => '1614351447.webp',
                'prix' => 62.9,
                'categorie' => 1,
                'sous_categorie' => 4,
            ],
            12 => [
                'nom' => 'POMPE Football ATHLITECH POMPE GO',
                'description' => 'Pompe Go Sport s&#039;adapte à tous types de ballon pour les garder gonflés.',
                'img' => '1614351412.webp',
                'prix' => 5.99,
                'categorie' => 1,
                'sous_categorie' => 4,
            ],
            13 => [
                'nom' => 'Ballon de basketball TF 1000 EUROLEAGUE SPALDING taille 7 pour garçon et adulte',
                'description' => 'Ballon de basket SPALDING TF1000 EUROLEAGUE de taille 7 officielle homologué FIBA à partir de 13 ans pour de la compétition en salle.',
                'img' => '1614351570.webp',
                'prix' => 69,
                'categorie' => 2,
                'sous_categorie' => 1,
            ],
            14 => [
                'nom' => 'Ballon de basket enfant Wizzy basketball bleu et blue marine taille 5',
                'description' => 'Ballon de basket de taille 5 adapté pour jouer au basket en extérieur et ou en intérieur pour enfants de 7 à 10 ans.',
                'img' => '1614351815.webp',
                'prix' => 8,
                'categorie' => 2,
                'sous_categorie' => 1,
            ],
            15 => [
                'nom' => 'Ballon de Basketball GG6X taille 6 MOLTEN',
                'description' => 'Conçu pour la compétition de Basketball en salle.',
                'img' => '1614351798.webp',
                'prix' => 55,
                'categorie' => 2,
                'sous_categorie' => 1,
            ],
            16 => [
                'nom' => 'MAILLOT homme NIKE HOUSTON JSY ICON HARDEN 2020-2021',
                'description' => 'Le maillot Icon Edition représente la richesse de l&#039;héritage et de l&#039;identité emblématique de la franchise, qui s&#039;exprime à travers les couleurs primaires audacieuses de l&#039;équipe.',
                'img' => '1614352315.webp',
                'prix' => 53.99,
                'categorie' => 2,
                'sous_categorie' => 2,
            ],
            17 => [
                'nom' => 'MAILLOT NIKE LAKERS JSY ICON JAMES 2020-2021',
                'description' => 'Le maillot d&#039;équipe Icon Edition représente la richesse de l&#039;héritage et de l&#039;identité emblématique de la franchise, qui s&#039;exprime à travers les couleurs primaires audacieuses de l&#039;équipe.',
                'img' => '1614352463.webp',
                'prix' => 89.99,
                'categorie' => 2,
                'sous_categorie' => 2,
            ],
            18 => [
                'nom' => 'MAILLOT NIKE LAKERS MAILLOT JAMES ALT1',
                'description' => 'Le maillot Statement Edition ne passe pas inaperçu avec ses couleurs et détails contrastés audacieux. Il symbolise la force collective, le travail d&#039;équipe et l&#039;esprit de compétition.',
                'img' => '1614352642.webp',
                'prix' => 89.99,
                'categorie' => 2,
                'sous_categorie' => 2,
            ],
            19 => [
                'nom' => 'NIKE JORDAN MAX AURA 2 (GS)',
                'description' => 'JORDAN MAX AURA 2 (GS), BLANC, 35.5',
                'img' => '1614352741.webp',
                'prix' => 89.99,
                'categorie' => 2,
                'sous_categorie' => 3,
            ],
            20 => [
                'nom' => 'Basket ball NIKE Chaussures Jordan Max Aura',
                'description' => 'Le modèle Jordan Max Aura est une chaussure de Basketball de chez Nike. Cette chaussure vous procurera une grande stabilité et des changements rapides de direction.',
                'img' => '1614352834.webp',
                'prix' => 115.99,
                'categorie' => 2,
                'sous_categorie' => 3,
            ],
            21 => [
                'nom' => 'Basketball NIKE Nike Wmns Air Force 1 Mid 07 LE',
                'description' => 'Nike wmns air force 1 mid 07 le',
                'img' => '1614352967.webp',
                'prix' => 172,
                'categorie' => 2,
                'sous_categorie' => 3,
            ],
            22 => [
                'nom' => 'Sacoche Jordan X Paris Saint Germain Festival',
                'description' => 'Sacoche Jordan x Paris Saint Germain Festival',
                'img' => '1614353121.jpg',
                'prix' => 34.9,
                'categorie' => 2,
                'sous_categorie' => 4,
            ],
            23 => [
                'nom' => 'HOMCOM Panier de Basket-Ball sur pied avec poteau panneau, base de lestage sur roulettes hauteur réglable panier 1,83 - 3,05 m noir blanc',
                'description' => 'Ce panneau de basketball sera idéal pour tous les amateurs et inconditionnels du basket. À la fois grand avec hauteur réglable et robuste, vous pourrez jouer ou vous entrainer seul ou avec vos amis !',
                'img' => '1614353205.webp',
                'prix' => 112.9,
                'categorie' => 2,
                'sous_categorie' => 4,
            ],
            24 => [
                'nom' => 'Basket ball VIDAXL vidaXL Cerceau Panier Basket Ball avec Filet Orange',
                'description' => 'Ce cerceau de basket ball, avec filet est idéal pour les fans pour s&#039;amuser au basket dans les espaces ou salles ouvertes ou dans le parc.',
                'img' => '1614353270.webp',
                'prix' => 32.99,
                'categorie' => 2,
                'sous_categorie' => 4,
            ],
            25 => [
                'nom' => 'BALLON MOLTEN BALLON V5C 1400',
                'description' => 'Construction= Laminated Material=EVA taille MIN 650 mm - MAX 670 mm poids = MIN 170 g - MAX 190 g',
                'img' => '1614354154.webp',
                'prix' => 14.99,
                'categorie' => 3,
                'sous_categorie' => 1,
            ],
            26 => [
                'nom' => 'MIKASA MIKASA V330W',
                'description' => 'MIKASA V330W',
                'img' => '1614354228.webp',
                'prix' => 39.99,
                'categorie' => 3,
                'sous_categorie' => 1,
            ],
            27 => [
                'nom' => 'Voleyball homme HUMMEL Maillot Hummel Entrainement Functional',
                'description' => 'Le hmllead functional polo est parfait comme haut d&#039;entraînement ou pour un look casual. Fabriqué en mesh respirant, ce polo hummel® intègre la gestion de l&#039;humidité beec',
                'img' => '1614357849.webp',
                'prix' => 43.99,
                'categorie' => 3,
                'sous_categorie' => 2,
            ],
            28 => [
                'nom' => 'Volley ball ERREA Maillot domicile Equipe de France 2020',
                'description' => 'Maillot domicile equipe de france 2020 pour tous les fans de volley, le maillot bleu équipe de france de volley 2020 de la marque équipementier errea est là !',
                'img' => '1614356426.webp',
                'prix' => 48.99,
                'categorie' => 3,
                'sous_categorie' => 2,
            ],
            29 => [
                'nom' => 'homme SALMING Salming Volleyball chaussures NinetyOne blanc',
                'description' => 'Salming Handball masculin gardien chaussures NinetyOne blanc',
                'img' => '1614357789.webp',
                'prix' => 41.99,
                'categorie' => 3,
                'sous_categorie' => 3,
            ],
            30 => [
                'nom' => 'Volley ball homme ASICS Chaussures Asics Sky Elite Ff Tokyo',
                'description' => 'Chaussures asics sky elite ff tokyo',
                'img' => '1614356742.webp',
                'prix' => 122,
                'categorie' => 3,
                'sous_categorie' => 3,
            ],
            31 => [
                'nom' => 'Volley ball NIKE Nike Air Zoom Hyperace 2',
                'description' => 'Nike air zoom hyperace 2',
                'img' => '1614356803.webp',
                'prix' => 110,
                'categorie' => 3,
                'sous_categorie' => 3,
            ],
            32 => [
                'nom' => 'Volley ball NIKE Genouillere Nike Streak Noir',
                'description' => 'Genouillere nike streak noir',
                'img' => '1614356898.webp',
                'prix' => 20.49,
                'categorie' => 3,
                'sous_categorie' => 4,
            ],
            33 => [
                'nom' => 'Volley ball THUASNE Genouillère de protection Thuasne',
                'description' => 'Genouillère sportive de protection du genou adaptée pour la pratique des sports en salle. Couleur : noir composition : 67% polyester, 21% elastodeine, 12% néoprène lavage à la main',
                'img' => '1614357041.webp',
                'prix' => 14.89,
                'categorie' => 3,
                'sous_categorie' => 4,
            ],
            34 => [
                'nom' => 'Volleyball PUMA Chaussettes Puma Match Crew',
                'description' => 'Ces chaussettes 3/4 sont adaptées aux entraînements comme aux compétitions. Mix de matières légères et résistantes. Renfort à la cheville : plus de soutien.',
                'img' => '1614357204.webp',
                'prix' => 4.63,
                'categorie' => 3,
                'sous_categorie' => 4,
            ],
            35 => [
                'nom' => 'Handball SELECT SELECT REPLICA CHAPIONS LEAGUE MEN 2020-21 Ballon de Handball',
                'description' => '• Ballon entrainement/match. • Le modèle Réplica du ballon officiel de la Ligue des Champions EHF Homme fabriqué à partir d’un cuir synthétique ultra résistant enveloppant une vessie Zéro Pli assurant une rondeur optimale.',
                'img' => '1614357331.webp',
                'prix' => 20.69,
                'categorie' => 4,
                'sous_categorie' => 1,
            ],
            36 => [
                'nom' => 'Handball SELECT SELECT REPLICA CHAPIONS LEAGUE MEN 2020-21 Ballon de Handball',
                'description' => 'Ballon match et entraînement pour enfants • Fabriqué à partir d’un nouveau cuir synthétique léger et souple d’1 mm d’épaisseur pour un meilleur grip • Pour plus de douceur, sous chaque panneau se trouve une couche de mousse.',
                'img' => '1614357402.webp',
                'prix' => 17.45,
                'categorie' => 4,
                'sous_categorie' => 1,
            ],
            37 => [
                'nom' => 'Handball TREMBLAY CT Ballon Tremblay cellulaire hand',
                'description' => 'Ballon tremblay cellulaire hand ballon en matière cellulaire qui permet d&#039;allier une bonne prise en main, une excellente qualité du rebond et une robustesse garantie.',
                'img' => '1614357470.webp',
                'prix' => 9.99,
                'categorie' => 4,
                'sous_categorie' => 1,
            ],
            38 => [
                'nom' => 'Handball JOMA Maillot domicile Croatie Handball 2020/21',
                'description' => 'Maillot domicile croatie handball 2020/21',
                'img' => '1614357632.webp',
                'prix' => 59.99,
                'categorie' => 4,
                'sous_categorie' => 2,
            ],
            39 => [
                'nom' => 'MAILLOT ADIDAS FFHB EXT 2021',
                'description' => 'Soutenez l&#039;équipe de France dans ce maillot de handball adidas. Conçu pour les fans, il utilise le même tissu robuste et absorbant l&#039;humidité que les maillots que portent les joueurs sur le court.',
                'img' => '1614357718.webp',
                'prix' => 79.99,
                'categorie' => 4,
                'sous_categorie' => 2,
            ],
            40 => [
                'nom' => 'Handball ADIDAS PERFORMANCE Ligra 6 j indoor',
                'description' => 'Extérieur : Synthétique / Textile. Doublure / semelle de propreté : Textile. Semelle extérieure : Synthétique.',
                'img' => '1614357968.webp',
                'prix' => 40.99,
                'categorie' => 4,
                'sous_categorie' => 3,
            ],
            41 => [
                'nom' => 'Handball homme MIZUNO Chaussures Mizuno Wave Mirage 3',
                'description' => 'Chaussures de sports en salle Mizuno Wave Mirage 3 pour homme et femme. Cette chaussure ultra-légère est le compagnon idéal pour répondre aux besoins en vitesse des ailiers.',
                'img' => '1614358049.webp',
                'prix' => 142.98,
                'categorie' => 4,
                'sous_categorie' => 3,
            ],
            42 => [
                'nom' => 'Handball SPORT IS GOOD Chaussettes personnalisées Leognan HB',
                'description' => 'Chaussettes personnalisées Leognan HB',
                'img' => '1614358140.webp',
                'prix' => 11.29,
                'categorie' => 4,
                'sous_categorie' => 4,
            ],
            43 => [
                'nom' => 'Volley ball TREMBLAY CT Filet volleyball 3 mm acier Tremblay',
                'description' => 'Filet volleyball 3 mm acier tremblay maille : 100 mm sans noeuds câble acier 4 mm',
                'img' => '1614358256.webp',
                'prix' => 69.99,
                'categorie' => 3,
                'sous_categorie' => 4,
            ],
            44 => [
                'nom' => 'Handball SHOCK DOCTOR Protège-dents enfant - Gel Max - Rouge - Shock Doctor',
                'description' => 'protège-dents pour les enfants de moins de 10 ans. protège-dents triple épaisseur',
                'img' => '1614358320.webp',
                'prix' => 8.97,
                'categorie' => 4,
                'sous_categorie' => 4,
            ],
        ];
        foreach($produits as $key => $value) {
            $produit = new Produits();
            $produit->setNom($value['nom']);
            $produit->setDescription($value['description']);
            $produit->setImg($value['img']);
            $produit->setPrix($value['prix']);

            $categorie = $this->getReference('categorie_' . $value['categorie']);
            $produit->setIdCategories($categorie);

            $sous_categorie = $this->getReference('souscategorie_' . $value['sous_categorie']);
            $produit->setIdSousCategories($sous_categorie);

            $manager->persist($produit);

            $this->addReference('produit_' . $key, $produit);
        }

        $manager->flush();
    }

    public function getDependencies() {
        return [
            CategoriesFixtures::class,
            SousCategoriesFixtures::class
        ];
    }
}
