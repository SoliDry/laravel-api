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
        $I->sendPOST('/v1/user', '{"data":{"type":"user","attributes":{"first_name":"ezequiel.ledner","last_name":"mschowalter","password":"manuela55","jwt":"clark.farrell","permissions":9}}}');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'user',
    'id' => 1,
    'attributes' => 
    array (
      'first_name' => 'ezequiel.ledner',
      'password' => 'manuela55',
      'jwt' => 'clark.farrell',
    ),
  ),
));
    }

    public function tryUserIndex(FunctionalTester $I) 
    {
        $I->amGoingTo('test User index');
        $I->sendGET('/v1/user');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'user',
    'id' => 1,
    'attributes' => 
    array (
      'first_name' => 'ezequiel.ledner',
      'password' => 'manuela55',
      'jwt' => 'clark.farrell',
    ),
  ),
));
    }

    public function tryUserView(FunctionalTester $I) 
    {
        $I->amGoingTo('test User view');
        $I->sendGET('/v1/user/1');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'user',
    'id' => 1,
    'attributes' => 
    array (
      'first_name' => 'ezequiel.ledner',
      'password' => 'manuela55',
      'jwt' => 'clark.farrell',
    ),
  ),
));
    }

    public function tryUserUpdate(FunctionalTester $I) 
    {
        $I->amGoingTo('test User update');
        $I->sendPATCH('/v1/user/1', '{"data":{"type":"user","attributes":{"first_name":"ezequiel.ledner","last_name":"mschowalter","password":"manuela55","jwt":"clark.farrell","permissions":9}}}');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'user',
    'id' => 1,
    'attributes' => 
    array (
      'first_name' => 'ezequiel.ledner',
      'password' => 'manuela55',
      'jwt' => 'clark.farrell',
    ),
  ),
));
    }

    public function tryUserDelete(FunctionalTester $I) 
    {
        $I->amGoingTo('test User delete');
        $I->sendDELETE('/v1/user/1');
    }

    // <<<methods<<<
}
