<?php

namespace Tests\Feature;

use App\Family;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HouseholdWholeFamilyTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function family_has_one_child()
    {
        $this->withoutExceptionHandling();
        $response = $this->post(route('household.store'), [
            'city' => 'Quezon City',
            'brgy' => 'old balara',
            'street' => 'kanto',
            'house_number' => 21,
            'family_name' => 'de leon',
            'gender_head_family' => 'm',
            'bod_head_family' => 'july 24,1999',
            'head_family' => 'david',
            'spouse' => 'liza',
            'gender_spouse' => 'f',
            'bod_spouse' => 'july 29,2000',
            'first_child' => 'lizada',
            'gender_first_child' => 'f',
            'bod_first_child' => 'june 29,2000',
        ]);

        $family = Family::where(
            [
                'city' => 'Quezon City',
                'brgy' => 'old balara',
                'street' => 'kanto',
                'house_number' => 21,
                'family_name' => 'de leon',
                'gender_head_family' => 'm',
                'bod_head_family' => 'july 24,1999',
                'head_family' => 'david',
                'spouse' => 'liza',
                'gender_spouse' => 'f',
                'bod_spouse' => 'july 29,2000',
                'first_child' => 'lizada',
                'gender_first_child' => 'f',
                'bod_first_child' => 'june 29,2000',
            ]
        )->get();

        $this->assertEquals(1, $family->count());
    }

    /** @test */
    public function family_required_a_child()
    {
        $response = $this->post(route('household.store'), [
            'city' => 'Quezon City',
            'brgy' => 'old balara',
            'street' => 'kanto',
            'house_number' => 21,
            'family_name' => 'de leon',
            'gender_head_family' => 'm',
            'bod_head_family' => 'july 24,1999',
            'head_family' => 'david',
            'spouse' => 'liza',
            'gender_spouse' => 'f',
            'bod_spouse' => 'july 29,2000',
        ]);

        $family = Family::where(
            [
                'city' => 'Quezon City',
                'brgy' => 'old balara',
                'street' => 'kanto',
                'house_number' => 21,
                'family_name' => 'de leon',
                'gender_head_family' => 'm',
                'bod_head_family' => 'july 24,1999',
                'head_family' => 'david',
                'spouse' => 'liza',
                'gender_spouse' => 'f',
                'bod_spouse' => 'july 29,2000',
            ]
        )->get();

        $response->assertSessionHasErrors();
    }
}
