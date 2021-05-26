<?php

namespace Database\Seeders;

use App\Models\Product as ModelsProduct;
use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //iPad Gen8
        //128GB VERZE
        ModelsProduct::create([
            'name' => 'Apple iPad Wi-Fi Gen8 Zlatý',
            'slug' => 'ipad-2020-gold_gen8',
            'sorting' =>'iPad 8.Gen',  //
            'details' => '10,2 palců, 128GB',
            'price' => 12999,
            'description' => 'Nádherný 10,2palcový Retina displej.
                            Čip A12 Bionic s Neural Enginem.
                            Podporuje Apple Pencil (1. generace) a Smart Keyboard.
                            8MP zadní fotoaparát, 1,2MP přední fotoaparát FaceTime HD
                            Stereo reproduktory.
                            Wi-Fi 802.11ac a 4G LTE Advanced na mobilní data.
                            Výdrž baterie až 10 hodin.
                            Konektor Lightning na nabíjení a připojení doplňků.
                            Touch ID na bezpečné ověřování a Apple Pay.
                            iPadOS 14 přináší nové možnosti navržené přímo pro iPad.',
        ])->categories()->attach(14);

        ModelsProduct::create([
            'name' => 'Apple iPad Wi-Fi Gen8 Šedý',
            'slug' => 'ipad-2020-spacegray_gen8',
            'sorting' =>'iPad 8.Gen',  //
            'details' => '10,2 palců, 128GB',
            'price' => 12999,
            'description' => 'Nádherný 10,2palcový Retina displej.
                            Čip A12 Bionic s Neural Enginem.
                            Podporuje Apple Pencil (1. generace) a Smart Keyboard.
                            8MP zadní fotoaparát, 1,2MP přední fotoaparát FaceTime HD
                            Stereo reproduktory.
                            Wi-Fi 802.11ac a 4G LTE Advanced na mobilní data.
                            Výdrž baterie až 10 hodin.
                            Konektor Lightning na nabíjení a připojení doplňků.
                            Touch ID na bezpečné ověřování a Apple Pay.
                            iPadOS 14 přináší nové možnosti navržené přímo pro iPad.',
        ])->categories()->attach(14);

        ModelsProduct::create([
            'name' => 'Apple iPad Wi-Fi Gen8 Stříbrný',
            'slug' => 'ipad-2020-silver_gen8',
            'sorting' =>'iPad 8.Gen',  //
            'details' => '10,2 palců, 128GB',
            'price' => 12999,
            'description' => 'Nádherný 10,2palcový Retina displej.
                            Čip A12 Bionic s Neural Enginem.
                            Podporuje Apple Pencil (1. generace) a Smart Keyboard.
                            8MP zadní fotoaparát, 1,2MP přední fotoaparát FaceTime HD
                            Stereo reproduktory.
                            Wi-Fi 802.11ac a 4G LTE Advanced na mobilní data.
                            Výdrž baterie až 10 hodin.
                            Konektor Lightning na nabíjení a připojení doplňků.
                            Touch ID na bezpečné ověřování a Apple Pay.
                            iPadOS 14 přináší nové možnosti navržené přímo pro iPad.',
        ])->categories()->attach(14);

        //IPAD GEN 8 END


        //IPAD AIR START
        //64GB VERZE
         ModelsProduct::create([
            'name' => 'Apple iPad Air Wi-Fi Stříbrný',
            'slug' => 'ipad-air-silver',
            'sorting' =>'iPad Air',  //
            'details' => '10,9 palců, 64GB',
            'price' => 16990,
            'description' => 'Čip A14 Bionic s 64bitovou desktopovou architekturou Neural Engine.
                                Podporuje Apple Pencil (2. generace) a Smart Keyboard. Liquid Retina displej
                                10,9palcový (úhlopříčně). Multi‑Touch - displej s LED podsvícením a technologií IPS
                                Rozlišení 2360 × 1640 při 264 pixelech na palec. Fotoaparát 12MP širokoúhlý.',
        ])->categories()->attach(15);

        ModelsProduct::create([
            'name' => 'Apple iPad Air Wi-Fi Modrý',
            'slug' => 'ipad-air-blue',
            'sorting' =>'iPad Air',  //
            'details' => '10,9 palců, 64GB',
            'price' => 16990,
            'description' => 'Čip A14 Bionic s 64bitovou desktopovou architekturou Neural Engine.
                                Podporuje Apple Pencil (2. generace) a Smart Keyboard. Liquid Retina displej
                                10,9palcový (úhlopříčně). Multi‑Touch - displej s LED podsvícením a technologií IPS
                                Rozlišení 2360 × 1640 při 264 pixelech na palec. Fotoaparát 12MP širokoúhlý.',
        ])->categories()->attach(15);


        ModelsProduct::create([
            'name' => 'Apple iPad Air Wi-Fi Zelený',
            'slug' => 'ipad-air-green',
            'sorting' =>'iPad Air',  //
            'details' => '10,9 palců, 64GB',
            'price' => 16990,
            'description' => 'Čip A14 Bionic s 64bitovou desktopovou architekturou Neural Engine.
                                Podporuje Apple Pencil (2. generace) a Smart Keyboard. Liquid Retina displej
                                10,9palcový (úhlopříčně). Multi‑Touch - displej s LED podsvícením a technologií IPS
                                Rozlišení 2360 × 1640 při 264 pixelech na palec. Fotoaparát 12MP širokoúhlý.',
        ])->categories()->attach(15);

        ModelsProduct::create([
            'name' => 'Apple iPad Air Wi-Fi Šedý',
            'slug' => 'ipad-air-gray',
            'sorting' =>'iPad Air',  //
            'details' => '10,9 palců, 64GB',
            'price' => 16990,
            'description' => 'Čip A14 Bionic s 64bitovou desktopovou architekturou Neural Engine.
                                Podporuje Apple Pencil (2. generace) a Smart Keyboard. Liquid Retina displej
                                10,9palcový (úhlopříčně). Multi‑Touch - displej s LED podsvícením a technologií IPS
                                Rozlišení 2360 × 1640 při 264 pixelech na palec. Fotoaparát 12MP širokoúhlý.',
        ])->categories()->attach(15);

        ModelsProduct::create([
            'name' => 'Apple iPad Air Wi-Fi Zlatý',
            'slug' => 'ipad-air-gold',
            'sorting' =>'iPad Air',  //
            'details' => '10,9 palců, 64GB',
            'price' => 16990,
            'description' => 'Čip A14 Bionic s 64bitovou desktopovou architekturou Neural Engine.
                                Podporuje Apple Pencil (2. generace) a Smart Keyboard. Liquid Retina displej
                                10,9palcový (úhlopříčně). Multi‑Touch - displej s LED podsvícením a technologií IPS
                                Rozlišení 2360 × 1640 při 264 pixelech na palec. Fotoaparát 12MP širokoúhlý.',
        ])->categories()->attach(15);
        //END IPAD AIR


        //IPAD MINI START
        ModelsProduct::create([
            'name' => 'Apple iPad mini 5 Wi-Fi Zlatý',
            'slug' => 'ipad_mini_5gen_gold',
            'sorting' =>'iPad Mini',  //
            'details' => '7,9 palců, 64GB',
            'price' => 11490,
            'description' => 'Čip A12 Bionic s Neural Enginem.
            7,9palcový Retina displej s True Tone zobrazením.
            A Apple Pencil, kterým si poznamenáš svoje největší nápady, ať je dostaneš kdekoli.
            Pořád je to iPad mini. Jen toho umí ještě víc.',
        ])->categories()->attach(16);

        ModelsProduct::create([
            'name' => 'Apple iPad mini 5 Wi-Fi Šedý',
            'slug' => 'ipad_mini_5gen_gray',
            'sorting' =>'iPad Mini',  //
            'details' => '7,9 palců, 64GB',
            'price' => 11490,
            'description' => 'Čip A12 Bionic s Neural Enginem.
            7,9palcový Retina displej s True Tone zobrazením.
            A Apple Pencil, kterým si poznamenáš svoje největší nápady, ať je dostaneš kdekoli.
            Pořád je to iPad mini. Jen toho umí ještě víc.',
        ])->categories()->attach(16);

        ModelsProduct::create([
            'name' => 'Apple iPad mini 5 Wi-Fi Stříbrný',
            'slug' => 'ipad_mini_5gen_silver',
            'sorting' =>'iPad Mini',  //
            'details' => '7,9 palců, 64GB',
            'price' => 11490,
            'description' => 'Čip A12 Bionic s Neural Enginem.
            7,9palcový Retina displej s True Tone zobrazením.
            A Apple Pencil, kterým si poznamenáš svoje největší nápady, ať je dostaneš kdekoli.
            Pořád je to iPad mini. Jen toho umí ještě víc.',
        ])->categories()->attach(16);
        //IPAD MINI END


        //IPAD PRO START
        //128GB
        ModelsProduct::create([
            'name' => 'Apple iPad PRO Wi-Fi Stříbrný',
            'slug' => 'ipad-pro-12-silver',
            'sorting' =>'iPad Pro',  //
            'details' => '12,9 palců, 128GB',
            'price' => 27990,
            'description' => 'Nová generace tabletu iPad Pro s 12.9" Liquid Retina displejem, vynikajícím výkonem a umělou inteligencí.
            Procesor A12Z Bionic, jednotka pro umělou inteligenci Neural Engine a 8jádrový grafický akcelerátor, rozlišení 2732 x 2048 bodů, 128GB interní paměti, zadní 12MP f/1.8 + 10MP utrawide a přední 7MP TrueDepth kamery, LiDAR skener pro rozšířenou realitu, Face ID, WiFi ax, Bluetooth 5.0, USB Type-C, 4 reproduktory, operační systém iPadOS.',
        ])->categories()->attach(17);

        ModelsProduct::create([
            'name' => 'Apple iPad PRO Wi-Fi Šedý',
            'slug' => 'ipad-pro-12-gray',
            'sorting' =>'iPad Pro',  //
            'details' => '12,9 palců, 128GB',
            'price' => 27990,
            'description' => 'Nová generace tabletu iPad Pro s 12.9" Liquid Retina displejem, vynikajícím výkonem a umělou inteligencí.
            Procesor A12Z Bionic, jednotka pro umělou inteligenci Neural Engine a 8jádrový grafický akcelerátor, rozlišení 2732 x 2048 bodů, 128GB interní paměti, zadní 12MP f/1.8 + 10MP utrawide a přední 7MP TrueDepth kamery, LiDAR skener pro rozšířenou realitu, Face ID, WiFi ax, Bluetooth 5.0, USB Type-C, 4 reproduktory, operační systém iPadOS.',
        ])->categories()->attach(17);


        //IPHONE 11
        //64GB
        ModelsProduct::create([
            'name' => 'Apple iPhone 11 Černý',
            'slug' => 'iphone_11_black',
            'sorting' =>'iPhone 11',  //
            'details' => '6,1 palců, 64GB',
            'price' => 17990,
            'description' => 'Nová generace iPhone s duálním fotoaparátem, displejem Liquid Retina HD, ještě vyšším výkonem, umělou inteligencí a řadou novinek. 6.1" displej s širokým barevným gamutem, technologií TrueTone a Haptic Touch, rozlišení 1792 × 828 bodů; 6jádrový čip A13 Bionic; 64 GB interní paměti; duální 12MP fotoaparát (AI, ƒ/1.8 wide, ƒ/2.4 ultrawide, objektivy 13/26mm, OIS); přední 12MP kamera TrueDepth s vylepšeným Face ID; LTE. Bluetooth 5.0, NFC, Wi-Fi ax, GPS/ Glonass, rozhraní Lightning, odolnost proti vodě a prachu IP68, podpora bezdrátového nabíjení Qi, rychlé nabíjení a prodloužená výdrž baterie, operační systém iOS 13.',
        ])->categories()->attach(1);

        ModelsProduct::create([
            'name' => 'Apple iPhone 11 Zelený',
            'slug' => 'iphone_11_green',
            'sorting' =>'iPhone 11',  //
            'details' => '6,1 palců, 64GB',
            'price' => 17990,
            'description' => 'Nová generace iPhone s duálním fotoaparátem, displejem Liquid Retina HD, ještě vyšším výkonem, umělou inteligencí a řadou novinek. 6.1" displej s širokým barevným gamutem, technologií TrueTone a Haptic Touch, rozlišení 1792 × 828 bodů; 6jádrový čip A13 Bionic; 64 GB interní paměti; duální 12MP fotoaparát (AI, ƒ/1.8 wide, ƒ/2.4 ultrawide, objektivy 13/26mm, OIS); přední 12MP kamera TrueDepth s vylepšeným Face ID; LTE. Bluetooth 5.0, NFC, Wi-Fi ax, GPS/ Glonass, rozhraní Lightning, odolnost proti vodě a prachu IP68, podpora bezdrátového nabíjení Qi, rychlé nabíjení a prodloužená výdrž baterie, operační systém iOS 13.',
        ])->categories()->attach(1);

        ModelsProduct::create([
            'name' => 'Apple iPhone 11 Fialový',
            'slug' => 'iphone_11_purple',
            'sorting' =>'iPhone 11',  //
            'details' => '6,1 palců, 64GB',
            'price' => 17990,
            'description' => 'Nová generace iPhone s duálním fotoaparátem, displejem Liquid Retina HD, ještě vyšším výkonem, umělou inteligencí a řadou novinek. 6.1" displej s širokým barevným gamutem, technologií TrueTone a Haptic Touch, rozlišení 1792 × 828 bodů; 6jádrový čip A13 Bionic; 64 GB interní paměti; duální 12MP fotoaparát (AI, ƒ/1.8 wide, ƒ/2.4 ultrawide, objektivy 13/26mm, OIS); přední 12MP kamera TrueDepth s vylepšeným Face ID; LTE. Bluetooth 5.0, NFC, Wi-Fi ax, GPS/ Glonass, rozhraní Lightning, odolnost proti vodě a prachu IP68, podpora bezdrátového nabíjení Qi, rychlé nabíjení a prodloužená výdrž baterie, operační systém iOS 13.',
        ])->categories()->attach(1);

        ModelsProduct::create([
            'name' => 'Apple iPhone 11 Červený',
            'slug' => 'iphone_11_red',
            'sorting' =>'iPhone 11',  //
            'details' => '6,1 palců, 64GB',
            'price' => 17990,
            'description' => 'Nová generace iPhone s duálním fotoaparátem, displejem Liquid Retina HD, ještě vyšším výkonem, umělou inteligencí a řadou novinek. 6.1" displej s širokým barevným gamutem, technologií TrueTone a Haptic Touch, rozlišení 1792 × 828 bodů; 6jádrový čip A13 Bionic; 64 GB interní paměti; duální 12MP fotoaparát (AI, ƒ/1.8 wide, ƒ/2.4 ultrawide, objektivy 13/26mm, OIS); přední 12MP kamera TrueDepth s vylepšeným Face ID; LTE. Bluetooth 5.0, NFC, Wi-Fi ax, GPS/ Glonass, rozhraní Lightning, odolnost proti vodě a prachu IP68, podpora bezdrátového nabíjení Qi, rychlé nabíjení a prodloužená výdrž baterie, operační systém iOS 13.',
        ])->categories()->attach(1);

        ModelsProduct::create([
            'name' => 'Apple iPhone 11 Bílý',
            'slug' => 'iphone_11_white',
            'sorting' =>'iPhone 11',  //
            'details' => '6,1 palců, 64GB',
            'price' => 17990,
            'description' => 'Nová generace iPhone s duálním fotoaparátem, displejem Liquid Retina HD, ještě vyšším výkonem, umělou inteligencí a řadou novinek. 6.1" displej s širokým barevným gamutem, technologií TrueTone a Haptic Touch, rozlišení 1792 × 828 bodů; 6jádrový čip A13 Bionic; 64 GB interní paměti; duální 12MP fotoaparát (AI, ƒ/1.8 wide, ƒ/2.4 ultrawide, objektivy 13/26mm, OIS); přední 12MP kamera TrueDepth s vylepšeným Face ID; LTE. Bluetooth 5.0, NFC, Wi-Fi ax, GPS/ Glonass, rozhraní Lightning, odolnost proti vodě a prachu IP68, podpora bezdrátového nabíjení Qi, rychlé nabíjení a prodloužená výdrž baterie, operační systém iOS 13.',
        ])->categories()->attach(1);

        ModelsProduct::create([
            'name' => 'Apple iPhone 11 Žlutý',
            'slug' => 'iphone_11_yellow',
            'sorting' =>'iPhone 11',  //
            'details' => '6,1 palců, 64GB',
            'price' => 17990,
            'description' => 'Nová generace iPhone s duálním fotoaparátem, displejem Liquid Retina HD, ještě vyšším výkonem, umělou inteligencí a řadou novinek. 6.1" displej s širokým barevným gamutem, technologií TrueTone a Haptic Touch, rozlišení 1792 × 828 bodů; 6jádrový čip A13 Bionic; 64 GB interní paměti; duální 12MP fotoaparát (AI, ƒ/1.8 wide, ƒ/2.4 ultrawide, objektivy 13/26mm, OIS); přední 12MP kamera TrueDepth s vylepšeným Face ID; LTE. Bluetooth 5.0, NFC, Wi-Fi ax, GPS/ Glonass, rozhraní Lightning, odolnost proti vodě a prachu IP68, podpora bezdrátového nabíjení Qi, rychlé nabíjení a prodloužená výdrž baterie, operační systém iOS 13.',
        ])->categories()->attach(1);
        //END IPHONE 11

        //IPHONE 12 START
        ModelsProduct::create([
            'name' => 'Apple iPhone 12 Černý',
            'slug' => 'iphone_12_black',
            'sorting' =>'iPhone 12',  //
            'details' => '6,1 palců, 128GB',
            'price' => 24490,
            'description' => 'Nejnovější iPhone s ohromným výkonem, displejem OLED Super Retina XDR, připojením 5G, vyladěnou fotosoustavou, umělou inteligencí a sadou nových funkcí. 6.1" displej s širokým barevným gamutem, technologií TrueTone a Haptic Touch, rozlišení 2532 × 1170 bodů; čip A14 Bionic; 128 GB interní paměti; duální 12MP fotoaparát (AI, ƒ/1.6 wide, ƒ/2.4 ultrawide, objektivy 13/26mm, OIS); přední 12MP kamera TrueDepth s Face ID; Bluetooth 5.0, NFC, Wi-Fi ax, GPS/ GLONASS/ Galileo/ QZSS/ BeiDou, rozhraní Lightning, odolnost proti vodě a prachu IP68, podpora bezdrátového nabíjení Qi a MagSafe, rychlé nabíjení 20W, operační systém iOS 14.',
        ])->categories()->attach(4);

        ModelsProduct::create([
            'name' => 'Apple iPhone 12 Modrý',
            'slug' => 'iphone_12_blue',
            'sorting' =>'iPhone 12',  //
            'details' => '6,1 palců, 128GB',
            'price' => 24490,
            'description' => 'Nejnovější iPhone s ohromným výkonem, displejem OLED Super Retina XDR, připojením 5G, vyladěnou fotosoustavou, umělou inteligencí a sadou nových funkcí. 6.1" displej s širokým barevným gamutem, technologií TrueTone a Haptic Touch, rozlišení 2532 × 1170 bodů; čip A14 Bionic; 128 GB interní paměti; duální 12MP fotoaparát (AI, ƒ/1.6 wide, ƒ/2.4 ultrawide, objektivy 13/26mm, OIS); přední 12MP kamera TrueDepth s Face ID; Bluetooth 5.0, NFC, Wi-Fi ax, GPS/ GLONASS/ Galileo/ QZSS/ BeiDou, rozhraní Lightning, odolnost proti vodě a prachu IP68, podpora bezdrátového nabíjení Qi a MagSafe, rychlé nabíjení 20W, operační systém iOS 14.',
        ])->categories()->attach(4);

        ModelsProduct::create([
            'name' => 'Apple iPhone 12 Zelený',
            'slug' => 'iphone_12_green',
            'sorting' =>'iPhone 12',  //
            'details' => '6,1 palců, 128GB',
            'price' => 24490,
            'description' => 'Nejnovější iPhone s ohromným výkonem, displejem OLED Super Retina XDR, připojením 5G, vyladěnou fotosoustavou, umělou inteligencí a sadou nových funkcí. 6.1" displej s širokým barevným gamutem, technologií TrueTone a Haptic Touch, rozlišení 2532 × 1170 bodů; čip A14 Bionic; 128 GB interní paměti; duální 12MP fotoaparát (AI, ƒ/1.6 wide, ƒ/2.4 ultrawide, objektivy 13/26mm, OIS); přední 12MP kamera TrueDepth s Face ID; Bluetooth 5.0, NFC, Wi-Fi ax, GPS/ GLONASS/ Galileo/ QZSS/ BeiDou, rozhraní Lightning, odolnost proti vodě a prachu IP68, podpora bezdrátového nabíjení Qi a MagSafe, rychlé nabíjení 20W, operační systém iOS 14.',
        ])->categories()->attach(4);

        ModelsProduct::create([
            'name' => 'Apple iPhone 12 Červený',
            'slug' => 'iphone_12_red',
            'sorting' =>'iPhone 12',  //
            'details' => '6,1 palců, 128GB',
            'price' => 24490,
            'description' => 'Nejnovější iPhone s ohromným výkonem, displejem OLED Super Retina XDR, připojením 5G, vyladěnou fotosoustavou, umělou inteligencí a sadou nových funkcí. 6.1" displej s širokým barevným gamutem, technologií TrueTone a Haptic Touch, rozlišení 2532 × 1170 bodů; čip A14 Bionic; 128 GB interní paměti; duální 12MP fotoaparát (AI, ƒ/1.6 wide, ƒ/2.4 ultrawide, objektivy 13/26mm, OIS); přední 12MP kamera TrueDepth s Face ID; Bluetooth 5.0, NFC, Wi-Fi ax, GPS/ GLONASS/ Galileo/ QZSS/ BeiDou, rozhraní Lightning, odolnost proti vodě a prachu IP68, podpora bezdrátového nabíjení Qi a MagSafe, rychlé nabíjení 20W, operační systém iOS 14.',
        ])->categories()->attach(4);

        ModelsProduct::create([
            'name' => 'Apple iPhone 12 Bílý',
            'slug' => 'iphone_12_white',
            'sorting' =>'iPhone 12',  //
            'details' => '6,1 palců, 128GB',
            'price' => 24490,
            'description' => 'Nejnovější iPhone s ohromným výkonem, displejem OLED Super Retina XDR, připojením 5G, vyladěnou fotosoustavou, umělou inteligencí a sadou nových funkcí. 6.1" displej s širokým barevným gamutem, technologií TrueTone a Haptic Touch, rozlišení 2532 × 1170 bodů; čip A14 Bionic; 128 GB interní paměti; duální 12MP fotoaparát (AI, ƒ/1.6 wide, ƒ/2.4 ultrawide, objektivy 13/26mm, OIS); přední 12MP kamera TrueDepth s Face ID; Bluetooth 5.0, NFC, Wi-Fi ax, GPS/ GLONASS/ Galileo/ QZSS/ BeiDou, rozhraní Lightning, odolnost proti vodě a prachu IP68, podpora bezdrátového nabíjení Qi a MagSafe, rychlé nabíjení 20W, operační systém iOS 14.',
        ])->categories()->attach(4);
        //IPHONE 12 END

        //IPHONE 12MINI START
        ModelsProduct::create([
            'name' => 'Apple iPhone 12 Mini Bílý',
            'slug' => 'iphone_12_mini_white',
            'sorting' =>'iPhone 12 mini',  //
            'details' => '5,4 palců, 128GB',
            'price' => 21490,
            'description' => 'Nejnovější iPhone ve velmi kompaktní konstrukci s ohromným výkonem, displejem OLED Super Retina XDR, připojením 5G, vyladěnou fotosoustavou, umělou inteligencí a sadou nových funkcí. 5.4" displej s širokým barevným gamutem, technologií TrueTone a Haptic Touch, rozlišení 2340 × 1080 bodů; čip A14 Bionic; 128 GB interní paměti; duální 12MP fotoaparát (AI, ƒ/1.6 wide, ƒ/2.4 ultrawide, objektivy 13/26mm, OIS); přední 12MP kamera TrueDepth s Face ID; Bluetooth 5.0, NFC, Wi-Fi ax, GPS/ GLONASS/ Galileo/ QZSS/ BeiDou, rozhraní Lightning, odolnost proti vodě a prachu IP68, podpora bezdrátového nabíjení Qi a MagSafe, rychlé nabíjení 20W, operační systém iOS 14.',
        ])->categories()->attach(6);

        ModelsProduct::create([
            'name' => 'Apple iPhone 12 Mini Černý',
            'slug' => 'iphone_12_mini_black',
            'sorting' =>'iPhone 12 mini',  //
            'details' => '5,4 palců, 128GB',
            'price' => 21490,
            'description' => 'Nejnovější iPhone ve velmi kompaktní konstrukci s ohromným výkonem, displejem OLED Super Retina XDR, připojením 5G, vyladěnou fotosoustavou, umělou inteligencí a sadou nových funkcí. 5.4" displej s širokým barevným gamutem, technologií TrueTone a Haptic Touch, rozlišení 2340 × 1080 bodů; čip A14 Bionic; 128 GB interní paměti; duální 12MP fotoaparát (AI, ƒ/1.6 wide, ƒ/2.4 ultrawide, objektivy 13/26mm, OIS); přední 12MP kamera TrueDepth s Face ID; Bluetooth 5.0, NFC, Wi-Fi ax, GPS/ GLONASS/ Galileo/ QZSS/ BeiDou, rozhraní Lightning, odolnost proti vodě a prachu IP68, podpora bezdrátového nabíjení Qi a MagSafe, rychlé nabíjení 20W, operační systém iOS 14.',
        ])->categories()->attach(6);

        ModelsProduct::create([
            'name' => 'Apple iPhone 12 Mini Modrý',
            'slug' => 'iphone_12_mini_blue',
            'sorting' =>'iPhone 12 mini',  //
            'details' => '5,4 palců, 128GB',
            'price' => 21490,
            'description' => 'Nejnovější iPhone ve velmi kompaktní konstrukci s ohromným výkonem, displejem OLED Super Retina XDR, připojením 5G, vyladěnou fotosoustavou, umělou inteligencí a sadou nových funkcí. 5.4" displej s širokým barevným gamutem, technologií TrueTone a Haptic Touch, rozlišení 2340 × 1080 bodů; čip A14 Bionic; 128 GB interní paměti; duální 12MP fotoaparát (AI, ƒ/1.6 wide, ƒ/2.4 ultrawide, objektivy 13/26mm, OIS); přední 12MP kamera TrueDepth s Face ID; Bluetooth 5.0, NFC, Wi-Fi ax, GPS/ GLONASS/ Galileo/ QZSS/ BeiDou, rozhraní Lightning, odolnost proti vodě a prachu IP68, podpora bezdrátového nabíjení Qi a MagSafe, rychlé nabíjení 20W, operační systém iOS 14.',
        ])->categories()->attach(6);

        ModelsProduct::create([
            'name' => 'Apple iPhone 12 Mini Zelený',
            'slug' => 'iphone_12_mini_green',
            'sorting' =>'iPhone 12 mini',  //
            'details' => '5,4 palců, 128GB',
            'price' => 21490,
            'description' => 'Nejnovější iPhone ve velmi kompaktní konstrukci s ohromným výkonem, displejem OLED Super Retina XDR, připojením 5G, vyladěnou fotosoustavou, umělou inteligencí a sadou nových funkcí. 5.4" displej s širokým barevným gamutem, technologií TrueTone a Haptic Touch, rozlišení 2340 × 1080 bodů; čip A14 Bionic; 128 GB interní paměti; duální 12MP fotoaparát (AI, ƒ/1.6 wide, ƒ/2.4 ultrawide, objektivy 13/26mm, OIS); přední 12MP kamera TrueDepth s Face ID; Bluetooth 5.0, NFC, Wi-Fi ax, GPS/ GLONASS/ Galileo/ QZSS/ BeiDou, rozhraní Lightning, odolnost proti vodě a prachu IP68, podpora bezdrátového nabíjení Qi a MagSafe, rychlé nabíjení 20W, operační systém iOS 14.',
        ])->categories()->attach(6);

        ModelsProduct::create([
            'name' => 'Apple iPhone 12 Mini Červený',
            'slug' => 'iphone_12_mini_red',
            'sorting' =>'iPhone 12 mini',  //
            'details' => '5,4 palců, 128GB',
            'price' => 21490,
            'description' => 'Nejnovější iPhone ve velmi kompaktní konstrukci s ohromným výkonem, displejem OLED Super Retina XDR, připojením 5G, vyladěnou fotosoustavou, umělou inteligencí a sadou nových funkcí. 5.4" displej s širokým barevným gamutem, technologií TrueTone a Haptic Touch, rozlišení 2340 × 1080 bodů; čip A14 Bionic; 128 GB interní paměti; duální 12MP fotoaparát (AI, ƒ/1.6 wide, ƒ/2.4 ultrawide, objektivy 13/26mm, OIS); přední 12MP kamera TrueDepth s Face ID; Bluetooth 5.0, NFC, Wi-Fi ax, GPS/ GLONASS/ Galileo/ QZSS/ BeiDou, rozhraní Lightning, odolnost proti vodě a prachu IP68, podpora bezdrátového nabíjení Qi a MagSafe, rychlé nabíjení 20W, operační systém iOS 14.',
        ])->categories()->attach(6);
        //END IPHONE 12 MINI


        //START IPHONE 12PRO
        ModelsProduct::create([
            'name' => 'Apple iPhone 12 PRO Modrý',
            'slug' => 'iphone_12_pro_blue',
            'sorting' =>'iPhone 12 Pro',  //
            'details' => '6,1 palců, 128GB',
            'price' => 29990,
            'description' => 'Nejnovější iPhone s ohromným výkonem, displejem OLED Super Retina XDR, připojením 5G, trojitou fotosoustavou, LiDAR skenerem, umělou inteligencí a sadou nových funkcí. 6.1" displej s širokým barevným gamutem, technologií TrueTone a Haptic Touch, rozlišení 2532 × 1170 bodů; čip A14 Bionic; 128 GB interní paměti; trojitý 12MP fotoaparát (AI, ƒ/1.6 wide, ƒ/2.4 ultrawide, ƒ/2.0 telefoto, objektivy 13/26/52mm, OIS); přední 12MP kamera TrueDepth s Face ID; Bluetooth 5.0, NFC, Wi-Fi ax, GPS/ GLONASS/ Galileo/ QZSS/ BeiDou, rozhraní Lightning, odolnost proti vodě a prachu IP68, podpora bezdrátového nabíjení Qi a MagSafe, rychlé nabíjení 20W, operační systém iOS 14.',
        ])->categories()->attach(5);

        ModelsProduct::create([
            'name' => 'Apple iPhone 12 PRO Zlatý',
            'slug' => 'iphone_12_pro_gold',
            'sorting' =>'iPhone 12 Pro',  //
            'details' => '6,1 palců, 128GB',
            'price' => 29990,
            'description' => 'Nejnovější iPhone s ohromným výkonem, displejem OLED Super Retina XDR, připojením 5G, trojitou fotosoustavou, LiDAR skenerem, umělou inteligencí a sadou nových funkcí. 6.1" displej s širokým barevným gamutem, technologií TrueTone a Haptic Touch, rozlišení 2532 × 1170 bodů; čip A14 Bionic; 128 GB interní paměti; trojitý 12MP fotoaparát (AI, ƒ/1.6 wide, ƒ/2.4 ultrawide, ƒ/2.0 telefoto, objektivy 13/26/52mm, OIS); přední 12MP kamera TrueDepth s Face ID; Bluetooth 5.0, NFC, Wi-Fi ax, GPS/ GLONASS/ Galileo/ QZSS/ BeiDou, rozhraní Lightning, odolnost proti vodě a prachu IP68, podpora bezdrátového nabíjení Qi a MagSafe, rychlé nabíjení 20W, operační systém iOS 14.',
        ])->categories()->attach(5);

        ModelsProduct::create([
            'name' => 'Apple iPhone 12 PRO Šedý',
            'slug' => 'iphone_12_pro_gray',
            'sorting' =>'iPhone 12 Pro',  //
            'details' => '6,1 palců, 128GB',
            'price' => 29990,
            'description' => 'Nejnovější iPhone s ohromným výkonem, displejem OLED Super Retina XDR, připojením 5G, trojitou fotosoustavou, LiDAR skenerem, umělou inteligencí a sadou nových funkcí. 6.1" displej s širokým barevným gamutem, technologií TrueTone a Haptic Touch, rozlišení 2532 × 1170 bodů; čip A14 Bionic; 128 GB interní paměti; trojitý 12MP fotoaparát (AI, ƒ/1.6 wide, ƒ/2.4 ultrawide, ƒ/2.0 telefoto, objektivy 13/26/52mm, OIS); přední 12MP kamera TrueDepth s Face ID; Bluetooth 5.0, NFC, Wi-Fi ax, GPS/ GLONASS/ Galileo/ QZSS/ BeiDou, rozhraní Lightning, odolnost proti vodě a prachu IP68, podpora bezdrátového nabíjení Qi a MagSafe, rychlé nabíjení 20W, operační systém iOS 14.',
        ])->categories()->attach(5);

        ModelsProduct::create([
            'name' => 'Apple iPhone 12 PRO Stříbrný',
            'slug' => 'iphone_12_pro_silver',
            'sorting' =>'iPhone 12 Pro',  //
            'details' => '6,1 palců, 128GB',
            'price' => 29990,
            'description' => 'Nejnovější iPhone s ohromným výkonem, displejem OLED Super Retina XDR, připojením 5G, trojitou fotosoustavou, LiDAR skenerem, umělou inteligencí a sadou nových funkcí. 6.1" displej s širokým barevným gamutem, technologií TrueTone a Haptic Touch, rozlišení 2532 × 1170 bodů; čip A14 Bionic; 128 GB interní paměti; trojitý 12MP fotoaparát (AI, ƒ/1.6 wide, ƒ/2.4 ultrawide, ƒ/2.0 telefoto, objektivy 13/26/52mm, OIS); přední 12MP kamera TrueDepth s Face ID; Bluetooth 5.0, NFC, Wi-Fi ax, GPS/ GLONASS/ Galileo/ QZSS/ BeiDou, rozhraní Lightning, odolnost proti vodě a prachu IP68, podpora bezdrátového nabíjení Qi a MagSafe, rychlé nabíjení 20W, operační systém iOS 14.',
        ])->categories()->attach(5);
        //END IPHONE 12PRO


        //IPHONE 12PRO MAX START
        ModelsProduct::create([
            'name' => 'Apple iPhone 12 PRO Max Modrý',
            'slug' => 'iphone_12_pro_max_pacific_blue',
            'sorting' =>'iPhone 12 Pro Max',  //
            'details' => '6,7 palců, 128GB',
            'price' => 33990,
            'description' => 'Nejnovější iPhone s ohromným výkonem, displejem OLED Super Retina XDR, připojením 5G, trojitou fotosoustavou, LiDAR skenerem, umělou inteligencí a sadou nových funkcí. 6.7" displej s širokým barevným gamutem, technologií TrueTone a Haptic Touch, rozlišení 2778 × 1284 bodů; čip A14 Bionic; 128 GB interní paměti; trojitý 12MP fotoaparát (AI, ƒ/1.6 wide, ƒ/2.4 ultrawide, ƒ/2.2 telefoto, objektivy 13/26/65mm, OIS); přední 12MP kamera TrueDepth s Face ID; Bluetooth 5.0, NFC, Wi-Fi ax, GPS/ GLONASS/ Galileo/ QZSS/ BeiDou, rozhraní Lightning, odolnost proti vodě a prachu IP68, podpora bezdrátového nabíjení Qi a MagSafe, rychlé nabíjení 20W, operační systém iOS 14.',
        ])->categories()->attach(7);

        ModelsProduct::create([
            'name' => 'Apple iPhone 12 PRO Max Zlatý',
            'slug' => 'iphone_12_pro_max_gold',
            'sorting' =>'iPhone 12 Pro Max',  //
            'details' => '6,7 palců, 128GB',
            'price' => 33990,
            'description' => 'Nejnovější iPhone s ohromným výkonem, displejem OLED Super Retina XDR, připojením 5G, trojitou fotosoustavou, LiDAR skenerem, umělou inteligencí a sadou nových funkcí. 6.7" displej s širokým barevným gamutem, technologií TrueTone a Haptic Touch, rozlišení 2778 × 1284 bodů; čip A14 Bionic; 128 GB interní paměti; trojitý 12MP fotoaparát (AI, ƒ/1.6 wide, ƒ/2.4 ultrawide, ƒ/2.2 telefoto, objektivy 13/26/65mm, OIS); přední 12MP kamera TrueDepth s Face ID; Bluetooth 5.0, NFC, Wi-Fi ax, GPS/ GLONASS/ Galileo/ QZSS/ BeiDou, rozhraní Lightning, odolnost proti vodě a prachu IP68, podpora bezdrátového nabíjení Qi a MagSafe, rychlé nabíjení 20W, operační systém iOS 14.',
        ])->categories()->attach(7);

        ModelsProduct::create([
            'name' => 'Apple iPhone 12 PRO Max Šedý',
            'slug' => 'iphone_12_pro_max_graphite',
            'sorting' =>'iPhone 12 Pro Max',  //
            'details' => '6,7 palců, 128GB',
            'price' => 33990,
            'description' => 'Nejnovější iPhone s ohromným výkonem, displejem OLED Super Retina XDR, připojením 5G, trojitou fotosoustavou, LiDAR skenerem, umělou inteligencí a sadou nových funkcí. 6.7" displej s širokým barevným gamutem, technologií TrueTone a Haptic Touch, rozlišení 2778 × 1284 bodů; čip A14 Bionic; 128 GB interní paměti; trojitý 12MP fotoaparát (AI, ƒ/1.6 wide, ƒ/2.4 ultrawide, ƒ/2.2 telefoto, objektivy 13/26/65mm, OIS); přední 12MP kamera TrueDepth s Face ID; Bluetooth 5.0, NFC, Wi-Fi ax, GPS/ GLONASS/ Galileo/ QZSS/ BeiDou, rozhraní Lightning, odolnost proti vodě a prachu IP68, podpora bezdrátového nabíjení Qi a MagSafe, rychlé nabíjení 20W, operační systém iOS 14.',
        ])->categories()->attach(7);

        ModelsProduct::create([
            'name' => 'Apple iPhone 12 PRO Max Stříbrný',
            'slug' => 'iphone_12_pro_max_silver',
            'sorting' =>'iPhone 12 Pro Max',  //
            'details' => '6,7 palců, 128GB',
            'price' => 33990,
            'description' => 'Nejnovější iPhone s ohromným výkonem, displejem OLED Super Retina XDR, připojením 5G, trojitou fotosoustavou, LiDAR skenerem, umělou inteligencí a sadou nových funkcí. 6.7" displej s širokým barevným gamutem, technologií TrueTone a Haptic Touch, rozlišení 2778 × 1284 bodů; čip A14 Bionic; 128 GB interní paměti; trojitý 12MP fotoaparát (AI, ƒ/1.6 wide, ƒ/2.4 ultrawide, ƒ/2.2 telefoto, objektivy 13/26/65mm, OIS); přední 12MP kamera TrueDepth s Face ID; Bluetooth 5.0, NFC, Wi-Fi ax, GPS/ GLONASS/ Galileo/ QZSS/ BeiDou, rozhraní Lightning, odolnost proti vodě a prachu IP68, podpora bezdrátového nabíjení Qi a MagSafe, rychlé nabíjení 20W, operační systém iOS 14.',
        ])->categories()->attach(7);
        //END IPHONE 12PRO MAX


        //IPHONE SE 2016 START
        ModelsProduct::create([
            'name' => 'Apple iPhone SE Černý',
            'slug' => 'blackse',
            'sorting' =>'iPhone SE',  //
            'details' => '4,7 palců, 64GB',
            'price' => 12490,
            'description' => 'Nový iPhone SE v krásném skleněném designu s ještě vyšším výkonem pro aplikace rozšířené reality, lepším fotoaparátem a podporou bezdrátového nabíjení Qi, 4,7" Retina displej s širokým barevným gamutem, technologií TrueTone a Haptic Touch, rozlišení 1334 x 750 bodů, procesor A13 Bionic, 64 GB interní paměti, 12MP fotoaparát s clonou ƒ/1,8 a optickou stabilizací, 7MP FaceTime HD kamera, Touch ID. 4G LTE. Bluetooth 5.0, NFC, Wi-Fi ax, GPS/GNSS, rozhraní Lightning, odolnost proti vodě a prachu IP67, operační systém iOS 13.',
        ])->categories()->attach(2);

        ModelsProduct::create([
            'name' => 'Apple iPhone SE Červený',
            'slug' => 'redse',
            'sorting' =>'iPhone SE',  //
            'details' => '4,7 palců, 64GB',
            'price' => 12490,
            'description' => 'Nový iPhone SE v krásném skleněném designu s ještě vyšším výkonem pro aplikace rozšířené reality, lepším fotoaparátem a podporou bezdrátového nabíjení Qi, 4,7" Retina displej s širokým barevným gamutem, technologií TrueTone a Haptic Touch, rozlišení 1334 x 750 bodů, procesor A13 Bionic, 64 GB interní paměti, 12MP fotoaparát s clonou ƒ/1,8 a optickou stabilizací, 7MP FaceTime HD kamera, Touch ID. 4G LTE. Bluetooth 5.0, NFC, Wi-Fi ax, GPS/GNSS, rozhraní Lightning, odolnost proti vodě a prachu IP67, operační systém iOS 13.',
        ])->categories()->attach(2);

        ModelsProduct::create([
            'name' => 'Apple iPhone SE Bílý',
            'slug' => 'whitese',
            'sorting' =>'iPhone SE',  //
            'details' => '4,7 palců, 64GB',
            'price' => 12490,
            'description' => 'Nový iPhone SE v krásném skleněném designu s ještě vyšším výkonem pro aplikace rozšířené reality, lepším fotoaparátem a podporou bezdrátového nabíjení Qi, 4,7" Retina displej s širokým barevným gamutem, technologií TrueTone a Haptic Touch, rozlišení 1334 x 750 bodů, procesor A13 Bionic, 64 GB interní paměti, 12MP fotoaparát s clonou ƒ/1,8 a optickou stabilizací, 7MP FaceTime HD kamera, Touch ID. 4G LTE. Bluetooth 5.0, NFC, Wi-Fi ax, GPS/GNSS, rozhraní Lightning, odolnost proti vodě a prachu IP67, operační systém iOS 13.',
        ])->categories()->attach(2);
        //IPHONE SE 2016 END


        //IPHONE XR START
        ModelsProduct::create([
            'name' => 'Apple iPhone XR Černý',
            'slug' => 'black_10',
            'sorting' =>'iPhone XR',  //
            'details' => '6,1 palců, 128GB',
            'price' => 15990,
            'description' => 'Luxusní iPhone řady X s velkým displejem Liquid Retina HD, vysokým výkonem, umělou inteligencí a kvalitním fotoaparátem. 6,1" IPS displej s širokým barevným gamutem a technologií TrueTone, rozlišení 1792 × 828 bodů; 6jádrový čip A12 Bionic; 128 GB interní paměti; 12MP fotoaparát s AI, clonou ƒ/1,8 a optickou stabilizací; přední 7MP kamera TrueDepth s vylepšeným Face ID; LTE. Bluetooth 5.0, NFC, Wi-Fi ac, GPS/ Glonass/ Galileo/ QZSS, rozhraní Lightning, odolnost proti vodě a prachu IP67, podpora bezdrátového nabíjení Qi, operační systém iOS 12.',
        ])->categories()->attach(3);

        ModelsProduct::create([
            'name' => 'Apple iPhone XR Modrý',
            'slug' => 'blue_10',
            'sorting' =>'iPhone XR',  //
            'details' => '6,1 palců, 128GB',
            'price' => 15990,
            'description' => 'Luxusní iPhone řady X s velkým displejem Liquid Retina HD, vysokým výkonem, umělou inteligencí a kvalitním fotoaparátem. 6,1" IPS displej s širokým barevným gamutem a technologií TrueTone, rozlišení 1792 × 828 bodů; 6jádrový čip A12 Bionic; 128 GB interní paměti; 12MP fotoaparát s AI, clonou ƒ/1,8 a optickou stabilizací; přední 7MP kamera TrueDepth s vylepšeným Face ID; LTE. Bluetooth 5.0, NFC, Wi-Fi ac, GPS/ Glonass/ Galileo/ QZSS, rozhraní Lightning, odolnost proti vodě a prachu IP67, podpora bezdrátového nabíjení Qi, operační systém iOS 12.',
        ])->categories()->attach(3);

        ModelsProduct::create([
            'name' => 'Apple iPhone XR Korálový',
            'slug' => 'coral_10',
            'sorting' =>'iPhone XR',  //
            'details' => '6,1 palců, 128GB',
            'price' => 15990,
            'description' => 'Luxusní iPhone řady X s velkým displejem Liquid Retina HD, vysokým výkonem, umělou inteligencí a kvalitním fotoaparátem. 6,1" IPS displej s širokým barevným gamutem a technologií TrueTone, rozlišení 1792 × 828 bodů; 6jádrový čip A12 Bionic; 128 GB interní paměti; 12MP fotoaparát s AI, clonou ƒ/1,8 a optickou stabilizací; přední 7MP kamera TrueDepth s vylepšeným Face ID; LTE. Bluetooth 5.0, NFC, Wi-Fi ac, GPS/ Glonass/ Galileo/ QZSS, rozhraní Lightning, odolnost proti vodě a prachu IP67, podpora bezdrátového nabíjení Qi, operační systém iOS 12.',
        ])->categories()->attach(3);

        ModelsProduct::create([
            'name' => 'Apple iPhone XR Červený',
            'slug' => 'red_10',
            'sorting' =>'iPhone XR',  //
            'details' => '6,1 palců, 128GB',
            'price' => 15990,
            'description' => 'Luxusní iPhone řady X s velkým displejem Liquid Retina HD, vysokým výkonem, umělou inteligencí a kvalitním fotoaparátem. 6,1" IPS displej s širokým barevným gamutem a technologií TrueTone, rozlišení 1792 × 828 bodů; 6jádrový čip A12 Bionic; 128 GB interní paměti; 12MP fotoaparát s AI, clonou ƒ/1,8 a optickou stabilizací; přední 7MP kamera TrueDepth s vylepšeným Face ID; LTE. Bluetooth 5.0, NFC, Wi-Fi ac, GPS/ Glonass/ Galileo/ QZSS, rozhraní Lightning, odolnost proti vodě a prachu IP67, podpora bezdrátového nabíjení Qi, operační systém iOS 12.',
        ])->categories()->attach(3);

        ModelsProduct::create([
            'name' => 'Apple iPhone XR Bílý',
            'slug' => 'white_10',
            'sorting' =>'iPhone XR',  //
            'details' => '6,1 palců, 128GB',
            'price' => 15990,
            'description' => 'Luxusní iPhone řady X s velkým displejem Liquid Retina HD, vysokým výkonem, umělou inteligencí a kvalitním fotoaparátem. 6,1" IPS displej s širokým barevným gamutem a technologií TrueTone, rozlišení 1792 × 828 bodů; 6jádrový čip A12 Bionic; 128 GB interní paměti; 12MP fotoaparát s AI, clonou ƒ/1,8 a optickou stabilizací; přední 7MP kamera TrueDepth s vylepšeným Face ID; LTE. Bluetooth 5.0, NFC, Wi-Fi ac, GPS/ Glonass/ Galileo/ QZSS, rozhraní Lightning, odolnost proti vodě a prachu IP67, podpora bezdrátového nabíjení Qi, operační systém iOS 12.',
        ])->categories()->attach(3);

        ModelsProduct::create([
            'name' => 'Apple iPhone XR Žlutý',
            'slug' => 'yellow_10',
            'sorting' =>'iPhone XR',  //
            'details' => '6,1 palců, 128GB',
            'price' => 15990,
            'description' => 'Luxusní iPhone řady X s velkým displejem Liquid Retina HD, vysokým výkonem, umělou inteligencí a kvalitním fotoaparátem. 6,1" IPS displej s širokým barevným gamutem a technologií TrueTone, rozlišení 1792 × 828 bodů; 6jádrový čip A12 Bionic; 128 GB interní paměti; 12MP fotoaparát s AI, clonou ƒ/1,8 a optickou stabilizací; přední 7MP kamera TrueDepth s vylepšeným Face ID; LTE. Bluetooth 5.0, NFC, Wi-Fi ac, GPS/ Glonass/ Galileo/ QZSS, rozhraní Lightning, odolnost proti vodě a prachu IP67, podpora bezdrátového nabíjení Qi, operační systém iOS 12.',
        ])->categories()->attach(3);
        //IPHONE XR END


        //APPLE WATCH S3 START
        ModelsProduct::create([
            'name' => 'Apple Watch S3 Černý',
            'slug' => 'apple_watch_s3_black',
            'sorting' =>'Apple Watch 3',  //
            'details' => '42 mm',
            'price' => 5990,
            'description' => 'Bezkompromisní, designové, nabité funkcemi – to jsou chytré hodinky od společnosti Apple, které jsou víc než jen módní doplněk, tyto hodinky jsou váš nový společník, trenér nebo i záznamník. Pouzdro z vesmírně šedého hliníku s šedým sportovním řemínkem. Rozměr 42 mm.',
        ])->categories()->attach(13);

        ModelsProduct::create([
            'name' => 'Apple Watch S3 Zlatý',
            'slug' => 'apple_watch_s3_gold',
            'sorting' =>'Apple Watch 3',  //
            'details' => '42 mm',
            'price' => 5990,
            'description' => 'Bezkompromisní, designové, nabité funkcemi – to jsou chytré hodinky od společnosti Apple, které jsou víc než jen módní doplněk, tyto hodinky jsou váš nový společník, trenér nebo i záznamník. Pouzdro z vesmírně šedého hliníku s šedým sportovním řemínkem. Rozměr 42 mm.',
        ])->categories()->attach(13);

        ModelsProduct::create([
            'name' => 'Apple Watch S3 Stříbrný',
            'slug' => 'apple_watch_s3_silver',
            'sorting' =>'Apple Watch 3',  //
            'details' => '42 mm',
            'price' => 5990,
            'description' => 'Bezkompromisní, designové, nabité funkcemi – to jsou chytré hodinky od společnosti Apple, které jsou víc než jen módní doplněk, tyto hodinky jsou váš nový společník, trenér nebo i záznamník. Pouzdro z vesmírně šedého hliníku s šedým sportovním řemínkem. Rozměr 42 mm.',
        ])->categories()->attach(13);
        //APPLE WATCH S3 END


        //APPLE WATCH SE START
        ModelsProduct::create([
            'name' => 'Apple Watch SE Černý',
            'slug' => 'apple_watch_se_black',
            'sorting' =>'Apple Watch SE',  //
            'details' => '44 mm',
            'price' => 8790,
            'description' => 'Chytré hodinky Apple Watch SE. Pouzdro o velikosti 44 mm. O 30% větší Retina displej než u Series 3. Voděodolnost do 50 m, vhodné pro plavání. Oznámení o pomalém a rychlém tepu. Oznámení o nepravidelném srdečním rytmu. Detekce pádu. Kompas. Stále aktivní výškoměr. SOS funkce. Monitorování hluku. Čip S5 SiP s dvoujádrovým procesorem. Reproduktor a mikrofon druhé generace. Vestavěná dobíjecí lithium iontová baterie s výdrží až 18 hodin.',
        ])->categories()->attach(11);

        ModelsProduct::create([
            'name' => 'Apple Watch SE Zlatý',
            'slug' => 'apple_watch_se_gold',
            'sorting' =>'Apple Watch SE',  //
            'details' => '44 mm',
            'price' => 8790,
            'description' => 'Chytré hodinky Apple Watch SE. Pouzdro o velikosti 44 mm. O 30% větší Retina displej než u Series 3. Voděodolnost do 50 m, vhodné pro plavání. Oznámení o pomalém a rychlém tepu. Oznámení o nepravidelném srdečním rytmu. Detekce pádu. Kompas. Stále aktivní výškoměr. SOS funkce. Monitorování hluku. Čip S5 SiP s dvoujádrovým procesorem. Reproduktor a mikrofon druhé generace. Vestavěná dobíjecí lithium iontová baterie s výdrží až 18 hodin.',
        ])->categories()->attach(11);

        ModelsProduct::create([
            'name' => 'Apple Watch SE Stříbrný',
            'slug' => 'apple_watch_se_silver',
            'sorting' =>'Apple Watch SE',  //
            'details' => '44 mm',
            'price' => 8790,
            'description' => 'Chytré hodinky Apple Watch SE. Pouzdro o velikosti 44 mm. O 30% větší Retina displej než u Series 3. Voděodolnost do 50 m, vhodné pro plavání. Oznámení o pomalém a rychlém tepu. Oznámení o nepravidelném srdečním rytmu. Detekce pádu. Kompas. Stále aktivní výškoměr. SOS funkce. Monitorování hluku. Čip S5 SiP s dvoujádrovým procesorem. Reproduktor a mikrofon druhé generace. Vestavěná dobíjecí lithium iontová baterie s výdrží až 18 hodin.',
        ])->categories()->attach(11);
        //APPLE WATCH SE END


        //APPLE WATCH S6 START
        ModelsProduct::create([
            'name' => 'Apple Watch S6 Černý',
            'slug' => 'apple_watch_series6_black',
            'sorting' =>'Apple Watch 6',  //
            'details' => '44 mm',
            'price' => 12290,
            'description' => 'Budoucnost zdraví na vaší ruce – chytré hodinky Apple Watch Series 6. Pouzdro o velikosti 44 mm. Stále zapnutý Retina displej. GPS. Saturace kyslíkem – hladina kyslíku v krvi. Měření EKG. Oznámení o pomalém a rychlém tepu. Oznámení o nepravidelném srdečním rytmu. Voděodolnost do 50 metrů. Detekce pádu. Kompas a výškoměr. SOS funkce. Monitorování hluku. Čip S6 SiP s dvoujádrovým procesorem. Reproduktor a mikrofon druhé generace.',
        ])->categories()->attach(12);

        ModelsProduct::create([
            'name' => 'Apple Watch S6 Modrý',
            'slug' => 'apple_watch_series6_blue',
            'sorting' =>'Apple Watch 6',  //
            'details' => '44 mm',
            'price' => 12290,
            'description' => 'Budoucnost zdraví na vaší ruce – chytré hodinky Apple Watch Series 6. Pouzdro o velikosti 44 mm. Stále zapnutý Retina displej. GPS. Saturace kyslíkem – hladina kyslíku v krvi. Měření EKG. Oznámení o pomalém a rychlém tepu. Oznámení o nepravidelném srdečním rytmu. Voděodolnost do 50 metrů. Detekce pádu. Kompas a výškoměr. SOS funkce. Monitorování hluku. Čip S6 SiP s dvoujádrovým procesorem. Reproduktor a mikrofon druhé generace.',
        ])->categories()->attach(12);

        ModelsProduct::create([
            'name' => 'Apple Watch S6 Ružový',
            'slug' => 'apple_watch_series6_pink',
            'sorting' =>'Apple Watch 6',  //
            'details' => '44 mm',
            'price' => 12290,
            'description' => 'Budoucnost zdraví na vaší ruce – chytré hodinky Apple Watch Series 6. Pouzdro o velikosti 44 mm. Stále zapnutý Retina displej. GPS. Saturace kyslíkem – hladina kyslíku v krvi. Měření EKG. Oznámení o pomalém a rychlém tepu. Oznámení o nepravidelném srdečním rytmu. Voděodolnost do 50 metrů. Detekce pádu. Kompas a výškoměr. SOS funkce. Monitorování hluku. Čip S6 SiP s dvoujádrovým procesorem. Reproduktor a mikrofon druhé generace.',
        ])->categories()->attach(12);

        ModelsProduct::create([
            'name' => 'Apple Watch S6 Červený',
            'slug' => 'apple_watch_series6_red',
            'sorting' =>'Apple Watch 6',  //
            'details' => '44 mm',
            'price' => 12290,
            'description' => 'Budoucnost zdraví na vaší ruce – chytré hodinky Apple Watch Series 6. Pouzdro o velikosti 44 mm. Stále zapnutý Retina displej. GPS. Saturace kyslíkem – hladina kyslíku v krvi. Měření EKG. Oznámení o pomalém a rychlém tepu. Oznámení o nepravidelném srdečním rytmu. Voděodolnost do 50 metrů. Detekce pádu. Kompas a výškoměr. SOS funkce. Monitorování hluku. Čip S6 SiP s dvoujádrovým procesorem. Reproduktor a mikrofon druhé generace.',
        ])->categories()->attach(12);

        ModelsProduct::create([
            'name' => 'Apple Watch S6 Bílý',
            'slug' => 'apple_watch_series6_white',
            'sorting' =>'Apple Watch 6',  //
            'details' => '44 mm',
            'price' => 12290,
            'description' => 'Budoucnost zdraví na vaší ruce – chytré hodinky Apple Watch Series 6. Pouzdro o velikosti 44 mm. Stále zapnutý Retina displej. GPS. Saturace kyslíkem – hladina kyslíku v krvi. Měření EKG. Oznámení o pomalém a rychlém tepu. Oznámení o nepravidelném srdečním rytmu. Voděodolnost do 50 metrů. Detekce pádu. Kompas a výškoměr. SOS funkce. Monitorování hluku. Čip S6 SiP s dvoujádrovým procesorem. Reproduktor a mikrofon druhé generace.',
        ])->categories()->attach(12);
        //APPLE WATCH S6 END


        //APPLE WATCH NIKE START
        //S6
        ModelsProduct::create([
            'name' => 'Apple Watch Nike S6 Černý',
            'slug' => 'apple_watch_nike_series6_gray',
            'sorting' =>'Apple Watch Nike',  //
            'details' => '44 mm',
            'price' => 12290,
            'description' => 'Budoucnost zdraví na vaší ruce – chytré hodinky Apple Watch Series 6. Pouzdro o velikosti 44 mm. Stále zapnutý Retina displej. GPS. Saturace kyslíkem – hladina kyslíku v krvi. Měření EKG. Oznámení o pomalém a rychlém tepu. Oznámení o nepravidelném srdečním rytmu. Voděodolnost do 50 metrů. Detekce pádu. Kompas a výškoměr. SOS funkce. Monitorování hluku. Čip S6 SiP s dvoujádrovým procesorem. Reproduktor a mikrofon druhé generace.',
        ])->categories()->attach(10);

        ModelsProduct::create([
            'name' => 'Apple Watch Nike S6 Stříbrný',
            'slug' => 'apple_watch_nike_series6_silver',
            'sorting' =>'Apple Watch Nike',  //
            'details' => '44 mm',
            'price' => 12290,
            'description' => 'Budoucnost zdraví na vaší ruce – chytré hodinky Apple Watch Series 6. Pouzdro o velikosti 44 mm. Stále zapnutý Retina displej. GPS. Saturace kyslíkem – hladina kyslíku v krvi. Měření EKG. Oznámení o pomalém a rychlém tepu. Oznámení o nepravidelném srdečním rytmu. Voděodolnost do 50 metrů. Detekce pádu. Kompas a výškoměr. SOS funkce. Monitorování hluku. Čip S6 SiP s dvoujádrovým procesorem. Reproduktor a mikrofon druhé generace.',
        ])->categories()->attach(10);
        //SE
        ModelsProduct::create([
            'name' => 'Apple Watch SE Stříbrný',
            'slug' => 'apple_watch_nike_se_silver',
            'sorting' =>'Apple Watch Nike',  //
            'details' => '44 mm',
            'price' => 8790,
            'description' => 'Chytré hodinky Apple Watch SE. Pouzdro o velikosti 44 mm. O 30% větší Retina displej než u Series 3. Voděodolnost do 50 m, vhodné pro plavání. Oznámení o pomalém a rychlém tepu. Oznámení o nepravidelném srdečním rytmu. Detekce pádu. Kompas. Stále aktivní výškoměr. SOS funkce. Monitorování hluku. Čip S5 SiP s dvoujádrovým procesorem. Reproduktor a mikrofon druhé generace. Vestavěná dobíjecí lithium iontová baterie s výdrží až 18 hodin.',
        ])->categories()->attach(10);

        ModelsProduct::create([
            'name' => 'Apple Watch SE Černý',
            'slug' => 'apple_watch_nike_se_gray',
            'sorting' =>'Apple Watch Nike',  //
            'details' => '44 mm',
            'price' => 8790,
            'description' => 'Chytré hodinky Apple Watch SE. Pouzdro o velikosti 44 mm. O 30% větší Retina displej než u Series 3. Voděodolnost do 50 m, vhodné pro plavání. Oznámení o pomalém a rychlém tepu. Oznámení o nepravidelném srdečním rytmu. Detekce pádu. Kompas. Stále aktivní výškoměr. SOS funkce. Monitorování hluku. Čip S5 SiP s dvoujádrovým procesorem. Reproduktor a mikrofon druhé generace. Vestavěná dobíjecí lithium iontová baterie s výdrží až 18 hodin.',
        ])->categories()->attach(10);
        //END APPLE WATCH NIKE

        //MACBOOK PRO START
        //M1 13
        ModelsProduct::create([
            'name' => 'Macbook Pro 13 M1 1TB',
            'slug' => 'macbook_pro_13_1TB',
            'sorting' =>'Macbook Pro',  //
            'details' => '8GB | M1| 1TB SSD',
            'price' => 45990,
            'description' => 'Revoluční Apple Apple MacBook Pro 13 Touch Bar s procesorem Apple M1. 13.3" IPS Retina displej 2560 × 1600 bodů s technologií True Tone a širokým barevným rozsahem (P3), 8jádrový procesor Apple M1, 8jádrové GPU, 16jádrový Neural Engine, 8GB RAM, disk 1TB SSD, Wi-Fi ax, Bluetooth 5.0, 2x Thunderbolt / USB 4, kamera FaceTime HD, Touch ID, Force Touch trackpad, klávesnice Magic Keyboard, hliníková konstrukce, operační systém macOS Big Sur.',
        ])->categories()->attach(9);

        ModelsProduct::create([
            'name' => 'Macbook Pro 13 M1 256GB',
            'slug' => 'macbook_pro_13',
            'sorting' =>'Macbook Pro',  //
            'details' => '8GB | M1| 256GB SSD',
            'price' => 38990,
            'description' => 'Revoluční Apple Apple MacBook Pro 13 Touch Bar s procesorem Apple M1. 13.3" IPS Retina displej 2560 × 1600 bodů s technologií True Tone a širokým barevným rozsahem (P3), 8jádrový procesor Apple M1, 8jádrové GPU, 16jádrový Neural Engine, 8GB RAM, disk 256TB SSD, Wi-Fi ax, Bluetooth 5.0, 2x Thunderbolt / USB 4, kamera FaceTime HD, Touch ID, Force Touch trackpad, klávesnice Magic Keyboard, hliníková konstrukce, operační systém macOS Big Sur.',
        ])->categories()->attach(9);

        //Intel 13
        ModelsProduct::create([
            'name' => 'Macbook Pro 13 i5 256GB',
            'slug' => 'macbook_pro_13_gray',
            'sorting' =>'Macbook Pro',  //
            'details' => '16GB | i5| 256GB SSD',
            'price' => 33990,
            'description' => 'Nový Apple MacBook Pro v provedení pro rok 2020 s klávesnicí Magic Keyboard, vyšším výkonem, skleněným vícedotykovým proužkem Touch Bar a snímačem Touch ID. 4jádrový procesor Intel Core i5 (2GHz, TB 3.8GHz), 16GB operační paměti LPDDR4X, 13.3" Retina displej 2560 × 1600 bodů, grafika Intel Iris Plus Graphics, 256GB SSD PCIe, bez mechaniky, Wi-Fi ac, Bluetooth 5.0, 4x Thunderbolt 3/Type-C Gen 2, kamera FaceTime HD, podsvícená klávesnice, operační systém macOS.',
        ])->categories()->attach(9);

        ModelsProduct::create([
            'name' => 'Macbook Pro 13 i5 512GB',
            'slug' => 'macbook_pro_13_gray_512',
            'sorting' =>'Macbook Pro',  //
            'details' => '16GB | i5| 512GB SSD',
            'price' => 47990,
            'description' => 'Nový Apple MacBook Pro v provedení pro rok 2020 s klávesnicí Magic Keyboard, vyšším výkonem, skleněným vícedotykovým proužkem Touch Bar a snímačem Touch ID. 4jádrový procesor Intel Core i5 (2GHz, TB 3.8GHz), 16GB operační paměti LPDDR4X, 13.3" Retina displej 2560 × 1600 bodů, grafika Intel Iris Plus Graphics, 512GB SSD PCIe, bez mechaniky, Wi-Fi ac, Bluetooth 5.0, 4x Thunderbolt 3/Type-C Gen 2, kamera FaceTime HD, podsvícená klávesnice, operační systém macOS.',
        ])->categories()->attach(9);

        //Intel 16
        ModelsProduct::create([
            'name' => 'Macbook Pro 16 i7 512GB',
            'slug' => 'macbook_pro_16',
            'sorting' =>'Macbook Pro',  //
            'details' => '16GB | i7| 512GB SSD',
            'price' => 60990,
            'description' => 'MacBook Pro s větším displejem Retina, vyšším výkonem, vylepšenou klávesnicí, skvělým zvukem, skleněným vícedotykovým proužkem Touch Bar a snímačem Touch ID. 6jádrový procesor Intel Core i7 (2.6GHz, TB 4.5GHz), 16GB operační paměti DDR4, 16" Retina displej 3072 × 1920 bodů, grafika AMD Radeon Pro 5300M 4GB GDDR6, disk 512GB SSD, bez mechaniky, Wi-Fi ac, Bluetooth 5.0, 4x Thunderbolt 3/USB Type-C 3.1/3.2, kamera FaceTime HD, podsvícená klávesnice, operační systém macOS.',
        ])->categories()->attach(9);

        ModelsProduct::create([
            'name' => 'Macbook Pro 16 i7 1TB',
            'slug' => 'macbook_pro_16_7_1TB',
            'sorting' =>'Macbook Pro',  //
            'details' => '16GB | i7| 1TB SSD',
            'price' => 72990,
            'description' => 'MacBook Pro s větším displejem Retina, vyšším výkonem, vylepšenou klávesnicí, skvělým zvukem, skleněným vícedotykovým proužkem Touch Bar a snímačem Touch ID. 6jádrový procesor Intel Core i7 (2.6GHz, TB 4.5GHz), 16GB operační paměti DDR4, 16" Retina displej 3072 × 1920 bodů, grafika AMD Radeon Pro 5500M 4GB GDDR6, disk 1TB SSD, bez mechaniky, Wi-Fi ac, Bluetooth 5.0, 4x Thunderbolt 3/USB Type-C 3.1/3.2, kamera FaceTime HD, podsvícená klávesnice, operační systém macOS.',
        ])->categories()->attach(9);

        ModelsProduct::create([
            'name' => 'Macbook Pro 16 i9 1TB',
            'slug' => 'macbook_pro_16_i9_1TB',
            'sorting' =>'Macbook Pro',  //
            'details' => '16GB | i9| 1TB SSD',
            'price' => 77990,
            'description' => 'MacBook Pro s větším displejem Retina, vyšším výkonem, vylepšenou klávesnicí, skvělým zvukem, skleněným vícedotykovým proužkem Touch Bar a snímačem Touch ID. 8jádrový procesor Intel Core i9 (2.3GHz, TB 4.8GHz), 16GB operační paměti DDR4, 16" Retina displej 3072 × 1920 bodů, grafika AMD Radeon Pro 5500M 8GB GDDR6, disk 1TB SSD, bez mechaniky, Wi-Fi ac, Bluetooth 5.0, 4x Thunderbolt 3/USB Type-C 3.1/3.2, kamera FaceTime HD, podsvícená klávesnice, operační systém macOS.',
        ])->categories()->attach(9);
        //MACBOOK PRO END


        //MACBOOK AIR
        //M1
        ModelsProduct::create([
            'name' => 'Macbook Air 13 M1 256GB',
            'slug' => 'macbook_air_gray',
            'sorting' =>'Macbook Air',  //
            'details' => '8GB | M1| 256GB SSD',
            'price' => 29990,
            'description' => 'Revoluční Apple MacBook Air s procesorem Apple M1. 13.3" IPS Retina displej 2560 × 1600 bodů s technologií True Tone a širokým barevným rozsahem (P3), 8jádrový procesor Apple M1, 7jádrové GPU, 16jádrový Neural Engine, 8GB RAM, disk 256GB SSD, Wi-Fi ax, Bluetooth 5.0, 2x Thunderbolt / USB 4, kamera FaceTime HD, Touch ID, Force Touch trackpad, klávesnice Magic Keyboard, hliníková konstrukce, operační systém macOS Big Sur.',
        ])->categories()->attach(8);

        ModelsProduct::create([
            'name' => 'Macbook Air 13 M1 512GB',
            'slug' => 'macbook_air_gray_M1_512GB',
            'sorting' =>'Macbook Air',  //
            'details' => '8GB | M1| 512GB SSD',
            'price' => 35990,
            'description' => 'Revoluční Apple MacBook Air s procesorem Apple M1. 13.3" IPS Retina displej 2560 × 1600 bodů s technologií True Tone a širokým barevným rozsahem (P3), 8jádrový procesor Apple M1, 7jádrové GPU, 16jádrový Neural Engine, 8GB RAM, disk 512GB SSD, Wi-Fi ax, Bluetooth 5.0, 2x Thunderbolt / USB 4, kamera FaceTime HD, Touch ID, Force Touch trackpad, klávesnice Magic Keyboard, hliníková konstrukce, operační systém macOS Big Sur.',
        ])->categories()->attach(8);

        ModelsProduct::create([
            'name' => 'Macbook Air 13 M1 1TB',
            'slug' => 'macbook_air_gray_M1_1TB',
            'sorting' =>'Macbook Air',  //
            'details' => '8GB | M1| 1TB SSD',
            'price' => 43990,
            'description' => 'Revoluční Apple MacBook Air s procesorem Apple M1. 13.3" IPS Retina displej 2560 × 1600 bodů s technologií True Tone a širokým barevným rozsahem (P3), 8jádrový procesor Apple M1, 7jádrové GPU, 16jádrový Neural Engine, 8GB RAM, disk 1TB SSD, Wi-Fi ax, Bluetooth 5.0, 2x Thunderbolt / USB 4, kamera FaceTime HD, Touch ID, Force Touch trackpad, klávesnice Magic Keyboard, hliníková konstrukce, operační systém macOS Big Sur.',
        ])->categories()->attach(8);

        //Intel
        ModelsProduct::create([
            'name' => 'Macbook Air 13 i5 256GB',
            'slug' => 'macbook_air_gray_i5_256GB',
            'sorting' =>'Macbook Air',  //
            'details' => '16GB | i5| 256GB SSD',
            'price' => 29990,
            'description' => 'Nová generace Apple MacBook Air pro rok 2020 s 13.3palcovým Retina displejem s technologií True Tone, Touch ID, Force Touch trackpadem a klávesnicí Magic Keyboard. 4jádrový procesor Intel Core i5 10. generace (1.1GHz, TB až 3.5GHz), 16GB RAM LPDDR4X, 13.3" IPS Retina displej 2560 × 1600 bodů, grafika Intel Iris Plus Graphics, disk 256GB SSD PCIe, hliníková konstrukce, Wi-Fi ac, Bluetooth 5.0, 2x Thunderbolt 3/Type-C, kamera FaceTime HD, operační systém macOS.',
        ])->categories()->attach(8);

        ModelsProduct::create([
            'name' => 'Macbook Air 13 i5 512GB',
            'slug' => 'macbook_air_gray_i5_512GB',
            'sorting' =>'Macbook Air',  //
            'details' => '16GB | i5| 512GB SSD',
            'price' => 36990,
            'description' => 'Nová generace Apple MacBook Air pro rok 2020 s 13.3palcovým Retina displejem s technologií True Tone, Touch ID, Force Touch trackpadem a klávesnicí Magic Keyboard. 4jádrový procesor Intel Core i5 10. generace (1.1GHz, TB až 3.5GHz), 16GB RAM LPDDR4X, 13.3" IPS Retina displej 2560 × 1600 bodů, grafika Intel Iris Plus Graphics, disk 512GB SSD PCIe, hliníková konstrukce, Wi-Fi ac, Bluetooth 5.0, 2x Thunderbolt 3/Type-C, kamera FaceTime HD, operační systém macOS.',
        ])->categories()->attach(8);

        ModelsProduct::create([
            'name' => 'Macbook Air 13 i7 512GB',
            'slug' => 'macbook_air_gray_i7_512GB',
            'sorting' =>'Macbook Air',  //
            'details' => '16GB | i7| 512GB SSD',
            'price' => 40990,
            'description' => 'Nová generace Apple MacBook Air pro rok 2020 s 13.3palcovým Retina displejem s technologií True Tone, Touch ID, Force Touch trackpadem a klávesnicí Magic Keyboard. 4jádrový procesor Intel Core i7 10. generace (1.2GHz, TB až 3.8GHz), 16GB RAM LPDDR4X, 13.3" IPS Retina displej 2560 × 1600 bodů, grafika Intel Iris Plus Graphics, disk 512GB SSD PCIe, hliníková konstrukce, Wi-Fi ac, Bluetooth 5.0, 2x Thunderbolt 3/Type-C, kamera FaceTime HD, operační systém macOS.',
        ])->categories()->attach(8);




    }
}
