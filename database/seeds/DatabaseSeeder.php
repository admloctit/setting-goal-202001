<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('roles')->insert([

            ['title' => 'Administrator', 'slug' => 'admin'],
            ['title' => 'Editor', 'slug' => 'editor'],
            ['title' => 'User', 'slug' => 'user']

        ]);

        DB::table('users')->insert([

            ['username' => 'GreatAdmin',
            'email' => 'admin@example.com',
            'password' => bcrypt('admin'),
            'seen' => true,
            'role_id' => 1,
            'valid' => true,
            'confirmed' => true],

            ['username' => 'GreatEditor',
            'email' => 'editor@example.com',
            'password' => bcrypt('editor'),
            'seen' => true,
            'role_id' => 2,
            'valid' => true,
            'confirmed' => true],

            ['username' => 'Locnp',
            'email' => 'locnp@example.com',
            'password' => bcrypt('locnp'),
            'seen' => false,
            'role_id' => 3,
            'valid' => false,
            'confirmed' => true],

            ['username' => 'nploc',
            'email' => 'nploc@example.com',
            'password' => bcrypt('nploc'),
            'seen' => false,
            'role_id' => 3,
            'valid' => false,
            'confirmed' => true]

        ]);

        DB::table('contacts')->insert([

            ['name' => 'user1',
            'email' => 'user1@example.com',
            'message' => Lipsum::short()->text(2),
            'seen' => false],

            ['name' => 'user1',
            'email' => 'user1@example.com',
            'message' => Lipsum::short()->text(2),
            'seen' => false],

            ['name' => 'user2',
            'email' => 'user2@example.com',
            'message' => Lipsum::short()->text(2),
            'seen' => true]
            
        ]);

        DB::table('tags')->insert([

            ['tag' => 'Tag1'],
            ['tag' => 'Tag2'],
            ['tag' => 'Tag3'],
            ['tag' => 'Tag4']

        ]);

        DB::table('posts')->insert([

            ['title' => 'Post 1',
            'slug' => 'post-1',
            'summary' => Lipsum::short()->html(2). '<img alt="" src="/files/user2/bo-tot(gaur).jpg" style="float:left; height:128px; width:128px" />',
            'content' => Lipsum::medium()->html(4),
            'active' => true,
            'user_id' => 1],

            ['title' => 'Post 2',
            'slug' => 'post-2',
            'summary' => '<img alt="" src="/files/user2/goomba.png" style="float:left; height:128px; width:128px" />' . Lipsum::short()->html(2),
            'content' => Lipsum::medium()->link()->html(8),
            'active' => true,
            'user_id' => 2],

            ['title' => 'Post 3',
            'slug' => 'post-3',
            'summary' => '<img alt="" src="/files/user2/rouge-shell.png" style="float:left; height:128px; width:128px" />' . Lipsum::short()->html(2),
            'content' => Lipsum::medium()->link()->html(8),
            'active' => true,
            'user_id' => 2],

            ['title' => 'Post 4',
            'slug' => 'post-4',
            'summary' => '<img alt="" src="/files/user2/rouge-shyguy.png" style="float:left; height:128px; width:128px" />' . Lipsum::short()->html(2),
            'content' => Lipsum::medium()->link()->html(8),
            'active' => true,
            'user_id' => 2]

        ]);

        DB::table('post_tag')->insert([

            ['post_id' => 1, 'tag_id' => 1],
            ['post_id' => 1, 'tag_id' => 2],
            ['post_id' => 2, 'tag_id' => 1],
            ['post_id' => 2, 'tag_id' => 2],
            ['post_id' => 2, 'tag_id' => 3],
            ['post_id' => 3, 'tag_id' => 1],
            ['post_id' => 3, 'tag_id' => 2],
            ['post_id' => 3, 'tag_id' => 4]

        ]);

        DB::table('comments')->insert([

            ['content' => Lipsum::medium()->text(3),
            'user_id' => 2,
            'post_id' => 1],

            ['content' =>Lipsum::medium()->text(2),
            'user_id' => 2,
            'post_id' => 2],

            ['content' => Lipsum::medium()->text(3),
            'user_id' => 3,
            'post_id' => 1]

        ]);
    }
}
