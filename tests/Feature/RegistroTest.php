<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegistroTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_should_show_register_form()
    {
        $response = $this->get('/register');

        $response->assertStatus(200)
        ->assertSeeText('Register');
    }

    public function test_shouldnt_register_user_when_invalid_data()
    {
        $response = $this->post('/register');

        $response->assertRedirect()
        ->assertInvalid(['name','email','password']);
    }
    public function test_shouldnt_register_user_when_valid_data()
    {
      $response = $this->post('/register',[
      'name' =>'Lincon',
      'email' =>'lincon@gmail.com',
      'cpf'=>'11371573999',
      'phone'=>'42984345911',
      'address'=>'Rua Teste',
      'password' =>'lincon1234',
      'cnpj'=>'1111222233334444',
      'type'=>'employee',
      'trading_name'=>'Lanchonete 1+1',
      'company_name'=>'Lanchonete LTDA.',
      'address'=>'Rua Teste',
      'phone'=>'11112221243'

    ]);
    $response->assertRedirect()
    ->assertSessionHasNoErrors();

    $this->assertDatabaseHas('users',['email'=>'lincon@gmail.com']);

    $this->assertDatabaseHas('establishments',['cnpj'=>'1111222233334444']);
  }
}
