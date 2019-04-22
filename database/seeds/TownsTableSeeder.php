<?php

use Illuminate\Database\Seeder;

class TownsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('towns')->delete();
        
        \DB::table('towns')->insert(array (
            0 => 
            array (
                'id' => 1101,
                'city_id' => 37,
                'slug' => 'abana',
                'name' => 'ABANA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 1102,
                'city_id' => 20,
                'slug' => 'acipayam',
                'name' => 'ACIPAYAM',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 1103,
                'city_id' => 34,
                'slug' => 'adalar',
                'name' => 'ADALAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 1104,
                'city_id' => 1,
                'slug' => 'seyhan',
                'name' => 'SEYHAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 1105,
                'city_id' => 2,
                'slug' => 'merkez',
                'name' => 'MERKEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 1106,
                'city_id' => 13,
                'slug' => 'adilcevaz',
                'name' => 'ADİLCEVAZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 1107,
                'city_id' => 46,
                'slug' => 'afsin',
                'name' => 'AFŞİN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 1108,
                'city_id' => 3,
                'slug' => 'merkez',
                'name' => 'MERKEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 1109,
                'city_id' => 15,
                'slug' => 'aglasun',
                'name' => 'AĞLASUN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 1110,
                'city_id' => 23,
                'slug' => 'agin',
                'name' => 'AĞIN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 1111,
                'city_id' => 4,
                'slug' => 'merkez',
                'name' => 'MERKEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 1112,
                'city_id' => 13,
                'slug' => 'ahlat',
                'name' => 'AHLAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 1113,
                'city_id' => 61,
                'slug' => 'akcaabat',
                'name' => 'AKÇAABAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 1114,
                'city_id' => 44,
                'slug' => 'akcadag',
                'name' => 'AKÇADAĞ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 1115,
                'city_id' => 63,
                'slug' => 'akcakale',
                'name' => 'AKÇAKALE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 1116,
                'city_id' => 81,
                'slug' => 'akcakoca',
                'name' => 'AKÇAKOCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 1117,
                'city_id' => 66,
                'slug' => 'akdagmadeni',
                'name' => 'AKDAĞMADENİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 1118,
                'city_id' => 45,
                'slug' => 'akhisar',
                'name' => 'AKHİSAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 1119,
                'city_id' => 52,
                'slug' => 'akkus',
                'name' => 'AKKUŞ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 1120,
                'city_id' => 68,
                'slug' => 'merkez',
                'name' => 'MERKEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 1121,
                'city_id' => 7,
                'slug' => 'akseki',
                'name' => 'AKSEKİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 1122,
                'city_id' => 42,
                'slug' => 'aksehir',
                'name' => 'AKŞEHİR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 1123,
                'city_id' => 54,
                'slug' => 'akyazi',
                'name' => 'AKYAZI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 1124,
                'city_id' => 19,
                'slug' => 'alaca',
                'name' => 'ALACA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 1125,
                'city_id' => 55,
                'slug' => 'alacam',
                'name' => 'ALAÇAM',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 1126,
                'city_id' => 7,
                'slug' => 'alanya',
                'name' => 'ALANYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 1127,
                'city_id' => 45,
                'slug' => 'alasehir',
                'name' => 'ALAŞEHİR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 1128,
                'city_id' => 35,
                'slug' => 'aliaga',
                'name' => 'ALİAĞA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 1129,
                'city_id' => 60,
                'slug' => 'almus',
                'name' => 'ALMUS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 1130,
                'city_id' => 6,
                'slug' => 'altindag',
                'name' => 'ALTINDAĞ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 1131,
                'city_id' => 31,
                'slug' => 'altinozu',
                'name' => 'ALTINÖZÜ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 1132,
                'city_id' => 43,
                'slug' => 'altintas',
                'name' => 'ALTINTAŞ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 1133,
                'city_id' => 28,
                'slug' => 'alucra',
                'name' => 'ALUCRA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 1134,
                'city_id' => 5,
                'slug' => 'merkez',
                'name' => 'MERKEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 1135,
                'city_id' => 33,
                'slug' => 'anamur',
                'name' => 'ANAMUR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 1136,
                'city_id' => 46,
                'slug' => 'andirin',
                'name' => 'ANDIRIN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 1139,
                'city_id' => 27,
                'slug' => 'araban',
                'name' => 'ARABAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 1140,
                'city_id' => 37,
                'slug' => 'arac',
                'name' => 'ARAÇ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 1141,
                'city_id' => 61,
                'slug' => 'arakli',
                'name' => 'ARAKLI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 1142,
                'city_id' => 76,
                'slug' => 'aralik',
                'name' => 'ARALIK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 1143,
                'city_id' => 44,
                'slug' => 'arapgir',
                'name' => 'ARAPGİR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 1144,
                'city_id' => 75,
                'slug' => 'merkez',
                'name' => 'MERKEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 1145,
                'city_id' => 8,
                'slug' => 'ardanuc',
                'name' => 'ARDANUÇ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 1146,
                'city_id' => 53,
                'slug' => 'ardesen',
                'name' => 'ARDEŞEN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 1147,
                'city_id' => 8,
                'slug' => 'arhavi',
                'name' => 'ARHAVİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 1148,
                'city_id' => 44,
                'slug' => 'arguvan',
                'name' => 'ARGUVAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 1149,
                'city_id' => 36,
                'slug' => 'arpacay',
                'name' => 'ARPAÇAY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 1150,
                'city_id' => 61,
                'slug' => 'arsin',
                'name' => 'ARSİN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 1151,
                'city_id' => 60,
                'slug' => 'artova',
                'name' => 'ARTOVA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 1152,
                'city_id' => 8,
                'slug' => 'merkez',
                'name' => 'MERKEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 1153,
                'city_id' => 25,
                'slug' => 'askale',
                'name' => 'AŞKALE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 1154,
                'city_id' => 32,
                'slug' => 'atabey',
                'name' => 'ATABEY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 1155,
                'city_id' => 50,
                'slug' => 'avanos',
                'name' => 'AVANOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 1156,
                'city_id' => 57,
                'slug' => 'ayancik',
                'name' => 'AYANCIK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 1157,
                'city_id' => 6,
                'slug' => 'ayas',
                'name' => 'AYAŞ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 1158,
                'city_id' => 52,
                'slug' => 'aybasti',
                'name' => 'AYBASTI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 1160,
                'city_id' => 17,
                'slug' => 'ayvacik',
                'name' => 'AYVACIK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 1161,
                'city_id' => 10,
                'slug' => 'ayvalik',
                'name' => 'AYVALIK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 1162,
                'city_id' => 37,
                'slug' => 'azdavay',
                'name' => 'AZDAVAY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 1163,
                'city_id' => 39,
                'slug' => 'babaeski',
                'name' => 'BABAESKİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 1164,
                'city_id' => 55,
                'slug' => 'bafra',
                'name' => 'BAFRA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 1165,
                'city_id' => 80,
                'slug' => 'bahce',
                'name' => 'BAHÇE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 1166,
                'city_id' => 34,
                'slug' => 'bakirkoy',
                'name' => 'BAKIRKÖY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 1167,
                'city_id' => 6,
                'slug' => 'bala',
                'name' => 'BALA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 1169,
                'city_id' => 10,
                'slug' => 'balya',
                'name' => 'BALYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 1170,
                'city_id' => 64,
                'slug' => 'banaz',
                'name' => 'BANAZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 1171,
                'city_id' => 10,
                'slug' => 'bandirma',
                'name' => 'BANDIRMA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 1172,
                'city_id' => 74,
                'slug' => 'merkez',
                'name' => 'MERKEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 1173,
                'city_id' => 23,
                'slug' => 'baskil',
                'name' => 'BASKİL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 1174,
                'city_id' => 72,
                'slug' => 'merkez',
                'name' => 'MERKEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 1175,
                'city_id' => 65,
                'slug' => 'baskale',
                'name' => 'BAŞKALE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 1176,
                'city_id' => 69,
                'slug' => 'merkez',
                'name' => 'MERKEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 1177,
                'city_id' => 19,
                'slug' => 'bayat',
                'name' => 'BAYAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 1178,
                'city_id' => 35,
                'slug' => 'bayindir',
                'name' => 'BAYINDIR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 1179,
                'city_id' => 56,
                'slug' => 'baykan',
                'name' => 'BAYKAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 1180,
                'city_id' => 17,
                'slug' => 'bayramic',
                'name' => 'BAYRAMİÇ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 1181,
                'city_id' => 35,
                'slug' => 'bergama',
                'name' => 'BERGAMA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 1182,
                'city_id' => 2,
                'slug' => 'besni',
                'name' => 'BESNİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 1183,
                'city_id' => 34,
                'slug' => 'besiktas',
                'name' => 'BEŞİKTAŞ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 1184,
                'city_id' => 72,
                'slug' => 'besiri',
                'name' => 'BEŞİRİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 1185,
                'city_id' => 34,
                'slug' => 'beykoz',
                'name' => 'BEYKOZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 1186,
                'city_id' => 34,
                'slug' => 'beyoglu',
                'name' => 'BEYOĞLU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 1187,
                'city_id' => 6,
                'slug' => 'beypazari',
                'name' => 'BEYPAZARI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 1188,
                'city_id' => 42,
                'slug' => 'beysehir',
                'name' => 'BEYŞEHİR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 1189,
                'city_id' => 73,
                'slug' => 'beytussebap',
                'name' => 'BEYTÜŞŞEBAP',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 1190,
                'city_id' => 17,
                'slug' => 'biga',
                'name' => 'BİGA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 1191,
                'city_id' => 10,
                'slug' => 'bigadic',
                'name' => 'BİGADİÇ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 1192,
                'city_id' => 11,
                'slug' => 'merkez',
                'name' => 'MERKEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 1193,
                'city_id' => 12,
                'slug' => 'merkez',
                'name' => 'MERKEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 1194,
                'city_id' => 63,
                'slug' => 'birecik',
                'name' => 'BİRECİK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 1195,
                'city_id' => 21,
                'slug' => 'bismil',
                'name' => 'BİSMİL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 1196,
                'city_id' => 13,
                'slug' => 'merkez',
                'name' => 'MERKEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 1197,
                'city_id' => 48,
                'slug' => 'bodrum',
                'name' => 'BODRUM',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 1198,
                'city_id' => 66,
                'slug' => 'bogazliyan',
                'name' => 'BOĞAZLIYAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 1199,
                'city_id' => 14,
                'slug' => 'merkez',
                'name' => 'MERKEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 1200,
                'city_id' => 3,
                'slug' => 'bolvadin',
                'name' => 'BOLVADİN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 1201,
                'city_id' => 51,
                'slug' => 'bor',
                'name' => 'BOR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 1202,
                'city_id' => 8,
                'slug' => 'borcka',
                'name' => 'BORÇKA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 1203,
                'city_id' => 35,
                'slug' => 'bornova',
                'name' => 'BORNOVA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 1204,
                'city_id' => 57,
                'slug' => 'boyabat',
                'name' => 'BOYABAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 1205,
                'city_id' => 17,
                'slug' => 'bozcaada',
                'name' => 'BOZCAADA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 1206,
                'city_id' => 9,
                'slug' => 'bozdogan',
                'name' => 'BOZDOĞAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 1207,
                'city_id' => 42,
                'slug' => 'bozkir',
                'name' => 'BOZKIR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 1208,
                'city_id' => 37,
                'slug' => 'bozkurt',
                'name' => 'BOZKURT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 1209,
                'city_id' => 63,
                'slug' => 'bozova',
                'name' => 'BOZOVA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 1210,
                'city_id' => 11,
                'slug' => 'bozuyuk',
                'name' => 'BOZÜYÜK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 1211,
                'city_id' => 15,
                'slug' => 'bucak',
                'name' => 'BUCAK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 1212,
                'city_id' => 28,
                'slug' => 'bulancak',
                'name' => 'BULANCAK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 1213,
                'city_id' => 49,
                'slug' => 'bulanik',
                'name' => 'BULANIK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 1214,
                'city_id' => 20,
                'slug' => 'buldan',
                'name' => 'BULDAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 1215,
                'city_id' => 15,
                'slug' => 'merkez',
                'name' => 'MERKEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 1216,
                'city_id' => 10,
                'slug' => 'burhaniye',
                'name' => 'BURHANİYE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 1218,
                'city_id' => 38,
                'slug' => 'bunyan',
                'name' => 'BÜNYAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 1219,
                'city_id' => 1,
                'slug' => 'ceyhan',
                'name' => 'CEYHAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 1220,
                'city_id' => 63,
                'slug' => 'ceylanpinar',
                'name' => 'CEYLANPINAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 1221,
                'city_id' => 37,
                'slug' => 'cide',
                'name' => 'CİDE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 1222,
                'city_id' => 42,
                'slug' => 'cihanbeyli',
                'name' => 'CİHANBEYLİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 1223,
                'city_id' => 73,
                'slug' => 'cizre',
                'name' => 'CİZRE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 1224,
                'city_id' => 20,
                'slug' => 'cal',
                'name' => 'ÇAL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 1225,
                'city_id' => 51,
                'slug' => 'camardi',
                'name' => 'ÇAMARDI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 1226,
                'city_id' => 20,
                'slug' => 'cameli',
                'name' => 'ÇAMELİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 1227,
                'city_id' => 6,
                'slug' => 'camlidere',
                'name' => 'ÇAMLIDERE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 1228,
                'city_id' => 53,
                'slug' => 'camlihemsin',
                'name' => 'ÇAMLIHEMŞİN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 1229,
                'city_id' => 17,
                'slug' => 'can',
                'name' => 'ÇAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 1230,
                'city_id' => 17,
                'slug' => 'merkez',
                'name' => 'MERKEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 1231,
                'city_id' => 6,
                'slug' => 'cankaya',
                'name' => 'ÇANKAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 1232,
                'city_id' => 18,
                'slug' => 'merkez',
                'name' => 'MERKEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 1233,
                'city_id' => 20,
                'slug' => 'cardak',
                'name' => 'ÇARDAK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 1234,
                'city_id' => 55,
                'slug' => 'carsamba',
                'name' => 'ÇARŞAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 1235,
                'city_id' => 25,
                'slug' => 'cat',
                'name' => 'ÇAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 1236,
                'city_id' => 65,
                'slug' => 'catak',
                'name' => 'ÇATAK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 1237,
                'city_id' => 34,
                'slug' => 'catalca',
                'name' => 'ÇATALCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 1238,
                'city_id' => 37,
                'slug' => 'catalzeytin',
                'name' => 'ÇATALZEYTİN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 1239,
                'city_id' => 3,
                'slug' => 'cay',
                'name' => 'ÇAY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 1240,
                'city_id' => 67,
                'slug' => 'caycuma',
                'name' => 'ÇAYCUMA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 1241,
                'city_id' => 53,
                'slug' => 'cayeli',
                'name' => 'ÇAYELİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 1242,
                'city_id' => 66,
                'slug' => 'cayiralan',
                'name' => 'ÇAYIRALAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 1243,
                'city_id' => 24,
                'slug' => 'cayirli',
                'name' => 'ÇAYIRLI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 1244,
                'city_id' => 61,
                'slug' => 'caykara',
                'name' => 'ÇAYKARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 1245,
                'city_id' => 66,
                'slug' => 'cekerek',
                'name' => 'ÇEKEREK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 1246,
                'city_id' => 2,
                'slug' => 'celikhan',
                'name' => 'ÇELİKHAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 1247,
                'city_id' => 62,
                'slug' => 'cemisgezek',
                'name' => 'ÇEMİŞGEZEK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 1248,
                'city_id' => 18,
                'slug' => 'cerkes',
                'name' => 'ÇERKEŞ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 1249,
                'city_id' => 21,
                'slug' => 'cermik',
                'name' => 'ÇERMİK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 1250,
                'city_id' => 59,
                'slug' => 'cerkezkoy',
                'name' => 'ÇERKEZKÖY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 1251,
                'city_id' => 35,
                'slug' => 'cesme',
                'name' => 'ÇEŞME',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 1252,
                'city_id' => 75,
                'slug' => 'cildir',
                'name' => 'ÇILDIR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 1253,
                'city_id' => 21,
                'slug' => 'cinar',
                'name' => 'ÇINAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 1254,
                'city_id' => 40,
                'slug' => 'cicekdagi',
                'name' => 'ÇİÇEKDAĞI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 1255,
                'city_id' => 26,
                'slug' => 'cifteler',
                'name' => 'ÇİFTELER',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 1256,
                'city_id' => 9,
                'slug' => 'cine',
                'name' => 'ÇİNE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 1257,
                'city_id' => 20,
                'slug' => 'civril',
                'name' => 'ÇİVRİL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 1258,
                'city_id' => 59,
                'slug' => 'corlu',
                'name' => 'ÇORLU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 1259,
                'city_id' => 19,
                'slug' => 'merkez',
                'name' => 'MERKEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 1260,
                'city_id' => 6,
                'slug' => 'cubuk',
                'name' => 'ÇUBUK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 1261,
                'city_id' => 30,
                'slug' => 'cukurca',
                'name' => 'ÇUKURCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 1262,
                'city_id' => 42,
                'slug' => 'cumra',
                'name' => 'ÇUMRA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 1263,
                'city_id' => 21,
                'slug' => 'cungus',
                'name' => 'ÇÜNGÜŞ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 1264,
                'city_id' => 37,
                'slug' => 'daday',
                'name' => 'DADAY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 1265,
                'city_id' => 44,
                'slug' => 'darende',
                'name' => 'DARENDE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 1266,
                'city_id' => 48,
                'slug' => 'datca',
                'name' => 'DATÇA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 1267,
                'city_id' => 3,
                'slug' => 'dazkiri',
                'name' => 'DAZKIRI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 1268,
                'city_id' => 71,
                'slug' => 'delice',
                'name' => 'DELİCE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 1269,
                'city_id' => 45,
                'slug' => 'demirci',
                'name' => 'DEMİRCİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 1270,
                'city_id' => 39,
                'slug' => 'demirkoy',
                'name' => 'DEMİRKÖY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 1272,
                'city_id' => 28,
                'slug' => 'dereli',
                'name' => 'DERELİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 1273,
                'city_id' => 47,
                'slug' => 'derik',
                'name' => 'DERİK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 1274,
                'city_id' => 50,
                'slug' => 'derinkuyu',
                'name' => 'DERİNKUYU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 1275,
                'city_id' => 38,
                'slug' => 'develi',
                'name' => 'DEVELİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 1276,
                'city_id' => 67,
                'slug' => 'devrek',
                'name' => 'DEVREK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 1277,
                'city_id' => 37,
                'slug' => 'devrekani',
                'name' => 'DEVREKANİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 1278,
                'city_id' => 21,
                'slug' => 'dicle',
                'name' => 'DİCLE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 1279,
                'city_id' => 36,
                'slug' => 'digor',
                'name' => 'DİGOR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 1280,
                'city_id' => 35,
                'slug' => 'dikili',
                'name' => 'DİKİLİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 1281,
                'city_id' => 3,
                'slug' => 'dinar',
                'name' => 'DİNAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 1282,
                'city_id' => 58,
                'slug' => 'divrigi',
                'name' => 'DİVRİĞİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 1283,
                'city_id' => 4,
                'slug' => 'diyadin',
                'name' => 'DİYADİN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 1285,
                'city_id' => 42,
                'slug' => 'doganhisar',
                'name' => 'DOĞANHİSAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 1286,
                'city_id' => 44,
                'slug' => 'dogansehir',
                'name' => 'DOĞANŞEHİR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 1287,
                'city_id' => 4,
                'slug' => 'dogubayazit',
                'name' => 'DOĞUBAYAZIT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 1288,
                'city_id' => 43,
                'slug' => 'domanic',
                'name' => 'DOMANİÇ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 1289,
                'city_id' => 31,
                'slug' => 'dortyol',
                'name' => 'DÖRTYOL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 1290,
                'city_id' => 57,
                'slug' => 'duragan',
                'name' => 'DURAĞAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 1291,
                'city_id' => 10,
                'slug' => 'dursunbey',
                'name' => 'DURSUNBEY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 1292,
                'city_id' => 81,
                'slug' => 'merkez',
                'name' => 'MERKEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 1293,
                'city_id' => 17,
                'slug' => 'eceabat',
                'name' => 'ECEABAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 1294,
                'city_id' => 10,
                'slug' => 'edremit',
                'name' => 'EDREMİT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 1295,
                'city_id' => 22,
                'slug' => 'merkez',
                'name' => 'MERKEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 1296,
                'city_id' => 78,
                'slug' => 'eflani',
                'name' => 'EFLANİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 1297,
                'city_id' => 32,
                'slug' => 'egirdir',
                'name' => 'EĞİRDİR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 1298,
                'city_id' => 23,
                'slug' => 'merkez',
                'name' => 'MERKEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 1299,
                'city_id' => 46,
                'slug' => 'elbistan',
                'name' => 'ELBİSTAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 1300,
                'city_id' => 18,
                'slug' => 'eldivan',
                'name' => 'ELDİVAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 1301,
                'city_id' => 4,
                'slug' => 'eleskirt',
                'name' => 'ELEŞKİRT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 1302,
                'city_id' => 6,
                'slug' => 'elmadag',
                'name' => 'ELMADAĞ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 1303,
                'city_id' => 7,
                'slug' => 'elmali',
                'name' => 'ELMALI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 1304,
                'city_id' => 43,
                'slug' => 'emet',
                'name' => 'EMET',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 1306,
                'city_id' => 3,
                'slug' => 'emirdag',
                'name' => 'EMİRDAĞ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 1307,
                'city_id' => 22,
                'slug' => 'enez',
                'name' => 'ENEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 1308,
                'city_id' => 60,
                'slug' => 'erbaa',
                'name' => 'ERBAA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 1309,
                'city_id' => 65,
                'slug' => 'ercis',
                'name' => 'ERCİŞ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 1310,
                'city_id' => 10,
                'slug' => 'erdek',
                'name' => 'ERDEK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 1311,
                'city_id' => 33,
                'slug' => 'erdemli',
                'name' => 'ERDEMLİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 1312,
                'city_id' => 42,
                'slug' => 'eregli',
                'name' => 'EREĞLİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 1313,
                'city_id' => 67,
                'slug' => 'eregli',
                'name' => 'EREĞLİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 1314,
                'city_id' => 57,
                'slug' => 'erfelek',
                'name' => 'ERFELEK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 1315,
                'city_id' => 21,
                'slug' => 'ergani',
                'name' => 'ERGANİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 1316,
                'city_id' => 70,
                'slug' => 'ermenek',
                'name' => 'ERMENEK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 1317,
                'city_id' => 56,
                'slug' => 'eruh',
                'name' => 'ERUH',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 1318,
                'city_id' => 24,
                'slug' => 'merkez',
                'name' => 'MERKEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 1320,
                'city_id' => 28,
                'slug' => 'espiye',
                'name' => 'ESPİYE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 1321,
                'city_id' => 78,
                'slug' => 'eskipazar',
                'name' => 'ESKİPAZAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 1323,
                'city_id' => 64,
                'slug' => 'esme',
                'name' => 'EŞME',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 1324,
                'city_id' => 28,
                'slug' => 'eynesil',
                'name' => 'EYNESİL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 1325,
                'city_id' => 34,
                'slug' => 'eyupsultan',
                'name' => 'EYÜPSULTAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 1326,
                'city_id' => 17,
                'slug' => 'ezine',
                'name' => 'EZİNE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 1327,
                'city_id' => 34,
                'slug' => 'fatih',
                'name' => 'FATİH',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 1328,
                'city_id' => 52,
                'slug' => 'fatsa',
                'name' => 'FATSA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 1329,
                'city_id' => 1,
                'slug' => 'feke',
                'name' => 'FEKE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 1330,
                'city_id' => 38,
                'slug' => 'felahiye',
                'name' => 'FELAHİYE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 1331,
                'city_id' => 48,
                'slug' => 'fethiye',
                'name' => 'FETHİYE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 1332,
                'city_id' => 53,
                'slug' => 'findikli',
                'name' => 'FINDIKLI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 1333,
                'city_id' => 7,
                'slug' => 'finike',
                'name' => 'FİNİKE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 1334,
                'city_id' => 35,
                'slug' => 'foca',
                'name' => 'FOÇA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 1336,
                'city_id' => 34,
                'slug' => 'gaziosmanpasa',
                'name' => 'GAZİOSMANPAŞA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 1337,
                'city_id' => 7,
                'slug' => 'gazipasa',
                'name' => 'GAZİPAŞA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 1338,
                'city_id' => 41,
                'slug' => 'gebze',
                'name' => 'GEBZE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 1339,
                'city_id' => 43,
                'slug' => 'gediz',
                'name' => 'GEDİZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 1340,
                'city_id' => 17,
                'slug' => 'gelibolu',
                'name' => 'GELİBOLU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 1341,
                'city_id' => 32,
                'slug' => 'gelendost',
                'name' => 'GELENDOST',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 1342,
                'city_id' => 58,
                'slug' => 'gemerek',
                'name' => 'GEMEREK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 1343,
                'city_id' => 16,
                'slug' => 'gemlik',
                'name' => 'GEMLİK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 1344,
                'city_id' => 12,
                'slug' => 'genc',
                'name' => 'GENÇ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 1345,
                'city_id' => 72,
                'slug' => 'gercus',
                'name' => 'GERCÜŞ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 1346,
                'city_id' => 14,
                'slug' => 'gerede',
                'name' => 'GEREDE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 1347,
                'city_id' => 2,
                'slug' => 'gerger',
                'name' => 'GERGER',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 1348,
                'city_id' => 9,
                'slug' => 'germencik',
                'name' => 'GERMENCİK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 1349,
                'city_id' => 57,
                'slug' => 'gerze',
                'name' => 'GERZE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 1350,
                'city_id' => 65,
                'slug' => 'gevas',
                'name' => 'GEVAŞ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 1351,
                'city_id' => 54,
                'slug' => 'geyve',
                'name' => 'GEYVE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 1352,
                'city_id' => 28,
                'slug' => 'merkez',
                'name' => 'MERKEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 1353,
                'city_id' => 46,
                'slug' => 'goksun',
                'name' => 'GÖKSUN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 1354,
                'city_id' => 2,
                'slug' => 'golbasi',
                'name' => 'GÖLBAŞI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 1355,
                'city_id' => 41,
                'slug' => 'golcuk',
                'name' => 'GÖLCÜK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 1356,
                'city_id' => 75,
                'slug' => 'gole',
                'name' => 'GÖLE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 1357,
                'city_id' => 15,
                'slug' => 'golhisar',
                'name' => 'GÖLHİSAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 1358,
                'city_id' => 52,
                'slug' => 'golkoy',
                'name' => 'GÖLKÖY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 1359,
                'city_id' => 11,
                'slug' => 'golpazari',
                'name' => 'GÖLPAZARI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 1360,
                'city_id' => 10,
                'slug' => 'gonen',
                'name' => 'GÖNEN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 1361,
                'city_id' => 28,
                'slug' => 'gorele',
                'name' => 'GÖRELE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 1362,
                'city_id' => 45,
                'slug' => 'gordes',
                'name' => 'GÖRDES',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 1363,
                'city_id' => 5,
                'slug' => 'goynucek',
                'name' => 'GÖYNÜCEK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 1364,
                'city_id' => 14,
                'slug' => 'goynuk',
                'name' => 'GÖYNÜK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 1365,
                'city_id' => 6,
                'slug' => 'gudul',
                'name' => 'GÜDÜL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 1366,
                'city_id' => 33,
                'slug' => 'gulnar',
                'name' => 'GÜLNAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 1367,
                'city_id' => 50,
                'slug' => 'gulsehir',
                'name' => 'GÜLŞEHİR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 1368,
                'city_id' => 5,
                'slug' => 'gumushacikoy',
                'name' => 'GÜMÜŞHACIKÖY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 1369,
                'city_id' => 29,
                'slug' => 'merkez',
                'name' => 'MERKEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 1370,
                'city_id' => 7,
                'slug' => 'gundogmus',
                'name' => 'GÜNDOĞMUŞ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 1371,
                'city_id' => 20,
                'slug' => 'guney',
                'name' => 'GÜNEY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 1372,
                'city_id' => 65,
                'slug' => 'gurpinar',
                'name' => 'GÜRPINAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 1373,
                'city_id' => 58,
                'slug' => 'gurun',
                'name' => 'GÜRÜN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 1374,
                'city_id' => 50,
                'slug' => 'hacibektas',
                'name' => 'HACIBEKTAŞ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 1375,
                'city_id' => 42,
                'slug' => 'hadim',
                'name' => 'HADİM',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 1376,
                'city_id' => 58,
                'slug' => 'hafik',
                'name' => 'HAFİK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 1377,
                'city_id' => 30,
                'slug' => 'merkez',
                'name' => 'MERKEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 1378,
                'city_id' => 63,
                'slug' => 'halfeti',
                'name' => 'HALFETİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 1379,
                'city_id' => 4,
                'slug' => 'hamur',
                'name' => 'HAMUR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 1380,
                'city_id' => 75,
                'slug' => 'hanak',
                'name' => 'HANAK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => 1381,
                'city_id' => 21,
                'slug' => 'hani',
                'name' => 'HANİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => 1382,
                'city_id' => 31,
                'slug' => 'hassa',
                'name' => 'HASSA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => 1384,
                'city_id' => 10,
                'slug' => 'havran',
                'name' => 'HAVRAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => 1385,
                'city_id' => 22,
                'slug' => 'havsa',
                'name' => 'HAVSA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => 1386,
                'city_id' => 55,
                'slug' => 'havza',
                'name' => 'HAVZA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => 1387,
                'city_id' => 6,
                'slug' => 'haymana',
                'name' => 'HAYMANA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => 1388,
                'city_id' => 59,
                'slug' => 'hayrabolu',
                'name' => 'HAYRABOLU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => 1389,
                'city_id' => 21,
                'slug' => 'hazro',
                'name' => 'HAZRO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => 1390,
                'city_id' => 44,
                'slug' => 'hekimhan',
                'name' => 'HEKİMHAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => 1391,
                'city_id' => 54,
                'slug' => 'hendek',
                'name' => 'HENDEK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => 1392,
                'city_id' => 25,
                'slug' => 'hinis',
                'name' => 'HINIS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => 1393,
                'city_id' => 63,
                'slug' => 'hilvan',
                'name' => 'HİLVAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => 1394,
                'city_id' => 13,
                'slug' => 'hizan',
                'name' => 'HİZAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => 1395,
                'city_id' => 8,
                'slug' => 'hopa',
                'name' => 'HOPA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => 1396,
                'city_id' => 25,
                'slug' => 'horasan',
                'name' => 'HORASAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => 1397,
                'city_id' => 62,
                'slug' => 'hozat',
                'name' => 'HOZAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => 1398,
                'city_id' => 76,
                'slug' => 'merkez',
                'name' => 'MERKEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => 1399,
                'city_id' => 18,
                'slug' => 'ilgaz',
                'name' => 'ILGAZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => 1400,
                'city_id' => 42,
                'slug' => 'ilgin',
                'name' => 'ILGIN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => 1401,
                'city_id' => 32,
                'slug' => 'merkez',
                'name' => 'MERKEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => 1403,
                'city_id' => 73,
                'slug' => 'idil',
                'name' => 'İDİL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => 1404,
                'city_id' => 3,
                'slug' => 'ihsaniye',
                'name' => 'İHSANİYE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => 1405,
                'city_id' => 53,
                'slug' => 'ikizdere',
                'name' => 'İKİZDERE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => 1406,
                'city_id' => 24,
                'slug' => 'ilic',
                'name' => 'İLİÇ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => 1407,
                'city_id' => 58,
                'slug' => 'imranli',
                'name' => 'İMRANLI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => 1408,
                'city_id' => 17,
                'slug' => 'gokceada',
                'name' => 'GÖKÇEADA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => 1409,
                'city_id' => 38,
                'slug' => 'incesu',
                'name' => 'İNCESU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => 1410,
                'city_id' => 37,
                'slug' => 'inebolu',
                'name' => 'İNEBOLU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => 1411,
                'city_id' => 16,
                'slug' => 'inegol',
                'name' => 'İNEGÖL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => 1412,
                'city_id' => 22,
                'slug' => 'ipsala',
                'name' => 'İPSALA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => 1413,
                'city_id' => 31,
                'slug' => 'iskenderun',
                'name' => 'İSKENDERUN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => 1414,
                'city_id' => 19,
                'slug' => 'iskilip',
                'name' => 'İSKİLİP',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => 1415,
                'city_id' => 27,
                'slug' => 'islahiye',
                'name' => 'İSLAHİYE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => 1416,
                'city_id' => 25,
                'slug' => 'ispir',
                'name' => 'İSPİR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => 1418,
                'city_id' => 10,
                'slug' => 'ivrindi',
                'name' => 'İVRİNDİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => 1420,
                'city_id' => 16,
                'slug' => 'iznik',
                'name' => 'İZNİK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => 1421,
                'city_id' => 34,
                'slug' => 'kadikoy',
                'name' => 'KADIKÖY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => 1422,
                'city_id' => 42,
                'slug' => 'kadinhani',
                'name' => 'KADINHANI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => 1423,
                'city_id' => 80,
                'slug' => 'kadirli',
                'name' => 'KADİRLİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => 1424,
                'city_id' => 36,
                'slug' => 'kagizman',
                'name' => 'KAĞIZMAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => 1425,
                'city_id' => 2,
                'slug' => 'kahta',
                'name' => 'KAHTA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => 1426,
                'city_id' => 20,
                'slug' => 'kale',
                'name' => 'KALE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => 1427,
                'city_id' => 6,
                'slug' => 'kalecik',
                'name' => 'KALECİK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => 1428,
                'city_id' => 53,
                'slug' => 'kalkandere',
                'name' => 'KALKANDERE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => 1429,
                'city_id' => 40,
                'slug' => 'kaman',
                'name' => 'KAMAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => 1430,
                'city_id' => 41,
                'slug' => 'kandira',
                'name' => 'KANDIRA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => 1431,
                'city_id' => 58,
                'slug' => 'kangal',
                'name' => 'KANGAL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => 1432,
                'city_id' => 35,
                'slug' => 'karaburun',
                'name' => 'KARABURUN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => 1433,
                'city_id' => 78,
                'slug' => 'merkez',
                'name' => 'MERKEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => 1434,
                'city_id' => 16,
                'slug' => 'karacabey',
                'name' => 'KARACABEY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => 1435,
                'city_id' => 9,
                'slug' => 'karacasu',
                'name' => 'KARACASU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => 1436,
                'city_id' => 64,
                'slug' => 'karahalli',
                'name' => 'KARAHALLI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => 1437,
                'city_id' => 1,
                'slug' => 'karaisali',
                'name' => 'KARAİSALI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => 1438,
                'city_id' => 23,
                'slug' => 'karakocan',
                'name' => 'KARAKOÇAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => 1439,
                'city_id' => 70,
                'slug' => 'merkez',
                'name' => 'MERKEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => 1440,
                'city_id' => 41,
                'slug' => 'karamursel',
                'name' => 'KARAMÜRSEL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => 1441,
                'city_id' => 42,
                'slug' => 'karapinar',
                'name' => 'KARAPINAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => 1442,
                'city_id' => 54,
                'slug' => 'karasu',
                'name' => 'KARASU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => 1443,
                'city_id' => 1,
                'slug' => 'karatas',
                'name' => 'KARATAŞ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => 1444,
                'city_id' => 25,
                'slug' => 'karayazi',
                'name' => 'KARAYAZI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => 1445,
                'city_id' => 19,
                'slug' => 'kargi',
                'name' => 'KARGI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => 1446,
                'city_id' => 12,
                'slug' => 'karliova',
                'name' => 'KARLIOVA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => 1447,
                'city_id' => 36,
                'slug' => 'merkez',
                'name' => 'MERKEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => 1448,
                'city_id' => 35,
                'slug' => 'karsiyaka',
                'name' => 'KARŞIYAKA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => 1449,
                'city_id' => 34,
                'slug' => 'kartal',
                'name' => 'KARTAL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => 1450,
                'city_id' => 37,
                'slug' => 'merkez',
                'name' => 'MERKEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'id' => 1451,
                'city_id' => 7,
                'slug' => 'kas',
                'name' => 'KAŞ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'id' => 1452,
                'city_id' => 55,
                'slug' => 'kavak',
                'name' => 'KAVAK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'id' => 1453,
                'city_id' => 54,
                'slug' => 'kaynarca',
                'name' => 'KAYNARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'id' => 1455,
                'city_id' => 23,
                'slug' => 'keban',
                'name' => 'KEBAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'id' => 1456,
                'city_id' => 32,
                'slug' => 'keciborlu',
                'name' => 'KEÇİBORLU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'id' => 1457,
                'city_id' => 16,
                'slug' => 'keles',
                'name' => 'KELES',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => 1458,
                'city_id' => 29,
                'slug' => 'kelkit',
                'name' => 'KELKİT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'id' => 1459,
                'city_id' => 24,
                'slug' => 'kemah',
                'name' => 'KEMAH',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'id' => 1460,
                'city_id' => 24,
                'slug' => 'kemaliye',
                'name' => 'KEMALİYE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'id' => 1461,
                'city_id' => 35,
                'slug' => 'kemalpasa',
                'name' => 'KEMALPAŞA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'id' => 1462,
                'city_id' => 10,
                'slug' => 'kepsut',
                'name' => 'KEPSUT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'id' => 1463,
                'city_id' => 71,
                'slug' => 'keskin',
                'name' => 'KESKİN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'id' => 1464,
                'city_id' => 22,
                'slug' => 'kesan',
                'name' => 'KEŞAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'id' => 1465,
                'city_id' => 28,
                'slug' => 'kesap',
                'name' => 'KEŞAP',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'id' => 1466,
                'city_id' => 14,
                'slug' => 'kibriscik',
                'name' => 'KIBRISCIK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'id' => 1467,
                'city_id' => 35,
                'slug' => 'kinik',
                'name' => 'KINIK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'id' => 1468,
                'city_id' => 31,
                'slug' => 'kirikhan',
                'name' => 'KIRIKHAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'id' => 1469,
                'city_id' => 71,
                'slug' => 'merkez',
                'name' => 'MERKEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'id' => 1470,
                'city_id' => 45,
                'slug' => 'kirkagac',
                'name' => 'KIRKAĞAÇ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'id' => 1471,
                'city_id' => 39,
                'slug' => 'merkez',
                'name' => 'MERKEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'id' => 1472,
                'city_id' => 40,
                'slug' => 'merkez',
                'name' => 'MERKEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'id' => 1473,
                'city_id' => 6,
                'slug' => 'kizilcahamam',
                'name' => 'KIZILCAHAMAM',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'id' => 1474,
                'city_id' => 47,
                'slug' => 'kiziltepe',
                'name' => 'KIZILTEPE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'id' => 1475,
                'city_id' => 12,
                'slug' => 'kigi',
                'name' => 'KİĞI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'id' => 1476,
                'city_id' => 79,
                'slug' => 'merkez',
                'name' => 'MERKEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'id' => 1477,
                'city_id' => 35,
                'slug' => 'kiraz',
                'name' => 'KİRAZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'id' => 1479,
                'city_id' => 9,
                'slug' => 'kocarli',
                'name' => 'KOÇARLI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'id' => 1480,
                'city_id' => 39,
                'slug' => 'kofcaz',
                'name' => 'KOFÇAZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'id' => 1482,
                'city_id' => 52,
                'slug' => 'korgan',
                'name' => 'KORGAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'id' => 1483,
                'city_id' => 7,
                'slug' => 'korkuteli',
                'name' => 'KORKUTELİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'id' => 1484,
                'city_id' => 58,
                'slug' => 'koyulhisar',
                'name' => 'KOYULHİSAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'id' => 1485,
                'city_id' => 50,
                'slug' => 'kozakli',
                'name' => 'KOZAKLI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'id' => 1486,
                'city_id' => 1,
                'slug' => 'kozan',
                'name' => 'KOZAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'id' => 1487,
                'city_id' => 72,
                'slug' => 'kozluk',
                'name' => 'KOZLUK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'id' => 1488,
                'city_id' => 48,
                'slug' => 'koycegiz',
                'name' => 'KÖYCEĞİZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'id' => 1489,
                'city_id' => 45,
                'slug' => 'kula',
                'name' => 'KULA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'id' => 1490,
                'city_id' => 21,
                'slug' => 'kulp',
                'name' => 'KULP',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'id' => 1491,
                'city_id' => 42,
                'slug' => 'kulu',
                'name' => 'KULU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'id' => 1492,
                'city_id' => 7,
                'slug' => 'kumluca',
                'name' => 'KUMLUCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'id' => 1493,
                'city_id' => 52,
                'slug' => 'kumru',
                'name' => 'KUMRU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'id' => 1494,
                'city_id' => 18,
                'slug' => 'kursunlu',
                'name' => 'KURŞUNLU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'id' => 1495,
                'city_id' => 56,
                'slug' => 'kurtalan',
                'name' => 'KURTALAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'id' => 1496,
                'city_id' => 74,
                'slug' => 'kurucasile',
                'name' => 'KURUCAŞİLE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'id' => 1497,
                'city_id' => 9,
                'slug' => 'kusadasi',
                'name' => 'KUŞADASI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'id' => 1498,
                'city_id' => 9,
                'slug' => 'kuyucak',
                'name' => 'KUYUCAK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'id' => 1499,
                'city_id' => 37,
                'slug' => 'kure',
                'name' => 'KÜRE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'id' => 1500,
                'city_id' => 43,
                'slug' => 'merkez',
                'name' => 'MERKEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'id' => 1501,
                'city_id' => 55,
                'slug' => 'ladik',
                'name' => 'LADİK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'id' => 1502,
                'city_id' => 22,
                'slug' => 'lalapasa',
                'name' => 'LALAPAŞA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'id' => 1503,
                'city_id' => 17,
                'slug' => 'lapseki',
                'name' => 'LAPSEKİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'id' => 1504,
                'city_id' => 21,
                'slug' => 'lice',
                'name' => 'LİCE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'id' => 1505,
                'city_id' => 39,
                'slug' => 'luleburgaz',
                'name' => 'LÜLEBURGAZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'id' => 1506,
                'city_id' => 23,
                'slug' => 'maden',
                'name' => 'MADEN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'id' => 1507,
                'city_id' => 61,
                'slug' => 'macka',
                'name' => 'MAÇKA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'id' => 1508,
                'city_id' => 26,
                'slug' => 'mahmudiye',
                'name' => 'MAHMUDİYE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'id' => 1510,
                'city_id' => 49,
                'slug' => 'malazgirt',
                'name' => 'MALAZGİRT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'id' => 1511,
                'city_id' => 59,
                'slug' => 'malkara',
                'name' => 'MALKARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'id' => 1512,
                'city_id' => 7,
                'slug' => 'manavgat',
                'name' => 'MANAVGAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'id' => 1514,
                'city_id' => 10,
                'slug' => 'manyas',
                'name' => 'MANYAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'id' => 1517,
                'city_id' => 48,
                'slug' => 'marmaris',
                'name' => 'MARMARİS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'id' => 1518,
                'city_id' => 62,
                'slug' => 'mazgirt',
                'name' => 'MAZGİRT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'id' => 1519,
                'city_id' => 47,
                'slug' => 'mazidagi',
                'name' => 'MAZIDAĞI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'id' => 1520,
                'city_id' => 19,
                'slug' => 'mecitozu',
                'name' => 'MECİTÖZÜ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'id' => 1521,
                'city_id' => 35,
                'slug' => 'menemen',
                'name' => 'MENEMEN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'id' => 1522,
                'city_id' => 14,
                'slug' => 'mengen',
                'name' => 'MENGEN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'id' => 1523,
                'city_id' => 22,
                'slug' => 'meric',
                'name' => 'MERİÇ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'id' => 1524,
                'city_id' => 5,
                'slug' => 'merzifon',
                'name' => 'MERZİFON',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'id' => 1525,
                'city_id' => 52,
                'slug' => 'mesudiye',
                'name' => 'MESUDİYE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'id' => 1526,
                'city_id' => 47,
                'slug' => 'midyat',
                'name' => 'MİDYAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'id' => 1527,
                'city_id' => 26,
                'slug' => 'mihaliccik',
                'name' => 'MİHALIÇÇIK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'id' => 1528,
                'city_id' => 48,
                'slug' => 'milas',
                'name' => 'MİLAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'id' => 1529,
                'city_id' => 40,
                'slug' => 'mucur',
                'name' => 'MUCUR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'id' => 1530,
                'city_id' => 16,
                'slug' => 'mudanya',
                'name' => 'MUDANYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'id' => 1531,
                'city_id' => 14,
                'slug' => 'mudurnu',
                'name' => 'MUDURNU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'id' => 1533,
                'city_id' => 65,
                'slug' => 'muradiye',
                'name' => 'MURADİYE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'id' => 1534,
                'city_id' => 49,
                'slug' => 'merkez',
                'name' => 'MERKEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'id' => 1535,
                'city_id' => 16,
                'slug' => 'mustafakemalpasa',
                'name' => 'MUSTAFAKEMALPAŞA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'id' => 1536,
                'city_id' => 33,
                'slug' => 'mut',
                'name' => 'MUT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'id' => 1537,
                'city_id' => 13,
                'slug' => 'mutki',
                'name' => 'MUTKİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'id' => 1538,
                'city_id' => 59,
                'slug' => 'muratli',
                'name' => 'MURATLI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'id' => 1539,
                'city_id' => 6,
                'slug' => 'nallihan',
                'name' => 'NALLIHAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'id' => 1540,
                'city_id' => 25,
                'slug' => 'narman',
                'name' => 'NARMAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'id' => 1541,
                'city_id' => 62,
                'slug' => 'nazimiye',
                'name' => 'NAZIMİYE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'id' => 1542,
                'city_id' => 9,
                'slug' => 'nazilli',
                'name' => 'NAZİLLİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'id' => 1543,
                'city_id' => 50,
                'slug' => 'merkez',
                'name' => 'MERKEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'id' => 1544,
                'city_id' => 51,
                'slug' => 'merkez',
                'name' => 'MERKEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'id' => 1545,
                'city_id' => 60,
                'slug' => 'niksar',
                'name' => 'NİKSAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'id' => 1546,
                'city_id' => 27,
                'slug' => 'nizip',
                'name' => 'NİZİP',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'id' => 1547,
                'city_id' => 47,
                'slug' => 'nusaybin',
                'name' => 'NUSAYBİN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'id' => 1548,
                'city_id' => 61,
                'slug' => 'of',
                'name' => 'OF',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'id' => 1549,
                'city_id' => 27,
                'slug' => 'oguzeli',
                'name' => 'OĞUZELİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'id' => 1550,
                'city_id' => 25,
                'slug' => 'oltu',
                'name' => 'OLTU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'id' => 1551,
                'city_id' => 25,
                'slug' => 'olur',
                'name' => 'OLUR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'id' => 1553,
                'city_id' => 16,
                'slug' => 'orhaneli',
                'name' => 'ORHANELİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'id' => 1554,
                'city_id' => 16,
                'slug' => 'orhangazi',
                'name' => 'ORHANGAZİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'id' => 1555,
                'city_id' => 18,
                'slug' => 'orta',
                'name' => 'ORTA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'id' => 1556,
                'city_id' => 19,
                'slug' => 'ortakoy',
                'name' => 'ORTAKÖY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'id' => 1557,
                'city_id' => 68,
                'slug' => 'ortakoy',
                'name' => 'ORTAKÖY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'id' => 1558,
                'city_id' => 19,
                'slug' => 'osmancik',
                'name' => 'OSMANCIK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'id' => 1559,
                'city_id' => 11,
                'slug' => 'osmaneli',
                'name' => 'OSMANELİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'id' => 1560,
                'city_id' => 80,
                'slug' => 'merkez',
                'name' => 'MERKEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'id' => 1561,
                'city_id' => 78,
                'slug' => 'ovacik',
                'name' => 'OVACIK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'id' => 1562,
                'city_id' => 62,
                'slug' => 'ovacik',
                'name' => 'OVACIK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'id' => 1563,
                'city_id' => 35,
                'slug' => 'odemis',
                'name' => 'ÖDEMİŞ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'id' => 1564,
                'city_id' => 47,
                'slug' => 'omerli',
                'name' => 'ÖMERLİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'id' => 1565,
                'city_id' => 65,
                'slug' => 'ozalp',
                'name' => 'ÖZALP',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'id' => 1566,
                'city_id' => 23,
                'slug' => 'palu',
                'name' => 'PALU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'id' => 1567,
                'city_id' => 25,
                'slug' => 'pasinler',
                'name' => 'PASİNLER',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'id' => 1568,
                'city_id' => 4,
                'slug' => 'patnos',
                'name' => 'PATNOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'id' => 1569,
                'city_id' => 53,
                'slug' => 'pazar',
                'name' => 'PAZAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'id' => 1570,
                'city_id' => 46,
                'slug' => 'pazarcik',
                'name' => 'PAZARCIK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'id' => 1571,
                'city_id' => 11,
                'slug' => 'pazaryeri',
                'name' => 'PAZARYERİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'id' => 1572,
                'city_id' => 39,
                'slug' => 'pehlivankoy',
                'name' => 'PEHLİVANKÖY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'id' => 1573,
                'city_id' => 52,
                'slug' => 'persembe',
                'name' => 'PERŞEMBE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'id' => 1574,
                'city_id' => 62,
                'slug' => 'pertek',
                'name' => 'PERTEK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'id' => 1575,
                'city_id' => 56,
                'slug' => 'pervari',
                'name' => 'PERVARİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'id' => 1576,
                'city_id' => 38,
                'slug' => 'pinarbasi',
                'name' => 'PINARBAŞI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'id' => 1577,
                'city_id' => 39,
                'slug' => 'pinarhisar',
                'name' => 'PINARHİSAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'id' => 1578,
                'city_id' => 6,
                'slug' => 'polatli',
                'name' => 'POLATLI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'id' => 1579,
                'city_id' => 75,
                'slug' => 'posof',
                'name' => 'POSOF',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'id' => 1580,
                'city_id' => 1,
                'slug' => 'pozanti',
                'name' => 'POZANTI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'id' => 1581,
                'city_id' => 62,
                'slug' => 'pulumur',
                'name' => 'PÜLÜMÜR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'id' => 1582,
                'city_id' => 44,
                'slug' => 'puturge',
                'name' => 'PÜTÜRGE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'id' => 1583,
                'city_id' => 24,
                'slug' => 'refahiye',
                'name' => 'REFAHİYE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'id' => 1584,
                'city_id' => 60,
                'slug' => 'resadiye',
                'name' => 'REŞADİYE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'id' => 1585,
                'city_id' => 31,
                'slug' => 'reyhanli',
                'name' => 'REYHANLI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'id' => 1586,
                'city_id' => 53,
                'slug' => 'merkez',
                'name' => 'MERKEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'id' => 1587,
                'city_id' => 78,
                'slug' => 'safranbolu',
                'name' => 'SAFRANBOLU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'id' => 1588,
                'city_id' => 1,
                'slug' => 'saimbeyli',
                'name' => 'SAİMBEYLİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'id' => 1590,
                'city_id' => 45,
                'slug' => 'salihli',
                'name' => 'SALİHLİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'id' => 1591,
                'city_id' => 31,
                'slug' => 'samandag',
                'name' => 'SAMANDAĞ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'id' => 1592,
                'city_id' => 2,
                'slug' => 'samsat',
                'name' => 'SAMSAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'id' => 1594,
                'city_id' => 3,
                'slug' => 'sandikli',
                'name' => 'SANDIKLI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'id' => 1595,
                'city_id' => 54,
                'slug' => 'sapanca',
                'name' => 'SAPANCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'id' => 1596,
                'city_id' => 59,
                'slug' => 'saray',
                'name' => 'SARAY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'id' => 1597,
                'city_id' => 20,
                'slug' => 'saraykoy',
                'name' => 'SARAYKÖY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'id' => 1598,
                'city_id' => 42,
                'slug' => 'sarayonu',
                'name' => 'SARAYÖNÜ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'id' => 1599,
                'city_id' => 26,
                'slug' => 'saricakaya',
                'name' => 'SARICAKAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'id' => 1600,
                'city_id' => 45,
                'slug' => 'sarigol',
                'name' => 'SARIGÖL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'id' => 1601,
                'city_id' => 36,
                'slug' => 'sarikamis',
                'name' => 'SARIKAMIŞ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'id' => 1602,
                'city_id' => 66,
                'slug' => 'sarikaya',
                'name' => 'SARIKAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'id' => 1603,
                'city_id' => 38,
                'slug' => 'sarioglan',
                'name' => 'SARIOĞLAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'id' => 1604,
                'city_id' => 34,
                'slug' => 'sariyer',
                'name' => 'SARIYER',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'id' => 1605,
                'city_id' => 38,
                'slug' => 'sariz',
                'name' => 'SARIZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'id' => 1606,
                'city_id' => 45,
                'slug' => 'saruhanli',
                'name' => 'SARUHANLI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'id' => 1607,
                'city_id' => 72,
                'slug' => 'sason',
                'name' => 'SASON',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'id' => 1608,
                'city_id' => 10,
                'slug' => 'savastepe',
                'name' => 'SAVAŞTEPE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'id' => 1609,
                'city_id' => 47,
                'slug' => 'savur',
                'name' => 'SAVUR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'id' => 1610,
                'city_id' => 14,
                'slug' => 'seben',
                'name' => 'SEBEN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'id' => 1611,
                'city_id' => 35,
                'slug' => 'seferihisar',
                'name' => 'SEFERİHİSAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'id' => 1612,
                'city_id' => 35,
                'slug' => 'selcuk',
                'name' => 'SELÇUK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'id' => 1613,
                'city_id' => 45,
                'slug' => 'selendi',
                'name' => 'SELENDİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'id' => 1614,
                'city_id' => 36,
                'slug' => 'selim',
                'name' => 'SELİM',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'id' => 1615,
                'city_id' => 32,
                'slug' => 'senirkent',
                'name' => 'SENİRKENT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'id' => 1616,
                'city_id' => 7,
                'slug' => 'serik',
                'name' => 'SERİK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'id' => 1617,
                'city_id' => 42,
                'slug' => 'seydisehir',
                'name' => 'SEYDİŞEHİR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'id' => 1618,
                'city_id' => 26,
                'slug' => 'seyitgazi',
                'name' => 'SEYİTGAZİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'id' => 1619,
                'city_id' => 10,
                'slug' => 'sindirgi',
                'name' => 'SINDIRGI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'id' => 1620,
                'city_id' => 56,
                'slug' => 'merkez',
                'name' => 'MERKEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'id' => 1621,
                'city_id' => 33,
                'slug' => 'silifke',
                'name' => 'SİLİFKE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'id' => 1622,
                'city_id' => 34,
                'slug' => 'silivri',
                'name' => 'SİLİVRİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'id' => 1623,
                'city_id' => 73,
                'slug' => 'silopi',
                'name' => 'SİLOPİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'id' => 1624,
                'city_id' => 21,
                'slug' => 'silvan',
                'name' => 'SİLVAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'id' => 1625,
                'city_id' => 43,
                'slug' => 'simav',
                'name' => 'SİMAV',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'id' => 1626,
                'city_id' => 3,
                'slug' => 'sinanpasa',
                'name' => 'SİNANPAŞA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        \DB::table('towns')->insert(array (
            0 => 
            array (
                'id' => 1627,
                'city_id' => 57,
                'slug' => 'merkez',
                'name' => 'MERKEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 1628,
                'city_id' => 58,
                'slug' => 'merkez',
                'name' => 'MERKEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 1629,
                'city_id' => 64,
                'slug' => 'sivasli',
                'name' => 'SİVASLI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 1630,
                'city_id' => 63,
                'slug' => 'siverek',
                'name' => 'SİVEREK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 1631,
                'city_id' => 23,
                'slug' => 'sivrice',
                'name' => 'SİVRİCE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 1632,
                'city_id' => 26,
                'slug' => 'sivrihisar',
                'name' => 'SİVRİHİSAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 1633,
                'city_id' => 12,
                'slug' => 'solhan',
                'name' => 'SOLHAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 1634,
                'city_id' => 45,
                'slug' => 'soma',
                'name' => 'SOMA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 1635,
                'city_id' => 66,
                'slug' => 'sorgun',
                'name' => 'SORGUN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 1636,
                'city_id' => 11,
                'slug' => 'sogut',
                'name' => 'SÖĞÜT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 1637,
                'city_id' => 9,
                'slug' => 'soke',
                'name' => 'SÖKE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 1638,
                'city_id' => 71,
                'slug' => 'sulakyurt',
                'name' => 'SULAKYURT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 1639,
                'city_id' => 3,
                'slug' => 'sultandagi',
                'name' => 'SULTANDAĞI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 1640,
                'city_id' => 9,
                'slug' => 'sultanhisar',
                'name' => 'SULTANHİSAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 1641,
                'city_id' => 5,
                'slug' => 'suluova',
                'name' => 'SULUOVA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 1642,
                'city_id' => 19,
                'slug' => 'sungurlu',
                'name' => 'SUNGURLU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 1643,
                'city_id' => 63,
                'slug' => 'suruc',
                'name' => 'SURUÇ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 1644,
                'city_id' => 10,
                'slug' => 'susurluk',
                'name' => 'SUSURLUK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 1645,
                'city_id' => 36,
                'slug' => 'susuz',
                'name' => 'SUSUZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 1646,
                'city_id' => 58,
                'slug' => 'susehri',
                'name' => 'SUŞEHRİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 1647,
                'city_id' => 61,
                'slug' => 'surmene',
                'name' => 'SÜRMENE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 1648,
                'city_id' => 32,
                'slug' => 'sutculer',
                'name' => 'SÜTÇÜLER',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 1649,
                'city_id' => 18,
                'slug' => 'sabanozu',
                'name' => 'ŞABANÖZÜ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 1650,
                'city_id' => 58,
                'slug' => 'sarkisla',
                'name' => 'ŞARKIŞLA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 1651,
                'city_id' => 32,
                'slug' => 'sarkikaraagac',
                'name' => 'ŞARKİKARAAĞAÇ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 1652,
                'city_id' => 59,
                'slug' => 'sarkoy',
                'name' => 'ŞARKÖY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 1653,
                'city_id' => 8,
                'slug' => 'savsat',
                'name' => 'ŞAVŞAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 1654,
                'city_id' => 28,
                'slug' => 'sebinkarahisar',
                'name' => 'ŞEBİNKARAHİSAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 1655,
                'city_id' => 66,
                'slug' => 'sefaatli',
                'name' => 'ŞEFAATLİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 1656,
                'city_id' => 30,
                'slug' => 'semdinli',
                'name' => 'ŞEMDİNLİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 1657,
                'city_id' => 25,
                'slug' => 'senkaya',
                'name' => 'ŞENKAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 1658,
                'city_id' => 6,
                'slug' => 'sereflikochisar',
                'name' => 'ŞEREFLİKOÇHİSAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 1659,
                'city_id' => 34,
                'slug' => 'sile',
                'name' => 'ŞİLE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 1660,
                'city_id' => 29,
                'slug' => 'siran',
                'name' => 'ŞİRAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 1661,
                'city_id' => 73,
                'slug' => 'merkez',
                'name' => 'MERKEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 1662,
                'city_id' => 56,
                'slug' => 'sirvan',
                'name' => 'ŞİRVAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 1663,
                'city_id' => 34,
                'slug' => 'sisli',
                'name' => 'ŞİŞLİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 1664,
                'city_id' => 3,
                'slug' => 'suhut',
                'name' => 'ŞUHUT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 1665,
                'city_id' => 33,
                'slug' => 'tarsus',
                'name' => 'TARSUS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 1666,
                'city_id' => 37,
                'slug' => 'taskopru',
                'name' => 'TAŞKÖPRÜ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 1667,
                'city_id' => 4,
                'slug' => 'taslicay',
                'name' => 'TAŞLIÇAY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 1668,
                'city_id' => 5,
                'slug' => 'tasova',
                'name' => 'TAŞOVA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 1669,
                'city_id' => 13,
                'slug' => 'tatvan',
                'name' => 'TATVAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 1670,
                'city_id' => 20,
                'slug' => 'tavas',
                'name' => 'TAVAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 1671,
                'city_id' => 43,
                'slug' => 'tavsanli',
                'name' => 'TAVŞANLI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 1672,
                'city_id' => 15,
                'slug' => 'tefenni',
                'name' => 'TEFENNİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 1674,
                'city_id' => 25,
                'slug' => 'tekman',
                'name' => 'TEKMAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 1675,
                'city_id' => 24,
                'slug' => 'tercan',
                'name' => 'TERCAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 1676,
                'city_id' => 55,
                'slug' => 'terme',
                'name' => 'TERME',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 1677,
                'city_id' => 35,
                'slug' => 'tire',
                'name' => 'TİRE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 1678,
                'city_id' => 28,
                'slug' => 'tirebolu',
                'name' => 'TİREBOLU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 1679,
                'city_id' => 60,
                'slug' => 'merkez',
                'name' => 'MERKEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 1680,
                'city_id' => 38,
                'slug' => 'tomarza',
                'name' => 'TOMARZA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 1681,
                'city_id' => 61,
                'slug' => 'tonya',
                'name' => 'TONYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 1682,
                'city_id' => 35,
                'slug' => 'torbali',
                'name' => 'TORBALI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 1683,
                'city_id' => 25,
                'slug' => 'tortum',
                'name' => 'TORTUM',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 1684,
                'city_id' => 29,
                'slug' => 'torul',
                'name' => 'TORUL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 1685,
                'city_id' => 37,
                'slug' => 'tosya',
                'name' => 'TOSYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 1687,
                'city_id' => 1,
                'slug' => 'tufanbeyli',
                'name' => 'TUFANBEYLİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 1688,
                'city_id' => 62,
                'slug' => 'merkez',
                'name' => 'MERKEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 1689,
                'city_id' => 45,
                'slug' => 'turgutlu',
                'name' => 'TURGUTLU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 1690,
                'city_id' => 60,
                'slug' => 'turhal',
                'name' => 'TURHAL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 1691,
                'city_id' => 4,
                'slug' => 'tutak',
                'name' => 'TUTAK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 1692,
                'city_id' => 76,
                'slug' => 'tuzluca',
                'name' => 'TUZLUCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 1693,
                'city_id' => 57,
                'slug' => 'turkeli',
                'name' => 'TÜRKELİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 1694,
                'city_id' => 46,
                'slug' => 'turkoglu',
                'name' => 'TÜRKOĞLU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 1695,
                'city_id' => 48,
                'slug' => 'ula',
                'name' => 'ULA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 1696,
                'city_id' => 52,
                'slug' => 'ulubey',
                'name' => 'ULUBEY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 1697,
                'city_id' => 64,
                'slug' => 'ulubey',
                'name' => 'ULUBEY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 1698,
                'city_id' => 73,
                'slug' => 'uludere',
                'name' => 'ULUDERE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 1699,
                'city_id' => 32,
                'slug' => 'uluborlu',
                'name' => 'ULUBORLU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 1700,
                'city_id' => 51,
                'slug' => 'ulukisla',
                'name' => 'ULUKIŞLA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 1701,
                'city_id' => 74,
                'slug' => 'ulus',
                'name' => 'ULUS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 1703,
                'city_id' => 35,
                'slug' => 'urla',
                'name' => 'URLA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 1704,
                'city_id' => 64,
                'slug' => 'merkez',
                'name' => 'MERKEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 1705,
                'city_id' => 22,
                'slug' => 'uzunkopru',
                'name' => 'UZUNKÖPRÜ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 1706,
                'city_id' => 52,
                'slug' => 'unye',
                'name' => 'ÜNYE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 1707,
                'city_id' => 50,
                'slug' => 'urgup',
                'name' => 'ÜRGÜP',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 1708,
                'city_id' => 34,
                'slug' => 'uskudar',
                'name' => 'ÜSKÜDAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 1709,
                'city_id' => 61,
                'slug' => 'vakfikebir',
                'name' => 'VAKFIKEBİR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 1711,
                'city_id' => 49,
                'slug' => 'varto',
                'name' => 'VARTO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 1712,
                'city_id' => 55,
                'slug' => 'vezirkopru',
                'name' => 'VEZİRKÖPRÜ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 1713,
                'city_id' => 63,
                'slug' => 'viransehir',
                'name' => 'VİRANŞEHİR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 1714,
                'city_id' => 39,
                'slug' => 'vize',
                'name' => 'VİZE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 1715,
                'city_id' => 38,
                'slug' => 'yahyali',
                'name' => 'YAHYALI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 1716,
                'city_id' => 77,
                'slug' => 'merkez',
                'name' => 'MERKEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 1717,
                'city_id' => 32,
                'slug' => 'yalvac',
                'name' => 'YALVAÇ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 1718,
                'city_id' => 18,
                'slug' => 'yaprakli',
                'name' => 'YAPRAKLI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 1719,
                'city_id' => 48,
                'slug' => 'yatagan',
                'name' => 'YATAĞAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 1720,
                'city_id' => 27,
                'slug' => 'yavuzeli',
                'name' => 'YAVUZELİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 1721,
                'city_id' => 31,
                'slug' => 'yayladagi',
                'name' => 'YAYLADAĞI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 1722,
                'city_id' => 17,
                'slug' => 'yenice',
                'name' => 'YENİCE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 1723,
                'city_id' => 6,
                'slug' => 'yenimahalle',
                'name' => 'YENİMAHALLE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 1724,
                'city_id' => 9,
                'slug' => 'yenipazar',
                'name' => 'YENİPAZAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 1725,
                'city_id' => 16,
                'slug' => 'yenisehir',
                'name' => 'YENİŞEHİR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 1726,
                'city_id' => 66,
                'slug' => 'yerkoy',
                'name' => 'YERKÖY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 1727,
                'city_id' => 38,
                'slug' => 'yesilhisar',
                'name' => 'YEŞİLHİSAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 1728,
                'city_id' => 15,
                'slug' => 'yesilova',
                'name' => 'YEŞİLOVA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 1729,
                'city_id' => 44,
                'slug' => 'yesilyurt',
                'name' => 'YEŞİLYURT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 1730,
                'city_id' => 81,
                'slug' => 'yigilca',
                'name' => 'YIĞILCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 1731,
                'city_id' => 58,
                'slug' => 'yildizeli',
                'name' => 'YILDIZELİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 1732,
                'city_id' => 61,
                'slug' => 'yomra',
                'name' => 'YOMRA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 1733,
                'city_id' => 66,
                'slug' => 'merkez',
                'name' => 'MERKEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 1734,
                'city_id' => 1,
                'slug' => 'yumurtalik',
                'name' => 'YUMURTALIK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 1735,
                'city_id' => 42,
                'slug' => 'yunak',
                'name' => 'YUNAK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 1736,
                'city_id' => 8,
                'slug' => 'yusufeli',
                'name' => 'YUSUFELİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 1737,
                'city_id' => 30,
                'slug' => 'yuksekova',
                'name' => 'YÜKSEKOVA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 1738,
                'city_id' => 58,
                'slug' => 'zara',
                'name' => 'ZARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 1739,
                'city_id' => 34,
                'slug' => 'zeytinburnu',
                'name' => 'ZEYTİNBURNU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 1740,
                'city_id' => 60,
                'slug' => 'zile',
                'name' => 'ZİLE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 1741,
                'city_id' => 67,
                'slug' => 'merkez',
                'name' => 'MERKEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 1742,
                'city_id' => 48,
                'slug' => 'dalaman',
                'name' => 'DALAMAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 1743,
                'city_id' => 80,
                'slug' => 'duzici',
                'name' => 'DÜZİÇİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 1744,
                'city_id' => 6,
                'slug' => 'golbasi',
                'name' => 'GÖLBAŞI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 1745,
                'city_id' => 6,
                'slug' => 'kecioren',
                'name' => 'KEÇİÖREN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 1746,
                'city_id' => 6,
                'slug' => 'mamak',
                'name' => 'MAMAK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 1747,
                'city_id' => 6,
                'slug' => 'sincan',
                'name' => 'SİNCAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 1748,
                'city_id' => 1,
                'slug' => 'yuregir',
                'name' => 'YÜREĞİR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 1749,
                'city_id' => 50,
                'slug' => 'acigol',
                'name' => 'ACIGÖL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 1750,
                'city_id' => 12,
                'slug' => 'adakli',
                'name' => 'ADAKLI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 1751,
                'city_id' => 45,
                'slug' => 'ahmetli',
                'name' => 'AHMETLİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 1752,
                'city_id' => 38,
                'slug' => 'akkisla',
                'name' => 'AKKIŞLA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 1753,
                'city_id' => 42,
                'slug' => 'akoren',
                'name' => 'AKÖREN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 1754,
                'city_id' => 40,
                'slug' => 'akpinar',
                'name' => 'AKPINAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 1755,
                'city_id' => 32,
                'slug' => 'aksu',
                'name' => 'AKSU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 1756,
                'city_id' => 36,
                'slug' => 'akyaka',
                'name' => 'AKYAKA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 1757,
                'city_id' => 1,
                'slug' => 'aladag',
                'name' => 'ALADAĞ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 1758,
                'city_id' => 67,
                'slug' => 'alapli',
                'name' => 'ALAPLI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 1759,
                'city_id' => 26,
                'slug' => 'alpu',
                'name' => 'ALPU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 1760,
                'city_id' => 42,
                'slug' => 'altinekin',
                'name' => 'ALTINEKİN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 1761,
                'city_id' => 74,
                'slug' => 'amasra',
                'name' => 'AMASRA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 1762,
                'city_id' => 23,
                'slug' => 'aricak',
                'name' => 'ARICAK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 1763,
                'city_id' => 55,
                'slug' => 'asarcik',
                'name' => 'ASARCIK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 1764,
                'city_id' => 43,
                'slug' => 'aslanapa',
                'name' => 'ASLANAPA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 1765,
                'city_id' => 18,
                'slug' => 'atkaracalar',
                'name' => 'ATKARACALAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 1766,
                'city_id' => 33,
                'slug' => 'aydincik',
                'name' => 'AYDINCIK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 1767,
                'city_id' => 69,
                'slug' => 'aydintepe',
                'name' => 'AYDINTEPE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 1768,
                'city_id' => 70,
                'slug' => 'ayranci',
                'name' => 'AYRANCI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 1769,
                'city_id' => 20,
                'slug' => 'babadag',
                'name' => 'BABADAĞ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 1770,
                'city_id' => 65,
                'slug' => 'bahcesaray',
                'name' => 'BAHÇESARAY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 1771,
                'city_id' => 3,
                'slug' => 'basmakci',
                'name' => 'BAŞMAKÇI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 1772,
                'city_id' => 44,
                'slug' => 'battalgazi',
                'name' => 'BATTALGAZİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 1773,
                'city_id' => 3,
                'slug' => 'bayat',
                'name' => 'BAYAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 1774,
                'city_id' => 20,
                'slug' => 'bekilli',
                'name' => 'BEKİLLİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 1775,
                'city_id' => 61,
                'slug' => 'besikduzu',
                'name' => 'BEŞİKDÜZÜ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 1776,
                'city_id' => 35,
                'slug' => 'beydag',
                'name' => 'BEYDAĞ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 1777,
                'city_id' => 26,
                'slug' => 'beylikova',
                'name' => 'BEYLİKOVA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 1778,
                'city_id' => 19,
                'slug' => 'bogazkale',
                'name' => 'BOĞAZKALE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 1779,
                'city_id' => 33,
                'slug' => 'bozyazi',
                'name' => 'BOZYAZI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 1780,
                'city_id' => 35,
                'slug' => 'buca',
                'name' => 'BUCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 1781,
                'city_id' => 9,
                'slug' => 'buharkent',
                'name' => 'BUHARKENT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 1782,
                'city_id' => 34,
                'slug' => 'buyukcekmece',
                'name' => 'BÜYÜKÇEKMECE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 1783,
                'city_id' => 16,
                'slug' => 'buyukorhan',
                'name' => 'BÜYÜKORHAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 1784,
                'city_id' => 81,
                'slug' => 'cumayeri',
                'name' => 'CUMAYERİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 1785,
                'city_id' => 46,
                'slug' => 'caglayancerit',
                'name' => 'ÇAĞLAYANCERİT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 1786,
                'city_id' => 65,
                'slug' => 'caldiran',
                'name' => 'ÇALDIRAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 1787,
                'city_id' => 47,
                'slug' => 'dargecit',
                'name' => 'DARGEÇİT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 1788,
                'city_id' => 69,
                'slug' => 'demirozu',
                'name' => 'DEMİRÖZÜ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 1789,
                'city_id' => 42,
                'slug' => 'derebucak',
                'name' => 'DEREBUCAK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 1790,
                'city_id' => 43,
                'slug' => 'dumlupinar',
                'name' => 'DUMLUPINAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 1791,
                'city_id' => 21,
                'slug' => 'egil',
                'name' => 'EĞİL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 1792,
                'city_id' => 31,
                'slug' => 'erzin',
                'name' => 'ERZİN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 1793,
                'city_id' => 45,
                'slug' => 'golmarmara',
                'name' => 'GÖLMARMARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 1794,
                'city_id' => 81,
                'slug' => 'golyaka',
                'name' => 'GÖLYAKA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 1795,
                'city_id' => 52,
                'slug' => 'gulyali',
                'name' => 'GÜLYALI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 1796,
                'city_id' => 53,
                'slug' => 'guneysu',
                'name' => 'GÜNEYSU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 1797,
                'city_id' => 52,
                'slug' => 'gurgentepe',
                'name' => 'GÜRGENTEPE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 1798,
                'city_id' => 13,
                'slug' => 'guroymak',
                'name' => 'GÜROYMAK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 1799,
                'city_id' => 16,
                'slug' => 'harmancik',
                'name' => 'HARMANCIK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 1800,
                'city_id' => 63,
                'slug' => 'harran',
                'name' => 'HARRAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 1801,
                'city_id' => 49,
                'slug' => 'haskoy',
                'name' => 'HASKÖY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 1802,
                'city_id' => 43,
                'slug' => 'hisarcik',
                'name' => 'HİSARCIK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 1803,
                'city_id' => 20,
                'slug' => 'honaz',
                'name' => 'HONAZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 1804,
                'city_id' => 42,
                'slug' => 'huyuk',
                'name' => 'HÜYÜK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 1805,
                'city_id' => 37,
                'slug' => 'ihsangazi',
                'name' => 'İHSANGAZİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 1806,
                'city_id' => 1,
                'slug' => 'imamoglu',
                'name' => 'İMAMOĞLU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 1807,
                'city_id' => 9,
                'slug' => 'incirliova',
                'name' => 'İNCİRLİOVA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 1808,
                'city_id' => 26,
                'slug' => 'inonu',
                'name' => 'İNÖNÜ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 1809,
                'city_id' => 3,
                'slug' => 'iscehisar',
                'name' => 'İSCEHİSAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 1810,
                'city_id' => 34,
                'slug' => 'kagithane',
                'name' => 'KAĞITHANE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 1811,
                'city_id' => 7,
                'slug' => 'demre',
                'name' => 'DEMRE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 1812,
                'city_id' => 25,
                'slug' => 'karacoban',
                'name' => 'KARAÇOBAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 1813,
                'city_id' => 15,
                'slug' => 'karamanli',
                'name' => 'KARAMANLI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 1814,
                'city_id' => 42,
                'slug' => 'karatay',
                'name' => 'KARATAY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 1815,
                'city_id' => 6,
                'slug' => 'kahramankazan',
                'name' => 'KAHRAMANKAZAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 1816,
                'city_id' => 15,
                'slug' => 'kemer',
                'name' => 'KEMER',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 1817,
                'city_id' => 18,
                'slug' => 'kizilirmak',
                'name' => 'KIZILIRMAK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 1818,
                'city_id' => 54,
                'slug' => 'kocaali',
                'name' => 'KOCAALİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 1819,
                'city_id' => 35,
                'slug' => 'konak',
                'name' => 'KONAK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 1820,
                'city_id' => 23,
                'slug' => 'kovancilar',
                'name' => 'KOVANCILAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 1821,
                'city_id' => 41,
                'slug' => 'korfez',
                'name' => 'KÖRFEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 1822,
                'city_id' => 29,
                'slug' => 'kose',
                'name' => 'KÖSE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 1823,
                'city_id' => 34,
                'slug' => 'kucukcekmece',
                'name' => 'KÜÇÜKÇEKMECE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 1824,
                'city_id' => 10,
                'slug' => 'marmara',
                'name' => 'MARMARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 1825,
                'city_id' => 59,
                'slug' => 'marmaraereglisi',
                'name' => 'MARMARAEREĞLİSİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 1826,
                'city_id' => 35,
                'slug' => 'menderes',
                'name' => 'MENDERES',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 1827,
                'city_id' => 42,
                'slug' => 'meram',
                'name' => 'MERAM',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 1828,
                'city_id' => 8,
                'slug' => 'murgul',
                'name' => 'MURGUL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 1829,
                'city_id' => 16,
                'slug' => 'nilufer',
                'name' => 'NİLÜFER',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 1830,
                'city_id' => 55,
                'slug' => '19-mayis',
                'name' => '19 MAYIS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 1831,
                'city_id' => 48,
                'slug' => 'ortaca',
                'name' => 'ORTACA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 1832,
                'city_id' => 16,
                'slug' => 'osmangazi',
                'name' => 'OSMANGAZİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 1833,
                'city_id' => 54,
                'slug' => 'pamukova',
                'name' => 'PAMUKOVA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 1834,
                'city_id' => 60,
                'slug' => 'pazar',
                'name' => 'PAZAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 1835,
                'city_id' => 34,
                'slug' => 'pendik',
                'name' => 'PENDİK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 1836,
                'city_id' => 37,
                'slug' => 'pinarbasi',
                'name' => 'PINARBAŞI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 1837,
                'city_id' => 28,
                'slug' => 'piraziz',
                'name' => 'PİRAZİZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 1838,
                'city_id' => 55,
                'slug' => 'salipazari',
                'name' => 'SALIPAZARI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 1839,
                'city_id' => 42,
                'slug' => 'selcuklu',
                'name' => 'SELÇUKLU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 1840,
                'city_id' => 20,
                'slug' => 'serinhisar',
                'name' => 'SERİNHİSAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 1841,
                'city_id' => 27,
                'slug' => 'sahinbey',
                'name' => 'ŞAHİNBEY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 1842,
                'city_id' => 61,
                'slug' => 'salpazari',
                'name' => 'ŞALPAZARI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 1843,
                'city_id' => 43,
                'slug' => 'saphane',
                'name' => 'ŞAPHANE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 1844,
                'city_id' => 27,
                'slug' => 'sehitkamil',
                'name' => 'ŞEHİTKAMİL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 1845,
                'city_id' => 37,
                'slug' => 'senpazar',
                'name' => 'ŞENPAZAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 1846,
                'city_id' => 38,
                'slug' => 'talas',
                'name' => 'TALAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 1847,
                'city_id' => 54,
                'slug' => 'tarakli',
                'name' => 'TARAKLI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 1848,
                'city_id' => 42,
                'slug' => 'taskent',
                'name' => 'TAŞKENT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 1849,
                'city_id' => 55,
                'slug' => 'tekkekoy',
                'name' => 'TEKKEKÖY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 1850,
                'city_id' => 19,
                'slug' => 'ugurludag',
                'name' => 'UĞURLUDAĞ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 1851,
                'city_id' => 25,
                'slug' => 'uzundere',
                'name' => 'UZUNDERE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 1852,
                'city_id' => 34,
                'slug' => 'umraniye',
                'name' => 'ÜMRANİYE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 1853,
                'city_id' => 24,
                'slug' => 'uzumlu',
                'name' => 'ÜZÜMLÜ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 1854,
                'city_id' => 28,
                'slug' => 'yaglidere',
                'name' => 'YAĞLIDERE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 1855,
                'city_id' => 12,
                'slug' => 'yayladere',
                'name' => 'YAYLADERE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 1856,
                'city_id' => 78,
                'slug' => 'yenice',
                'name' => 'YENİCE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 1857,
                'city_id' => 11,
                'slug' => 'yenipazar',
                'name' => 'YENİPAZAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 1858,
                'city_id' => 60,
                'slug' => 'yesilyurt',
                'name' => 'YEŞİLYURT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 1859,
                'city_id' => 16,
                'slug' => 'yildirim',
                'name' => 'YILDIRIM',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 1860,
                'city_id' => 68,
                'slug' => 'agacoren',
                'name' => 'AĞAÇÖREN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 1861,
                'city_id' => 68,
                'slug' => 'guzelyurt',
                'name' => 'GÜZELYURT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 1862,
                'city_id' => 70,
                'slug' => 'kazimkarabekir',
                'name' => 'KAZIMKARABEKİR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 1863,
                'city_id' => 38,
                'slug' => 'kocasinan',
                'name' => 'KOCASİNAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 1864,
                'city_id' => 38,
                'slug' => 'melikgazi',
                'name' => 'MELİKGAZİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 1865,
                'city_id' => 25,
                'slug' => 'pazaryolu',
                'name' => 'PAZARYOLU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 1866,
                'city_id' => 68,
                'slug' => 'sariyahsi',
                'name' => 'SARIYAHŞİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 1867,
                'city_id' => 37,
                'slug' => 'agli',
                'name' => 'AĞLI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 1868,
                'city_id' => 42,
                'slug' => 'ahirli',
                'name' => 'AHIRLI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 1869,
                'city_id' => 40,
                'slug' => 'akcakent',
                'name' => 'AKÇAKENT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 1870,
                'city_id' => 58,
                'slug' => 'akincilar',
                'name' => 'AKINCILAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 1871,
                'city_id' => 20,
                'slug' => 'pamukkale',
                'name' => 'PAMUKKALE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 1872,
                'city_id' => 6,
                'slug' => 'akyurt',
                'name' => 'AKYURT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 1873,
                'city_id' => 23,
                'slug' => 'alacakaya',
                'name' => 'ALACAKAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 1874,
                'city_id' => 15,
                'slug' => 'altinyayla',
                'name' => 'ALTINYAYLA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 1875,
                'city_id' => 58,
                'slug' => 'altinyayla',
                'name' => 'ALTINYAYLA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 1876,
                'city_id' => 51,
                'slug' => 'altunhisar',
                'name' => 'ALTUNHİSAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 1877,
                'city_id' => 66,
                'slug' => 'aydincik',
                'name' => 'AYDINCIK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 1878,
                'city_id' => 56,
                'slug' => 'tillo',
                'name' => 'TİLLO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 1879,
                'city_id' => 55,
                'slug' => 'ayvacik',
                'name' => 'AYVACIK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 1880,
                'city_id' => 71,
                'slug' => 'bahsili',
                'name' => 'BAHŞİLİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 1881,
                'city_id' => 20,
                'slug' => 'baklan',
                'name' => 'BAKLAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 1882,
                'city_id' => 71,
                'slug' => 'baliseyh',
                'name' => 'BALIŞEYH',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 1883,
                'city_id' => 60,
                'slug' => 'basciftlik',
                'name' => 'BAŞÇİFTLİK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 1884,
                'city_id' => 70,
                'slug' => 'basyayla',
                'name' => 'BAŞYAYLA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 1885,
                'city_id' => 18,
                'slug' => 'bayramoren',
                'name' => 'BAYRAMÖREN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 1886,
                'city_id' => 34,
                'slug' => 'bayrampasa',
                'name' => 'BAYRAMPAŞA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 1887,
                'city_id' => 31,
                'slug' => 'belen',
                'name' => 'BELEN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 1888,
                'city_id' => 20,
                'slug' => 'beyagac',
                'name' => 'BEYAĞAÇ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 1889,
                'city_id' => 20,
                'slug' => 'bozkurt',
                'name' => 'BOZKURT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 1890,
                'city_id' => 40,
                'slug' => 'boztepe',
                'name' => 'BOZTEPE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 1891,
                'city_id' => 52,
                'slug' => 'camas',
                'name' => 'ÇAMAŞ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 1892,
                'city_id' => 33,
                'slug' => 'camliyayla',
                'name' => 'ÇAMLIYAYLA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 1893,
                'city_id' => 28,
                'slug' => 'camoluk',
                'name' => 'ÇAMOLUK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 1894,
                'city_id' => 28,
                'slug' => 'canakci',
                'name' => 'ÇANAKÇI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 1895,
                'city_id' => 66,
                'slug' => 'candir',
                'name' => 'ÇANDIR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 1896,
                'city_id' => 61,
                'slug' => 'carsibasi',
                'name' => 'ÇARŞIBAŞI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 1897,
                'city_id' => 52,
                'slug' => 'catalpinar',
                'name' => 'ÇATALPINAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 1898,
                'city_id' => 43,
                'slug' => 'cavdarhisar',
                'name' => 'ÇAVDARHİSAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 1899,
                'city_id' => 15,
                'slug' => 'cavdir',
                'name' => 'ÇAVDIR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => 1900,
                'city_id' => 52,
                'slug' => 'caybasi',
                'name' => 'ÇAYBAŞI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => 1901,
                'city_id' => 71,
                'slug' => 'celebi',
                'name' => 'ÇELEBİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => 1902,
                'city_id' => 42,
                'slug' => 'celtik',
                'name' => 'ÇELTİK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => 1903,
                'city_id' => 15,
                'slug' => 'celtikci',
                'name' => 'ÇELTİKÇİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => 1904,
                'city_id' => 51,
                'slug' => 'ciftlik',
                'name' => 'ÇİFTLİK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => 1905,
                'city_id' => 81,
                'slug' => 'cilimli',
                'name' => 'ÇİLİMLİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => 1906,
                'city_id' => 3,
                'slug' => 'cobanlar',
                'name' => 'ÇOBANLAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => 1907,
                'city_id' => 42,
                'slug' => 'derbent',
                'name' => 'DERBENT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => 1908,
                'city_id' => 53,
                'slug' => 'derepazari',
                'name' => 'DEREPAZARI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => 1909,
                'city_id' => 61,
                'slug' => 'dernekpazari',
                'name' => 'DERNEKPAZARI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => 1910,
                'city_id' => 57,
                'slug' => 'dikmen',
                'name' => 'DİKMEN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => 1911,
                'city_id' => 19,
                'slug' => 'dodurga',
                'name' => 'DODURGA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => 1912,
                'city_id' => 28,
                'slug' => 'dogankent',
                'name' => 'DOĞANKENT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => 1913,
                'city_id' => 58,
                'slug' => 'dogansar',
                'name' => 'DOĞANŞAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => 1914,
                'city_id' => 44,
                'slug' => 'doganyol',
                'name' => 'DOĞANYOL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => 1915,
                'city_id' => 37,
                'slug' => 'doganyurt',
                'name' => 'DOĞANYURT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => 1916,
                'city_id' => 14,
                'slug' => 'dortdivan',
                'name' => 'DÖRTDİVAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => 1917,
                'city_id' => 61,
                'slug' => 'duzkoy',
                'name' => 'DÜZKÖY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => 1918,
                'city_id' => 65,
                'slug' => 'edremit',
                'name' => 'EDREMİT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => 1919,
                'city_id' => 46,
                'slug' => 'ekinozu',
                'name' => 'EKİNÖZÜ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => 1920,
                'city_id' => 42,
                'slug' => 'emirgazi',
                'name' => 'EMİRGAZİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => 1921,
                'city_id' => 68,
                'slug' => 'eskil',
                'name' => 'ESKİL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => 1922,
                'city_id' => 6,
                'slug' => 'etimesgut',
                'name' => 'ETİMESGUT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => 1923,
                'city_id' => 3,
                'slug' => 'evciler',
                'name' => 'EVCİLER',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => 1924,
                'city_id' => 6,
                'slug' => 'evren',
                'name' => 'EVREN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => 1925,
                'city_id' => 54,
                'slug' => 'ferizli',
                'name' => 'FERİZLİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => 1926,
                'city_id' => 67,
                'slug' => 'gokcebey',
                'name' => 'GÖKÇEBEY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => 1927,
                'city_id' => 58,
                'slug' => 'golova',
                'name' => 'GÖLOVA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => 1928,
                'city_id' => 10,
                'slug' => 'gomec',
                'name' => 'GÖMEÇ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => 1929,
                'city_id' => 32,
                'slug' => 'gonen',
                'name' => 'GÖNEN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => 1930,
                'city_id' => 28,
                'slug' => 'guce',
                'name' => 'GÜCE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => 1931,
                'city_id' => 73,
                'slug' => 'guclukonak',
                'name' => 'GÜÇLÜKONAK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => 1932,
                'city_id' => 68,
                'slug' => 'gulagac',
                'name' => 'GÜLAĞAÇ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => 1933,
                'city_id' => 42,
                'slug' => 'guneysinir',
                'name' => 'GÜNEYSINIR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => 1934,
                'city_id' => 26,
                'slug' => 'gunyuzu',
                'name' => 'GÜNYÜZÜ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => 1935,
                'city_id' => 16,
                'slug' => 'gursu',
                'name' => 'GÜRSU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => 1936,
                'city_id' => 38,
                'slug' => 'hacilar',
                'name' => 'HACILAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => 1937,
                'city_id' => 42,
                'slug' => 'halkapinar',
                'name' => 'HALKAPINAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => 1938,
                'city_id' => 5,
                'slug' => 'hamamozu',
                'name' => 'HAMAMÖZÜ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => 1939,
                'city_id' => 26,
                'slug' => 'han',
                'name' => 'HAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => 1940,
                'city_id' => 37,
                'slug' => 'hanonu',
                'name' => 'HANÖNÜ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => 1941,
                'city_id' => 72,
                'slug' => 'hasankeyf',
                'name' => 'HASANKEYF',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => 1942,
                'city_id' => 61,
                'slug' => 'hayrat',
                'name' => 'HAYRAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => 1943,
                'city_id' => 53,
                'slug' => 'hemsin',
                'name' => 'HEMŞİN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => 1944,
                'city_id' => 3,
                'slug' => 'hocalar',
                'name' => 'HOCALAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => 1945,
                'city_id' => 25,
                'slug' => 'aziziye',
                'name' => 'AZİZİYE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => 1946,
                'city_id' => 7,
                'slug' => 'ibradi',
                'name' => 'İBRADI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => 1947,
                'city_id' => 52,
                'slug' => 'ikizce',
                'name' => 'İKİZCE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => 1948,
                'city_id' => 11,
                'slug' => 'inhisar',
                'name' => 'İNHİSAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => 1949,
                'city_id' => 53,
                'slug' => 'iyidere',
                'name' => 'İYİDERE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => 1950,
                'city_id' => 52,
                'slug' => 'kabaduz',
                'name' => 'KABADÜZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => 1951,
                'city_id' => 52,
                'slug' => 'kabatas',
                'name' => 'KABATAŞ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => 1952,
                'city_id' => 66,
                'slug' => 'kadisehri',
                'name' => 'KADIŞEHRİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => 1953,
                'city_id' => 44,
                'slug' => 'kale',
                'name' => 'KALE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => 1954,
                'city_id' => 71,
                'slug' => 'karakecili',
                'name' => 'KARAKEÇİLİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => 1955,
                'city_id' => 54,
                'slug' => 'karapurcek',
                'name' => 'KARAPÜRÇEK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => 1956,
                'city_id' => 27,
                'slug' => 'karkamis',
                'name' => 'KARKAMIŞ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => 1957,
                'city_id' => 9,
                'slug' => 'karpuzlu',
                'name' => 'KARPUZLU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => 1958,
                'city_id' => 48,
                'slug' => 'kavaklidere',
                'name' => 'KAVAKLIDERE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => 1959,
                'city_id' => 7,
                'slug' => 'kemer',
                'name' => 'KEMER',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => 1960,
                'city_id' => 16,
                'slug' => 'kestel',
                'name' => 'KESTEL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => 1961,
                'city_id' => 3,
                'slug' => 'kiziloren',
                'name' => 'KIZILÖREN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => 1962,
                'city_id' => 21,
                'slug' => 'kocakoy',
                'name' => 'KOCAKÖY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => 1963,
                'city_id' => 18,
                'slug' => 'korgun',
                'name' => 'KORGUN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => 1964,
                'city_id' => 49,
                'slug' => 'korkut',
                'name' => 'KORKUT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => 1965,
                'city_id' => 45,
                'slug' => 'koprubasi',
                'name' => 'KÖPRÜBAŞI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'id' => 1966,
                'city_id' => 61,
                'slug' => 'koprubasi',
                'name' => 'KÖPRÜBAŞI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'id' => 1967,
                'city_id' => 25,
                'slug' => 'koprukoy',
                'name' => 'KÖPRÜKÖY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'id' => 1968,
                'city_id' => 9,
                'slug' => 'kosk',
                'name' => 'KÖŞK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'id' => 1969,
                'city_id' => 44,
                'slug' => 'kuluncak',
                'name' => 'KULUNCAK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'id' => 1970,
                'city_id' => 31,
                'slug' => 'kumlu',
                'name' => 'KUMLU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'id' => 1971,
                'city_id' => 29,
                'slug' => 'kurtun',
                'name' => 'KÜRTÜN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => 1972,
                'city_id' => 19,
                'slug' => 'lacin',
                'name' => 'LAÇİN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'id' => 1973,
                'city_id' => 26,
                'slug' => 'mihalgazi',
                'name' => 'MİHALGAZİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'id' => 1974,
                'city_id' => 27,
                'slug' => 'nurdagi',
                'name' => 'NURDAĞI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'id' => 1975,
                'city_id' => 46,
                'slug' => 'nurhak',
                'name' => 'NURHAK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'id' => 1976,
                'city_id' => 19,
                'slug' => 'oguzlar',
                'name' => 'OĞUZLAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'id' => 1977,
                'city_id' => 24,
                'slug' => 'otlukbeli',
                'name' => 'OTLUKBELİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'id' => 1978,
                'city_id' => 38,
                'slug' => 'ozvatan',
                'name' => 'ÖZVATAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'id' => 1979,
                'city_id' => 43,
                'slug' => 'pazarlar',
                'name' => 'PAZARLAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'id' => 1980,
                'city_id' => 65,
                'slug' => 'saray',
                'name' => 'SARAY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'id' => 1981,
                'city_id' => 57,
                'slug' => 'sarayduzu',
                'name' => 'SARAYDÜZÜ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'id' => 1982,
                'city_id' => 66,
                'slug' => 'saraykent',
                'name' => 'SARAYKENT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'id' => 1983,
                'city_id' => 70,
                'slug' => 'sariveliler',
                'name' => 'SARIVELİLER',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'id' => 1984,
                'city_id' => 37,
                'slug' => 'seydiler',
                'name' => 'SEYDİLER',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'id' => 1985,
                'city_id' => 2,
                'slug' => 'sincik',
                'name' => 'SİNCİK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'id' => 1986,
                'city_id' => 54,
                'slug' => 'sogutlu',
                'name' => 'SÖĞÜTLÜ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'id' => 1987,
                'city_id' => 60,
                'slug' => 'sulusaray',
                'name' => 'SULUSARAY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'id' => 1988,
                'city_id' => 22,
                'slug' => 'suloglu',
                'name' => 'SÜLOĞLU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'id' => 1989,
                'city_id' => 2,
                'slug' => 'tut',
                'name' => 'TUT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'id' => 1990,
                'city_id' => 42,
                'slug' => 'tuzlukcu',
                'name' => 'TUZLUKÇU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'id' => 1991,
                'city_id' => 58,
                'slug' => 'ulas',
                'name' => 'ULAŞ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'id' => 1992,
                'city_id' => 71,
                'slug' => 'yahsihan',
                'name' => 'YAHŞİHAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'id' => 1993,
                'city_id' => 55,
                'slug' => 'yakakent',
                'name' => 'YAKAKENT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'id' => 1994,
                'city_id' => 42,
                'slug' => 'yalihuyuk',
                'name' => 'YALIHÜYÜK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'id' => 1995,
                'city_id' => 44,
                'slug' => 'yazihan',
                'name' => 'YAZIHAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'id' => 1996,
                'city_id' => 12,
                'slug' => 'yedisu',
                'name' => 'YEDİSU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'id' => 1997,
                'city_id' => 14,
                'slug' => 'yenicaga',
                'name' => 'YENİÇAĞA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'id' => 1998,
                'city_id' => 66,
                'slug' => 'yenifakili',
                'name' => 'YENİFAKILI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'id' => 2000,
                'city_id' => 9,
                'slug' => 'didim',
                'name' => 'DİDİM',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'id' => 2001,
                'city_id' => 32,
                'slug' => 'yenisarbademli',
                'name' => 'YENİŞARBADEMLİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'id' => 2002,
                'city_id' => 47,
                'slug' => 'yesilli',
                'name' => 'YEŞİLLİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'id' => 2003,
                'city_id' => 34,
                'slug' => 'avcilar',
                'name' => 'AVCILAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'id' => 2004,
                'city_id' => 34,
                'slug' => 'bagcilar',
                'name' => 'BAĞCILAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'id' => 2005,
                'city_id' => 34,
                'slug' => 'bahcelievler',
                'name' => 'BAHÇELİEVLER',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'id' => 2006,
                'city_id' => 35,
                'slug' => 'balcova',
                'name' => 'BALÇOVA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'id' => 2007,
                'city_id' => 35,
                'slug' => 'cigli',
                'name' => 'ÇİĞLİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'id' => 2008,
                'city_id' => 75,
                'slug' => 'damal',
                'name' => 'DAMAL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'id' => 2009,
                'city_id' => 35,
                'slug' => 'gaziemir',
                'name' => 'GAZİEMİR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'id' => 2010,
                'city_id' => 34,
                'slug' => 'gungoren',
                'name' => 'GÜNGÖREN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'id' => 2011,
                'city_id' => 76,
                'slug' => 'karakoyunlu',
                'name' => 'KARAKOYUNLU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'id' => 2012,
                'city_id' => 34,
                'slug' => 'maltepe',
                'name' => 'MALTEPE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'id' => 2013,
                'city_id' => 35,
                'slug' => 'narlidere',
                'name' => 'NARLIDERE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'id' => 2014,
                'city_id' => 34,
                'slug' => 'sultanbeyli',
                'name' => 'SULTANBEYLİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'id' => 2015,
                'city_id' => 34,
                'slug' => 'tuzla',
                'name' => 'TUZLA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'id' => 2016,
                'city_id' => 34,
                'slug' => 'esenler',
                'name' => 'ESENLER',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'id' => 2017,
                'city_id' => 81,
                'slug' => 'gumusova',
                'name' => 'GÜMÜŞOVA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'id' => 2018,
                'city_id' => 35,
                'slug' => 'guzelbahce',
                'name' => 'GÜZELBAHÇE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'id' => 2019,
                'city_id' => 77,
                'slug' => 'altinova',
                'name' => 'ALTINOVA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'id' => 2020,
                'city_id' => 77,
                'slug' => 'armutlu',
                'name' => 'ARMUTLU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'id' => 2021,
                'city_id' => 77,
                'slug' => 'cinarcik',
                'name' => 'ÇINARCIK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'id' => 2022,
                'city_id' => 77,
                'slug' => 'ciftlikkoy',
                'name' => 'ÇİFTLİKKÖY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'id' => 2023,
                'city_id' => 79,
                'slug' => 'elbeyli',
                'name' => 'ELBEYLİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'id' => 2024,
                'city_id' => 79,
                'slug' => 'musabeyli',
                'name' => 'MUSABEYLİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'id' => 2025,
                'city_id' => 79,
                'slug' => 'polateli',
                'name' => 'POLATELİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'id' => 2026,
                'city_id' => 77,
                'slug' => 'termal',
                'name' => 'TERMAL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'id' => 2027,
                'city_id' => 80,
                'slug' => 'hasanbeyli',
                'name' => 'HASANBEYLİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'id' => 2028,
                'city_id' => 80,
                'slug' => 'sumbas',
                'name' => 'SUMBAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'id' => 2029,
                'city_id' => 80,
                'slug' => 'toprakkale',
                'name' => 'TOPRAKKALE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'id' => 2030,
                'city_id' => 41,
                'slug' => 'derince',
                'name' => 'DERİNCE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'id' => 2031,
                'city_id' => 81,
                'slug' => 'kaynasli',
                'name' => 'KAYNAŞLI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'id' => 2032,
                'city_id' => 1,
                'slug' => 'saricam',
                'name' => 'SARIÇAM',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'id' => 2033,
                'city_id' => 1,
                'slug' => 'cukurova',
                'name' => 'ÇUKUROVA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'id' => 2034,
                'city_id' => 6,
                'slug' => 'pursaklar',
                'name' => 'PURSAKLAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'id' => 2035,
                'city_id' => 7,
                'slug' => 'aksu',
                'name' => 'AKSU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'id' => 2036,
                'city_id' => 7,
                'slug' => 'dosemealti',
                'name' => 'DÖŞEMEALTI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'id' => 2037,
                'city_id' => 7,
                'slug' => 'kepez',
                'name' => 'KEPEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'id' => 2038,
                'city_id' => 7,
                'slug' => 'konyaalti',
                'name' => 'KONYAALTI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'id' => 2039,
                'city_id' => 7,
                'slug' => 'muratpasa',
                'name' => 'MURATPAŞA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'id' => 2040,
                'city_id' => 21,
                'slug' => 'baglar',
                'name' => 'BAĞLAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'id' => 2041,
                'city_id' => 21,
                'slug' => 'kayapinar',
                'name' => 'KAYAPINAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'id' => 2042,
                'city_id' => 21,
                'slug' => 'sur',
                'name' => 'SUR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'id' => 2043,
                'city_id' => 21,
                'slug' => 'yenisehir',
                'name' => 'YENİŞEHİR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'id' => 2044,
                'city_id' => 25,
                'slug' => 'palandoken',
                'name' => 'PALANDÖKEN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'id' => 2045,
                'city_id' => 25,
                'slug' => 'yakutiye',
                'name' => 'YAKUTİYE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'id' => 2046,
                'city_id' => 26,
                'slug' => 'odunpazari',
                'name' => 'ODUNPAZARI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'id' => 2047,
                'city_id' => 26,
                'slug' => 'tepebasi',
                'name' => 'TEPEBAŞI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'id' => 2048,
                'city_id' => 34,
                'slug' => 'arnavutkoy',
                'name' => 'ARNAVUTKÖY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'id' => 2049,
                'city_id' => 34,
                'slug' => 'atasehir',
                'name' => 'ATAŞEHİR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'id' => 2050,
                'city_id' => 34,
                'slug' => 'basaksehir',
                'name' => 'BAŞAKŞEHİR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'id' => 2051,
                'city_id' => 34,
                'slug' => 'beylikduzu',
                'name' => 'BEYLİKDÜZÜ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'id' => 2052,
                'city_id' => 34,
                'slug' => 'cekmekoy',
                'name' => 'ÇEKMEKÖY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'id' => 2053,
                'city_id' => 34,
                'slug' => 'esenyurt',
                'name' => 'ESENYURT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'id' => 2054,
                'city_id' => 34,
                'slug' => 'sancaktepe',
                'name' => 'SANCAKTEPE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'id' => 2055,
                'city_id' => 34,
                'slug' => 'sultangazi',
                'name' => 'SULTANGAZİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'id' => 2056,
                'city_id' => 35,
                'slug' => 'bayrakli',
                'name' => 'BAYRAKLI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'id' => 2057,
                'city_id' => 35,
                'slug' => 'karabaglar',
                'name' => 'KARABAĞLAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'id' => 2058,
                'city_id' => 41,
                'slug' => 'basiskele',
                'name' => 'BAŞİSKELE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'id' => 2059,
                'city_id' => 41,
                'slug' => 'cayirova',
                'name' => 'ÇAYIROVA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'id' => 2060,
                'city_id' => 41,
                'slug' => 'darica',
                'name' => 'DARICA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'id' => 2061,
                'city_id' => 41,
                'slug' => 'dilovasi',
                'name' => 'DİLOVASI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'id' => 2062,
                'city_id' => 41,
                'slug' => 'izmit',
                'name' => 'İZMİT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'id' => 2063,
                'city_id' => 41,
                'slug' => 'kartepe',
                'name' => 'KARTEPE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'id' => 2064,
                'city_id' => 33,
                'slug' => 'akdeniz',
                'name' => 'AKDENİZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'id' => 2065,
                'city_id' => 33,
                'slug' => 'mezitli',
                'name' => 'MEZİTLİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'id' => 2066,
                'city_id' => 33,
                'slug' => 'toroslar',
                'name' => 'TOROSLAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'id' => 2067,
                'city_id' => 33,
                'slug' => 'yenisehir',
                'name' => 'YENİŞEHİR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'id' => 2068,
                'city_id' => 54,
                'slug' => 'adapazari',
                'name' => 'ADAPAZARI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'id' => 2069,
                'city_id' => 54,
                'slug' => 'arifiye',
                'name' => 'ARİFİYE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'id' => 2070,
                'city_id' => 54,
                'slug' => 'erenler',
                'name' => 'ERENLER',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'id' => 2071,
                'city_id' => 54,
                'slug' => 'serdivan',
                'name' => 'SERDİVAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'id' => 2072,
                'city_id' => 55,
                'slug' => 'atakum',
                'name' => 'ATAKUM',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'id' => 2073,
                'city_id' => 55,
                'slug' => 'canik',
                'name' => 'CANİK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'id' => 2074,
                'city_id' => 55,
                'slug' => 'ilkadim',
                'name' => 'İLKADIM',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'id' => 2076,
                'city_id' => 9,
                'slug' => 'efeler',
                'name' => 'EFELER',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'id' => 2077,
                'city_id' => 10,
                'slug' => 'altieylul',
                'name' => 'ALTIEYLÜL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'id' => 2078,
                'city_id' => 10,
                'slug' => 'karesi',
                'name' => 'KARESİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'id' => 2079,
                'city_id' => 20,
                'slug' => 'merkezefendi',
                'name' => 'MERKEZEFENDİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'id' => 2080,
                'city_id' => 31,
                'slug' => 'antakya',
                'name' => 'ANTAKYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'id' => 2081,
                'city_id' => 31,
                'slug' => 'arsuz',
                'name' => 'ARSUZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'id' => 2082,
                'city_id' => 31,
                'slug' => 'defne',
                'name' => 'DEFNE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'id' => 2083,
                'city_id' => 31,
                'slug' => 'payas',
                'name' => 'PAYAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'id' => 2084,
                'city_id' => 46,
                'slug' => 'dulkadiroglu',
                'name' => 'DULKADİROĞLU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'id' => 2085,
                'city_id' => 46,
                'slug' => 'onikisubat',
                'name' => 'ONİKİŞUBAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'id' => 2086,
                'city_id' => 45,
                'slug' => 'sehzadeler',
                'name' => 'ŞEHZADELER',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'id' => 2087,
                'city_id' => 45,
                'slug' => 'yunusemre',
                'name' => 'YUNUSEMRE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'id' => 2088,
                'city_id' => 47,
                'slug' => 'artuklu',
                'name' => 'ARTUKLU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'id' => 2089,
                'city_id' => 48,
                'slug' => 'mentese',
                'name' => 'MENTEŞE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'id' => 2090,
                'city_id' => 48,
                'slug' => 'seydikemer',
                'name' => 'SEYDİKEMER',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'id' => 2091,
                'city_id' => 63,
                'slug' => 'eyyubiye',
                'name' => 'EYYÜBİYE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'id' => 2092,
                'city_id' => 63,
                'slug' => 'haliliye',
                'name' => 'HALİLİYE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'id' => 2093,
                'city_id' => 63,
                'slug' => 'karakopru',
                'name' => 'KARAKÖPRÜ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'id' => 2094,
                'city_id' => 59,
                'slug' => 'ergene',
                'name' => 'ERGENE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'id' => 2095,
                'city_id' => 59,
                'slug' => 'kapakli',
                'name' => 'KAPAKLI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'id' => 2096,
                'city_id' => 59,
                'slug' => 'suleymanpasa',
                'name' => 'SÜLEYMANPAŞA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'id' => 2097,
                'city_id' => 61,
                'slug' => 'ortahisar',
                'name' => 'ORTAHİSAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'id' => 2098,
                'city_id' => 65,
                'slug' => 'ipekyolu',
                'name' => 'İPEKYOLU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'id' => 2099,
                'city_id' => 65,
                'slug' => 'tusba',
                'name' => 'TUŞBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'id' => 2100,
                'city_id' => 67,
                'slug' => 'kilimli',
                'name' => 'KİLİMLİ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'id' => 2101,
                'city_id' => 67,
                'slug' => 'kozlu',
                'name' => 'KOZLU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'id' => 2103,
                'city_id' => 52,
                'slug' => 'altinordu',
                'name' => 'ALTINORDU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'id' => 2105,
                'city_id' => 8,
                'slug' => 'kemalpasa',
                'name' => 'KEMALPAŞA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'id' => 2106,
                'city_id' => 68,
                'slug' => 'sultanhani',
                'name' => 'SULTANHANI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'id' => 2107,
                'city_id' => 30,
                'slug' => 'derecik',
                'name' => 'DERECİK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'id' => 99997,
                'city_id' => 503,
                'slug' => 'merkez',
                'name' => 'MERKEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'id' => 99998,
                'city_id' => 502,
                'slug' => 'merkez',
                'name' => 'MERKEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'id' => 99999,
                'city_id' => 501,
                'slug' => 'merkez',
                'name' => 'MERKEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}