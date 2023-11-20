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
            // Egypt
            [ 'name' => 'Willy\'s kitchen',     'ar_name' => 'ماكدونالدز',      'first_ar_letter' => 'م',       'logo' => 'willyskitchen.png',      'first_letter' => 'w',      'video' => 'palestine.gif',     'alternative_id' => 0,          'made_by' => 64],
            [ 'name' => 'Fathalla',             'ar_name' => 'فتح الله',        'first_ar_letter' => 'ف',       'logo' => 'fathalla.png',           'first_letter' => 'f',      'video' => 'palestine.gif',     'alternative_id' => 0,          'made_by' => 64],
            [ 'name' => 'Juhayna',              'ar_name' => 'جهينة',           'first_ar_letter' => 'ج',       'logo' => 'juhayna.png',            'first_letter' => 'j',      'video' => 'palestine.gif',     'alternative_id' => 0,          'made_by' => 64],
            [ 'name' => 'Spiro Spathis',        'ar_name' => 'سبيرو سباتيس',    'first_ar_letter' => 'س',       'logo' => 'spirospathis.png',       'first_letter' => 's',      'video' => 'palestine.gif',     'alternative_id' => 0,          'made_by' => 64],
            [ 'name' => 'Tiger', 'ar_name' => 'تايجر', 'first_ar_letter' => 'ت', 'logo' => 'tiger.png', 'first_letter' => 't', 'video' => 'palestine.gif', 'alternative_id' => 0, 'made_by' => 64],
            [ 'name' => 'Domty', 'ar_name' => 'دومتي', 'first_ar_letter' => 'د', 'logo' => 'domty.png', 'first_letter' => 'd', 'video' => 'palestine.gif', 'alternative_id' => 0, 'made_by' => 64],
            [ 'name' => 'Dina Farms', 'ar_name' => 'دينا فارمز', 'first_ar_letter' => 'د', 'logo' => 'dinafarms.png', 'first_letter' => 'd', 'video' => 'palestine.gif', 'alternative_id' => 0, 'made_by' => 64],
            [ 'name' => 'Bun N Bun', 'ar_name' => 'بن ان بن', 'first_ar_letter' => 'ب', 'logo' => 'bunnbun.png', 'first_letter' => 'b', 'video' => 'palestine.gif', 'alternative_id' => 0, 'made_by' => 64],
            [ 'name' => 'Zack\'s', 'ar_name' => 'زاكس', 'first_ar_letter' => 'ز', 'logo' => 'zacks.png', 'first_letter' => 'z', 'video' => 'palestine.gif', 'alternative_id' => 0, 'made_by' => 64],
            [ 'name' => 'Abu Auf', 'ar_name' => 'أبو عوف', 'first_ar_letter' => 'أ', 'logo' => 'abuauf.png', 'first_letter' => 'a', 'video' => 'palestine.gif', 'alternative_id' => 0, 'made_by' => 64],
            [ 'name' => 'Oxi', 'ar_name' => 'أوكسي', 'first_ar_letter' => 'أ', 'logo' => 'oxi.png', 'first_letter' => 'o', 'video' => 'palestine.gif', 'alternative_id' => 0, 'made_by' => 64],
            [ 'name' => 'Corona', 'ar_name' => 'كورونا', 'first_ar_letter' => 'ك', 'logo' => 'corona.png', 'first_letter' => 'c', 'video' => 'palestine.gif', 'alternative_id' => 0, 'made_by' => 64],
            [ 'name' => 'El Arosa Tea', 'ar_name' => 'شاي العروسة', 'first_ar_letter' => 'ش', 'logo' => 'elarosatea.png', 'first_letter' => 'e', 'video' => 'palestine.gif', 'alternative_id' => 0, 'made_by' => 64],
            [ 'name' => 'Borio', 'ar_name' => 'بوريو', 'first_ar_letter' => 'ب', 'logo' => 'borio.png', 'first_letter' => 'b', 'video' => 'palestine.gif', 'alternative_id' => 0, 'made_by' => 64],
            [ 'name' => 'Pizza King', 'ar_name' => 'بيتزا كينج', 'first_ar_letter' => 'ب', 'logo' => 'pizzaking.png', 'first_letter' => 'p', 'video' => 'palestine.gif', 'alternative_id' => 0, 'made_by' => 64],
            [ 'name' => 'Dabur Miswak', 'ar_name' => 'دابر المسواك', 'first_ar_letter' => 'د', 'logo' => 'daburmiswak.png', 'first_letter' => 'd', 'video' => 'palestine.gif', 'alternative_id' => 0, 'made_by' => 64],
            [ 'name' => 'Marbella', 'ar_name' => 'ماربيلا', 'first_ar_letter' => 'م', 'logo' => 'marbella.png', 'first_letter' => 'm', 'video' => 'palestine.gif', 'alternative_id' => 0, 'made_by' => 64],
            [ 'name' => 'Safi', 'ar_name' => 'صافي', 'first_ar_letter' => 'ص', 'logo' => 'safi.png', 'first_letter' => 's', 'video' => 'palestine.gif', 'alternative_id' => 0, 'made_by' => 64],
            [ 'name' => 'Elano', 'ar_name' => 'إيلانو', 'first_ar_letter' => 'إ', 'logo' => 'elano.png', 'first_letter' => 'e', 'video' => 'palestine.gif', 'alternative_id' => 0, 'made_by' => 64],
            [ 'name' => 'Siwa', 'ar_name' => 'سيوة', 'first_ar_letter' => 'س', 'logo' => 'siwa.png', 'first_letter' => 's', 'video' => 'palestine.gif', 'alternative_id' => 0, 'made_by' => 64],
            [ 'name' => 'Aqua Delta', 'ar_name' => 'أكوا دلتا', 'first_ar_letter' => 'أ', 'logo' => 'aquadelta.png', 'first_letter' => 'a', 'video' => 'palestine.gif', 'alternative_id' => 0, 'made_by' => 64],
            [ 'name' => 'Puvana', 'ar_name' => 'بوفانا', 'first_ar_letter' => 'ب', 'logo' => 'puvana.png', 'first_letter' => 'p', 'video' => 'palestine.gif', 'alternative_id' => 0, 'made_by' => 64],
            [ 'name' => 'Misr Cafe', 'ar_name' => 'مصر كافيه', 'first_ar_letter' => 'م', 'logo' => 'misrcafe.png', 'first_letter' => 'm', 'video' => 'palestine.gif', 'alternative_id' => 0, 'made_by' => 64],
            [ 'name' => 'Frida', 'ar_name' => 'فريدا', 'first_ar_letter' => 'ف', 'logo' => 'frida.png', 'first_letter' => 'f', 'video' => 'palestine.gif', 'alternative_id' => 0, 'made_by' => 64],
            [ 'name' => 'Velveta', 'ar_name' => 'فيلفيتا', 'first_ar_letter' => 'ف', 'logo' => 'velveta.png', 'first_letter' => 'v', 'video' => 'palestine.gif', 'alternative_id' => 0, 'made_by' => 64],
            [ 'name' => 'SUTRA', 'ar_name' => 'سُترة', 'first_ar_letter' => 'س', 'logo' => 'sutra.png', 'first_letter' => 's', 'video' => 'palestine.gif', 'alternative_id' => 0, 'made_by' => 64],


            // PEPSICO DONE
            [ 'name' => 'Pepsi', 'ar_name' => 'بيبسي', 'logo' => 'pepsi.png', 'first_ar_letter' => 'ب', 'first_letter' => 'p', 'video' => 'pepsi.gif', 'alternative_id' => 4001, 'made_by' => 231],
            [ 'name' => 'Lay\'s', 'ar_name' => 'ليز', 'logo' => 'lays.png', 'first_ar_letter' => 'ل', 'first_letter' => 'l', 'video' => 'lays.gif', 'alternative_id' => 4002, 'made_by' => 231],
            [ 'name' => 'Doritos', 'ar_name' => 'دوريتوس', 'logo' => 'doritos.png', 'first_ar_letter' => 'د', 'first_letter' => 'd', 'video' => 'doritos.gif', 'alternative_id' => 4003, 'made_by' => 231],
            [ 'name' => 'Tropicana', 'ar_name' => 'تروبيكانا', 'logo' => 'tropicana.png', 'first_ar_letter' => 'ت', 'first_letter' => 't', 'video' => 'tropicana.gif', 'alternative_id' => 4004, 'made_by' => 231],
            [ 'name' => 'Quaker Oats', 'ar_name' => 'كويكر أوتس', 'logo' => 'quakeroats.png', 'first_ar_letter' => 'ك', 'first_letter' => 'q', 'video' => 'quakeroats.gif', 'alternative_id' => 4005, 'made_by' => 231],
            [ 'name' => 'Mirinda', 'ar_name' => 'ميرندا', 'logo' => 'mirinda.png', 'first_ar_letter' => 'م', 'first_letter' => 'm', 'video' => 'mirinda.gif', 'alternative_id' => 4, 'made_by' => 231],
            [ 'name' => 'Gatorade', 'ar_name' => 'جيتوريد', 'logo' => 'gatorade.png', 'first_ar_letter' => 'ج', 'first_letter' => 'g', 'video' => 'gatorade.gif', 'alternative_id' => 4007, 'made_by' => 231],
            [ 'name' => '7UP', 'ar_name' => 'سفن أب', 'logo' => '7up.png', 'first_ar_letter' => 'س', 'first_letter' => '7', 'video' => '7up.gif', 'alternative_id' => 4, 'made_by' => 231],
            [ 'name' => 'Pepsi Max', 'ar_name' => 'بيبسي ماكس', 'logo' => 'pepsimax.png', 'first_ar_letter' => 'ب', 'first_letter' => 'p', 'video' => 'pepsimax.gif', 'alternative_id' => 4009, 'made_by' => 231],
            [ 'name' => 'Cheetos', 'ar_name' => 'شيتوس', 'logo' => 'cheetos.png', 'first_ar_letter' => 'ش', 'first_letter' => 'c', 'video' => 'cheetos.gif', 'alternative_id' => 4010, 'made_by' => 231],
            [ 'name' => 'Mountain Dew', 'ar_name' => 'ماونتن ديو', 'logo' => 'mountaindew.png', 'first_ar_letter' => 'م', 'first_letter' => 'm', 'video' => 'mountaindew.gif', 'alternative_id' => 4, 'made_by' => 231],
            [ 'name' => 'Diet Pepsi', 'ar_name' => 'دايت بيبسي', 'logo' => 'dietpepsi.png', 'first_ar_letter' => 'د', 'first_letter' => 'd', 'video' => 'dietpepsi.gif', 'alternative_id' => 4012, 'made_by' => 231],
            [ 'name' => 'Ruffles',              'ar_name' => 'روفلز',   'first_ar_letter' => 'ر',   'logo' => 'ruffles.png',           'first_letter' => 'r',  'video' => 'ruffles.gif',       'alternative_id' => 2,      'made_by' => 231],
            [ 'name' => 'Aquafina',             'ar_name' => 'اكوافينا',   'first_ar_letter' => 'ا',   'logo' => 'aquafina.png',          'first_letter' => 'a',  'video' => 'aquafina.gif',      'alternative_id' => 2,      'made_by' => 231],
            [ 'name' => 'Rold Gold',            'ar_name' => 'رولد جولد',     'first_ar_letter' => 'ر',   'logo' => 'roldgold.png',          'first_letter' => 'r',  'video' => 'roldgold.gif',      'alternative_id' => 2,      'made_by' => 231],
            [ 'name' => 'SunChips',             'ar_name' => 'صن شيبس',       'first_ar_letter' => 'ص',   'logo' => 'sunchips.png',          'first_letter' => 's',  'video' => 'sunchips.gif',      'alternative_id' => 2,      'made_by' => 231],
            [ 'name' => 'Fritos',               'ar_name' => 'فريتوس',   'first_ar_letter' => 'ف',   'logo' => 'fritos.png',            'first_letter' => 'f',  'video' => 'fritos.gif',        'alternative_id' => 2,      'made_by' => 231],
            [ 'name' => 'Rice-A-Roni',          'ar_name' => 'رايس روني',   'first_ar_letter' => 'ر',   'logo' => 'ricearoni.png',         'first_letter' => 'r',  'video' => 'ricearoni.gif',     'alternative_id' => 2,      'made_by' => 231],
            [ 'name' => 'Pepsi Twist', 'ar_name' => 'بيبسي تويست', 'logo' => 'pepsitwist.png', 'first_ar_letter' => 'ب', 'first_letter' => 'p', 'video' => 'pepsitwist.gif', 'alternative_id' => 4013, 'made_by' => 231],
            [ 'name' => 'Quaker Chewy Bars', 'ar_name' => 'كويكر تشيو بارز', 'logo' => 'quakerchewybars.png', 'first_ar_letter' => 'ك', 'first_letter' => 'q', 'video' => 'quakerchewybars.gif', 'alternative_id' => 4017, 'made_by' => 231],
            [ 'name' => 'Naked Juice',          'ar_name' => 'ناكيد جوس',   'first_ar_letter' => 'ن',   'logo' => 'nakedjuice.png',        'first_letter' => 'n',  'video' => 'nakedjuice.gif',    'alternative_id' => 2,      'made_by' => 231],
            [ 'name' => 'Lipton',               'ar_name' => 'ليبتون',   'first_ar_letter' => 'ل',   'logo' => 'lipton.png',            'first_letter' => 'l',  'video' => 'lipton.gif',        'alternative_id' => 2,      'made_by' => 231],
            [ 'name' => 'Lay\'s Stax',          'ar_name' => 'لايز ستاكس',   'first_ar_letter' => 'ل',   'logo' => 'laysstax.png',          'first_letter' => 'l',  'video' => 'laysstax.gif',      'alternative_id' => 2,      'made_by' => 231],
            [ 'name' => 'Tostitos',             'ar_name' => 'توستيتوس',   'first_ar_letter' => 'ت',   'logo' => 'tostitos.png',          'first_letter' => 't',  'video' => 'tostitos.gif',      'alternative_id' => 2,      'made_by' => 231],
            [ 'name' => 'Sting',                'ar_name' => 'ستينج',   'first_ar_letter' => 'س',   'logo' => 'sting.png',              'first_letter' => 's','video' => 'sting.gif',          'alternative_id' => 2,      'made_by' => 231],

            // P&G
            [ 'name' => 'Pampers', 'ar_name' => 'بامبرز', 'first_ar_letter' => 'ب', 'logo' => 'pampers.png', 'first_letter' => 'p', 'video' => 'pampers.gif', 'alternative_id' => 121, 'made_by' => 231],
            [ 'name' => 'Head & Shoulders', 'ar_name' => 'هيد أند شولدرز', 'first_ar_letter' => 'ه', 'logo' => 'headandshoulders.png', 'first_letter' => 'h', 'video' => 'headandshoulders.gif', 'alternative_id' => 122, 'made_by' => 231],
            [ 'name' => 'Gillette', 'ar_name' => 'جيليت', 'first_ar_letter' => 'ج', 'logo' => 'gillette.png', 'first_letter' => 'g', 'video' => 'gillette.gif', 'alternative_id' => 123, 'made_by' => 231],
            [ 'name' => 'Always', 'ar_name' => 'ألويز', 'first_ar_letter' => 'أ', 'logo' => 'always.png', 'first_letter' => 'a', 'video' => 'always.gif', 'alternative_id' => 124, 'made_by' => 231],
            [ 'name' => 'Ariel', 'ar_name' => 'أريال', 'first_ar_letter' => 'أ', 'logo' => 'ariel.png', 'first_letter' => 'a', 'video' => 'ariel.gif', 'alternative_id' => 125, 'made_by' => 231],
            [ 'name' => 'Oral-B', 'ar_name' => 'أورال بي', 'first_ar_letter' => 'أ', 'logo' => 'oralb.png', 'first_letter' => 'o', 'video' => 'oralb.gif', 'alternative_id' => 126, 'made_by' => 231],
            [ 'name' => 'Pantene', 'ar_name' => 'بانتين', 'first_ar_letter' => 'ب', 'logo' => 'pantene.png', 'first_letter' => 'p', 'video' => 'pantene.gif', 'alternative_id' => 127, 'made_by' => 231],
            [ 'name' => 'Safeguard', 'ar_name' => 'سيفجارد', 'first_ar_letter' => 'س', 'logo' => 'safeguard.png', 'first_letter' => 's', 'video' => 'safeguard.gif', 'alternative_id' => 129, 'made_by' => 231],
            [ 'name' => 'Olay', 'ar_name' => 'أولاي', 'first_ar_letter' => 'أ', 'logo' => 'olay.png', 'first_letter' => 'o', 'video' => 'olay.gif', 'alternative_id' => 130, 'made_by' => 231],
            [ 'name' => 'Fairy', 'ar_name' => 'فيري', 'first_ar_letter' => 'ف', 'logo' => 'fairy.png', 'first_letter' => 'f', 'video' => 'fairy.gif', 'alternative_id' => 131, 'made_by' => 231],
            [ 'name' => 'Braun', 'ar_name' => 'براون', 'first_ar_letter' => 'ب', 'logo' => 'braun.png', 'first_letter' => 'b', 'video' => 'braun.gif', 'alternative_id' => 132, 'made_by' => 231],
            [ 'name' => 'Vicks', 'ar_name' => 'فيكس', 'first_ar_letter' => 'ف', 'logo' => 'vicks.png', 'first_letter' => 'v', 'video' => 'vicks.gif', 'alternative_id' => 133, 'made_by' => 231],
            [ 'name' => 'Downy', 'ar_name' => 'داوني', 'first_ar_letter' => 'د', 'logo' => 'downy.png', 'first_letter' => 'd', 'video' => 'downy.gif', 'alternative_id' => 137, 'made_by' => 231],
            [ 'name' => 'Tide', 'ar_name' => 'تايد', 'first_ar_letter' => 'ت', 'logo' => 'tide.png', 'first_letter' => 't', 'video' => 'tide.gif', 'alternative_id' => 140, 'made_by' => 231],
            [ 'name' => 'Crest', 'ar_name' => 'كريست', 'first_ar_letter' => 'ك', 'logo' => 'crest.png', 'first_letter' => 'c', 'video' => 'crest.gif', 'alternative_id' => 141, 'made_by' => 231],
            [ 'name' => 'Gillette Venus', 'ar_name' => 'جيليت فينوس', 'first_ar_letter' => 'ج', 'logo' => 'gillettevenus.png', 'first_letter' => 'g', 'video' => 'gillettevenus.gif', 'alternative_id' => 142, 'made_by' => 231],
            [ 'name' => 'Herbal Essences', 'ar_name' => 'هيربال إيسنسز', 'first_ar_letter' => 'ه', 'logo' => 'herbalessences.png', 'first_letter' => 'h', 'video' => 'herbalessences.gif', 'alternative_id' => 143, 'made_by' => 231],
            [ 'name' => 'Secret', 'ar_name' => 'سيكريت', 'first_ar_letter' => 'س', 'logo' => 'secret.png', 'first_letter' => 's', 'video' => 'secret.gif', 'alternative_id' => 145, 'made_by' => 231],
            [ 'name' => 'Bounty', 'ar_name' => 'باونتي', 'first_ar_letter' => 'ب', 'logo' => 'bounty.png', 'first_letter' => 'b', 'video' => 'bounty.gif', 'alternative_id' => 150, 'made_by' => 231],

            // Mondelez
            [ 'name' => 'Cadbury', 'ar_name' => 'كادبوري', 'first_ar_letter' => 'ك', 'logo' => 'cadbury.png', 'first_letter' => 'c', 'video' => 'cadbury.gif', 'alternative_id' => 201, 'made_by' => 231],
            [ 'name' => 'Toblerone', 'ar_name' => 'توبليرون', 'first_ar_letter' => 'ت', 'logo' => 'toblerone.png', 'first_letter' => 't', 'video' => 'toblerone.gif', 'alternative_id' => 202, 'made_by' => 231],
            [ 'name' => 'Oreo', 'ar_name' => 'أوريو', 'first_ar_letter' => 'أ', 'logo' => 'oreo.png', 'first_letter' => 'o', 'video' => 'oreo.gif', 'alternative_id' => 203, 'made_by' => 231],
            [ 'name' => 'Belvita', 'ar_name' => 'بلفيتا', 'first_ar_letter' => 'ب', 'logo' => 'belvita.png', 'first_letter' => 'b', 'video' => 'belvita.gif', 'alternative_id' => 204, 'made_by' => 231],
            [ 'name' => 'Milka', 'ar_name' => 'ميلكا', 'first_ar_letter' => 'م', 'logo' => 'milka.png', 'first_letter' => 'm', 'video' => 'milka.gif', 'alternative_id' => 206, 'made_by' => 231],
            [ 'name' => 'Trident', 'ar_name' => 'ترايدنت', 'first_ar_letter' => 'ت', 'logo' => 'trident.png', 'first_letter' => 't', 'video' => 'trident.gif', 'alternative_id' => 207, 'made_by' => 231],
            [ 'name' => 'Halls', 'ar_name' => 'هولز', 'first_ar_letter' => 'ه', 'logo' => 'halls.png', 'first_letter' => 'h', 'video' => 'halls.gif', 'alternative_id' => 209, 'made_by' => 231],
            [ 'name' => 'Tang', 'ar_name' => 'تانج', 'first_ar_letter' => 'ت', 'logo' => 'tang.png', 'first_letter' => 't', 'video' => 'tang.gif', 'alternative_id' => 210, 'made_by' => 231],
            [ 'name' => 'Philadelphia', 'ar_name' => 'فيلادلفيا', 'first_ar_letter' => 'ف', 'logo' => 'philadelphia.png', 'first_letter' => 'p', 'video' => 'philadelphia.gif', 'alternative_id' => 215, 'made_by' => 231],
            [ 'name' => 'Chiclets', 'ar_name' => 'شيكليتس', 'first_ar_letter' => 'ش', 'logo' => 'chiclets.png', 'first_letter' => 'c', 'video' => 'chiclets.gif', 'alternative_id' => 220, 'made_by' => 231],
            [ 'name' => 'Crunch', 'ar_name' => 'كرانش', 'first_ar_letter' => 'ك', 'logo' => 'crunch.png', 'first_letter' => 'c', 'video' => 'crunch.gif', 'alternative_id' => 221, 'made_by' => 231],

            // Johnson & Johnson
            [ 'name' => 'Johnson\'s Baby', 'ar_name' => 'جونسونز بيبي', 'first_ar_letter' => 'ج', 'logo' => 'johnsonsbaby.png', 'first_letter' => 'j', 'video' => 'johnsonsbaby.gif', 'alternative_id' => 301, 'made_by' => 231],
            [ 'name' => 'Neutrogena', 'ar_name' => 'نيتروجينا', 'first_ar_letter' => 'ن', 'logo' => 'neutrogena.png', 'first_letter' => 'n', 'video' => 'neutrogena.gif', 'alternative_id' => 302, 'made_by' => 231],
            [ 'name' => 'Listerine', 'ar_name' => 'ليسترين', 'first_ar_letter' => 'ل', 'logo' => 'listerine.png', 'first_letter' => 'l', 'video' => 'listerine.gif', 'alternative_id' => 303, 'made_by' => 231],
            [ 'name' => 'Aveeno', 'ar_name' => 'أفينو', 'first_ar_letter' => 'أ', 'logo' => 'aveeno.png', 'first_letter' => 'a', 'video' => 'aveeno.gif', 'alternative_id' => 304, 'made_by' => 231],
            [ 'name' => 'Clean & Clear', 'ar_name' => 'كلين آند كلير', 'first_ar_letter' => 'ك', 'logo' => 'cleanandclear.png', 'first_letter' => 'c', 'video' => 'cleanandclear.gif', 'alternative_id' => 305, 'made_by' => 231],
            [ 'name' => 'Carefree', 'ar_name' => 'كيرفري', 'first_ar_letter' => 'ك', 'logo' => 'carefree.png', 'first_letter' => 'c', 'video' => 'carefree.gif', 'alternative_id' => 307, 'made_by' => 231],


            // KraftHeinz
            [ 'name' => 'Heinz', 'ar_name' => 'هاينز', 'first_ar_letter' => 'ه', 'logo' => 'heinz.png', 'first_letter' => 'h', 'video' => 'heinz.gif', 'alternative_id' => 401, 'made_by' => 231],
            [ 'name' => 'Kraft', 'ar_name' => 'كرافت', 'first_ar_letter' => 'ك', 'logo' => 'kraft.png', 'first_letter' => 'k', 'video' => 'kraft.gif', 'alternative_id' => 402, 'made_by' => 231],

            // Nestle
            ['name' => 'Maggi', 'ar_name' => 'ماجي', 'first_ar_letter' => 'م', 'logo' => 'maggi.png', 'first_letter' => 'm', 'video' => 'maggi.gif', 'alternative_id' => 503, 'made_by' => 231],
            ['name' => 'Cerelac', 'ar_name' => 'سيريلاك', 'first_ar_letter' => 'س', 'logo' => 'cerelac.png', 'first_letter' => 'c', 'video' => 'cerelac.gif', 'alternative_id' => 504, 'made_by' => 231],
            ['name' => 'Nido', 'ar_name' => 'نيدو', 'first_ar_letter' => 'ن', 'logo' => 'nido.png', 'first_letter' => 'n', 'video' => 'nido.gif', 'alternative_id' => 505, 'made_by' => 231],
            ['name' => 'Nestle Pure Life', 'ar_name' => 'نستله بيور لايف', 'first_ar_letter' => 'ن', 'logo' => 'nestlepurelife.png', 'first_letter' => 'n', 'video' => 'nestlepurelife.gif', 'alternative_id' => 506, 'made_by' => 231],
            ['name' => 'Kit Kat', 'ar_name' => 'كيت كات', 'first_ar_letter' => 'ك', 'logo' => 'kitkat.png', 'first_letter' => 'k', 'video' => 'kitkat.gif', 'alternative_id' => 507, 'made_by' => 231],
            ['name' => 'Quality Street', 'ar_name' => 'كواليتي ستريت', 'first_ar_letter' => 'ك', 'logo' => 'qualitystreet.png', 'first_letter' => 'q', 'video' => 'qualitystreet.gif', 'alternative_id' => 510, 'made_by' => 231],
            ['name' => 'Coffee-Mate', 'ar_name' => 'كوفي ميت', 'first_ar_letter' => 'ك', 'logo' => 'coffeemate.png', 'first_letter' => 'c', 'video' => 'coffeemate.gif', 'alternative_id' => 514, 'made_by' => 231],
            ['name' => 'Nestle Fitness', 'ar_name' => 'نستله فيتنس', 'first_ar_letter' => 'ن', 'logo' => 'nestlefitness.png', 'first_letter' => 'n', 'video' => 'nestlefitness.gif', 'alternative_id' => 521, 'made_by' => 231],
            ['name' => 'Nesquik', 'ar_name' => 'نسكويك', 'first_ar_letter' => 'ن', 'logo' => 'nesquik.png', 'first_letter' => 'n', 'video' => 'nesquik.gif', 'alternative_id' => 524, 'made_by' => 231],
            ['name' => 'Nestle Yogurt', 'ar_name' => 'نستله زبادي', 'first_ar_letter' => 'ن', 'logo' => 'nestleyogurt.png', 'first_letter' => 'n', 'video' => 'nestleyogurt.gif', 'alternative_id' => 527, 'made_by' => 231],
            ['name' => 'Nescafe Gold', 'ar_name' => 'نسكافيه جولد', 'first_ar_letter' => 'ن', 'logo' => 'nescafegold.png', 'first_letter' => 'n', 'video' => 'nescafegold.gif', 'alternative_id' => 529, 'made_by' => 231],
            ['name' => 'Nescafe Classic', 'ar_name' => 'نسكافيه كلاسيك', 'first_ar_letter' => 'ن', 'logo' => 'nescafeclassic.png', 'first_letter' => 'n', 'video' => 'nescafeclassic.gif', 'alternative_id' => 530, 'made_by' => 231],
            ['name' => 'Nestle Ice Cream', 'ar_name' => 'نستله آيس كريم', 'first_ar_letter' => 'ن', 'logo' => 'nestleicecream.png', 'first_letter' => 'n', 'video' => 'nestleicecream.gif', 'alternative_id' => 536, 'made_by' => 231],
            ['name' => 'Nestle Sweetened Condensed Milk', 'ar_name' => 'نستله حليب مكثف محلى', 'first_ar_letter' => 'ن', 'logo' => 'nestlesweetenedcondensedmilk.png', 'first_letter' => 'n', 'video' => 'nestlesweetenedcondensedmilk.gif', 'alternative_id' => 541, 'made_by' => 231],


            // Coca cola
            ['name' => 'Coca-Cola', 'ar_name' => 'كوكا كولا', 'first_ar_letter' => 'ك', 'logo' => 'cocacola.png', 'first_letter' => 'c', 'video' => 'cocacola.gif', 'alternative_id' => 601, 'made_by' => 231],
            ['name' => 'Diet Coke', 'ar_name' => 'دايت كوك', 'first_ar_letter' => 'د', 'logo' => 'dietcoke.png', 'first_letter' => 'd', 'video' => 'dietcoke.gif', 'alternative_id' => 602, 'made_by' => 231],
            ['name' => 'Coca-Cola Zero Sugar', 'ar_name' => 'كوكا كولا زيرو سكر', 'first_ar_letter' => 'ك', 'logo' => 'cocacolazerosugar.png', 'first_letter' => 'c', 'video' => 'cocacolazerosugar.gif', 'alternative_id' => 603, 'made_by' => 231],
            ['name' => 'Sprite', 'ar_name' => 'سبرايت', 'first_ar_letter' => 'س', 'logo' => 'sprite.png', 'first_letter' => 's', 'video' => 'sprite.gif', 'alternative_id' => 604, 'made_by' => 231],
            ['name' => 'Fanta', 'ar_name' => 'فانتا', 'first_ar_letter' => 'ف', 'logo' => 'fanta.png', 'first_letter' => 'f', 'video' => 'fanta.gif', 'alternative_id' => 605, 'made_by' => 231],
            ['name' => 'Coca-Cola Energy', 'ar_name' => 'كوكا كولا إنرجي', 'first_ar_letter' => 'ك', 'logo' => 'cocacolaenergy.png', 'first_letter' => 'c', 'video' => 'cocacolaenergy.gif', 'alternative_id' => 607, 'made_by' => 231],
            
            // Danone
            ['name' => 'Activia', 'ar_name' => 'أكتيفيا', 'first_ar_letter' => 'أ', 'logo' => 'activia.png', 'first_letter' => 'a', 'video' => 'activia.gif', 'alternative_id' => 701, 'made_by' => 231],
            ['name' => 'Danette', 'ar_name' => 'دانيت', 'first_ar_letter' => 'د', 'logo' => 'danette.png', 'first_letter' => 'd', 'video' => 'danette.gif', 'alternative_id' => 702, 'made_by' => 231],
            ['name' => 'Dango', 'ar_name' => 'دانجو', 'first_ar_letter' => 'د', 'logo' => 'dango.png', 'first_letter' => 'd', 'video' => 'dango.gif', 'alternative_id' => 705, 'made_by' => 231],
            ['name' => 'Evian', 'ar_name' => 'إيفيان', 'first_ar_letter' => 'إ', 'logo' => 'evian.png', 'first_letter' => 'e', 'video' => 'evian.gif', 'alternative_id' => 717, 'made_by' => 231],

            // Unilever
            ['name' => 'Dove', 'ar_name' => 'دوف', 'first_ar_letter' => 'د', 'logo' => 'dove.png', 'first_letter' => 'd', 'video' => 'dove.gif', 'alternative_id' => 801, 'made_by' => 231],
            ['name' => 'Axe', 'ar_name' => 'اكس', 'first_ar_letter' => 'ا', 'logo' => 'axe.png', 'first_letter' => 'a', 'video' => 'axe.gif', 'alternative_id' => 802, 'made_by' => 231],
            ['name' => 'Lipton', 'ar_name' => 'ليبتون', 'first_ar_letter' => 'ل', 'logo' => 'lipton.png', 'first_letter' => 'l', 'video' => 'lipton.gif', 'alternative_id' => 803, 'made_by' => 231],
            ['name' => 'Knorr', 'ar_name' => 'نور', 'first_ar_letter' => 'ن', 'logo' => 'knorr.png', 'first_letter' => 'k', 'video' => 'knorr.gif', 'alternative_id' => 804, 'made_by' => 231],
            ['name' => 'Rexona', 'ar_name' => 'ريكسونا', 'first_ar_letter' => 'ر', 'logo' => 'rexona.png', 'first_letter' => 'r', 'video' => 'rexona.gif', 'alternative_id' => 805, 'made_by' => 231],
            ['name' => 'Closeup', 'ar_name' => 'كلوز اب', 'first_ar_letter' => 'ك', 'logo' => 'closeup.png', 'first_letter' => 'c', 'video' => 'closeup.gif', 'alternative_id' => 806, 'made_by' => 231],
            ['name' => 'Lux', 'ar_name' => 'لوكس', 'first_ar_letter' => 'ل', 'logo' => 'lux.png', 'first_letter' => 'l', 'video' => 'lux.gif', 'alternative_id' => 808, 'made_by' => 231],
            ['name' => 'Lifebuoy', 'ar_name' => 'لايف بوي', 'first_ar_letter' => 'لا', 'logo' => 'lifebuoy.png', 'first_letter' => 'l', 'video' => 'lifebuoy.gif', 'alternative_id' => 809, 'made_by' => 231],
            ['name' => 'Vaseline', 'ar_name' => 'فازلين', 'first_ar_letter' => 'ف', 'logo' => 'vaseline.png', 'first_letter' => 'v', 'video' => 'vaseline.gif', 'alternative_id' => 811, 'made_by' => 231],
            ['name' => 'Ponds', 'ar_name' => 'بوندز', 'first_ar_letter' => 'ب', 'logo' => 'ponds.png', 'first_letter' => 'p', 'video' => 'ponds.gif', 'alternative_id' => 812, 'made_by' => 231],
            ['name' => 'Signal', 'ar_name' => 'سيجنال', 'first_ar_letter' => 'س', 'logo' => 'signal.png', 'first_letter' => 's', 'video' => 'signal.gif', 'alternative_id' => 813, 'made_by' => 231],
            ['name' => 'Omo', 'ar_name' => 'أومو', 'first_ar_letter' => 'أ', 'logo' => 'omo.png', 'first_letter' => 'o', 'video' => 'omo.gif', 'alternative_id' => 814, 'made_by' => 231],
            ['name' => 'Comfort', 'ar_name' => 'كومفورت', 'first_ar_letter' => 'ك', 'logo' => 'comfort.png', 'first_letter' => 'c', 'video' => 'comfort.gif', 'alternative_id' => 815, 'made_by' => 231],
            ['name' => 'Rama', 'ar_name' => 'راما', 'first_ar_letter' => 'ر', 'logo' => 'rama.png', 'first_letter' => 'r', 'video' => 'rama.gif', 'alternative_id' => 816, 'made_by' => 231],
            ['name' => 'Cif', 'ar_name' => 'سيف', 'first_ar_letter' => 'س', 'logo' => 'cif.png', 'first_letter' => 'c', 'video' => 'cif.gif', 'alternative_id' => 817, 'made_by' => 231],
            ['name' => 'Surf', 'ar_name' => 'سيرف', 'first_ar_letter' => 'س', 'logo' => 'surf.png', 'first_letter' => 's', 'video' => 'surf.gif', 'alternative_id' => 818, 'made_by' => 231],
            ['name' => 'Domex', 'ar_name' => 'دومكس', 'first_ar_letter' => 'د', 'logo' => 'domex.png', 'first_letter' => 'd', 'video' => 'domex.gif', 'alternative_id' => 819, 'made_by' => 231],
            ['name' => 'Flora', 'ar_name' => 'فلورا', 'first_ar_letter' => 'ف', 'logo' => 'flora.png', 'first_letter' => 'f', 'video' => 'flora.gif', 'alternative_id' => 820, 'made_by' => 231],
            ['name' => 'Pureit', 'ar_name' => 'بيوريت', 'first_ar_letter' => 'ب', 'logo' => 'pureit.png', 'first_letter' => 'p', 'video' => 'pureit.gif', 'alternative_id' => 821, 'made_by' => 231],
            ['name' => 'Algida', 'ar_name' => 'ألجيدا', 'first_ar_letter' => 'أ', 'logo' => 'algida.png', 'first_letter' => 'a', 'video' => 'algida.gif', 'alternative_id' => 822, 'made_by' => 231],
            ['name' => 'Knorr Noodles', 'ar_name' => 'نودلز نور', 'first_ar_letter' => 'ن', 'logo' => 'knorrnoodles.png', 'first_letter' => 'k', 'video' => 'knorrnoodles.gif', 'alternative_id' => 823, 'made_by' => 231],
            ['name' => 'Lynx', 'ar_name' => 'لينكس', 'first_ar_letter' => 'ل', 'logo' => 'lynx.png', 'first_letter' => 'l', 'video' => 'lynx.gif', 'alternative_id' => 824, 'made_by' => 231],
            ['name' => 'TRESemmé', 'ar_name' => 'تريسيمي', 'first_ar_letter' => 'ت', 'logo' => 'tresemme.png', 'first_letter' => 't', 'video' => 'tresemme.gif', 'alternative_id' => 825, 'made_by' => 231],
            ['name' => 'Pears', 'ar_name' => 'بيرز', 'first_ar_letter' => 'ب', 'logo' => 'pears.png', 'first_letter' => 'p', 'video' => 'pears.gif', 'alternative_id' => 826, 'made_by' => 231],
            ['name' => 'Aromat', 'ar_name' => 'أرومات', 'first_ar_letter' => 'أ', 'logo' => 'aromat.png', 'first_letter' => 'a', 'video' => 'aromat.gif', 'alternative_id' => 827, 'made_by' => 231],
            ['name' => 'Blue Band', 'ar_name' => 'بلو باند', 'first_ar_letter' => 'ب', 'logo' => 'blueband.png', 'first_letter' => 'b', 'video' => 'blueband.gif', 'alternative_id' => 828, 'made_by' => 231],
            ['name' => 'Breyers', 'ar_name' => 'برايرز', 'first_ar_letter' => 'ب', 'logo' => 'breyers.png', 'first_letter' => 'b', 'video' => 'breyers.gif', 'alternative_id' => 829, 'made_by' => 231],
            ['name' => 'Cornetto', 'ar_name' => 'كورنيتو', 'first_ar_letter' => 'ك', 'logo' => 'cornetto.png', 'first_letter' => 'c', 'video' => 'cornetto.gif', 'alternative_id' => 830, 'made_by' => 231],
            ['name' => 'Domestos', 'ar_name' => 'دوميستوس', 'first_ar_letter' => 'د', 'logo' => 'domestos.png', 'first_letter' => 'd', 'video' => 'domestos.gif', 'alternative_id' => 831, 'made_by' => 231],
            ['name' => 'Grom', 'ar_name' => 'جروم', 'first_ar_letter' => 'ج', 'logo' => 'grom.png', 'first_letter' => 'g', 'video' => 'grom.gif', 'alternative_id' => 832, 'made_by' => 231],
            ['name' => 'Marmite', 'ar_name' => 'مارمايت', 'first_ar_letter' => 'م', 'logo' => 'marmite.png', 'first_letter' => 'm', 'video' => 'marmite.gif', 'alternative_id' => 833, 'made_by' => 231],
            ['name' => 'Noxzema', 'ar_name' => 'نوكسيما', 'first_ar_letter' => 'ن', 'logo' => 'noxzema.png', 'first_letter' => 'n', 'video' => 'noxzema.gif', 'alternative_id' => 834, 'made_by' => 231],
            ['name' => 'Radox', 'ar_name' => 'رادوكس', 'first_ar_letter' => 'ر', 'logo' => 'radox.png', 'first_letter' => 'r', 'video' => 'radox.gif', 'alternative_id' => 835, 'made_by' => 231],
            ['name' => 'Simple', 'ar_name' => 'سيمبل', 'first_ar_letter' => 'س', 'logo' => 'simple.png', 'first_letter' => 's', 'video' => 'simple.gif', 'alternative_id' => 836, 'made_by' => 231],
            ['name' => 'St. Ives', 'ar_name' => 'سانت آيفس', 'first_ar_letter' => 'س', 'logo' => 'stives.png', 'first_letter' => 's', 'video' => 'stives.gif', 'alternative_id' => 837, 'made_by' => 231],
            ['name' => 'Timotei', 'ar_name' => 'تيموتي', 'first_ar_letter' => 'ت', 'logo' => 'timotei.png', 'first_letter' => 't', 'video' => 'timotei.gif', 'alternative_id' => 838, 'made_by' => 231],
            ['name' => 'Toni & Guy', 'ar_name' => 'توني آند جاي', 'first_ar_letter' => 'ت', 'logo' => 'toniandguy.png', 'first_letter' => 't', 'video' => 'toniandguy.gif', 'alternative_id' => 839, 'made_by' => 231],
            ['name' => 'TRESemmé Botanique', 'ar_name' => 'تريسيمي بوتانيك', 'first_ar_letter' => 'ت', 'logo' => 'tresemmebotanique.png', 'first_letter' => 't', 'video' => 'tresemmebotanique.gif', 'alternative_id' => 840, 'made_by' => 231],
            ['name' => 'TRESemmé Keratin Smooth', 'ar_name' => 'تريسيمي كيراتين سموث', 'first_ar_letter' => 'ت', 'logo' => 'tresemmekeartinsmooth.png', 'first_letter' => 't', 'video' => 'tresemmekeartinsmooth.gif', 'alternative_id' => 841, 'made_by' => 231],
            ['name' => 'TRESemmé Moisture Rich', 'ar_name' => 'تريسيمي مويستشر ريتش', 'first_ar_letter' => 'ت', 'logo' => 'tresemmemoisturerich.png', 'first_letter' => 't', 'video' => 'tresemmemoisturerich.gif', 'alternative_id' => 842, 'made_by' => 231],
            ['name' => 'TRESemmé Repair & Protect', 'ar_name' => 'تريسيمي ريبير أند بروتكت', 'first_ar_letter' => 'ت', 'logo' => 'tresemmerepairandprotect.png', 'first_letter' => 't', 'video' => 'tresemmerepairandprotect.gif', 'alternative_id' => 843, 'made_by' => 231],

            // Kellogg's
            [ 'name' => 'Corn Flakes', 'ar_name' => 'كورن فليكس', 'first_ar_letter' => 'ك', 'logo' => 'cornflakes.png', 'first_letter' => 'c', 'video' => 'cornflakes.gif', 'alternative_id' => 1001, 'made_by' => 231],
            [ 'name' => 'Frosted Flakes', 'ar_name' => 'فروستد فليكس', 'first_ar_letter' => 'ف', 'logo' => 'frostedflakes.png', 'first_letter' => 'f', 'video' => 'frostedflakes.gif', 'alternative_id' => 1002, 'made_by' => 231],
            [ 'name' => 'Special K', 'ar_name' => 'سبيشال كي', 'first_ar_letter' => 'س', 'logo' => 'specialk.png', 'first_letter' => 's', 'video' => 'specialk.gif', 'alternative_id' => 1003, 'made_by' => 231],
            [ 'name' => 'Rice Krispies', 'ar_name' => 'رايس كريسبيز', 'first_ar_letter' => 'ر', 'logo' => 'ricekrispies.png', 'first_letter' => 'r', 'video' => 'ricekrispies.gif', 'alternative_id' => 1004, 'made_by' => 231],

            // L'Oréal
            [ 'name' => 'L\'Oréal Paris', 'ar_name' => 'لوريال باريس', 'logo' => 'lorealparis.png', 'first_ar_letter' => 'ل', 'first_letter' => 'l', 'video' => 'lorealparis.gif', 'alternative_id' => 2001, 'made_by' => 231],
            [ 'name' => 'Maybelline', 'ar_name' => 'ميبلين', 'logo' => 'maybelline.png', 'first_ar_letter' => 'م', 'first_letter' => 'm', 'video' => 'maybelline.gif', 'alternative_id' => 2002, 'made_by' => 231],
            [ 'name' => 'Garnier', 'ar_name' => 'غارنييه', 'logo' => 'garnier.png', 'first_ar_letter' => 'غ', 'first_letter' => 'g', 'video' => 'garnier.gif', 'alternative_id' => 2003, 'made_by' => 231],
            [ 'name' => 'Lancôme', 'ar_name' => 'لانكوم', 'logo' => 'lancome.png', 'first_ar_letter' => 'ل', 'first_letter' => 'l', 'video' => 'lancome.gif', 'alternative_id' => 2004, 'made_by' => 231],
            [ 'name' => 'Kérastase', 'ar_name' => 'كيراستاس', 'logo' => 'kerastase.png', 'first_ar_letter' => 'ك', 'first_letter' => 'k', 'video' => 'kerastase.gif', 'alternative_id' => 2005, 'made_by' => 231],
            [ 'name' => 'Redken', 'ar_name' => 'ريدكين', 'logo' => 'redken.png', 'first_ar_letter' => 'ر', 'first_letter' => 'r', 'video' => 'redken.gif', 'alternative_id' => 2006, 'made_by' => 231],
            [ 'name' => 'Essie', 'ar_name' => 'إيسي', 'logo' => 'essie.png', 'first_ar_letter' => 'إ', 'first_letter' => 'e', 'video' => 'essie.gif', 'alternative_id' => 2007, 'made_by' => 231],
            [ 'name' => 'Vichy', 'ar_name' => 'فيشي', 'logo' => 'vichy.png', 'first_ar_letter' => 'ف', 'first_letter' => 'v', 'video' => 'vichy.gif', 'alternative_id' => 2008, 'made_by' => 231],
            [ 'name' => 'La Roche-Posay', 'ar_name' => 'لا روش بوزاي', 'logo' => 'larocheposay.png', 'first_ar_letter' => 'لا', 'first_letter' => 'l', 'video' => 'larocheposay.gif', 'alternative_id' => 2009, 'made_by' => 231],
            [ 'name' => 'Yves Saint Laurent', 'ar_name' => 'إيف سان لوران', 'logo' => 'yvessaintlaurent.png', 'first_ar_letter' => 'إ', 'first_letter' => 'y', 'video' => 'yvessaintlaurent.gif', 'alternative_id' => 2010, 'made_by' => 231],

            // MARS
            [ 'name' => 'Snickers', 'ar_name' => 'سنيكرز', 'logo' => 'snickers.png', 'first_ar_letter' => 'س', 'first_letter' => 's', 'video' => 'snickers.gif', 'alternative_id' => 3001, 'made_by' => 231],
            [ 'name' => 'M&M\'s', 'ar_name' => 'إم آند إمز', 'logo' => 'mms.png', 'first_ar_letter' => 'إ', 'first_letter' => 'm', 'video' => 'mms.gif', 'alternative_id' => 3002, 'made_by' => 231],
            [ 'name' => 'Twix', 'ar_name' => 'تويكس', 'logo' => 'twix.png', 'first_ar_letter' => 'ت', 'first_letter' => 't', 'video' => 'twix.gif', 'alternative_id' => 3003, 'made_by' => 231],
            [ 'name' => 'Bounty', 'ar_name' => 'باونتي', 'logo' => 'bounty.png', 'first_ar_letter' => 'ب', 'first_letter' => 'b', 'video' => 'bounty.gif', 'alternative_id' => 3004, 'made_by' => 231],
            [ 'name' => 'Mars', 'ar_name' => 'مارس', 'logo' => 'mars.png', 'first_ar_letter' => 'م', 'first_letter' => 'm', 'video' => 'mars.gif', 'alternative_id' => 3005, 'made_by' => 231],
            [ 'name' => 'Galaxy', 'ar_name' => 'جالاكسي', 'logo' => 'galaxy.png', 'first_ar_letter' => 'ج', 'first_letter' => 'g', 'video' => 'galaxy.gif', 'alternative_id' => 3006, 'made_by' => 231],
            [ 'name' => 'Milky Way', 'ar_name' => 'ميلكي واي', 'logo' => 'milkyway.png', 'first_ar_letter' => 'م', 'first_letter' => 'm', 'video' => 'milkyway.gif', 'alternative_id' => 3007, 'made_by' => 231],
            [ 'name' => 'Skittles', 'ar_name' => 'سكيتلز', 'logo' => 'skittles.png', 'first_ar_letter' => 'س', 'first_letter' => 's', 'video' => 'skittles.gif', 'alternative_id' => 3008, 'made_by' => 231],
            [ 'name' => 'Maltesers', 'ar_name' => 'مالتيزرز', 'logo' => 'maltesers.png', 'first_ar_letter' => 'م', 'first_letter' => 'm', 'video' => 'maltesers.gif', 'alternative_id' => 3009, 'made_by' => 231],
            [ 'name' => 'Dove Chocolate', 'ar_name' => 'دوڤ شوكولاتة', 'logo' => 'dovechocolate.png', 'first_ar_letter' => 'د', 'first_letter' => 'd', 'video' => 'dovechocolate.gif', 'alternative_id' => 3010, 'made_by' => 231],


            // Restaurants
            [ 'name' => 'McDonald\'s', 'ar_name' => 'ماكدونالدز', 'logo' => 'mcdonalds.png', 'first_ar_letter' => 'م', 'first_letter' => 'm', 'video' => 'mcdonalds.gif', 'alternative_id' => 8, 'made_by' => 231],
            [ 'name' => 'KFC', 'ar_name' => 'كنتاكي', 'logo' => 'kfc.png', 'first_ar_letter' => 'ك', 'first_letter' => 'k', 'video' => 'kfc.gif', 'alternative_id' => 5002, 'made_by' => 231],
            [ 'name' => 'Pizza Hut', 'ar_name' => 'بيتزا هت', 'logo' => 'pizzahut.png', 'first_ar_letter' => 'ب', 'first_letter' => 'p', 'video' => 'pizzahut.gif', 'alternative_id' => 14, 'made_by' => 231],
            [ 'name' => 'Burger King', 'ar_name' => 'برجر كينج', 'logo' => 'burgerking.png', 'first_ar_letter' => 'ب', 'first_letter' => 'b', 'video' => 'burgerking.gif', 'alternative_id' => 1, 'made_by' => 231],
            [ 'name' => 'Subway', 'ar_name' => 'سبواي', 'logo' => 'subway.png', 'first_ar_letter' => 'س', 'first_letter' => 's', 'video' => 'subway.gif', 'alternative_id' => 5005, 'made_by' => 231],
            [ 'name' => 'Starbucks', 'ar_name' => 'ستاربكس', 'logo' => 'starbucks.png', 'first_ar_letter' => 'س', 'first_letter' => 's', 'video' => 'starbucks.gif', 'alternative_id' => 5006, 'made_by' => 231],
            [ 'name' => 'Dunkin\'', 'ar_name' => 'دانكن', 'logo' => 'dunkin.png', 'first_ar_letter' => 'د', 'first_letter' => 'd', 'video' => 'dunkin.gif', 'alternative_id' => 5007, 'made_by' => 231],
            [ 'name' => 'TGI Fridays', 'ar_name' => 'تي جي آي فرايديز', 'logo' => 'tgifridays.png', 'first_ar_letter' => 'ت', 'first_letter' => 't', 'video' => 'tgifridays.gif', 'alternative_id' => 5008, 'made_by' => 231],
            [ 'name' => 'Chili\'s', 'ar_name' => 'تشيليز', 'logo' => 'chilis.png', 'first_ar_letter' => 'ت', 'first_letter' => 'c', 'video' => 'chilis.gif', 'alternative_id' => 5009, 'made_by' => 231],
            [ 'name' => 'Hard Rock Cafe', 'ar_name' => 'هارد روك كافيه', 'logo' => 'hardrockcafe.png', 'first_ar_letter' => 'ه', 'first_letter' => 'h', 'video' => 'hardrockcafe.gif', 'alternative_id' => 5010, 'made_by' => 231],
            [ 'name' => 'Cinnabon', 'ar_name' => 'سينابون', 'logo' => 'cinnabon.png', 'first_ar_letter' => 'س', 'first_letter' => 'c', 'video' => 'cinnabon.gif', 'alternative_id' => 5031, 'made_by' => 231],
            [ 'name' => 'Papa John\'s', 'ar_name' => 'بابا جونز', 'logo' => 'papajohns.png', 'first_ar_letter' => 'ب', 'first_letter' => 'p', 'video' => 'papajohns.gif', 'alternative_id' => 5034, 'made_by' => 231],

            // Cloths
            [ 'name' => 'Levi\'s', 'ar_name' => 'ليفيز', 'logo' => 'levis.png', 'first_ar_letter' => 'ل', 'first_letter' => 'l', 'video' => 'levis.gif', 'alternative_id' => 6001, 'made_by' => 231],
            [ 'name' => 'Nike', 'ar_name' => 'نايك', 'logo' => 'nike.png', 'first_ar_letter' => 'ن', 'first_letter' => 'n', 'video' => 'nike.gif', 'alternative_id' => 6002, 'made_by' => 231],
            [ 'name' => 'Adidas', 'ar_name' => 'أديداس', 'logo' => 'adidas.png', 'first_ar_letter' => 'أ', 'first_letter' => 'a', 'video' => 'adidas.gif', 'alternative_id' => 6003, 'made_by' => 231],
            [ 'name' => 'Gap', 'ar_name' => 'جاب', 'logo' => 'gap.png', 'first_ar_letter' => 'ج', 'first_letter' => 'g', 'video' => 'gap.gif', 'alternative_id' => 6004, 'made_by' => 231],
            [ 'name' => 'Calvin Klein', 'ar_name' => 'كالفن كلاين', 'logo' => 'calvinklein.png', 'first_ar_letter' => 'ك', 'first_letter' => 'c', 'video' => 'calvinklein.gif', 'alternative_id' => 6005, 'made_by' => 231],
            [ 'name' => 'Tommy Hilfiger', 'ar_name' => 'تومي هيلفيغر', 'logo' => 'tommyhilfiger.png', 'first_ar_letter' => 'ت', 'first_letter' => 't', 'video' => 'tommyhilfiger.gif', 'alternative_id' => 6006, 'made_by' => 231],
            [ 'name' => 'Under Armour', 'ar_name' => 'أندر أرمور', 'logo' => 'underarmour.png', 'first_ar_letter' => 'أ', 'first_letter' => 'u', 'video' => 'underarmour.gif', 'alternative_id' => 6007, 'made_by' => 231],
            [ 'name' => 'Ralph Lauren', 'ar_name' => 'رالف لورين', 'logo' => 'ralphlauren.png', 'first_ar_letter' => 'ر', 'first_letter' => 'r', 'video' => 'ralphlauren.gif', 'alternative_id' => 6008, 'made_by' => 231],
            [ 'name' => 'Polo Ralph Lauren', 'ar_name' => 'بولو رالف لورين', 'logo' => 'poloralphlauren.png', 'first_ar_letter' => 'ب', 'first_letter' => 'p', 'video' => 'poloralphlauren.gif', 'alternative_id' => 6009, 'made_by' => 231],
            [ 'name' => 'Hollister Co.', 'ar_name' => 'هوليستر كو.', 'logo' => 'hollisterco.png', 'first_ar_letter' => 'ه', 'first_letter' => 'h', 'video' => 'hollisterco.gif', 'alternative_id' => 6010, 'made_by' => 231],
            [ 'name' => 'Puma', 'ar_name' => 'بوما', 'logo' => 'puma.png', 'first_ar_letter' => 'ب', 'first_letter' => 'p', 'video' => 'puma.gif', 'alternative_id' => 6012, 'made_by' => 231],
            [ 'name' => 'Fila', 'ar_name' => 'فيلا', 'logo' => 'fila.png', 'first_ar_letter' => 'ف', 'first_letter' => 'f', 'video' => 'fila.gif', 'alternative_id' => 6013, 'made_by' => 231],
            [ 'name' => 'Vans', 'ar_name' => 'فانز', 'logo' => 'vans.png', 'first_ar_letter' => 'ف', 'first_letter' => 'v', 'video' => 'vans.gif', 'alternative_id' => 6014, 'made_by' => 231],
            [ 'name' => 'Converse', 'ar_name' => 'كونفيرس', 'logo' => 'converse.png', 'first_ar_letter' => 'ك', 'first_letter' => 'c', 'video' => 'converse.gif', 'alternative_id' => 6015, 'made_by' => 231],
            [ 'name' => 'Steve Madden', 'ar_name' => 'ستيف مادن', 'logo' => 'stevemadden.png', 'first_ar_letter' => 'س', 'first_letter' => 's', 'video' => 'stevemadden.gif', 'alternative_id' => 6016, 'made_by' => 231],
            [ 'name' => 'Champion', 'ar_name' => 'شامبيون', 'logo' => 'champion.png', 'first_ar_letter' => 'ش', 'first_letter' => 'c', 'video' => 'champion.gif', 'alternative_id' => 6017, 'made_by' => 231],
            [ 'name' => 'New Balance', 'ar_name' => 'نيو بالانس', 'logo' => 'newbalance.png', 'first_ar_letter' => 'ن', 'first_letter' => 'n', 'video' => 'newbalance.gif', 'alternative_id' => 6018, 'made_by' => 231],
            [ 'name' => 'American Eagle Outfitters', 'ar_name' => 'أميركان إيغل أوتفيترز', 'logo' => 'americaneagleoutfitters.png', 'first_ar_letter' => 'أ', 'first_letter' => 'a', 'video' => 'americaneagleoutfitters.gif', 'alternative_id' => 6019, 'made_by' => 231],
            [ 'name' => 'Zara', 'ar_name' => 'زارا', 'logo' => 'zara.png', 'first_ar_letter' => 'ز', 'first_letter' => 'z', 'video' => 'zara.gif', 'alternative_id' => 6028, 'made_by' => 231],
            [ 'name' => 'H&M', 'ar_name' => 'إتش آند إم', 'logo' => 'hm.png', 'first_ar_letter' => 'إ', 'first_letter' => 'h', 'video' => 'hm.gif', 'alternative_id' => 6021, 'made_by' => 231],
            [ 'name' => 'Carter\'s', 'ar_name' => 'كارترز', 'logo' => 'carters.png', 'first_ar_letter' => 'ك', 'first_letter' => 'c', 'video' => 'carters.gif', 'alternative_id' => 6032, 'made_by' => 231],
            [ 'name' => 'Guess', 'ar_name' => 'جيس', 'logo' => 'guess.png', 'first_ar_letter' => 'ج', 'first_letter' => 'g', 'video' => 'guess.gif', 'alternative_id' => 6038, 'made_by' => 231],
            [ 'name' => 'Fossil', 'ar_name' => 'فوسيل', 'logo' => 'fossil.png', 'first_ar_letter' => 'ف', 'first_letter' => 'f', 'video' => 'fossil.gif', 'alternative_id' => 6035, 'made_by' => 231],

            [ 'name' => 'Carrefour', 'ar_name' => 'كارفور', 'logo' => 'carrefour.png', 'first_ar_letter' => 'ك', 'first_letter' => 'c', 'video' => 'carrefour.gif', 'alternative_id' => 2, 'made_by' => 231],
        ];

        DB::table('brands')->insert($brands);
    }
}
