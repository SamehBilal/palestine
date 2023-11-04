<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('brands')->delete();
        $brands = [
            [
                'name'              => 'Mcdonald\'s',
                'logo'              => 'm.png',
                'first_letter'      => 'm',
                'video'             => 'palestine.gif',
                'alternative_id'    => 2,
                'made_by'           => 231,
            ],
            [
                'name'              => 'willy\'s kitchen',
                'logo'              => 'w.png',
                'first_letter'      => 'w',
                'video'             => 'Mcdonalds.gif',
                'alternative_id'    => 2,
                'made_by'           => 64,
            ],
            [
                'name'              => 'Pepsi',
                'logo'              => 'pepsi.png',
                'first_letter'      => 'p',
                'video'             => 'pepsi.gif',
                'alternative_id'    => 3,
                'made_by'           => 231,
            ],
            [
                'name'              => 'Lay\'s',
                'logo'              => 'lays.png',
                'first_letter'      => 'l',
                'video'             => 'lays.gif',
                'alternative_id'    => 4,
                'made_by'           => 231,
            ],
            [
                'name'              => 'Mirinda',
                'logo'              => 'mirinda.png',
                'first_letter'      => 'm',
                'video'             => 'mirinda.gif',
                'alternative_id'    => 5,
                'made_by'           => 231,
            ],
            [
                'name'              => 'Tropicana',
                'logo'              => 'tropicana.png',
                'first_letter'      => 't',
                'video'             => 'tropicana.gif',
                'alternative_id'    => 6,
                'made_by'           => 231,
            ],
            [
                'name'              => '7UP',
                'logo'              => '7up.png',
                'first_letter'      => '7',
                'video'             => '7up.gif',
                'alternative_id'    => 7,
                'made_by'           => 231,
            ],
            [
                'name'              => 'Quaker Oats',
                'logo'              => 'quaker.png',
                'first_letter'      => 'q',
                'video'             => 'quaker.gif',
                'alternative_id'    => 8,
                'made_by'           => 231,
            ],
            [
                'name'              => 'Gatorade',
                'logo'              => 'gatorade.png',
                'first_letter'      => 'g',
                'video'             => 'gatorade.gif',
                'alternative_id'    => 9,
                'made_by'           => 231,
            ],
            [
                'name'              => 'Cheetos',
                'logo'              => 'cheetos.png',
                'first_letter'      => 'c',
                'video'             => 'cheetos.gif',
                'alternative_id'    => 10,
                'made_by'           => 231,
            ],
            [
                'name'              => 'Doritos',
                'logo'              => 'doritos.png',
                'first_letter'      => 'd',
                'video'             => 'doritos.gif',
                'alternative_id'    => 11,
                'made_by'           => 231,
            ],
            [
                'name'              => 'Ruffles',
                'logo'              => 'ruffles.png',
                'first_letter'      => 'r',
                'video'             => 'ruffles.gif', // Replace with actual video file name
                'alternative_id'    => 12, // Replace with actual alternative ID
                'made_by'           => 231,
            ],
            [
                'name'              => 'Mountain Dew',
                'logo'              => 'mountaindew.png',
                'first_letter'      => 'm',
                'video'             => 'mountaindew.gif', // Replace with actual video file name
                'alternative_id'    => 13, // Replace with actual alternative ID
                'made_by'           => 231,
            ],
            [
                'name'              => 'Aquafina',
                'logo'              => 'aquafina.png',
                'first_letter'      => 'a',
                'video'             => 'aquafina.gif', // Replace with actual video file name
                'alternative_id'    => 14, // Replace with actual alternative ID
                'made_by'           => 231,
            ],
            [
                'name'              => 'Pepsi Max',
                'logo'              => 'pepsimax.png',
                'first_letter'      => 'p',
                'video'             => 'pepsimax.gif', // Replace with actual video file name
                'alternative_id'    => 15, // Replace with actual alternative ID
                'made_by'           => 231,
            ],
            [
                'name'              => 'Diet Pepsi',
                'logo'              => 'dietpepsi.png',
                'first_letter'      => 'd',
                'video'             => 'dietpepsi.gif', // Replace with actual video file name
                'alternative_id'    => 16, // Replace with actual alternative ID
                'made_by'           => 231,
            ],
            [
                'name'              => 'Rold Gold',
                'logo'              => 'roldgold.png',
                'first_letter'      => 'r',
                'video'             => 'roldgold.gif', // Replace with actual video file name
                'alternative_id'    => 17, // Replace with actual alternative ID
                'made_by'           => 231,
            ],
            [
                'name'              => 'SunChips',
                'logo'              => 'sunchips.png',
                'first_letter'      => 's',
                'video'             => 'sunchips.gif', // Replace with actual video file name
                'alternative_id'    => 18, // Replace with actual alternative ID
                'made_by'           => 231,
            ],
            [
                'name'              => 'PepsiCo Snacks',
                'logo'              => 'pepsicosnacks.png',
                'first_letter'      => 'p',
                'video'             => 'pepsicosnacks.gif', // Replace with actual video file name
                'alternative_id'    => 19, // Replace with actual alternative ID
                'made_by'           => 231,
            ],
            [
                'name'              => 'PepsiCo Beverages',
                'logo'              => 'pepsicobeverages.png',
                'first_letter'      => 'p',
                'video'             => 'pepsicobeverages.gif', // Replace with actual video file name
                'alternative_id'    => 20, // Replace with actual alternative ID
                'made_by'           => 231,
            ],
            [
                'name'              => 'PepsiCo Foods',
                'logo'              => 'pepsicofoods.png',
                'first_letter'      => 'p',
                'video'             => 'pepsicofoods.gif', // Replace with actual video file name
                'alternative_id'    => 21, // Replace with actual alternative ID
                'made_by'           => 231, // Replace with actual "made_by" value
            ],
            [
                'name'              => 'Dole',
                'logo'              => 'dole.png',
                'first_letter'      => 'd',
                'video'             => 'dole.gif', // Replace with actual video file name
                'alternative_id'    => 22, // Replace with actual alternative ID
                'made_by'           => 231, // Replace with actual "made_by" value
            ],
            [
                'name'              => 'Fritos',
                'logo'              => 'fritos.png',
                'first_letter'      => 'f',
                'video'             => 'fritos.gif', // Replace with actual video file name
                'alternative_id'    => 23, // Replace with actual alternative ID
                'made_by'           => 231, // Replace with actual "made_by" value
            ],
            [
                'name'              => 'Rice-A-Roni',
                'logo'              => 'ricearoni.png',
                'first_letter'      => 'r',
                'video'             => 'ricearoni.gif', // Replace with actual video file name
                'alternative_id'    => 24, // Replace with actual alternative ID
                'made_by'           => 231, // Replace with actual "made_by" value
            ],
            [
                'name'              => 'Naked Juice',
                'logo'              => 'nakedjuice.png',
                'first_letter'      => 'n',
                'video'             => 'nakedjuice.gif', // Replace with actual video file name
                'alternative_id'    => 25, // Replace with actual alternative ID
                'made_by'           => 231, // Replace with actual "made_by" value
            ],
            [
                'name'              => 'Starbucks (PepsiCo)',
                'logo'              => 'starbucks.png',
                'first_letter'      => 's',
                'video'             => 'starbucks.gif', // Replace with actual video file name
                'alternative_id'    => 26, // Replace with actual alternative ID
                'made_by'           => 231, // Replace with actual "made_by" value
            ],
            [
                'name'              => 'Lipton (PepsiCo)',
                'logo'              => 'lipton.png',
                'first_letter'      => 'l',
                'video'             => 'lipton.gif', // Replace with actual video file name
                'alternative_id'    => 27, // Replace with actual alternative ID
                'made_by'           => 231, // Replace with actual "made_by" value
            ],
            [
                'name'              => 'Aquafina Plus',
                'logo'              => 'aquafinaplus.png',
                'first_letter'      => 'a',
                'video'             => 'aquafinaplus.gif', // Replace with actual video file name
                'alternative_id'    => 28, // Replace with actual alternative ID
                'made_by'           => 231, // Replace with actual "made_by" value
            ],
            [
                'name'              => 'Gatorade Zero',
                'logo'              => 'gatoradezero.png',
                'first_letter'      => 'g',
                'video'             => 'gatoradezero.gif', // Replace with actual video file name
                'alternative_id'    => 29, // Replace with actual alternative ID
                'made_by'           => 231, // Replace with actual "made_by" value
            ],
            [
                'name'              => 'Lay\'s Stax',
                'logo'              => 'laysstax.png',
                'first_letter'      => 'l',
                'video'             => 'laysstax.gif', // Replace with actual video file name
                'alternative_id'    => 30, // Replace with actual alternative ID
                'made_by'           => 231, // Replace with actual "made_by" value
            ],
            [
                'name'              => 'Diet Mountain Dew',
                'logo'              => 'dietmountaindew.png',
                'first_letter'      => 'd',
                'video'             => 'dietmountaindew.gif', // Replace with actual video file name
                'alternative_id'    => 31, // Replace with actual alternative ID
                'made_by'           => 231, // Replace with actual "made_by" value
            ],
            [
                'name'              => 'Tostitos',
                'logo'              => 'tostitos.png',
                'first_letter'      => 't',
                'video'             => 'tostitos.gif', // Replace with actual video file name
                'alternative_id'    => 32, // Replace with actual alternative ID
                'made_by'           => 231, // Replace with actual "made_by" value
            ],
            [
                'name'              => 'Rush',
                'logo'              => 'rush.png',
                'first_letter'      => 'r',
                'video'             => 'rush.gif', // Replace with actual video file name
                'alternative_id'    => 33, // Replace with actual alternative ID
                'made_by'           => 231, // Replace with actual "made_by" value
            ],
            [
                'name'              => 'Matador',
                'logo'              => 'matador.png',
                'first_letter'      => 'm',
                'video'             => 'matador.gif', // Replace with actual video file name
                'alternative_id'    => 34, // Replace with actual alternative ID
                'made_by'           => 231, // Replace with actual "made_by" value
            ],
            [
                'name'              => 'Kurkure',
                'logo'              => 'kurkure.png',
                'first_letter'      => 'k',
                'video'             => 'kurkure.gif', // Replace with actual video file name
                'alternative_id'    => 35, // Replace with actual alternative ID
                'made_by'           => 231, // Replace with actual "made_by" value
            ],
            [
                'name'              => 'Tropicana Twister',
                'logo'              => 'tropicanatwister.png',
                'first_letter'      => 't',
                'video'             => 'tropicanatwister.gif', // Replace with actual video file name
                'alternative_id'    => 36, // Replace with actual alternative ID
                'made_by'           => 231, // Replace with actual "made_by" value
            ],
            [
                'name'              => 'Sting',
                'logo'              => 'sting.png',
                'first_letter'      => 's',
                'video'             => 'sting.gif', // Replace with actual video file name
                'alternative_id'    => 37, // Replace with actual alternative ID
                'made_by'           => 231, // Replace with actual "made_by" value
            ],
            [
                'name'              => 'Amp Energy',
                'logo'              => 'ampenergy.png',
                'first_letter'      => 'a',
                'video'             => 'ampenergy.gif', // Replace with actual video file name
                'alternative_id'    => 38, // Replace with actual alternative ID
                'made_by'           => 231, // Replace with actual "made_by" value
            ],
            [
                'name'              => 'Rage',
                'logo'              => 'rage.png',
                'first_letter'      => 'r',
                'video'             => 'rage.gif', // Replace with actual video file name
                'alternative_id'    => 39, // Replace with actual alternative ID
                'made_by'           => 231, // Replace with actual "made_by" value
            ],
            [
                'name'              => 'Dewitos',
                'logo'              => 'dewitos.png',
                'first_letter'      => 'd',
                'video'             => 'dewitos.gif', // Replace with actual video file name
                'alternative_id'    => 40, // Replace with actual alternative ID
                'made_by'           => 231, // Replace with actual "made_by" value
            ],
            [
                'name'              => 'Mug Root Beer',
                'logo'              => 'mugrootbeer.png',
                'first_letter'      => 'm',
                'video'             => 'mugrootbeer.gif', // Replace with actual video file name
                'alternative_id'    => 41, // Replace with actual alternative ID
                'made_by'           => 231, // Replace with actual "made_by" value
            ],
            [
                'name'              => 'Brisk',
                'logo'              => 'brisk.png',
                'first_letter'      => 'b',
                'video'             => 'brisk.gif', // Replace with actual video file name
                'alternative_id'    => 42, // Replace with actual alternative ID
                'made_by'           => 231, // Replace with actual "made_by" value
            ],
            [
                'name'              => 'Tostitos Cantina',
                'logo'              => 'tostitoscantina.png',
                'first_letter'      => 't',
                'video'             => 'tostitoscantina.gif', // Replace with actual video file name
                'alternative_id'    => 43, // Replace with actual alternative ID
                'made_by'           => 231, // Replace with actual "made_by" value
            ],
            [
                'name'              => 'H2oh!',
                'logo'              => 'h2oh.png',
                'first_letter'      => 'h',
                'video'             => 'h2oh.gif', // Replace with actual video file name
                'alternative_id'    => 44, // Replace with actual alternative ID
                'made_by'           => 231, // Replace with actual "made_by" value
            ],
            [
                'name'              => 'Frito-Lay',
                'logo'              => 'fritolay.png',
                'first_letter'      => 'f',
                'video'             => 'fritolay.gif', // Replace with actual video file name
                'alternative_id'    => 45, // Replace with actual alternative ID
                'made_by'           => 231, // Replace with actual "made_by" value
            ],
            [
                'name'              => 'G Games',
                'logo'              => 'ggames.png',
                'first_letter'      => 'g',
                'video'             => 'ggames.gif', // Replace with actual video file name
                'alternative_id'    => 46, // Replace with actual alternative ID
                'made_by'           => 231, // Replace with actual "made_by" value
            ],
            [
                'name'              => 'Smartfood',
                'logo'              => 'smartfood.png',
                'first_letter'      => 's',
                'video'             => 'smartfood.gif', // Replace with actual video file name
                'alternative_id'    => 47, // Replace with actual alternative ID
                'made_by'           => 231, // Replace with actual "made_by" value
            ],
            [
                'name'              => 'Munchies',
                'logo'              => 'munchies.png',
                'first_letter'      => 'm',
                'video'             => 'munchies.gif', // Replace with actual video file name
                'alternative_id'    => 48, // Replace with actual alternative ID
                'made_by'           => 231, // Replace with actual "made_by" value
            ],
            [
                'name'              => 'Game Fuel',
                'logo'              => 'gamefuel.png',
                'first_letter'      => 'g',
                'video'             => 'gamefuel.gif', // Replace with actual video file name
                'alternative_id'    => 49, // Replace with actual alternative ID
                'made_by'           => 231, // Replace with actual "made_by" value
            ],
            [
                'name'              => 'Cracker Jack',
                'logo'              => 'crackerjack.png',
                'first_letter'      => 'c',
                'video'             => 'crackerjack.gif', // Replace with actual video file name
                'alternative_id'    => 50, // Replace with actual alternative ID
                'made_by'           => 231, // Replace with actual "made_by" value
            ],
            [
                'name'              => 'Pure Leaf (PepsiCo)',
                'logo'              => 'pureleaf.png',
                'first_letter'      => 'p',
                'video'             => 'pureleaf.gif', // Replace with actual video file name
                'alternative_id'    => 51, // Replace with actual alternative ID
                'made_by'           => 231, // Replace with actual "made_by" value
            ],
            [
                'name'              => 'Herr\'s',
                'logo'              => 'herrs.png',
                'first_letter'      => 'h',
                'video'             => 'herrs.gif', // Replace with actual video file name
                'alternative_id'    => 52, // Replace with actual alternative ID
                'made_by'           => 231, // Replace with actual "made_by" value
            ],
            [
                'name'              => 'Diet Lipton',
                'logo'              => 'dietlipton.png',
                'first_letter'      => 'd',
                'video'             => 'dietlipton.gif', // Replace with actual video file name
                'alternative_id'    => 53, // Replace with actual alternative ID
                'made_by'           => 231, // Replace with actual "made_by" value
            ],
            [
                'name'              => 'Manzanita Sol',
                'logo'              => 'manzanitasol.png',
                'first_letter'      => 'm',
                'video'             => 'manzanitasol.gif', // Replace with actual video file name
                'alternative_id'    => 54, // Replace with actual alternative ID
                'made_by'           => 231, // Replace with actual "made_by" value
            ],
            [
                'name'              => 'Naked Smoothies',
                'logo'              => 'nakedsmoothies.png',
                'first_letter'      => 'n',
                'video'             => 'nakedsmoothies.gif', // Replace with actual video file name
                'alternative_id'    => 55, // Replace with actual alternative ID
                'made_by'           => 231, // Replace with actual "made_by" value
            ],
            [
                'name'              => 'Mug Cream Soda',
                'logo'              => 'mugcreamsoda.png',
                'first_letter'      => 'm',
                'video'             => 'mugcreamsoda.gif', // Replace with actual video file name
                'alternative_id'    => 56, // Replace with actual alternative ID
                'made_by'           => 231, // Replace with actual "made_by" value
            ],
            [
                'name'              => 'Tropicana Farmstand',
                'logo'              => 'tropicana.png',
                'first_letter'      => 't',
                'video'             => 'tropicana.gif', // Replace with actual video file name
                'alternative_id'    => 57, // Replace with actual alternative ID
                'made_by'           => 231, // Replace with actual "made_by" value
            ],
            [
                'name'              => 'Tostitos Rolls',
                'logo'              => 'tostitosrolls.png',
                'first_letter'      => 't',
                'video'             => 'tostitosrolls.gif', // Replace with actual video file name
                'alternative_id'    => 58, // Replace with actual alternative ID
                'made_by'           => 231, // Replace with actual "made_by" value
            ],
            [
                'name'              => 'Rancho',
                'logo'              => 'rancho.png',
                'first_letter'      => 'r',
                'video'             => 'rancho.gif', // Replace with actual video file name
                'alternative_id'    => 59, // Replace with actual alternative ID
                'made_by'           => 231, // Replace with actual "made_by" value
            ],
            [
                'name'              => 'Sabra (PepsiCo)',
                'logo'              => 'sabra.png',
                'first_letter'      => 's',
                'video'             => 'sabra.gif', // Replace with actual video file name
                'alternative_id'    => 60, // Replace with actual alternative ID
                'made_by'           => 231, // Replace with actual "made_by" value
            ],
            [
                'name'              => 'Pepsi Twist',
                'logo'              => 'pepsitwist.png',
                'first_letter'      => 'p',
                'video'             => 'pepsitwist.gif', // Replace with actual video file name
                'alternative_id'    => 61, // Replace with actual alternative ID
                'made_by'           => 231, // Replace with actual "made_by" value
            ],
            [
                'name'              => 'G Active',
                'logo'              => 'gactive.png',
                'first_letter'      => 'g',
                'video'             => 'gactive.gif', // Replace with actual video file name
                'alternative_id'    => 62, // Replace with actual alternative ID
                'made_by'           => 231, // Replace with actual "made_by" value
            ],
            [
                'name'              => 'Propel',
                'logo'              => 'propel.png',
                'first_letter'      => 'p',
                'video'             => 'propel.gif', // Replace with actual video file name
                'alternative_id'    => 63, // Replace with actual alternative ID
                'made_by'           => 231, // Replace with actual "made_by" value
            ],
            [
                'name'              => 'Sunchips Veggie Harvest',
                'logo'              => 'sunchipsveggieharvest.png',
                'first_letter'      => 's',
                'video'             => 'sunchipsveggieharvest.gif', // Replace with actual video file name
                'alternative_id'    => 64, // Replace with actual alternative ID
                'made_by'           => 231, // Replace with actual "made_by" value
            ],
            [
                'name'              => 'Sabritas',
                'logo'              => 'sabritas.png',
                'first_letter'      => 's',
                'video'             => 'sabritas.gif', // Replace with actual video file name
                'alternative_id'    => 65, // Replace with actual alternative ID
                'made_by'           => 231, // Replace with actual "made_by" value
            ],
            [
                'name'              => 'Ruffles Max',
                'logo'              => 'rufflesmax.png',
                'first_letter'      => 'r',
                'video'             => 'rufflesmax.gif', // Replace with actual video file name
                'alternative_id'    => 66, // Replace with actual alternative ID
                'made_by'           => 231, // Replace with actual "made_by" value
            ],
            [
                'name'              => 'Chudo',
                'logo'              => 'chudo.png',
                'first_letter'      => 'c',
                'video'             => 'chudo.gif', // Replace with actual video file name
                'alternative_id'    => 67, // Replace with actual alternative ID
                'made_by'           => 231, // Replace with actual "made_by" value
            ],
            [
                'name'              => 'Walker\'s',
                'logo'              => 'walkers.png',
                'first_letter'      => 'w',
                'video'             => 'walkers.gif', // Replace with actual video file name
                'alternative_id'    => 68, // Replace with actual alternative ID
                'made_by'           => 231, // Replace with actual "made_by" value
            ],
            [
                'name'              => 'Bubu Lubu',
                'logo'              => 'bubulubu.png',
                'first_letter'      => 'b',
                'video'             => 'bubulubu.gif', // Replace with actual video file name
                'alternative_id'    => 69, // Replace with actual alternative ID
                'made_by'           => 231, // Replace with actual "made_by" value
            ],
            [
                'name'              => 'Fido Dido',
                'logo'              => 'fidodido.png',
                'first_letter'      => 'f',
                'video'             => 'fidodido.gif', // Replace with actual video file name
                'alternative_id'    => 70, // Replace with actual alternative ID
                'made_by'           => 231, // Replace with actual "made_by" value
            ],
            [
                'name'              => 'Cheetos',
                'logo'              => 'cheetos.png',
                'first_letter'      => 'c',
                'video'             => 'cheetos.gif', // Replace with actual video file name
                'alternative_id'    => 71, // Replace with actual alternative ID
                'made_by'           => 231, // Replace with actual "made_by" value
            ],
            [
                'name'              => 'Mtn Dew Game Fuel',
                'logo'              => 'mtndewgamefuel.png',
                'first_letter'      => 'm',
                'video'             => 'mtndewgamefuel.gif', // Replace with actual video file name
                'alternative_id'    => 72, // Replace with actual alternative ID
                'made_by'           => 231, // Replace with actual "made_by" value
            ],
            [
                'name'              => 'Nik Naks',
                'logo'              => 'niknaks.png',
                'first_letter'      => 'n',
                'video'             => 'niknaks.gif', // Replace with actual video file name
                'alternative_id'    => 73, // Replace with actual alternative ID
                'made_by'           => 231, // Replace with actual "made_by" value
            ],
            [
                'name'              => 'Simba',
                'logo'              => 'simba.png',
                'first_letter'      => 's',
                'video'             => 'simba.gif', // Replace with actual video file name
                'alternative_id'    => 74, // Replace with actual alternative ID
                'made_by'           => 231, // Replace with actual "made_by" value
            ],
            [
                'name'              => 'Quaker Oats (PepsiCo)',
                'logo'              => 'quakeroats.png',
                'first_letter'      => 'q',
                'video'             => 'quakeroats.gif', // Replace with actual video file name
                'alternative_id'    => 75, // Replace with actual alternative ID
                'made_by'           => 231, // Replace with actual "made_by" value
            ],
            [
                'name'              => 'Walkers Max',
                'logo'              => 'walkersmax.png',
                'first_letter'      => 'w',
                'video'             => 'walkersmax.gif', // Replace with actual video file name
                'alternative_id'    => 76, // Replace with actual alternative ID
                'made_by'           => 231, // Replace with actual "made_by" value
            ],
            [
                'name'              => 'Fountain Drink',
                'logo'              => 'fountaindrink.png',
                'first_letter'      => 'f',
                'video'             => 'fountaindrink.gif', // Replace with actual video file name
                'alternative_id'    => 77, // Replace with actual alternative ID
                'made_by'           => 231, // Replace with actual "made_by" value
            ],
            [
                'name'              => 'Doritos',
                'logo'              => 'doritos.png',
                'first_letter'      => 'd',
                'video'             => 'doritos.gif', // Replace with actual video file name
                'alternative_id'    => 78, // Replace with actual alternative ID
                'made_by'           => 231, // Replace with actual "made_by" value
            ],
            [
                'name'              => 'Grandma\'s',
                'logo'              => 'grandmas.png',
                'first_letter'      => 'g',
                'video'             => 'grandmas.gif', // Replace with actual video file name
                'alternative_id'    => 79, // Replace with actual alternative ID
                'made_by'           => 231, // Replace with actual "made_by" value
            ],
            [
                'name'              => 'Maine Potato',
                'logo'              => 'mainepotato.png',
                'first_letter'      => 'm',
                'video'             => 'mainepotato.gif', // Replace with actual video file name
                'alternative_id'    => 80, // Replace with actual alternative ID
                'made_by'           => 231, // Replace with actual "made_by" value
            ],
            [
                'name'              => 'Nestle Pure Life',
                'logo'              => 'nestlepurelife.png',
                'first_letter'      => 'n',
                'video'             => 'nestlepurelife.gif', // Replace with actual video file name
                'alternative_id'    => 81, // Replace with actual alternative ID
                'made_by'           => 232, // Replace with actual "made_by" value for Nestle
            ],
            [
                'name'              => 'Kit Kat',
                'logo'              => 'kitkat.png',
                'first_letter'      => 'k',
                'video'             => 'kitkat.gif', // Replace with actual video file name
                'alternative_id'    => 82, // Replace with actual alternative ID
                'made_by'           => 232, // Replace with actual "made_by" value for Nestle
            ],
            [
                'name'              => 'Nescafe',
                'logo'              => 'nescafe.png',
                'first_letter'      => 'n',
                'video'             => 'nescafe.gif', // Replace with actual video file name
                'alternative_id'    => 83, // Replace with actual alternative ID
                'made_by'           => 232, // Replace with actual "made_by" value for Nestle
            ],
            [
                'name'              => 'Maggi',
                'logo'              => 'maggi.png',
                'first_letter'      => 'm',
                'video'             => 'maggi.gif', // Replace with actual video file name
                'alternative_id'    => 84, // Replace with actual alternative ID
                'made_by'           => 232, // Replace with actual "made_by" value for Nestle
            ],
            [
                'name'              => 'Nido',
                'logo'              => 'nido.png',
                'first_letter'      => 'n',
                'video'             => 'nido.gif', // Replace with actual video file name
                'alternative_id'    => 85, // Replace with actual alternative ID
                'made_by'           => 232, // Replace with actual "made_by" value for Nestle
            ],
            [
                'name'              => 'Nestea',
                'logo'              => 'nestea.png',
                'first_letter'      => 'n',
                'video'             => 'nestea.gif', // Replace with actual video file name
                'alternative_id'    => 86, // Replace with actual alternative ID
                'made_by'           => 232, // Replace with actual "made_by" value for Nestle
            ],
            [
                'name'              => 'Cerelac',
                'logo'              => 'cerelac.png',
                'first_letter'      => 'c',
                'video'             => 'cerelac.gif', // Replace with actual video file name
                'alternative_id'    => 87, // Replace with actual alternative ID
                'made_by'           => 232, // Replace with actual "made_by" value for Nestle
            ],
            [
                'name'              => 'Perrier',
                'logo'              => 'perrier.png',
                'first_letter'      => 'p',
                'video'             => 'perrier.gif', // Replace with actual video file name
                'alternative_id'    => 88, // Replace with actual alternative ID
                'made_by'           => 232, // Replace with actual "made_by" value for Nestle
            ],
            [
                'name'              => 'Milo',
                'logo'              => 'milo.png',
                'first_letter'      => 'm',
                'video'             => 'milo.gif', // Replace with actual video file name
                'alternative_id'    => 89, // Replace with actual alternative ID
                'made_by'           => 232, // Replace with actual "made_by" value for Nestle
            ],
            [
                'name'              => 'Nestle Ice Cream',
                'logo'              => 'nestleicecream.png',
                'first_letter'      => 'n',
                'video'             => 'nestleicecream.gif', // Replace with actual video file name
                'alternative_id'    => 90, // Replace with actual alternative ID
                'made_by'           => 232, // Replace with actual "made_by" value for Nestle
            ],
            [
                'name'              => 'Nestle Breakfast Cereals',
                'logo'              => 'nestlecereals.png',
                'first_letter'      => 'n',
                'video'             => 'nestlecereals.gif', // Replace with actual video file name
                'alternative_id'    => 91, // Replace with actual alternative ID
                'made_by'           => 232, // Replace with actual "made_by" value for Nestle
            ],
            [
                'name'              => 'Nestle Desserts',
                'logo'              => 'nestledesserts.png',
                'first_letter'      => 'n',
                'video'             => 'nestledesserts.gif', // Replace with actual video file name
                'alternative_id'    => 92, // Replace with actual alternative ID
                'made_by'           => 232, // Replace with actual "made_by" value for Nestle
            ],
            [
                'name'              => 'Maggi Noodles',
                'logo'              => 'magginnoodles.png',
                'first_letter'      => 'm',
                'video'             => 'magginnoodles.gif', // Replace with actual video file name
                'alternative_id'    => 93, // Replace with actual alternative ID
                'made_by'           => 232, // Replace with actual "made_by" value for Nestle
            ],
            [
                'name'              => 'Nestle Coffee-Mate',
                'logo'              => 'coffeemate.png',
                'first_letter'      => 'n',
                'video'             => 'coffeemate.gif', // Replace with actual video file name
                'alternative_id'    => 94, // Replace with actual alternative ID
                'made_by'           => 232, // Replace with actual "made_by" value for Nestle
            ],
            [
                'name'              => 'Nestle Infant Formula',
                'logo'              => 'infantformula.png',
                'first_letter'      => 'n',
                'video'             => 'infantformula.gif', // Replace with actual video file name
                'alternative_id'    => 95, // Replace with actual alternative ID
                'made_by'           => 232, // Replace with actual "made_by" value for Nestle
            ],
            [
                'name'              => 'Nesquik',
                'logo'              => 'nesquik.png',
                'first_letter'      => 'n',
                'video'             => 'nesquik.gif', // Replace with actual video file name
                'alternative_id'    => 96, // Replace with actual alternative ID
                'made_by'           => 232, // Replace with actual "made_by" value for Nestle
            ],
            [
                'name'              => 'Nestle Health Science',
                'logo'              => 'healthscience.png',
                'first_letter'      => 'n',
                'video'             => 'healthscience.gif', // Replace with actual video file name
                'alternative_id'    => 97, // Replace with actual alternative ID
                'made_by'           => 232, // Replace with actual "made_by" value for Nestle
            ],
            [
                'name'              => 'Libby\'s (Nestle)',
                'logo'              => 'libbys.png',
                'first_letter'      => 'l',
                'video'             => 'libbys.gif', // Replace with actual video file name
                'alternative_id'    => 98, // Replace with actual alternative ID
                'made_by'           => 232, // Replace with actual "made_by" value for Nestle
            ],
            [
                'name'              => 'Herta (Nestle)',
                'logo'              => 'herta.png',
                'first_letter'      => 'h',
                'video'             => 'herta.gif', // Replace with actual video file name
                'alternative_id'    => 99, // Replace with actual alternative ID
                'made_by'           => 232, // Replace with actual "made_by" value for Nestle
            ],
            [
                'name'              => 'Nestle Breakfast Biscuits',
                'logo'              => 'breakfastbiscuits.png',
                'first_letter'      => 'n',
                'video'             => 'breakfastbiscuits.gif', // Replace with actual video file name
                'alternative_id'    => 100, // Replace with actual alternative ID
                'made_by'           => 232, // Replace with actual "made_by" value for Nestle
            ],
        ];

        DB::table('brands')->insert($brands);
    }
}
