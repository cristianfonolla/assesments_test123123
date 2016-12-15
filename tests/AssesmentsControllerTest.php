<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

/**
 * Class AssesmentsControllerTest
 */
class AssesmentsControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    use DatabaseMigrations;


    protected $repository;

    public function setUp()
    {

        $this->repository = Mockery::mock(\Scool\Assesments\Repositories\AssesmentRepository::class);

    }

    public function testIndex()
    {

        $user = factory(App\User::class)->create();
        $this->actingAs($user);
        $this->get('assesments');
        $this->assertResponseOk();
        $this->assertViewHas('studies');


        $assesments = $this->response->getOriginalContent()->getData()['studies'];



    }

    public function testStore()
    {


        $this->post('assesments');
        $this->assertRedirectedToRoute('assesments.store');


    }


}
