<?php namespace frontend\tests\functional;
use frontend\tests\FunctionalTester;

class FirstFuncCest
{
    public function _before(FunctionalTester $I)
    {
    }

    // tests

    /**
     * @dataProvider pageProvider
     */
    public function tryToTest(FunctionalTester $I, \Codeception\Example $data)
    {
        $I->amOnPage($data['url']);
        $I->see($data['a'], 'li.active>a');
    }

    protected function pageProvider()
    {
        return [
            ['url' => "/", 'a' => "Home"],
            ['url' => "site/about", 'a' => "About"],
            ['url' => "site/contact", 'a' => "Contact"],
            ['url' => "site/signup", 'a' => "Signup"],
            ['url' => "site/login", 'a' => "Login"],
        ];
    }
}
