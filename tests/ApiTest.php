<?php

use App\Api\Http\Controllers\ArticlesController;
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

    public function tearDown()
    {
        parent::tearDown();
        Mockery::close();
    }

    public function testControllerDeleteAction()
    {
        //GIVEN
        $id = 1;

        $articleModel = new \App\Article();

        $articleRepo = Mockery::mock('App\Repositories\ArticleRepository');
        $articleRepo->shouldReceive('delete')
            ->shouldReceive('show')
            ->andReturn($articleModel);

        $articleController = new ArticlesController();
        //WHEN
        $result = $articleController->deleteAction($articleRepo, $id);

        $body = $result->getContent();
        //THEN
        $this->assertEquals(null,  $body);
    }


    public function testArticlesControllerCreateAction()
    {
        //GIVEN
        $articleChangeRequest = new App\Http\Requests\ArticleChangeRequest(
            [
                'title' => "abcde",
                'content' => "xyzzz"
            ]
        );
        $articleModel = new \App\Article();

        $articleRepo = Mockery::mock('App\Repositories\ArticleRepository[model]', [$articleModel]);
        $articleRepo->shouldReceive('create')->andReturn($articleModel);

        $articlesController = new ArticlesController();
        //WHEN
        $result = $articlesController->createAction($articleRepo, $articleChangeRequest);
        //THEN
        $this->assertEquals(201,$result->getStatusCode() );
    }


    public function testArticlesContollerIndexAction()
    {
        //GIVEN

        $paginator = new \Illuminate\Pagination\LengthAwarePaginator(
            [
                new \App\Article(['title' => 'asdasd', 'content' => 'asdadas']),
                new \App\Article(['title' => 'asdasd', 'content' => 'asdadas']),
                new \App\Article(['title' => 'asdasd', 'content' => 'asdadas']),
            ],
            2, 10
        );

        $articleModel = Mockery::mock('App\Article');
        $articleModel->shouldReceive('paginate')
            ->andReturn($paginator);

        $articleRepo = Mockery::mock('App\Repositories\ArticleRepository[model]', [$articleModel]);
        $articleRepo->shouldReceive('list')
            ->andReturn($paginator);


        $articlesController = new ArticlesController();

        //WHEN
        /** @var \Illuminate\Http\Response $result */
        $result = $articlesController->indexAction($articleRepo);

        $body = $result->getContent();

        //THEN

        $this->assertJson($body);
        $this->assertContains('asdasd', $body);
        $this->assertEquals(200,$result->getStatusCode() );
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
