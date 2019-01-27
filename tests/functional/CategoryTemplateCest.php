<?php
class CategoryTemplateCest 
{
    public function _before(FunctionalTester $I) 
    {
    }

    public function _after(FunctionalTester $I) 
    {
    }

    // >>>methods>>>
    public function tryCategory_templateCreate(FunctionalTester $I) 
    {
        $I->amGoingTo('test Category_template create');
        $I->sendPOST('/v1/category_template', '{"data":{"type":"category_template","attributes":{"title":"ybradtke","description":"willms.marcelo"}}}');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'category_template',
    'id' => 1,
    'attributes' => 
    array (
      'title' => 'ybradtke',
      'description' => 'willms.marcelo',
    ),
  ),
));
    }

    public function tryCategory_templateIndex(FunctionalTester $I) 
    {
        $I->amGoingTo('test Category_template index');
        $I->sendGET('/v1/category_template');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'category_template',
    'id' => 1,
    'attributes' => 
    array (
      'title' => 'ybradtke',
      'description' => 'willms.marcelo',
    ),
  ),
));
    }

    public function tryCategory_templateView(FunctionalTester $I) 
    {
        $I->amGoingTo('test Category_template view');
        $I->sendGET('/v1/category_template/1');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'category_template',
    'id' => 1,
    'attributes' => 
    array (
      'title' => 'ybradtke',
      'description' => 'willms.marcelo',
    ),
  ),
));
    }

    public function tryCategory_templateUpdate(FunctionalTester $I) 
    {
        $I->amGoingTo('test Category_template update');
        $I->sendPATCH('/v1/category_template/1', '{"data":{"type":"category_template","attributes":{"title":"ybradtke","description":"willms.marcelo"}}}');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'category_template',
    'id' => 1,
    'attributes' => 
    array (
      'title' => 'ybradtke',
      'description' => 'willms.marcelo',
    ),
  ),
));
    }

    public function tryCategory_templateDelete(FunctionalTester $I) 
    {
        $I->amGoingTo('test Category_template delete');
        $I->sendDELETE('/v1/category_template/1');
    }

    // <<<methods<<<
}
