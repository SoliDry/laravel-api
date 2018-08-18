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
        $I->sendPOST('/v1/template', '{"data":{"type":"template","attributes":{"category_id":7,"title":"lue.rowe","description":"name.predovic","thumbnail_url":"agustin27","example_vid_url":"eino.baumbach","template_json":"bdare","input_schema":"fdietrich","input_options":"swalter","input_data":"franco.batz","input_view":"abbott.lavina"}}}');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'template',
    'id' => 1,
    'attributes' => 
    array (
      'category_id' => 7,
      'title' => 'lue.rowe',
      'description' => 'name.predovic',
      'thumbnail_url' => 'agustin27',
      'example_vid_url' => 'eino.baumbach',
      'template_json' => 'bdare',
      'input_schema' => 'fdietrich',
      'input_options' => 'swalter',
      'input_data' => 'franco.batz',
      'input_view' => 'abbott.lavina',
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
      'category_id' => 7,
      'title' => 'lue.rowe',
      'description' => 'name.predovic',
      'thumbnail_url' => 'agustin27',
      'example_vid_url' => 'eino.baumbach',
      'template_json' => 'bdare',
      'input_schema' => 'fdietrich',
      'input_options' => 'swalter',
      'input_data' => 'franco.batz',
      'input_view' => 'abbott.lavina',
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
      'category_id' => 7,
      'title' => 'lue.rowe',
      'description' => 'name.predovic',
      'thumbnail_url' => 'agustin27',
      'example_vid_url' => 'eino.baumbach',
      'template_json' => 'bdare',
      'input_schema' => 'fdietrich',
      'input_options' => 'swalter',
      'input_data' => 'franco.batz',
      'input_view' => 'abbott.lavina',
    ),
  ),
));
    }

    public function tryTemplateUpdate(FunctionalTester $I) 
    {
        $I->amGoingTo('test Template update');
        $I->sendPATCH('/v1/template/1', '{"data":{"type":"template","attributes":{"category_id":7,"title":"lue.rowe","description":"name.predovic","thumbnail_url":"agustin27","example_vid_url":"eino.baumbach","template_json":"bdare","input_schema":"fdietrich","input_options":"swalter","input_data":"franco.batz","input_view":"abbott.lavina"}}}');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'template',
    'id' => 1,
    'attributes' => 
    array (
      'category_id' => 7,
      'title' => 'lue.rowe',
      'description' => 'name.predovic',
      'thumbnail_url' => 'agustin27',
      'example_vid_url' => 'eino.baumbach',
      'template_json' => 'bdare',
      'input_schema' => 'fdietrich',
      'input_options' => 'swalter',
      'input_data' => 'franco.batz',
      'input_view' => 'abbott.lavina',
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
