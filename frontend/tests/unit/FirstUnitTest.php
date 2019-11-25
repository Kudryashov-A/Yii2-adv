<?php namespace frontend\tests;

use frontend\models\ContactForm;

class FirstUnitTest extends \Codeception\Test\Unit
{
    /**
     * @var \frontend\tests\UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testSomeFeature()
    {
        $testData = 28;
        $testArray = [
          'a' => 'aa',
          'b' => 'bb',
        ];
        $testModel = new ContactForm();
        $testModel->attributes = [
          'name' => 'Testman',
          'email' => 'testman@mail.site',
          'subject' => 'message subj',
          'body' => 'message body',
        ];

        $this->assertTrue(28 === $testData);
        $this->assertEquals(28, $testData);
        expect($testData)->equals(28);
        $this->assertLessThan(29, $testData);
        $this->assertAttributeEquals('message subj', 'subject', $testModel);
        $this->assertArrayHasKey('b', $testArray);
    }
}