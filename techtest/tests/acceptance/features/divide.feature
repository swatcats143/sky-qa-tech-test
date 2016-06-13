Feature:Division


  @example
  Scenario: Dividing two numbers
    Given I enter "4" into the calculator
    And I hit "divide"
    And I enter "2" into the calculator
    And I hit "equals"
    Then I see a result of "2"

  @example
  Scenario: divide three numbers together
    Given I enter "20" into the calculator
    And I hit "divide"
    And I enter "2" into the calculator
    And I hit "divide"
    And I enter "2" into the calculator
    And I hit "equals"
    Then I see a result of "5"

  @example
  Scenario: divide two numbers and multiply another
    Given I enter "10" into the calculator
    And I hit "divide"
    And I enter "2" into the calculator
    And I hit "multiply"
    And I enter "5" into the calculator
    And I hit "equals"
    Then I see a result of "25"

  @example
  Scenario: divide two numbers and add another
    Given I enter "10" into the calculator
    And I hit "divide"
    And I enter "2" into the calculator
    And I hit "add"
    And I enter "2" into the calculator
    And I hit "equals"
    Then I see a result of "7"

  @example
  Scenario: divide two numbers and subtract another
    Given I enter "10" into the calculator
    And I hit "divide"
    And I enter "2" into the calculator
    And I hit "subtract"
    And I enter "2" into the calculator
    And I hit "equals"
    Then I see a result of "3"