<?php

namespace Tests\Feature;

use Mail;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;
    
    public function test_a_user_has_a_default_username_after_registration()
    {
        Mail::fake();

        $this->withoutExceptionHandling();

        $this->post('/register', [
            'name' => 'ausy muvavi',
            'email' => 'amuvavi@gmail.com',
            'Date of birth' => '26 Dec 2001',
            'password' => 'secret'
        ])->assertRedirect();

        $this->assertDatabaseHas('users', [
            'name' => 'ausy muvavi'
        ]);
    }

    
}
