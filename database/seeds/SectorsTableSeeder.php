<?php

use Illuminate\Database\Seeder;

class SectorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sectors')->delete();
        
        \DB::table('sectors')->insert(array (
            0 => 
            array (
                'id' => 86,
                'name' => 'Alternatif Tıp',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 87,
                'name' => 'Alternatif İhtilaf Çözümü',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 88,
                'name' => 'Ambalaj ve Kaplar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 89,
                'name' => 'Animasyon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 90,
                'name' => 'Araştırma',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 91,
                'name' => 'Askerlik',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 92,
                'name' => 'Balıkçılık',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 93,
                'name' => 'Bankacılık',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 94,
                'name' => 'Bağış Toplama',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 95,
                'name' => 'Bilgi Hizmetleri',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 96,
                'name' => 'Bilgi Teknolojisi ve Hizmetleri',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 97,
                'name' => 'Bilgisayar Ağları',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 98,
                'name' => 'Bilgisayar Donanımı',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 99,
                'name' => 'Bilgisayar Oyunları',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 100,
                'name' => 'Bilgisayar Yazılımı',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 101,
                'name' => 'Bilgisayar ve Ağ Güvenliği',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 102,
                'name' => 'Bilgisayar ve Aile Hizmetleri',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 103,
                'name' => 'Biyoteknoloji',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 104,
                'name' => 'Cam, Seramik ve Beton',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 105,
                'name' => 'Demiryolu İmalatı',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 106,
                'name' => 'Denizclik',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 107,
                'name' => 'Depolama',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 108,
                'name' => 'Devlet Yönetimi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 109,
                'name' => 'Devlet İlişkileri',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 110,
                'name' => 'Dini Kurumlar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 111,
                'name' => 'Dinlence, Seyahat ve Turizm',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 112,
                'name' => 'Dinlenme Tesisleri ve Hizmetleri',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 113,
                'name' => 'Düşünce Kuruluşları',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 114,
                'name' => 'Dış Kaynak Kullanımı/Offshore',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 115,
                'name' => 'E-Eğitim',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 116,
                'name' => 'Eczacılık',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 117,
                'name' => 'El İşleri',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 118,
                'name' => 'Elektrik/Elektronik Üretimi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 119,
                'name' => 'Endüstriyel Otomasyon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 120,
                'name' => 'Etkinlik Hizmetleri',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 121,
                'name' => 'Eğitim Yönetimi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 122,
                'name' => 'Eğlence',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 123,
                'name' => 'Finansal Hizmetler',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 124,
                'name' => 'Fotoğrafçılık',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 125,
                'name' => 'Gayri Menkul',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 126,
                'name' => 'Gazetecilik',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 127,
                'name' => 'Gemi İnşası',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 128,
                'name' => 'Giyim ve Moda',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 129,
                'name' => 'Grafik Tasarım',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 130,
                'name' => 'Güvenlik ve Soruşturma',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 131,
                'name' => 'Güzel Sanatlar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 132,
                'name' => 'Gıda Maddeleri Üretimi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 133,
                'name' => 'Hakim/Savcı',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 134,
                'name' => 'Halkla İlişkiler ve İletişim',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 135,
                'name' => 'Hastane ve Sağlık',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 136,
                'name' => 'Havacılık ve Uzay',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 137,
                'name' => 'Havayolu/Havacılık',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 138,
                'name' => 'Hayır İşleri',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 139,
                'name' => 'Hukuk',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 140,
                'name' => 'Hukuki Yaptırım',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 141,
                'name' => 'Kablosuz',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 142,
                'name' => 'Kamu Düzeni',
                'created_at' => NULL,
                'updated_at' => '0000-00-00 00:00:00',
            ),
            57 => 
            array (
                'id' => 143,
                'name' => 'Kamu Güvenliği',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 144,
                'name' => 'Kamu Hizmetleri',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 145,
                'name' => 'Kağıt ve Orman Ürünleri',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 146,
                'name' => 'Kentsel ve Sosyal Kurumlar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 147,
                'name' => 'Kimya',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 148,
                'name' => 'Konaklama Hizmetleri',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 149,
                'name' => 'Kozmetik',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 150,
                'name' => 'Kumar ve Kumarhaneler',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 151,
                'name' => 'Kâr Amacı Gütmeyen Organizasyon Yönetimi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 152,
                'name' => 'Kütüphanecilik',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 153,
                'name' => 'Lojistik ve Tedarik Zinciri',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 154,
                'name' => 'Lüx Ürünler ve Mücevherat',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 155,
                'name' => 'Madencilik ve Metaller',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 156,
                'name' => 'Makine',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 157,
                'name' => 'Mandıra',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 158,
                'name' => 'Matbaacılık',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 159,
                'name' => 'Medya Yayıncılığı',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 160,
                'name' => 'Medya Üretimi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 161,
                'name' => 'Mekanik ve Endüstriyel Mühendislik',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 162,
                'name' => 'Meslek Eğitimi ve Eğitmenlik',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 163,
                'name' => 'Mimari ve Planlama',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 164,
                'name' => 'Mobilya',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 165,
                'name' => 'Muhasebe',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 166,
                'name' => 'Müzeler ve Kurumlar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 167,
                'name' => 'Müzik',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 168,
                'name' => 'Nakliye/Kamyonculuk/Demiryolu',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 169,
                'name' => 'Nanoteknoloji',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 170,
                'name' => 'Otomotiv',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 171,
                'name' => 'Paket/Yük Teslimi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 172,
                'name' => 'Pazarlama ve Reklamcılık',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 173,
                'name' => 'Perakende',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 174,
                'name' => 'Petrol ve Enerji',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 175,
                'name' => 'Piyasa Araştırması',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 176,
                'name' => 'Plastik',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 177,
                'name' => 'Politik Örgüt',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 178,
                'name' => 'Program Geliştirme',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 179,
                'name' => 'Restoran',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 180,
                'name' => 'Risk Sermayesi ve Özel Sermaye',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 181,
                'name' => 'Ruh Sağlığı',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 182,
                'name' => 'Sahne Sanatları',
                'created_at' => NULL,
                'updated_at' => '0000-00-00 00:00:00',
            ),
            97 => 
            array (
                'id' => 183,
                'name' => 'Savunma ve Uzay',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 184,
                'name' => 'Sağlık, Zindelik ve Finess',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 185,
                'name' => 'Sermaye Piyasaları',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 186,
                'name' => 'Sigorta',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 187,
                'name' => 'Sinema ve Film',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 188,
                'name' => 'Spor',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 189,
                'name' => 'Spor Malzemeleri',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 190,
                'name' => 'Süpermarket',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 191,
                'name' => 'Tasarım',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 192,
                'name' => 'Tekstil',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 193,
                'name' => 'Telekominikasyon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 194,
                'name' => 'Tesis Hizmetleri',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 195,
                'name' => 'Ticari Gayri Menkul',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 196,
                'name' => 'Toptancılık',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 197,
                'name' => 'Tüketici Elektroniği',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 198,
                'name' => 'Tüketici Hizmetleri',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 199,
                'name' => 'Tüketim Maddeleri',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 200,
                'name' => 'Tütün',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 201,
                'name' => 'Tıbbi Cihazlar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 202,
                'name' => 'Tıbbi Uygulama',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 203,
                'name' => 'Uluslararası Ticaret ve Geliştirme',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 204,
                'name' => 'Uluslararası İlişkiler',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 205,
                'name' => 'Veterinerlik',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 206,
                'name' => 'Yarı İletkenler',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 207,
                'name' => 'Yasal Hizmetler',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 208,
                'name' => 'Yasama Meclisi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 209,
                'name' => 'Yatırım Bankacılığı',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 210,
                'name' => 'Yatırım Yönetimi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 211,
                'name' => 'Yayıncılık',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 212,
                'name' => 'Yazım ve Düzenleme',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 213,
                'name' => 'Yenilenebilir Enerji Kaynakları ve Çevre',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 214,
                'name' => 'Yiyecek ve İçecek',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 215,
                'name' => 'Yönetim Danışmanlığı',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 216,
                'name' => 'Yönetim Ofisi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 217,
                'name' => 'Yüksek Öğrenim',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 218,
                'name' => 'Çeviri ve Yerelleştirme',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 219,
                'name' => 'Çevre Koruma Hizmetleri',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 220,
                'name' => 'Çevrimiçi Medya',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 221,
                'name' => 'Çiftlik İşletme',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 222,
                'name' => 'Çiftçilik',
                'created_at' => NULL,
                'updated_at' => '0000-00-00 00:00:00',
            ),
            137 => 
            array (
                'id' => 223,
                'name' => 'İlk/Orta Öğrenim',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 224,
                'name' => 'İnsan Kaynakları',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 225,
                'name' => 'İnternet',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 226,
                'name' => 'İnşaat',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 227,
                'name' => 'İnşaat Malzemeleri',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 228,
                'name' => 'İnşaat Mühendisliği',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 229,
                'name' => 'İthalat ve İhracat',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 230,
                'name' => 'İşe Alma ve Ekip Kurma',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 231,
                'name' => 'İşletme Malzeme Tedariği ve EkipmanŞarap ve Alkollü İçecekler',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 232,
                'name' => 'Şarap ve Alkollü İçecekler',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}