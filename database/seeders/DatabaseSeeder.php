<?php

namespace Database\Seeders;
use \App\Models\Category;
use \App\Models\Announcement;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        //$this->categories();
        $this->announcements();
    }

    private function categories()
    {
        Category::create(['name' => 'Auto']);
        Category::create(['name' => 'Moto']);
        Category::create(['name' => 'Nautica']);
        Category::create(['name' => 'Elettronica']);
        Category::create(['name' => 'Casalinghi']);
        Category::create(['name' => 'Arredamento']);
        Category::create(['name' => 'Giardinaggio']);
        Category::create(['name' => 'Animali']);
        Category::create(['name' => 'Immobili']);
        Category::create(['name' => 'Lavoro']);

    }

    private function announcements()
    {
        Announcement::create([
            'title' => 'Fiat 500',
            'description' => 'Auto pari al nuovo, tagliandata regolarmente solo 40.000 km',
            'category_id' => '1',
            'user_id' => '1',
            'url_image' => 'https://cdn-img.automoto.it/images/21898768/HOR_STD/800x/fiat-500c-2019-1.jpeg',
            'price' => '10500'
        ]);

        Announcement::create([
            'title' => 'Yamaha R1',
            'description' => 'Moto come nuova, tagliandata regolarmente ogni 5.00 km, gomme nuove',
            'category_id' => '2',
            'user_id' => '1',
            'url_image' => 'https://editorial.pxcrush.net/bikesales/general/editorial/200226_yamaha_yzr-r1_04.jpg?width=1024&height=682',
            'price' => '15800'
        ]);

        Announcement::create([
            'title' => 'Gagliotta 37',
            'description' => 'Barca con 80h di moto, motori volvo penta sempre rimessata, appena fatta antivegetativa',
            'category_id' => '3',
            'user_id' => '2',
            'url_image' => 'https://www.mediaship.it/wp-content/uploads/2022/04/file_6267fb8581934.jpeg',
            'price' => '40000'
        ]);

        Announcement::create([
            'title' => 'Stampante 3d',
            'description' => 'Stampante 3d viene venduta nello stato in cui si trova, formula visto e piaciuto, do anche resina',
            'category_id' => '4',
            'user_id' => '1',
            'url_image' => 'https://cdn.wallstreetitalia.com/-a29DaHQl4YytNIrNtMkuQ0V0lA=/980x551/smart/https://www.wallstreetitalia.com/app/uploads/2013/10/60244.png',
            'price' => '1700'
        ]);

        Announcement::create([
            'title' => 'Trapunta 2 posti',
            'description' => 'Vendo trapunta matrimoniale mai utilizzato in quanto regalo non gradito',
            'category_id' => '5',
            'user_id' => '2',
            'url_image' => 'https://www.caleffionline.it/media/catalog/product/cache/39332662a72125b8fd4462b7f6cc0280/1/0/1003831_6.jpg',
            'price' => '250'
        ]);

        Announcement::create([
            'title' => 'Mobile soggiorno',
            'description' => 'Parete attrezzata di colore panna effetto legno, praticamente pari al nuovo nessun segno di utilizzo',
            'category_id' => '6',
            'user_id' => '2',
            'url_image' => 'https://www.picclickimg.com/eqkAAOSw8yVgq4me/parete-attrezzata-soggiorno-bianca.webp',
            'price' => '500'
        ]);

        Announcement::create([
            'title' => 'Tagliasiepi a scoppio',
            'description' => 'Attrezzo di lavoro praticamente usato una sola volta, spento ma non riparte piu\'',
            'category_id' => '7',
            'user_id' => '1',
            'url_image' => 'https://giachinogarden.it/wp-content/uploads/2022/07/tagliasiepi-a-scoppio-stihl-2.jpg',
            'price' => '100'
        ]);

        Announcement::create([
            'title' => 'Regalo cuccia',
            'description' => 'Regalo cuccia per cani media taglia',
            'category_id' => '8',
            'user_id' => '2',
            'url_image' => 'https://img.clasf.it/2020/11/22/Cuccia-Dacia-Media-usata-20201122071304.3893900015.jpg',
            'price' => '1'
        ]);

        Announcement::create([
            'title' => 'Casa fronte mare',
            'description' => 'In vendita intera proprietà fronte mare in località Positano, con annessa piscina. Circa 200 metri quadri di superficie',
            'category_id' => '9',
            'user_id' => '1',
            'url_image' => 'https://www.latuacasaalmare.it/dati/immobili/small_immobile_202107060214_a7r04740.jpg',
            'price' => '100000'
        ]);

        Announcement::create([
            'title' => 'Call center',
            'description' => 'Azienda leader nel settore ricerca n.2 figure per inserimento immediato contratto da definire in sede',
            'category_id' => '10',
            'user_id' => '2',
            'url_image' => 'https://www.ilcorrieredellacitta.com/wp-content/uploads/2018/07/capire-un-annuncio-di-lavoro.jpg',
            'price' => '1'
        ]);
    }
}
