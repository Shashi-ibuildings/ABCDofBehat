<?php

class MyFeatureContext extends Behat\MinkExtension\Context\MinkContext
{
       /**
     * @When /^I search for "([^"]*)"$/
          */
    
    public function iSearchFor($searchKeyword)
    {
        $this->fillField("s", $searchKeyword);
        $this->pressButton("Search");
    }


}
