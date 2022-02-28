Feature: checking credit card information
As a administrator
The administrator can check the customer credit card details

Scenario: checking credit card

Given I am on "localhost/eCom/Shopping/Credit/information"
And click on credit card information
Then the administrator can see all my personnal credit card information
