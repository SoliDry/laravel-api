<?php
class UserCest 
{
    public function _before(FunctionalTester $I) 
    {
    }

    public function _after(FunctionalTester $I) 
    {
    }

    // >>>methods>>>
    public function tryUserCreate(FunctionalTester $I) 
    {
        $I->amGoingTo('test User create');
        $I->sendPOST('/v3/user', '{"data":{"type":"user","attributes":{"first_name":"welch.buford","last_name":"stracke.paula","password":"emmanuelle.stiedemann","jwt":"deron.green","permissions":6}}}');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'user',
    'id' => 1,
    'attributes' => 
    array (
      'first_name' => 'welch.buford',
      'password' => 'emmanuelle.stiedemann',
      'jwt' => 'deron.green',
    ),
  ),
));
    }

    public function tryUserIndex(FunctionalTester $I) 
    {
        $I->amGoingTo('test User index');
        $I->sendGET('/v3/user');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'user',
    'id' => 1,
    'attributes' => 
    array (
      'first_name' => 'welch.buford',
      'password' => 'emmanuelle.stiedemann',
      'jwt' => 'deron.green',
    ),
  ),
));
    }

    public function tryUserView(FunctionalTester $I) 
    {
        $I->amGoingTo('test User view');
        $I->sendGET('/v3/user/1');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'user',
    'id' => 1,
    'attributes' => 
    array (
      'first_name' => 'welch.buford',
      'password' => 'emmanuelle.stiedemann',
      'jwt' => 'deron.green',
    ),
  ),
));
    }

    public function tryUserUpdate(FunctionalTester $I) 
    {
        $I->amGoingTo('test User update');
        $I->sendPATCH('/v3/user/1', '{"data":{"type":"user","attributes":{"first_name":"welch.buford","last_name":"stracke.paula","password":"emmanuelle.stiedemann","jwt":"deron.green","permissions":6}}}');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'user',
    'id' => 1,
    'attributes' => 
    array (
      'first_name' => 'welch.buford',
      'password' => 'emmanuelle.stiedemann',
      'jwt' => 'deron.green',
    ),
  ),
));
    }

    public function tryUserDelete(FunctionalTester $I) 
    {
        $I->amGoingTo('test User delete');
        $I->sendDELETE('/v3/user/1');
    }

    // <<<methods<<<
}
