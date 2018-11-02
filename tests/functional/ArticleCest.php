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
        $I->sendPOST('/v1/article', '{"data":{"type":"article","attributes":{"id":"5b783de82be3e","title":"towne.collin","description":"oliver.shields","url":"herzog.madie","show_in_top":false,"status":"draft","topic_id":9,"rate":4,"date_posted":"2006-10-08","time_to_live":"15:08:16","deleted_at":"2004-04-17 05:44:04"}}}');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'article',
    'id' => '5b783de82be3e',
    'attributes' => 
    array (
      'title' => 'towne.collin',
      'description' => 'oliver.shields',
      'topic_id' => 9,
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
    'id' => '5b783de82be3e',
    'attributes' => 
    array (
      'title' => 'towne.collin',
      'description' => 'oliver.shields',
      'topic_id' => 9,
    ),
  ),
));
    }

    public function tryArticleView(FunctionalTester $I) 
    {
        $I->amGoingTo('test Article view');
        $I->sendGET('/v1/article/5b783de82be3e');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'article',
    'id' => '5b783de82be3e',
    'attributes' => 
    array (
      'title' => 'towne.collin',
      'description' => 'oliver.shields',
      'topic_id' => 9,
    ),
  ),
));
    }

    public function tryArticleUpdate(FunctionalTester $I) 
    {
        $I->amGoingTo('test Article update');
        $I->sendPATCH('/v1/article/5b783de82be3e', '{"data":{"type":"article","attributes":{"id":"5b783de82be3e","title":"towne.collin","description":"oliver.shields","url":"herzog.madie","show_in_top":false,"status":"draft","topic_id":9,"rate":4,"date_posted":"2006-10-08","time_to_live":"15:08:16","deleted_at":"2004-04-17 05:44:04"}}}');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'article',
    'id' => '5b783de82be3e',
    'attributes' => 
    array (
      'title' => 'towne.collin',
      'description' => 'oliver.shields',
      'topic_id' => 9,
    ),
  ),
));
    }

    public function tryArticleDelete(FunctionalTester $I) 
    {
        $I->amGoingTo('test Article delete');
        $I->sendDELETE('/v1/article/5b783de82be3e');
    }

    // <<<methods<<<
}
