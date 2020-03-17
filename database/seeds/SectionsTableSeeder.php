<?php

use Illuminate\Database\Seeder;

class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sections')->insert([ 'title' => 'Request Lifecycle','course_id' => '1','content_type'=>'video','content'=>'https://www.youtube-nocookie.com/embed/-19hK8TF-GY']);
        DB::table('sections')->insert([ 'title' => 'Routing','course_id' => '1','content_type'=>'video','content'=>'https://www.youtube-nocookie.com/embed/-19hK8TF-GY']);
        DB::table('sections')->insert([ 'title' => 'Controllers','course_id' => '1','content_type'=>'text','content'=>'Instead of defining all of your route-level logic in a single routes.php file, you may wish to organize this behavior using Controller classes. Controllers can group related route logic into a class, as well as take advantage of more advanced framework features such as automatic dependency injection.

Controllers are typically stored in the app/controllers directory, and this directory is registered in the classmap option of your composer.json file by default. However, controllers can technically live in any directory or any sub-directory. Route declarations are not dependent on the location of the controller class file on disk. So, as long as Composer knows how to autoload the controller class, it may be placed anywhere you wish.

Here is an example of a basic controller class:

class UserController extends BaseController {

    /**
     * Show the profile for the given user.
     */
    public function showProfile($id)
    {
        $user = User::find($id);

        return View::make(\'user.profile\', array(\'user\' => $user));
    }

}

All controllers should extend the BaseController class. The BaseController is also stored in the app/controllers directory, and may be used as a place to put shared controller logic. The BaseController extends the framework\'s Controller class. Now, we can route to this controller action like so:

Route::get(\'user/{id}\', \'UserController@showProfile\');

If you choose to nest or organize your controller using PHP namespaces, simply use the fully qualified class name when defining the route:

Route::get(\'foo\', \'Namespace\FooController@method\');']);
        DB::table('sections')->insert([ 'title' => 'Advanced Section Controllers','course_id' => '1','content_type'=>'video','content'=>'https://www.youtube-nocookie.com/embed/npZYUkXFqd4']);
        DB::table('sections')->insert([ 'title' => 'Basic Database Usage','course_id' => '1','content_type'=>'video','content'=>'https://www.youtube.com/watch?v=cuLprHh_BRg']);
        DB::table('sections')->insert([ 'title' => 'Eloquent ORM','course_id' => '1','content_type'=>'video','content'=>'https://www.youtube.com/watch?v=cuLprHh_BRg']);


        DB::table('sections')->insert([ 'title' => 'Components','course_id' => '2','content_type'=>'video','content'=>'https://www.youtube.com/watch?v=cuLprHh_BRg']);
        DB::table('sections')->insert([ 'title' => 'Life Cycle Methods','course_id' => '2','content_type'=>'video','content'=>'https://www.youtube.com/watch?v=cuLprHh_BRg']);
        DB::table('sections')->insert([ 'title' => 'State Management','course_id' => '2','content_type'=>'video','content'=>'https://www.youtube.com/watch?v=cuLprHh_BRg']);
        DB::table('sections')->insert([ 'title' => 'Redux','course_id' => '2','content_type'=>'video','content'=>'https://www.youtube.com/watch?v=cuLprHh_BRg']);
        DB::table('sections')->insert([ 'title' => 'React-Router','course_id' => '2','content_type'=>'video','content'=>'https://www.youtube.com/watch?v=cuLprHh_BRg']);

    }
}
