<?php

class SubContext extends Behat\Behat\Context\BehatContext
{
    public function __construct()
    {
        $this->useContext('mink', new Behat\MinkExtension\Context\MinkContext);
    }
       /**
     * @When /^I search for "([^"]*)"$/
          */
    
    public function iSearchFor($searchKeyword)
    {
        $this->getSubcontext('mink')->fillField("s", $searchKeyword);
        $this->getSubcontext('mink')->pressButton("Search");
    }


}
