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
        $I->sendPOST('/v3/tag', '{"data":{"type":"tag","attributes":{"title":"candace.lemke"}}}');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'tag',
    'id' => 1,
    'attributes' => 
    array (
      'title' => 'candace.lemke',
    ),
  ),
));
    }

    public function tryTagIndex(FunctionalTester $I) 
    {
        $I->amGoingTo('test Tag index');
        $I->sendGET('/v3/tag');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'tag',
    'id' => 1,
    'attributes' => 
    array (
      'title' => 'candace.lemke',
    ),
  ),
));
    }

    public function tryTagView(FunctionalTester $I) 
    {
        $I->amGoingTo('test Tag view');
        $I->sendGET('/v3/tag/1');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'tag',
    'id' => 1,
    'attributes' => 
    array (
      'title' => 'candace.lemke',
    ),
  ),
));
    }

    public function tryTagUpdate(FunctionalTester $I) 
    {
        $I->amGoingTo('test Tag update');
        $I->sendPATCH('/v3/tag/1', '{"data":{"type":"tag","attributes":{"title":"candace.lemke"}}}');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'tag',
    'id' => 1,
    'attributes' => 
    array (
      'title' => 'candace.lemke',
    ),
  ),
));
    }

    public function tryTagDelete(FunctionalTester $I) 
    {
        $I->amGoingTo('test Tag delete');
        $I->sendDELETE('/v3/tag/1');
    }

    // <<<methods<<<
}
