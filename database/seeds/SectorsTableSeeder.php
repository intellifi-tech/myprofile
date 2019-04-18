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
            ),
            1 => 
            array (
                'id' => 87,
                'name' => 'Alternatif İhtilaf Çözümü',
            ),
            2 => 
            array (
                'id' => 88,
                'name' => 'Ambalaj ve Kaplar',
            ),
            3 => 
            array (
                'id' => 89,
                'name' => 'Animasyon',
            ),
            4 => 
            array (
                'id' => 90,
                'name' => 'Araştırma',
            ),
            5 => 
            array (
                'id' => 91,
                'name' => 'Askerlik',
            ),
            6 => 
            array (
                'id' => 92,
                'name' => 'Balıkçılık',
            ),
            7 => 
            array (
                'id' => 93,
                'name' => 'Bankacılık',
            ),
            8 => 
            array (
                'id' => 94,
                'name' => 'Bağış Toplama',
            ),
            9 => 
            array (
                'id' => 95,
                'name' => 'Bilgi Hizmetleri',
            ),
            10 => 
            array (
                'id' => 96,
                'name' => 'Bilgi Teknolojisi ve Hizmetleri',
            ),
            11 => 
            array (
                'id' => 97,
                'name' => 'Bilgisayar Ağları',
            ),
            12 => 
            array (
                'id' => 98,
                'name' => 'Bilgisayar Donanımı',
            ),
            13 => 
            array (
                'id' => 99,
                'name' => 'Bilgisayar Oyunları',
            ),
            14 => 
            array (
                'id' => 100,
                'name' => 'Bilgisayar Yazılımı',
            ),
            15 => 
            array (
                'id' => 101,
                'name' => 'Bilgisayar ve Ağ Güvenliği',
            ),
            16 => 
            array (
                'id' => 102,
                'name' => 'Bilgisayar ve Aile Hizmetleri',
            ),
            17 => 
            array (
                'id' => 103,
                'name' => 'Biyoteknoloji',
            ),
            18 => 
            array (
                'id' => 104,
                'name' => 'Cam, Seramik ve Beton',
            ),
            19 => 
            array (
                'id' => 105,
                'name' => 'Demiryolu İmalatı',
            ),
            20 => 
            array (
                'id' => 106,
                'name' => 'Denizclik',
            ),
            21 => 
            array (
                'id' => 107,
                'name' => 'Depolama',
            ),
            22 => 
            array (
                'id' => 108,
                'name' => 'Devlet Yönetimi',
            ),
            23 => 
            array (
                'id' => 109,
                'name' => 'Devlet İlişkileri',
            ),
            24 => 
            array (
                'id' => 110,
                'name' => 'Dini Kurumlar',
            ),
            25 => 
            array (
                'id' => 111,
                'name' => 'Dinlence, Seyahat ve Turizm',
            ),
            26 => 
            array (
                'id' => 112,
                'name' => 'Dinlenme Tesisleri ve Hizmetleri',
            ),
            27 => 
            array (
                'id' => 113,
                'name' => 'Düşünce Kuruluşları',
            ),
            28 => 
            array (
                'id' => 114,
                'name' => 'Dış Kaynak Kullanımı/Offshore',
            ),
            29 => 
            array (
                'id' => 115,
                'name' => 'E-Eğitim',
            ),
            30 => 
            array (
                'id' => 116,
                'name' => 'Eczacılık',
            ),
            31 => 
            array (
                'id' => 117,
                'name' => 'El İşleri',
            ),
            32 => 
            array (
                'id' => 118,
                'name' => 'Elektrik/Elektronik Üretimi',
            ),
            33 => 
            array (
                'id' => 119,
                'name' => 'Endüstriyel Otomasyon',
            ),
            34 => 
            array (
                'id' => 120,
                'name' => 'Etkinlik Hizmetleri',
            ),
            35 => 
            array (
                'id' => 121,
                'name' => 'Eğitim Yönetimi',
            ),
            36 => 
            array (
                'id' => 122,
                'name' => 'Eğlence',
            ),
            37 => 
            array (
                'id' => 123,
                'name' => 'Finansal Hizmetler',
            ),
            38 => 
            array (
                'id' => 124,
                'name' => 'Fotoğrafçılık',
            ),
            39 => 
            array (
                'id' => 125,
                'name' => 'Gayri Menkul',
            ),
            40 => 
            array (
                'id' => 126,
                'name' => 'Gazetecilik',
            ),
            41 => 
            array (
                'id' => 127,
                'name' => 'Gemi İnşası',
            ),
            42 => 
            array (
                'id' => 128,
                'name' => 'Giyim ve Moda',
            ),
            43 => 
            array (
                'id' => 129,
                'name' => 'Grafik Tasarım',
            ),
            44 => 
            array (
                'id' => 130,
                'name' => 'Güvenlik ve Soruşturma',
            ),
            45 => 
            array (
                'id' => 131,
                'name' => 'Güzel Sanatlar',
            ),
            46 => 
            array (
                'id' => 132,
                'name' => 'Gıda Maddeleri Üretimi',
            ),
            47 => 
            array (
                'id' => 133,
                'name' => 'Hakim/Savcı',
            ),
            48 => 
            array (
                'id' => 134,
                'name' => 'Halkla İlişkiler ve İletişim',
            ),
            49 => 
            array (
                'id' => 135,
                'name' => 'Hastane ve Sağlık',
            ),
            50 => 
            array (
                'id' => 136,
                'name' => 'Havacılık ve Uzay',
            ),
            51 => 
            array (
                'id' => 137,
                'name' => 'Havayolu/Havacılık',
            ),
            52 => 
            array (
                'id' => 138,
                'name' => 'Hayır İşleri',
            ),
            53 => 
            array (
                'id' => 139,
                'name' => 'Hukuk',
            ),
            54 => 
            array (
                'id' => 140,
                'name' => 'Hukuki Yaptırım',
            ),
            55 => 
            array (
                'id' => 141,
                'name' => 'Kablosuz',
            ),
            56 => 
            array (
                'id' => 142,
                'name' => 'Kamu Düzeni',
            ),
            57 => 
            array (
                'id' => 143,
                'name' => 'Kamu Güvenliği',
            ),
            58 => 
            array (
                'id' => 144,
                'name' => 'Kamu Hizmetleri',
            ),
            59 => 
            array (
                'id' => 145,
                'name' => 'Kağıt ve Orman Ürünleri',
            ),
            60 => 
            array (
                'id' => 146,
                'name' => 'Kentsel ve Sosyal Kurumlar',
            ),
            61 => 
            array (
                'id' => 147,
                'name' => 'Kimya',
            ),
            62 => 
            array (
                'id' => 148,
                'name' => 'Konaklama Hizmetleri',
            ),
            63 => 
            array (
                'id' => 149,
                'name' => 'Kozmetik',
            ),
            64 => 
            array (
                'id' => 150,
                'name' => 'Kumar ve Kumarhaneler',
            ),
            65 => 
            array (
                'id' => 151,
                'name' => 'Kâr Amacı Gütmeyen Organizasyon Yönetimi',
            ),
            66 => 
            array (
                'id' => 152,
                'name' => 'Kütüphanecilik',
            ),
            67 => 
            array (
                'id' => 153,
                'name' => 'Lojistik ve Tedarik Zinciri',
            ),
            68 => 
            array (
                'id' => 154,
                'name' => 'Lüx Ürünler ve Mücevherat',
            ),
            69 => 
            array (
                'id' => 155,
                'name' => 'Madencilik ve Metaller',
            ),
            70 => 
            array (
                'id' => 156,
                'name' => 'Makine',
            ),
            71 => 
            array (
                'id' => 157,
                'name' => 'Mandıra',
            ),
            72 => 
            array (
                'id' => 158,
                'name' => 'Matbaacılık',
            ),
            73 => 
            array (
                'id' => 159,
                'name' => 'Medya Yayıncılığı',
            ),
            74 => 
            array (
                'id' => 160,
                'name' => 'Medya Üretimi',
            ),
            75 => 
            array (
                'id' => 161,
                'name' => 'Mekanik ve Endüstriyel Mühendislik',
            ),
            76 => 
            array (
                'id' => 162,
                'name' => 'Meslek Eğitimi ve Eğitmenlik',
            ),
            77 => 
            array (
                'id' => 163,
                'name' => 'Mimari ve Planlama',
            ),
            78 => 
            array (
                'id' => 164,
                'name' => 'Mobilya',
            ),
            79 => 
            array (
                'id' => 165,
                'name' => 'Muhasebe',
            ),
            80 => 
            array (
                'id' => 166,
                'name' => 'Müzeler ve Kurumlar',
            ),
            81 => 
            array (
                'id' => 167,
                'name' => 'Müzik',
            ),
            82 => 
            array (
                'id' => 168,
                'name' => 'Nakliye/Kamyonculuk/Demiryolu',
            ),
            83 => 
            array (
                'id' => 169,
                'name' => 'Nanoteknoloji',
            ),
            84 => 
            array (
                'id' => 170,
                'name' => 'Otomotiv',
            ),
            85 => 
            array (
                'id' => 171,
                'name' => 'Paket/Yük Teslimi',
            ),
            86 => 
            array (
                'id' => 172,
                'name' => 'Pazarlama ve Reklamcılık',
            ),
            87 => 
            array (
                'id' => 173,
                'name' => 'Perakende',
            ),
            88 => 
            array (
                'id' => 174,
                'name' => 'Petrol ve Enerji',
            ),
            89 => 
            array (
                'id' => 175,
                'name' => 'Piyasa Araştırması',
            ),
            90 => 
            array (
                'id' => 176,
                'name' => 'Plastik',
            ),
            91 => 
            array (
                'id' => 177,
                'name' => 'Politik Örgüt',
            ),
            92 => 
            array (
                'id' => 178,
                'name' => 'Program Geliştirme',
            ),
            93 => 
            array (
                'id' => 179,
                'name' => 'Restoran',
            ),
            94 => 
            array (
                'id' => 180,
                'name' => 'Risk Sermayesi ve Özel Sermaye',
            ),
            95 => 
            array (
                'id' => 181,
                'name' => 'Ruh Sağlığı',
            ),
            96 => 
            array (
                'id' => 182,
                'name' => 'Sahne Sanatları',
            ),
            97 => 
            array (
                'id' => 183,
                'name' => 'Savunma ve Uzay',
            ),
            98 => 
            array (
                'id' => 184,
                'name' => 'Sağlık, Zindelik ve Finess',
            ),
            99 => 
            array (
                'id' => 185,
                'name' => 'Sermaye Piyasaları',
            ),
            100 => 
            array (
                'id' => 186,
                'name' => 'Sigorta',
            ),
            101 => 
            array (
                'id' => 187,
                'name' => 'Sinema ve Film',
            ),
            102 => 
            array (
                'id' => 188,
                'name' => 'Spor',
            ),
            103 => 
            array (
                'id' => 189,
                'name' => 'Spor Malzemeleri',
            ),
            104 => 
            array (
                'id' => 190,
                'name' => 'Süpermarket',
            ),
            105 => 
            array (
                'id' => 191,
                'name' => 'Tasarım',
            ),
            106 => 
            array (
                'id' => 192,
                'name' => 'Tekstil',
            ),
            107 => 
            array (
                'id' => 193,
                'name' => 'Telekominikasyon',
            ),
            108 => 
            array (
                'id' => 194,
                'name' => 'Tesis Hizmetleri',
            ),
            109 => 
            array (
                'id' => 195,
                'name' => 'Ticari Gayri Menkul',
            ),
            110 => 
            array (
                'id' => 196,
                'name' => 'Toptancılık',
            ),
            111 => 
            array (
                'id' => 197,
                'name' => 'Tüketici Elektroniği',
            ),
            112 => 
            array (
                'id' => 198,
                'name' => 'Tüketici Hizmetleri',
            ),
            113 => 
            array (
                'id' => 199,
                'name' => 'Tüketim Maddeleri',
            ),
            114 => 
            array (
                'id' => 200,
                'name' => 'Tütün',
            ),
            115 => 
            array (
                'id' => 201,
                'name' => 'Tıbbi Cihazlar',
            ),
            116 => 
            array (
                'id' => 202,
                'name' => 'Tıbbi Uygulama',
            ),
            117 => 
            array (
                'id' => 203,
                'name' => 'Uluslararası Ticaret ve Geliştirme',
            ),
            118 => 
            array (
                'id' => 204,
                'name' => 'Uluslararası İlişkiler',
            ),
            119 => 
            array (
                'id' => 205,
                'name' => 'Veterinerlik',
            ),
            120 => 
            array (
                'id' => 206,
                'name' => 'Yarı İletkenler',
            ),
            121 => 
            array (
                'id' => 207,
                'name' => 'Yasal Hizmetler',
            ),
            122 => 
            array (
                'id' => 208,
                'name' => 'Yasama Meclisi',
            ),
            123 => 
            array (
                'id' => 209,
                'name' => 'Yatırım Bankacılığı',
            ),
            124 => 
            array (
                'id' => 210,
                'name' => 'Yatırım Yönetimi',
            ),
            125 => 
            array (
                'id' => 211,
                'name' => 'Yayıncılık',
            ),
            126 => 
            array (
                'id' => 212,
                'name' => 'Yazım ve Düzenleme',
            ),
            127 => 
            array (
                'id' => 213,
                'name' => 'Yenilenebilir Enerji Kaynakları ve Çevre',
            ),
            128 => 
            array (
                'id' => 214,
                'name' => 'Yiyecek ve İçecek',
            ),
            129 => 
            array (
                'id' => 215,
                'name' => 'Yönetim Danışmanlığı',
            ),
            130 => 
            array (
                'id' => 216,
                'name' => 'Yönetim Ofisi',
            ),
            131 => 
            array (
                'id' => 217,
                'name' => 'Yüksek Öğrenim',
            ),
            132 => 
            array (
                'id' => 218,
                'name' => 'Çeviri ve Yerelleştirme',
            ),
            133 => 
            array (
                'id' => 219,
                'name' => 'Çevre Koruma Hizmetleri',
            ),
            134 => 
            array (
                'id' => 220,
                'name' => 'Çevrimiçi Medya',
            ),
            135 => 
            array (
                'id' => 221,
                'name' => 'Çiftlik İşletme',
            ),
            136 => 
            array (
                'id' => 222,
                'name' => 'Çiftçilik',
            ),
            137 => 
            array (
                'id' => 223,
                'name' => 'İlk/Orta Öğrenim',
            ),
            138 => 
            array (
                'id' => 224,
                'name' => 'İnsan Kaynakları',
            ),
            139 => 
            array (
                'id' => 225,
                'name' => 'İnternet',
            ),
            140 => 
            array (
                'id' => 226,
                'name' => 'İnşaat',
            ),
            141 => 
            array (
                'id' => 227,
                'name' => 'İnşaat Malzemeleri',
            ),
            142 => 
            array (
                'id' => 228,
                'name' => 'İnşaat Mühendisliği',
            ),
            143 => 
            array (
                'id' => 229,
                'name' => 'İthalat ve İhracat',
            ),
            144 => 
            array (
                'id' => 230,
                'name' => 'İşe Alma ve Ekip Kurma',
            ),
            145 => 
            array (
                'id' => 231,
                'name' => 'İşletme Malzeme Tedariği ve EkipmanŞarap ve Alkollü İçecekler',
            ),
            146 => 
            array (
                'id' => 232,
                'name' => 'Şarap ve Alkollü İçecekler',
            ),
        ));
        
        
    }
}