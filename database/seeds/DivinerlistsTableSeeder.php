<?php

use Illuminate\Database\Seeder;

class DivinerlistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('divinerlists')->insert([
            'name' => 'みっちゃん',
            'profileimage' => '1',
            'email' => 'aaaaa@gmail.com',
            'password' => 'bqs1wfjb',
            'performance' => '30代女性で都内で事務系の仕事をしています！
            最近では元カレのことが気になって気になって仕方がない今日この頃
            どなたか、これからの私と元カレとのこれからの運命を占ってほしいです！
            普段は昼静かに暮らしていますが、夜になると超活発になる夜行性です！',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);
        DB::table('divinerlists')->insert([
            'name' => '幸代',
            'profileimage' => '1',
            'email' => 'aaaaa@gmail.com',
            'password' => 'bqs1wfjb',
            'performance' => '2/30代女性で都内で事務系の仕事をしています！
            最近では元カレのことが気になって気になって仕方がない今日この頃
            どなたか、これからの私と元カレとのこれからの運命を占ってほしいです！
            普段は昼静かに暮らしていますが、夜になると超活発になる夜行性です！',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);
        DB::table('divinerlists')->insert([
            'name' => 'りんご',
            'profileimage' => '1',
            'email' => 'aaaaa@gmail.com',
            'password' => 'bqs1wfjb',
            'performance' => '3/30代女性で都内で事務系の仕事をしています！
            最近では元カレのことが気になって気になって仕方がない今日この頃
            どなたか、これからの私と元カレとのこれからの運命を占ってほしいです！
            普段は昼静かに暮らしていますが、夜になると超活発になる夜行性です！',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);

        DB::table('divinerlists')->insert([
            'name' => 'ミスタードーナツ',
            'profileimage' => '1',
            'email' => 'aaaaa@gmail.com',
            'password' => 'bqs1wfjb',
            'performance' => '4/30代女性で都内で事務系の仕事をしています！
            最近では元カレのことが気になって気になって仕方がない今日この頃
            どなたか、これからの私と元カレとのこれからの運命を占ってほしいです！
            普段は昼静かに暮らしていますが、夜になると超活発になる夜行性です！',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);

        DB::table('divinerlists')->insert([
            'name' => 'さくら',
            'profileimage' => '1',
            'email' => 'aaaaa@gmail.com',
            'password' => 'bqs1wfjb',
            'performance' => '5/30代女性で都内で事務系の仕事をしています！
            最近では元カレのことが気になって気になって仕方がない今日この頃
            どなたか、これからの私と元カレとのこれからの運命を占ってほしいです！
            普段は昼静かに暮らしていますが、夜になると超活発になる夜行性です！',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);

        DB::table('divinerlists')->insert([
            'name' => 'ふでばこ',
            'profileimage' => '1',
            'email' => 'aaaaa@gmail.com',
            'password' => 'bqs1wfjb',
            'performance' => '6/30代女性で都内で事務系の仕事をしています！
            最近では元カレのことが気になって気になって仕方がない今日この頃
            どなたか、これからの私と元カレとのこれからの運命を占ってほしいです！
            普段は昼静かに暮らしていますが、夜になると超活発になる夜行性です！',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);

        DB::table('divinerlists')->insert([
            'name' => '消しゴムさん',
            'profileimage' => '1',
            'email' => 'aaaaa@gmail.com',
            'password' => 'bqs1wfjb',
            'performance' => '7/30代女性で都内で事務系の仕事をしています！
            最近では元カレのことが気になって気になって仕方がない今日この頃
            どなたか、これからの私と元カレとのこれからの運命を占ってほしいです！
            普段は昼静かに暮らしていますが、夜になると超活発になる夜行性です！',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);

    }
}
