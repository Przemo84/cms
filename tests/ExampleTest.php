<?php
//
//use App\Api\Http\Transformers\ArticleTransformer;
//use Faker\Factory;
//use Illuminate\Foundation\Testing\WithoutMiddleware;
//use Illuminate\Foundation\Testing\DatabaseMigrations;
//use Illuminate\Foundation\Testing\DatabaseTransactions;
//use Mockery\Adapter\Phpunit;
//
//class ExampleTest extends TestCase
//{
//
////    use DatabaseTransactions;
//
//    public function setUp()
//    {
//        parent::setUp();
//
//        $faker = Factory::create();
//
//        $this->article = new \App\Article([
//            'title' => $faker->firstNameMale,
//            'content' => $faker->streetAddress
//        ]);
//
//    }
//
//    public function tearDown()
//    {
//        parent::tearDown();
//        Mockery::close();
//    }
//
//    public function testArticleTransformer()
//    {
//        //given
//
//        $article = new \App\Article([
//            'title' => $this->article->title,
//            'content' => $this->article->content
//        ]);
//
//        $articleTransformer = new ArticleTransformer();
//
//        // when
//        $articleTransformation = $articleTransformer->transform($article);
//
//        //then
//        $this->assertEquals([
//            'title' => $this->article->title,
//            'content' => $this->article->content
//        ],
//            $articleTransformation);
//
//        $this->assertArrayHasKey('title', $articleTransformation );
//
//    }
//
//
//
//
////    /**
////     * A basic functional test example.
////     *
////     * @return void
////     */
////    public function testBasicExample()
////    {
////        $this->visit('/')
////            ->see('Your Application\'s Landing Page.');
////    }
////
////    // WEB TESTS
////
////    public function testVisitPage()
////    {
////        $this->visit('articles')
////            ->see('List of articles');
////    }
////
////    public function testEditPage()
////    {
////        $this->visit('articles')
////            ->click('EDIT')
////            ->seePageIs('articles/edit/1');
////    }
////
////
////    /* Metoda służąca jako "dostawca" danych testowych - DataProvider z której korzystają poniższe metody(dot.Articles) */
////    public function articleDataProvider()
////    {
////        $faker = Factory::create();
////        return [
////            [
////                $faker->state,
////                $faker->city,
////            ]
////        ];
////    }
////
////    /* Metoda służąca jako "dostawca" danych testowych - DataProvider z której korzystają poniższe metody (dot.Komentarzy)*/
////    public function commentDataProvider()
////    {
////        $faker = Factory::create();
////
////        return [
////            [
////                $faker->firstNameMale,
////                $faker->sentence(7),
////            ]
////        ];
////    }
////
////    /**
////     * @dataProvider articleDataProvider
////     */
////    public function testFillingArticleForm($title, $content)  // pobiera w kolejności wartości zwracane przez articleDataProvider()
////    {
////        $this->visit('create')
////            ->type($title, "title")
////            ->type($content, "content")
////            ->press('Save')
////            ->seePageIs('articles');
////    }
////
////
////    /**
////     * @dataProvider articleDataProvider
////     */
////    public function testFillingUpdateArticleForm($title, $content)
////    {
////        $this->visit('articles/edit/1')
////            ->type($title, "title")
////            ->type($content, "content")
////            ->press('Save')
////            ->seePageIs('articles');
////    }
////
////
////    public function testFillingCommentForm() // pobiera w kolejności wartości zwracane przez commentDataProvider()
////    {
////        $this->visit('articles/1')
////            ->type("Autor komentarza", 'username')
////            ->type("Komentarz z dupy", 'comment')
////            ->press("Comment!")
////            ->seePageIs('articles/1');
////    }
////
////    public function testFilter()
////    {
////        $this->visit('articles')
////            ->type('ad', 'filter')
////            ->press('Filter')
////            ->seePageIs('articles?filter=ad');
////    }
////
////
////    //DATABASE TESTS
////
////    /**
////     * @dataProvider articleDataProvider
////     */
////    public function testCreatingNewArticle($title, $content)
////    {
////        $this->visit('create')
////            ->type($title, "title")
////            ->type("$content", "content")
////            ->press('Save')
////            ->seeInDatabase('articles', [
////                'title' => $title,
////                'content' => $content
////            ]);
////    }
////
////    /* Można też bezpośrednio wpisć dane testowe, ale dzięki DataProvider jest rozdzielone*/
//////    public function testCreatingNewArticle()
//////    {
//////        $this->visit('create')
//////            ->type("ZZZ", "title")
//////            ->type("XXX", "content")
//////            ->press('Save')
//////            ->seeInDatabase('articles', [
//////                'title' => 'ZZZ',
//////                'content' => 'XXX',
//////            ]);
//////    }
////
////
////    /**
////     * @dataProvider commentDataProvider
////     */
////    public function testCreatingNewComment($username, $comment)
////    {
////        $this->visit('articles/1')
////            ->type($username, "username")
////            ->type($comment, "comment")
////            ->press('Comment!')
////            ->seeInDatabase('commentaries', [
////                'username' => $username,
////                'comment' => $comment
////            ]);
////    }
////
////
////    //API
////
////    public function testHasJsonResponse()
////    {
////        $this->get('/api/articles/1')
////            ->seeJsonStructure([
////                '*' => [
////                    'title',
////                    'content'
////                ]
////            ]);
////    }
//
//
////    public function testAAA()
////    {
////        // Given
////
////        $article = new \App\Article([
////            'title' => "tata",
////            'content' => "mama"
////        ]);
////
////        //When
////        $this->$article->create();
////
////
////    }
//
//    // spróbować napisać test wg wzorca
//    // Given
//    // When
//    // Then
//
//}
