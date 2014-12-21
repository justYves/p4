<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

#Final Route

Route::resource('item', 'ItemController');


Route::get('/', 'ListController@getIndex');
Route::get('/signup', 'UserController@getSignup');
Route::post('/signup', 'UserController@postSignup');
Route::post('/login', 'UserController@postLogin');
Route::get('/login', 'UserController@getLogin');
Route::get('/logout', 'UserController@getLogout');



# Practice debug route
Route::get('/debug', function() {

    echo '<pre>';

    echo '<h1>environment.php</h1>';
    $path   = base_path().'/environment.php';

    try {
        $contents = 'Contents: '.File::getRequire($path);
        $exists = 'Yes';
    }
    catch (Exception $e) {
        $exists = 'No. Defaulting to `production`';
        $contents = '';
    }

    echo "Checking for: ".$path.'<br>';
    echo 'Exists: '.$exists.'<br>';
    echo $contents;
    echo '<br>';

    echo '<h1>Environment</h1>';
    echo App::environment().'</h1>';

    echo '<h1>Debugging?</h1>';
    if(Config::get('app.debug')) echo "Yes"; else echo "No";

    echo '<h1>Database Config</h1>';
    print_r(Config::get('database.connections.mysql'));

    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    } 
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }

    echo '</pre>';

});


Route::get('/testconnection', 
    array(
        'before' => 'auth', 
        function() {
            echo 'Congratz !';
        }
    )
);

Route::get('/test', function(){

    $list = PantryList::where('user_id','=',Auth::id())->first();

    echo $list.'<br>'; 
    echo $list->id.'<br>'; 
    // $items = ListContent::Where('pantry_list_id','=',1);
    $items = ListContent::Where('pantry_list_id','=',$list->id)->get();
//$list->id
    foreach ($items as $item) {
         echo $item->item_id.'<br>';
    }

    $itemCount = Item::where('default','=',TRUE)->count();
    echo $itemCount;



});