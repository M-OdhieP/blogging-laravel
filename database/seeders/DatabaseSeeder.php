<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    User::factory(6)->create();
    User::create([
                    'name'=> 'Muhamad Odhie Prasetio',
                    'username'=> 'odhietampan',
                    'email'=> 'tiotio179@gmail.com',
                    'password'=>bcrypt('password')
    ]);


    Category::create([
        'nama' => 'Web Programming',
        'slug' => 'web-programming'
    ]);
    Category::create([
        'nama' => 'Web Design',
        'slug' => 'web-design'
    ]);
    Category::create([
        'nama' => 'Personal',
        'slug' => 'personal'
    ]);

    Post::factory(20)->create();
    // Post::create([
    // 'title' => 'Judul Pertama',
    // 'category_id' => 1,
    // 'user_id' =>1,
    // 'slug' => 'judul-pertama',
    // 'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi ratione deleniti sed necessitatibus dolore accusantium similique incidunt sint maxime accusamus.',
    // 'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit minus quia nemo ad cumque. Ea voluptatibus veritatis iste qui debitis labore provident voluptatum neque fugit expedita quibusdam suscipit quo tenetur error beatae, consequuntur sapiente! Nisi, delectus laudantium, illo unde ad facilis ipsum quasi vitae provident minus aut, enim praesentium perferendis! Quis dolorem veritatis quibusdam incidunt tempore reiciendis optio, qui nobis dolore pariatur, architecto quaerat cumque et, quisquam consectetur ducimus sed dicta accusantium enim. Deleniti praesentium incidunt, odio debitis ab hic tempore rerum, expedita voluptatem similique commodi maxime aliquam aperiam saepe sint eligendi! Ratione at minus error culpa fuga doloribus modi voluptatibus magnam praesentium! Eaque quidem doloribus sed vel, deleniti quasi fugit aperiam nobis, quod ut aliquam vero? Numquam vitae totam quo ex accusantium optio, rem debitis nobis, ipsum impedit facilis, officiis hic alias! Culpa eos tempore libero distinctio inventore qui fugit, odit modi quod veniam perferendis corporis explicabo quia eligendi quo at, earum vitae vero velit praesentium voluptates! Suscipit id, rem ea soluta provident reiciendis, saepe in voluptates veritatis voluptatum amet placeat, modi ex culpa dolorum nulla facilis? Explicabo, ducimus vitae obcaecati illo quasi perspiciatis deleniti animi cumque, aut dolore architecto laboriosam quas iusto molestiae adipisci quam rerum excepturi maxime!'
    // ]);
    // Post::create([
    // 'title' => 'Judul Kedua',
    // 'category_id' => 1,
    // 'user_id' =>1,
    // 'slug' => 'judul-kedua',
    // 'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi ratione deleniti sed necessitatibus dolore accusantium similique incidunt sint maxime accusamus.',
    // 'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit minus quia nemo ad cumque. Ea voluptatibus veritatis iste qui debitis labore provident voluptatum neque fugit expedita quibusdam suscipit quo tenetur error beatae, consequuntur sapiente! Nisi, delectus laudantium, illo unde ad facilis ipsum quasi vitae provident minus aut, enim praesentium perferendis! Quis dolorem veritatis quibusdam incidunt tempore reiciendis optio, qui nobis dolore pariatur, architecto quaerat cumque et, quisquam consectetur ducimus sed dicta accusantium enim. Deleniti praesentium incidunt, odio debitis ab hic tempore rerum, expedita voluptatem similique commodi maxime aliquam aperiam saepe sint eligendi! Ratione at minus error culpa fuga doloribus modi voluptatibus magnam praesentium! Eaque quidem doloribus sed vel, deleniti quasi fugit aperiam nobis, quod ut aliquam vero? Numquam vitae totam quo ex accusantium optio, rem debitis nobis, ipsum impedit facilis, officiis hic alias! Culpa eos tempore libero distinctio inventore qui fugit, odit modi quod veniam perferendis corporis explicabo quia eligendi quo at, earum vitae vero velit praesentium voluptates! Suscipit id, rem ea soluta provident reiciendis, saepe in voluptates veritatis voluptatum amet placeat, modi ex culpa dolorum nulla facilis? Explicabo, ducimus vitae obcaecati illo quasi perspiciatis deleniti animi cumque, aut dolore architecto laboriosam quas iusto molestiae adipisci quam rerum excepturi maxime!'
    // ]);
    // Post::create([
    // 'title' => 'Judul Ketiga',
    // 'category_id' => 2,
    // 'user_id' =>2,
    // 'slug' => 'judul-ketiga',
    // 'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi ratione deleniti sed necessitatibus dolore accusantium similique incidunt sint maxime accusamus.',
    // 'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit minus quia nemo ad cumque. Ea voluptatibus veritatis iste qui debitis labore provident voluptatum neque fugit expedita quibusdam suscipit quo tenetur error beatae, consequuntur sapiente! Nisi, delectus laudantium, illo unde ad facilis ipsum quasi vitae provident minus aut, enim praesentium perferendis! Quis dolorem veritatis quibusdam incidunt tempore reiciendis optio, qui nobis dolore pariatur, architecto quaerat cumque et, quisquam consectetur ducimus sed dicta accusantium enim. Deleniti praesentium incidunt, odio debitis ab hic tempore rerum, expedita voluptatem similique commodi maxime aliquam aperiam saepe sint eligendi! Ratione at minus error culpa fuga doloribus modi voluptatibus magnam praesentium! Eaque quidem doloribus sed vel, deleniti quasi fugit aperiam nobis, quod ut aliquam vero? Numquam vitae totam quo ex accusantium optio, rem debitis nobis, ipsum impedit facilis, officiis hic alias! Culpa eos tempore libero distinctio inventore qui fugit, odit modi quod veniam perferendis corporis explicabo quia eligendi quo at, earum vitae vero velit praesentium voluptates! Suscipit id, rem ea soluta provident reiciendis, saepe in voluptates veritatis voluptatum amet placeat, modi ex culpa dolorum nulla facilis? Explicabo, ducimus vitae obcaecati illo quasi perspiciatis deleniti animi cumque, aut dolore architecto laboriosam quas iusto molestiae adipisci quam rerum excepturi maxime!'
    // ]);
    // Post::create([
    // 'title' => 'Judul Keempat',
    // 'category_id' => 2,
    // 'user_id' =>2,
    // 'slug' => 'judul-keempat',
    // 'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi ratione deleniti sed necessitatibus dolore accusantium similique incidunt sint maxime accusamus.',
    // 'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit minus quia nemo ad cumque. Ea voluptatibus veritatis iste qui debitis labore provident voluptatum neque fugit expedita quibusdam suscipit quo tenetur error beatae, consequuntur sapiente! Nisi, delectus laudantium, illo unde ad facilis ipsum quasi vitae provident minus aut, enim praesentium perferendis! Quis dolorem veritatis quibusdam incidunt tempore reiciendis optio, qui nobis dolore pariatur, architecto quaerat cumque et, quisquam consectetur ducimus sed dicta accusantium enim. Deleniti praesentium incidunt, odio debitis ab hic tempore rerum, expedita voluptatem similique commodi maxime aliquam aperiam saepe sint eligendi! Ratione at minus error culpa fuga doloribus modi voluptatibus magnam praesentium! Eaque quidem doloribus sed vel, deleniti quasi fugit aperiam nobis, quod ut aliquam vero? Numquam vitae totam quo ex accusantium optio, rem debitis nobis, ipsum impedit facilis, officiis hic alias! Culpa eos tempore libero distinctio inventore qui fugit, odit modi quod veniam perferendis corporis explicabo quia eligendi quo at, earum vitae vero velit praesentium voluptates! Suscipit id, rem ea soluta provident reiciendis, saepe in voluptates veritatis voluptatum amet placeat, modi ex culpa dolorum nulla facilis? Explicabo, ducimus vitae obcaecati illo quasi perspiciatis deleniti animi cumque, aut dolore architecto laboriosam quas iusto molestiae adipisci quam rerum excepturi maxime!'
    // ]);
    
    }
}
