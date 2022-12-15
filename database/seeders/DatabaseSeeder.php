<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Adrian Rachman',
            'username' => 'adrianRachman',
            'email' => '203040103@mail.unpas.ac.id',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Indra',
        //     'email' => 'indra123@gmail.com',
        //     'password' => bcrypt('54321')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis, ducimus quasi.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis, ducimus quasi. Nam illo magni beatae, obcaecati animi porro ex et exercitationem, cumque amet, nobis voluptatibus voluptates iste sequi totam culpa blanditiis quasi laborum nesciunt non eaque. Illo saepe veniam laudantium aliquid! Itaque exercitationem fugit quae officiis nam iste fugiat ullam perspiciatis corrupti omnis facilis doloremque quod nisi obcaecati, tempore eius enim ratione aliquam provident corporis error ex adipisci voluptatem? Et tempore temporibus magni porro eaque culpa maxime optio sunt reprehenderit, perspiciatis voluptatem eius laudantium. Dolorum omnis voluptas, dicta quo, nulla ex temporibus quia impedit, assumenda exercitationem similique provident molestiae aliquam?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis, ducimus quasi.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis, ducimus quasi. Nam illo magni beatae, obcaecati animi porro ex et exercitationem, cumque amet, nobis voluptatibus voluptates iste sequi totam culpa blanditiis quasi laborum nesciunt non eaque. Illo saepe veniam laudantium aliquid! Itaque exercitationem fugit quae officiis nam iste fugiat ullam perspiciatis corrupti omnis facilis doloremque quod nisi obcaecati, tempore eius enim ratione aliquam provident corporis error ex adipisci voluptatem? Et tempore temporibus magni porro eaque culpa maxime optio sunt reprehenderit, perspiciatis voluptatem eius laudantium. Dolorum omnis voluptas, dicta quo, nulla ex temporibus quia impedit, assumenda exercitationem similique provident molestiae aliquam?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis, ducimus quasi.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis, ducimus quasi. Nam illo magni beatae, obcaecati animi porro ex et exercitationem, cumque amet, nobis voluptatibus voluptates iste sequi totam culpa blanditiis quasi laborum nesciunt non eaque. Illo saepe veniam laudantium aliquid! Itaque exercitationem fugit quae officiis nam iste fugiat ullam perspiciatis corrupti omnis facilis doloremque quod nisi obcaecati, tempore eius enim ratione aliquam provident corporis error ex adipisci voluptatem? Et tempore temporibus magni porro eaque culpa maxime optio sunt reprehenderit, perspiciatis voluptatem eius laudantium. Dolorum omnis voluptas, dicta quo, nulla ex temporibus quia impedit, assumenda exercitationem similique provident molestiae aliquam?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis, ducimus quasi.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis, ducimus quasi. Nam illo magni beatae, obcaecati animi porro ex et exercitationem, cumque amet, nobis voluptatibus voluptates iste sequi totam culpa blanditiis quasi laborum nesciunt non eaque. Illo saepe veniam laudantium aliquid! Itaque exercitationem fugit quae officiis nam iste fugiat ullam perspiciatis corrupti omnis facilis doloremque quod nisi obcaecati, tempore eius enim ratione aliquam provident corporis error ex adipisci voluptatem? Et tempore temporibus magni porro eaque culpa maxime optio sunt reprehenderit, perspiciatis voluptatem eius laudantium. Dolorum omnis voluptas, dicta quo, nulla ex temporibus quia impedit, assumenda exercitationem similique provident molestiae aliquam?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

    }
}
