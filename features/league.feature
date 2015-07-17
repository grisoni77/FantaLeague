Feature: managing a league
  In order to setup a league
  As a administrator
  I need to create and manage a league

  Scenario: creating a league
    Given there is not a league called "Fanta"
    When I create a league "Fanta"
    Then there is a league called "Fanta"

  Scenario: creating a league which already exists
    Given there is a league called "Fanta"
    When I create a league "Fanta"
    Then there is a league called "Fanta"

