Feature: Dec to Hex

  Scenario: DectoHex
    Given I enter "100" into the calculator
    And I hit "decToHex"
    And I hit "equals"
    Then I see a result of "64"
