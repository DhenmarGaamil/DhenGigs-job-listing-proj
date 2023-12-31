<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      //  \App\Models\User::factory(5)->create();

      $user = User::factory()->create([
             'name' =>'John Doe',
             'email' => 'john@gmail.com'
      ]);

           Listing::factory(6)->create([
            'user_id'=> $user->id
           ]);

          // Listing::create([
          //  'title' => 'Laravel Senior Developer', 
          //  'tags' => 'laravel, javascript',
          //  'company' => 'Acme Corp',
           // 'location' => 'Boston, MA',
          //  'email' => 'email1@email.com',
        //    'website' => 'https://www.acme.com',
          //  'description' => 'The company itself is a very successful company. He will criticize the very least and that which we can have the pleasure of rejecting when it is convenient, something will happen that he seeks to achieve! Expedite from the pursuit is held to be lenient?'
     //   ]);
       // Listing::create([
        //    'title' => 'Full-Stack Engineer',
        //    'tags' => 'laravel, backend ,api',
        //    'company' => 'Stark Industries',
        //    'location' => 'New York, NY',
         //   'email' => 'email2@email.com',
          //  'website' => 'https://www.starkindustries.com',
           // 'description' => 'LThe company itself is a very successful company. He will criticize the very least and that which we can have the pleasure of rejecting when it is convenient, something will happen that he seeks to achieve! Expedite from the pursuit is held to be lenient?'
         // ]);


           



        
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
