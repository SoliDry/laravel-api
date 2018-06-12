<?php


use tests\fixtures\ArticleFixture;

class ArticleCest
{
    public function _before(FunctionalTester $I)
    {
        ArticleFixture::createArticle();
    }

    public function _after(FunctionalTester $I)
    {
    }

    // tests
    public function tryToTest(FunctionalTester $I)
    {
        $I->amGoingTo('test Article');
        $I->sendGET('/v1/article?include=tag');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson([
            'data' => []
        ]);
    }
}
