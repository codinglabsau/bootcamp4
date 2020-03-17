<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('courses')->insert([ 'name' => 'Complete Laravel Course','price' => '250','tools'=>'Laravel,Vue,Tailwind CSS,Eloquent','imageUrl' => 'https://heera.it/wp-content/uploads/2014/02/laravel-1920x1080.jpg','description'=>'PHP developers have a choice: they can design their own architecture or they can use a framework. Frameworks speed up development, enhance collaboration, and help keep code organized. In this course, Drew Falkman introduces the six most popular Model-View-Controller frameworks: Zend, Symfony, CodeIgniter, CakePHP, Yii, and Laravel.']);
        DB::table('courses')->insert([ 'name' => 'Complete React Course','price' => '350','tools'=>'HTML, CSS, Javascript, React, Node.js, Machine Learning','imageUrl' => 'https://bs-uploads.toptal.io/blackfish-uploads/blog/post/seo/og_image_file/og_image/16097/react-context-api-4929b3703a1a7082d99b53eb1bbfc31f.png','description'=>'This course allows you to get up and running with React']);
    }
}
