Feature: Factorial

  @example
  Scenario: Factorial
    Given I enter "8" into the calculator
    And I hit "factorial"
    And I hit "equals"
    Then I see a result of "40320"