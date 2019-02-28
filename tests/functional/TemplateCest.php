<?php
class TemplateCest 
{
    public function _before(FunctionalTester $I) 
    {
    }

    public function _after(FunctionalTester $I) 
    {
    }

    // >>>methods>>>
    public function tryTemplateCreate(FunctionalTester $I) 
    {
        $I->amGoingTo('test Template create');
        $I->sendPOST('/v1/template', '{"data":{"type":"template","attributes":{"category_id":5,"title":"wisoky.tessie","description":"josie58","thumbnail_url":"eveline.kuhn","example_vid_url":"lulu61","template_json":"mraz.gerhard","input_schema":"sidney.bogisich","input_options":"vidal.braun","input_data":"zrunte","input_view":"annie46"}}}');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'template',
    'id' => 1,
    'attributes' => 
    array (
      'category_id' => 5,
      'title' => 'wisoky.tessie',
      'description' => 'josie58',
      'thumbnail_url' => 'eveline.kuhn',
      'example_vid_url' => 'lulu61',
      'template_json' => 'mraz.gerhard',
      'input_schema' => 'sidney.bogisich',
      'input_options' => 'vidal.braun',
      'input_data' => 'zrunte',
      'input_view' => 'annie46',
    ),
  ),
));
    }

    public function tryTemplateIndex(FunctionalTester $I) 
    {
        $I->amGoingTo('test Template index');
        $I->sendGET('/v1/template');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'template',
    'id' => 1,
    'attributes' => 
    array (
      'category_id' => 5,
      'title' => 'wisoky.tessie',
      'description' => 'josie58',
      'thumbnail_url' => 'eveline.kuhn',
      'example_vid_url' => 'lulu61',
      'template_json' => 'mraz.gerhard',
      'input_schema' => 'sidney.bogisich',
      'input_options' => 'vidal.braun',
      'input_data' => 'zrunte',
      'input_view' => 'annie46',
    ),
  ),
));
    }

    public function tryTemplateView(FunctionalTester $I) 
    {
        $I->amGoingTo('test Template view');
        $I->sendGET('/v1/template/1');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'template',
    'id' => 1,
    'attributes' => 
    array (
      'category_id' => 5,
      'title' => 'wisoky.tessie',
      'description' => 'josie58',
      'thumbnail_url' => 'eveline.kuhn',
      'example_vid_url' => 'lulu61',
      'template_json' => 'mraz.gerhard',
      'input_schema' => 'sidney.bogisich',
      'input_options' => 'vidal.braun',
      'input_data' => 'zrunte',
      'input_view' => 'annie46',
    ),
  ),
));
    }

    public function tryTemplateUpdate(FunctionalTester $I) 
    {
        $I->amGoingTo('test Template update');
        $I->sendPATCH('/v1/template/1', '{"data":{"type":"template","attributes":{"category_id":5,"title":"wisoky.tessie","description":"josie58","thumbnail_url":"eveline.kuhn","example_vid_url":"lulu61","template_json":"mraz.gerhard","input_schema":"sidney.bogisich","input_options":"vidal.braun","input_data":"zrunte","input_view":"annie46"}}}');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'template',
    'id' => 1,
    'attributes' => 
    array (
      'category_id' => 5,
      'title' => 'wisoky.tessie',
      'description' => 'josie58',
      'thumbnail_url' => 'eveline.kuhn',
      'example_vid_url' => 'lulu61',
      'template_json' => 'mraz.gerhard',
      'input_schema' => 'sidney.bogisich',
      'input_options' => 'vidal.braun',
      'input_data' => 'zrunte',
      'input_view' => 'annie46',
    ),
  ),
));
    }

    public function tryTemplateDelete(FunctionalTester $I) 
    {
        $I->amGoingTo('test Template delete');
        $I->sendDELETE('/v1/template/1');
    }

    // <<<methods<<<
}
