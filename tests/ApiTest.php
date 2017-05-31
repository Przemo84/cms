<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Mockery\Adapter\Phpunit\MockeryTestCase;

class ApiTest extends TestCase
{

//    public function setUp()
//    {
//        parent::setUp();
//    }

//    public function tearDown()
//    {
//        parent::tearDown();
//        Mockery::close();
//    }


    public function testMockery()
    {
        $paginator = Mockery::mock('Illuminate\Pagination\LengthAwarePaginator')
            ->shouldReceive()

        $articleRepo = Mockery::mock('App\Repositories\ArticleRepository');
        $articleRepo->shouldReceive('xxx')->andReturn($paginator);

        dump($articleRepo->xxx());

    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }



}
