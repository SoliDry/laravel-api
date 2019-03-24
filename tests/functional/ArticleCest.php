<?php
class ArticleCest 
{
    public function _before(FunctionalTester $I) 
    {
    }

    public function _after(FunctionalTester $I) 
    {
    }

    // >>>methods>>>
    public function tryArticleCreate(FunctionalTester $I) 
    {
        $I->amGoingTo('test Article create');
        $I->sendPOST('/v3/article', '{"data":{"type":"article","attributes":{"id":"5c977559aa461","title":"gislason.mollie","description":"gerard24","url":"lhill","show_in_top":true,"status":"draft","topic_id":9,"rate":8,"date_posted":"2013-02-25","time_to_live":"19:50:27","deleted_at":"1992-02-08 14:46:26"}}}');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'article',
    'id' => '5c977559aa461',
    'attributes' => 
    array (
      'title' => 'gislason.mollie',
      'description' => 'gerard24',
      'topic_id' => 9,
    ),
  ),
));
    }

    public function tryArticleIndex(FunctionalTester $I) 
    {
        $I->amGoingTo('test Article index');
        $I->sendGET('/v3/article');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'article',
    'id' => '5c977559aa461',
    'attributes' => 
    array (
      'title' => 'gislason.mollie',
      'description' => 'gerard24',
      'topic_id' => 9,
    ),
  ),
));
    }

    public function tryArticleView(FunctionalTester $I) 
    {
        $I->amGoingTo('test Article view');
        $I->sendGET('/v3/article/5c977559aa461');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'article',
    'id' => '5c977559aa461',
    'attributes' => 
    array (
      'title' => 'gislason.mollie',
      'description' => 'gerard24',
      'topic_id' => 9,
    ),
  ),
));
    }

    public function tryArticleUpdate(FunctionalTester $I) 
    {
        $I->amGoingTo('test Article update');
        $I->sendPATCH('/v3/article/5c977559aa461', '{"data":{"type":"article","attributes":{"id":"5c977559aa461","title":"gislason.mollie","description":"gerard24","url":"lhill","show_in_top":true,"status":"draft","topic_id":9,"rate":8,"date_posted":"2013-02-25","time_to_live":"19:50:27","deleted_at":"1992-02-08 14:46:26"}}}');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'article',
    'id' => '5c977559aa461',
    'attributes' => 
    array (
      'title' => 'gislason.mollie',
      'description' => 'gerard24',
      'topic_id' => 9,
    ),
  ),
));
    }

    public function tryArticleDelete(FunctionalTester $I) 
    {
        $I->amGoingTo('test Article delete');
        $I->sendDELETE('/v3/article/5c977559aa461');
    }

    // <<<methods<<<
}
