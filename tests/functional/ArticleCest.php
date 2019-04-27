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
        $I->sendPOST('/v3/article', '{"data":{"type":"article","attributes":{"id":"5cb4ba352c23f","title":"sylvia.cummerata","description":"daugherty.narciso","url":"eldridge80","show_in_top":true,"status":"draft","topic_id":8,"rate":0,"date_posted":"1978-10-23","time_to_live":"21:39:46","deleted_at":"2013-01-19 23:53:36"}}}');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'article',
    'id' => '5cb4ba352c23f',
    'attributes' => 
    array (
      'title' => 'sylvia.cummerata',
      'description' => 'daugherty.narciso',
      'topic_id' => 8,
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
    'id' => '5cb4ba352c23f',
    'attributes' => 
    array (
      'title' => 'sylvia.cummerata',
      'description' => 'daugherty.narciso',
      'topic_id' => 8,
    ),
  ),
));
    }

    public function tryArticleView(FunctionalTester $I) 
    {
        $I->amGoingTo('test Article view');
        $I->sendGET('/v3/article/5cb4ba352c23f');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'article',
    'id' => '5cb4ba352c23f',
    'attributes' => 
    array (
      'title' => 'sylvia.cummerata',
      'description' => 'daugherty.narciso',
      'topic_id' => 8,
    ),
  ),
));
    }

    public function tryArticleUpdate(FunctionalTester $I) 
    {
        $I->amGoingTo('test Article update');
        $I->sendPATCH('/v3/article/5cb4ba352c23f', '{"data":{"type":"article","attributes":{"id":"5cb4ba352c23f","title":"sylvia.cummerata","description":"daugherty.narciso","url":"eldridge80","show_in_top":true,"status":"draft","topic_id":8,"rate":0,"date_posted":"1978-10-23","time_to_live":"21:39:46","deleted_at":"2013-01-19 23:53:36"}}}');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'article',
    'id' => '5cb4ba352c23f',
    'attributes' => 
    array (
      'title' => 'sylvia.cummerata',
      'description' => 'daugherty.narciso',
      'topic_id' => 8,
    ),
  ),
));
    }

    public function tryArticleDelete(FunctionalTester $I) 
    {
        $I->amGoingTo('test Article delete');
        $I->sendDELETE('/v3/article/5cb4ba352c23f');
    }

    // <<<methods<<<
}
