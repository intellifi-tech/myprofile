<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cities')->delete();
        
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 1,
                'slug' => 'adana',
                'name' => 'ADANA',
                'plate_no' => '1',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'slug' => 'adiyaman',
                'name' => 'ADIYAMAN',
                'plate_no' => '2',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'slug' => 'afyonkarahisar',
                'name' => 'AFYONKARAHİSAR',
                'plate_no' => '3',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'slug' => 'agri',
                'name' => 'AĞRI',
                'plate_no' => '4',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'slug' => 'amasya',
                'name' => 'AMASYA',
                'plate_no' => '5',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'slug' => 'ankara',
                'name' => 'ANKARA',
                'plate_no' => '6',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'slug' => 'antalya',
                'name' => 'ANTALYA',
                'plate_no' => '7',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'slug' => 'artvin',
                'name' => 'ARTVİN',
                'plate_no' => '8',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'slug' => 'aydin',
                'name' => 'AYDIN',
                'plate_no' => '9',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'slug' => 'balikesir',
                'name' => 'BALIKESİR',
                'plate_no' => '10',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'slug' => 'bilecik',
                'name' => 'BİLECİK',
                'plate_no' => '11',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'slug' => 'bingol',
                'name' => 'BİNGÖL',
                'plate_no' => '12',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'slug' => 'bitlis',
                'name' => 'BİTLİS',
                'plate_no' => '13',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'slug' => 'bolu',
                'name' => 'BOLU',
                'plate_no' => '14',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'slug' => 'burdur',
                'name' => 'BURDUR',
                'plate_no' => '15',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'slug' => 'bursa',
                'name' => 'BURSA',
                'plate_no' => '16',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'slug' => 'canakkale',
                'name' => 'ÇANAKKALE',
                'plate_no' => '17',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'slug' => 'cankiri',
                'name' => 'ÇANKIRI',
                'plate_no' => '18',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'slug' => 'corum',
                'name' => 'ÇORUM',
                'plate_no' => '19',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'slug' => 'denizli',
                'name' => 'DENİZLİ',
                'plate_no' => '20',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'slug' => 'diyarbakir',
                'name' => 'DİYARBAKIR',
                'plate_no' => '21',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'slug' => 'edirne',
                'name' => 'EDİRNE',
                'plate_no' => '22',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'slug' => 'elazig',
                'name' => 'ELAZIĞ',
                'plate_no' => '23',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'slug' => 'erzincan',
                'name' => 'ERZİNCAN',
                'plate_no' => '24',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'slug' => 'erzurum',
                'name' => 'ERZURUM',
                'plate_no' => '25',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'slug' => 'eskisehir',
                'name' => 'ESKİŞEHİR',
                'plate_no' => '26',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'slug' => 'gaziantep',
                'name' => 'GAZİANTEP',
                'plate_no' => '27',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'slug' => 'giresun',
                'name' => 'GİRESUN',
                'plate_no' => '28',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'slug' => 'gumushane',
                'name' => 'GÜMÜŞHANE',
                'plate_no' => '29',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'slug' => 'hakkari',
                'name' => 'HAKKARİ',
                'plate_no' => '30',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'slug' => 'hatay',
                'name' => 'HATAY',
                'plate_no' => '31',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'slug' => 'isparta',
                'name' => 'ISPARTA',
                'plate_no' => '32',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'slug' => 'mersin',
                'name' => 'MERSİN',
                'plate_no' => '33',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'slug' => 'istanbul',
                'name' => 'İSTANBUL',
                'plate_no' => '34',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'slug' => 'izmir',
                'name' => 'İZMİR',
                'plate_no' => '35',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'slug' => 'kars',
                'name' => 'KARS',
                'plate_no' => '36',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'slug' => 'kastamonu',
                'name' => 'KASTAMONU',
                'plate_no' => '37',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'slug' => 'kayseri',
                'name' => 'KAYSERİ',
                'plate_no' => '38',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'slug' => 'kirklareli',
                'name' => 'KIRKLARELİ',
                'plate_no' => '39',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'slug' => 'kirsehir',
                'name' => 'KIRŞEHİR',
                'plate_no' => '40',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'slug' => 'kocaeli',
                'name' => 'KOCAELİ',
                'plate_no' => '41',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'slug' => 'konya',
                'name' => 'KONYA',
                'plate_no' => '42',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'slug' => 'kutahya',
                'name' => 'KÜTAHYA',
                'plate_no' => '43',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'slug' => 'malatya',
                'name' => 'MALATYA',
                'plate_no' => '44',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'slug' => 'manisa',
                'name' => 'MANİSA',
                'plate_no' => '45',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'slug' => 'kahramanmaras',
                'name' => 'KAHRAMANMARAŞ',
                'plate_no' => '46',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'slug' => 'mardin',
                'name' => 'MARDİN',
                'plate_no' => '47',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'slug' => 'mugla',
                'name' => 'MUĞLA',
                'plate_no' => '48',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'slug' => 'mus',
                'name' => 'MUŞ',
                'plate_no' => '49',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'slug' => 'nevsehir',
                'name' => 'NEVŞEHİR',
                'plate_no' => '50',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'slug' => 'nigde',
                'name' => 'NİĞDE',
                'plate_no' => '51',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'slug' => 'ordu',
                'name' => 'ORDU',
                'plate_no' => '52',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'slug' => 'rize',
                'name' => 'RİZE',
                'plate_no' => '53',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'slug' => 'sakarya',
                'name' => 'SAKARYA',
                'plate_no' => '54',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'slug' => 'samsun',
                'name' => 'SAMSUN',
                'plate_no' => '55',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'slug' => 'siirt',
                'name' => 'SİİRT',
                'plate_no' => '56',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'slug' => 'sinop',
                'name' => 'SİNOP',
                'plate_no' => '57',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'slug' => 'sivas',
                'name' => 'SİVAS',
                'plate_no' => '58',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'slug' => 'tekirdag',
                'name' => 'TEKİRDAĞ',
                'plate_no' => '59',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'slug' => 'tokat',
                'name' => 'TOKAT',
                'plate_no' => '60',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'slug' => 'trabzon',
                'name' => 'TRABZON',
                'plate_no' => '61',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'slug' => 'tunceli',
                'name' => 'TUNCELİ',
                'plate_no' => '62',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'slug' => 'sanliurfa',
                'name' => 'ŞANLIURFA',
                'plate_no' => '63',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'slug' => 'usak',
                'name' => 'UŞAK',
                'plate_no' => '64',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
                'slug' => 'van',
                'name' => 'VAN',
                'plate_no' => '65',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 66,
                'slug' => 'yozgat',
                'name' => 'YOZGAT',
                'plate_no' => '66',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 67,
                'slug' => 'zonguldak',
                'name' => 'ZONGULDAK',
                'plate_no' => '67',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 68,
                'slug' => 'aksaray',
                'name' => 'AKSARAY',
                'plate_no' => '68',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 69,
                'slug' => 'bayburt',
                'name' => 'BAYBURT',
                'plate_no' => '69',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 70,
                'slug' => 'karaman',
                'name' => 'KARAMAN',
                'plate_no' => '70',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 71,
                'slug' => 'kirikkale',
                'name' => 'KIRIKKALE',
                'plate_no' => '71',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 72,
                'slug' => 'batman',
                'name' => 'BATMAN',
                'plate_no' => '72',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 73,
                'slug' => 'sirnak',
                'name' => 'ŞIRNAK',
                'plate_no' => '73',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 74,
                'slug' => 'bartin',
                'name' => 'BARTIN',
                'plate_no' => '74',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 75,
                'slug' => 'ardahan',
                'name' => 'ARDAHAN',
                'plate_no' => '75',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 76,
                'slug' => 'igdir',
                'name' => 'IĞDIR',
                'plate_no' => '76',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 77,
                'slug' => 'yalova',
                'name' => 'YALOVA',
                'plate_no' => '77',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 78,
                'slug' => 'karabuk',
                'name' => 'KARABÜK',
                'plate_no' => '78',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 79,
                'slug' => 'kilis',
                'name' => 'KİLİS',
                'plate_no' => '79',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 80,
                'slug' => 'osmaniye',
                'name' => 'OSMANİYE',
                'plate_no' => '80',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 81,
                'slug' => 'duzce',
                'name' => 'DÜZCE',
                'plate_no' => '81',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 501,
                'slug' => 'lefkose-kibris',
            'name' => 'LEFKOŞE (KIBRIS)',
                'plate_no' => '501',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 502,
                'slug' => 'girne-kibris',
            'name' => 'GİRNE (KIBRIS)',
                'plate_no' => '502',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 503,
                'slug' => 'magusa-kibris',
            'name' => 'MAĞUSA (KIBRIS)',
                'plate_no' => '503',
                'phone_code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}