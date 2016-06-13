Feature: Subtraction

  @example
  Scenario: Subtracting two numbers
    Given I enter "10" into the calculator
    And I hit "subtract"
    And I enter "5" into the calculator
    And I hit "equals"
    Then I see a result of "5"


  @example
  Scenario: Subtracting three numbers
    Given I enter "100" into the calculator
    And I hit "subtract"
    And I enter "20" into the calculator
    And I hit "subtract"
    And I enter "50" into the calculator
    And I hit "equals"
    Then I see a result of "30"

  @example
  Scenario: Mix and Match

    Given I enter "5" into the calculator
    And I hit "add"
    And I enter "10" into the calculator
    And I hit "multiply"
    And I enter "5" into the calculator
    And I hit "divide"
    And I enter "5" into the calculator
    And I hit "subtract"
    And I enter "15" into the calculator
    And I hit "equals"
    Then I see a result of "0"