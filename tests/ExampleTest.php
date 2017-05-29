<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{

    use DatabaseTransactions;

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('/')
            ->see('Your Application\'s Landing Page.');
    }

    // WEB test
    // article and comment form tests
    public function testFillingArticleForm()
    {
        $this->visit('create')
            ->type("Uaaaaa aaa", "title")
            ->type("Kotki dwa", "content")
            ->press('Save')
            ->seePageIs('articles');
    }

    public function testFillingUpdateArticleForm()
    {
        $this->visit('articles/edit/6')
            ->type("Uaaaaa aaa", "title")
            ->type("Kotki dwa", "content")
            ->press('Save')
            ->seePageIs('articles');
    }

    public function testFillingCommentForm()
    {
        $this->visit('articles/2')
            ->type("Autor komentarza", 'username')
            ->type("Komentarz z dupy", 'comment')
            ->press("Comment!")
            ->seePageIs('articles/2');
    }


    public function testFilter()
    {
        $this->visit('articles')
            ->type('ad', 'filter')
            ->press('Filter')
            ->seePageIs('articles?filter=ad');
    }

    //database tests

    public function testIfDataExistInDB()
    {
        $this->seeInDatabase('articles', ['title' => 'POLSKA']);
    }

    // zrobić testy wg wzorca

    // Given

    // When

    // Then

}
