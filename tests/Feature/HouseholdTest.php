<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Family;

class HouseholdTest extends TestCase
{

use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */

    /** @test */
    Public function SingleParent()
    {

        // $this->withoutExceptionHandling();

        $response = $this->post('/soloparent',[

            'city' => 'Quezon City',
            'brgy' => 'old balara',
            'street' => 'kanto',
            'house_number' => '21',
            'family_name' => 'de leon',
            'gender_head_family' => 'm',
            'bod_head_family' => 'july 24,1999',
            'head_family' => 'david',
            'first_child' => 'lizada',
            // 'spouse' => '',
            // 'gender_spouse' => '',
            // 'bod_spouse' => '',
            'gender_first_child' => 'f',
            'bod_first_child' => 'june 29,2000', ]);



        $family = Family::where([

            'city' => 'Quezon City',
            'brgy' => 'old balara',
            'street' => 'kanto',
            'house_number' => '21',
            'family_name' => 'de leon',
            'gender_head_family' => 'm',
            'bod_head_family' => 'july 24,1999',
            'head_family' => 'david',
            'first_child' => 'lizada',
            'gender_first_child' => 'f',
            // 'spouse' => '',
            // 'gender_spouse' => '',
            // 'bod_spouse' => '',
            'bod_first_child' => 'june 29,2000', ])->get(); 

            
        $this->AssertEquals(1, $family->count());
        
    }







}
