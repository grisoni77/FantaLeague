Feature: managing a team
  In order to setup a team
  As a administrator
  I need to create and manage a team

  Scenario: Creating a team
    When I create a team called "Team1"
    Then there is a team called "Team1"

  Scenario: assigning a team to a league
    Given there is a team called "Team1"
    And team "Team1" is not assigned to any league
    When I assigned team "Team1" to league "Fanta"
    Then team "Team1" is assigned to "Fanta"