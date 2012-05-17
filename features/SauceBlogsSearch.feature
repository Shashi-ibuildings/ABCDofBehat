Feature: SauceBlogSearch
  In order to Behat Blog on SauceLabs Official blogs
  As a Behat-Sauce User
  I need to read Adding Sauce to Behat blog

  @javascript 
  Scenario: Searching for Behat blogs
    Given I am on "/blog/"
    When I search for "Behat"
    Then I should see "Adding Sauce To Behat"
    When I follow "Adding Sauce To Behat"
    Then I should see "What is Behat?"

  @javascript 
  Scenario: Searching for Behat blogs
    Given I am on "/blog/"
    When I search for "Fish and Chips"
    Then I should see "No posts found. Try a different search?" 
    And I should not see "Adding Sauce To Behat"

    