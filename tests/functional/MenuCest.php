<?php
class MenuCest 
{
    public function _before(FunctionalTester $I) 
    {
    }

    public function _after(FunctionalTester $I) 
    {
    }

    // >>>methods>>>
    public function tryMenuCreate(FunctionalTester $I) 
    {
        $I->amGoingTo('test Menu create');
        $I->sendPOST('/v1/menu', '{"data":{"type":"menu","attributes":{"title":"newton71","rfc":"gilbert.rogahn","parent_id":2}}}');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'menu',
    'id' => 1,
    'attributes' => 
    array (
      'title' => 'newton71',
    ),
  ),
));
    }

    public function tryMenuIndex(FunctionalTester $I) 
    {
        $I->amGoingTo('test Menu index');
        $I->sendGET('/v1/menu');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'menu',
    'id' => 1,
    'attributes' => 
    array (
      'title' => 'newton71',
    ),
  ),
));
    }

    public function tryMenuView(FunctionalTester $I) 
    {
        $I->amGoingTo('test Menu view');
        $I->sendGET('/v1/menu/1');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'menu',
    'id' => 1,
    'attributes' => 
    array (
      'title' => 'newton71',
    ),
  ),
));
    }

    public function tryMenuUpdate(FunctionalTester $I) 
    {
        $I->amGoingTo('test Menu update');
        $I->sendPATCH('/v1/menu/1', '{"data":{"type":"menu","attributes":{"title":"newton71","rfc":"gilbert.rogahn","parent_id":2}}}');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'menu',
    'id' => 1,
    'attributes' => 
    array (
      'title' => 'newton71',
    ),
  ),
));
    }

    public function tryMenuDelete(FunctionalTester $I) 
    {
        $I->amGoingTo('test Menu delete');
        $I->sendDELETE('/v1/menu/1');
    }

    // <<<methods<<<
}
