Feature: Cuberoot

  Scenario: Cube root
    Given I enter "1" into the calculator
    And I hit "cuberoot"
    And I hit "equals"
    Then I see a result of "1"