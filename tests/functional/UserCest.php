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
        $I->sendPOST('/v1/user', '{"data":{"type":"user","attributes":{"first_name":"vaughn77","last_name":"camille66","password":"yanderson","jwt":"sabina.schaefer","permissions":0}}}');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'user',
    'id' => 1,
    'attributes' => 
    array (
      'first_name' => 'vaughn77',
      'password' => 'yanderson',
      'jwt' => 'sabina.schaefer',
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
      'first_name' => 'vaughn77',
      'password' => 'yanderson',
      'jwt' => 'sabina.schaefer',
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
      'first_name' => 'vaughn77',
      'password' => 'yanderson',
      'jwt' => 'sabina.schaefer',
    ),
  ),
));
    }

    public function tryUserUpdate(FunctionalTester $I) 
    {
        $I->amGoingTo('test User update');
        $I->sendPATCH('/v1/user/1', '{"data":{"type":"user","attributes":{"first_name":"vaughn77","last_name":"camille66","password":"yanderson","jwt":"sabina.schaefer","permissions":0}}}');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'user',
    'id' => 1,
    'attributes' => 
    array (
      'first_name' => 'vaughn77',
      'password' => 'yanderson',
      'jwt' => 'sabina.schaefer',
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
