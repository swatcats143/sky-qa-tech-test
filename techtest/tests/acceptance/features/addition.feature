Feature: Addition

  @example
  Scenario: Adding two numbers
    Given I enter "5" into the calculator
    And I hit "add"
    And I enter "10" into the calculator
    And I hit "equals"
    Then I see a result of "15"

  @example
  Scenario: Add three numbers together
    Given I enter "10" into the calculator
    And I hit "add"
    And I enter "10" into the calculator
    And I hit "add"
    And I enter "2" into the calculator
    And I hit "equals"
    Then I see a result of "22"

  @example
  Scenario: Add two numbers and multiply another
    Given I enter "2" into the calculator
    And I hit "add"
    And I enter "2" into the calculator
    And I hit "multiply"
    And I enter "2" into the calculator
    And I hit "equals"
    Then I see a result of "8"


  @example
  Scenario: Add two numbers and divide another
    Given I enter "1" into the calculator
    And I hit "add"
    And I enter "1" into the calculator
    And I hit "divide"
    And I enter "2" into the calculator
    And I hit "equals"
    Then I see a result of "1"