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
        $I->sendPOST('/v1/article', '{"data":{"type":"article","attributes":{"title":"faustino.kling","description":"rdavis","url":"damon.bogisich","show_in_top":false,"status":"draft","topic_id":5,"rate":9,"date_posted":"1994-06-21","time_to_live":"20:46:42","deleted_at":"1974-10-10 12:26:33"}}}');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'article',
    'id' => 1,
    'attributes' => 
    array (
      'title' => 'faustino.kling',
      'description' => 'rdavis',
      'topic_id' => 5,
    ),
  ),
));
    }

    public function tryArticleIndex(FunctionalTester $I) 
    {
        $I->amGoingTo('test Article index');
        $I->sendGET('/v1/article');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'article',
    'id' => 1,
    'attributes' => 
    array (
      'title' => 'faustino.kling',
      'description' => 'rdavis',
      'topic_id' => 5,
    ),
  ),
));
    }

    public function tryArticleView(FunctionalTester $I) 
    {
        $I->amGoingTo('test Article view');
        $I->sendGET('/v1/article/1');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'article',
    'id' => 1,
    'attributes' => 
    array (
      'title' => 'faustino.kling',
      'description' => 'rdavis',
      'topic_id' => 5,
    ),
  ),
));
    }

    public function tryArticleUpdate(FunctionalTester $I) 
    {
        $I->amGoingTo('test Article update');
        $I->sendPATCH('/v1/article/1', '{"data":{"type":"article","attributes":{"title":"faustino.kling","description":"rdavis","url":"damon.bogisich","show_in_top":false,"status":"draft","topic_id":5,"rate":9,"date_posted":"1994-06-21","time_to_live":"20:46:42","deleted_at":"1974-10-10 12:26:33"}}}');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'article',
    'id' => 1,
    'attributes' => 
    array (
      'title' => 'faustino.kling',
      'description' => 'rdavis',
      'topic_id' => 5,
    ),
  ),
));
    }

    public function tryArticleDelete(FunctionalTester $I) 
    {
        $I->amGoingTo('test Article delete');
        $I->sendDELETE('/v1/article/1');
    }

    // <<<methods<<<
}
