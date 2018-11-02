<?php
class TagCest 
{
    public function _before(FunctionalTester $I) 
    {
    }

    public function _after(FunctionalTester $I) 
    {
    }

    // >>>methods>>>
    public function tryTagCreate(FunctionalTester $I) 
    {
        $I->amGoingTo('test Tag create');
        $I->sendPOST('/v1/tag', '{"data":{"type":"tag","attributes":{"title":"jboyle"}}}');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'tag',
    'id' => 1,
    'attributes' => 
    array (
      'title' => 'jboyle',
    ),
  ),
));
    }

    public function tryTagIndex(FunctionalTester $I) 
    {
        $I->amGoingTo('test Tag index');
        $I->sendGET('/v1/tag');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'tag',
    'id' => 1,
    'attributes' => 
    array (
      'title' => 'jboyle',
    ),
  ),
));
    }

    public function tryTagView(FunctionalTester $I) 
    {
        $I->amGoingTo('test Tag view');
        $I->sendGET('/v1/tag/1');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'tag',
    'id' => 1,
    'attributes' => 
    array (
      'title' => 'jboyle',
    ),
  ),
));
    }

    public function tryTagUpdate(FunctionalTester $I) 
    {
        $I->amGoingTo('test Tag update');
        $I->sendPATCH('/v1/tag/1', '{"data":{"type":"tag","attributes":{"title":"jboyle"}}}');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'tag',
    'id' => 1,
    'attributes' => 
    array (
      'title' => 'jboyle',
    ),
  ),
));
    }

    public function tryTagDelete(FunctionalTester $I) 
    {
        $I->amGoingTo('test Tag delete');
        $I->sendDELETE('/v1/tag/1');
    }

    // <<<methods<<<
}
