<?php
class TopicCest 
{
    public function _before(FunctionalTester $I) 
    {
    }

    public function _after(FunctionalTester $I) 
    {
    }

    // >>>methods>>>
    public function tryTopicCreate(FunctionalTester $I) 
    {
        $I->amGoingTo('test Topic create');
        $I->sendPOST('/v3/topic', '{"data":{"type":"topic","attributes":{"title":"verla83"}}}');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'topic',
    'id' => 1,
    'attributes' => 
    array (
      'title' => 'verla83',
    ),
  ),
));
    }

    public function tryTopicIndex(FunctionalTester $I) 
    {
        $I->amGoingTo('test Topic index');
        $I->sendGET('/v3/topic');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'topic',
    'id' => 1,
    'attributes' => 
    array (
      'title' => 'verla83',
    ),
  ),
));
    }

    public function tryTopicView(FunctionalTester $I) 
    {
        $I->amGoingTo('test Topic view');
        $I->sendGET('/v3/topic/1');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'topic',
    'id' => 1,
    'attributes' => 
    array (
      'title' => 'verla83',
    ),
  ),
));
    }

    public function tryTopicUpdate(FunctionalTester $I) 
    {
        $I->amGoingTo('test Topic update');
        $I->sendPATCH('/v3/topic/1', '{"data":{"type":"topic","attributes":{"title":"verla83"}}}');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'topic',
    'id' => 1,
    'attributes' => 
    array (
      'title' => 'verla83',
    ),
  ),
));
    }

    public function tryTopicDelete(FunctionalTester $I) 
    {
        $I->amGoingTo('test Topic delete');
        $I->sendDELETE('/v3/topic/1');
    }

    // <<<methods<<<
}
