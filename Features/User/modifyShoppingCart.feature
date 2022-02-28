# Feature 25

Feature: Add a flight in shopping cart
The user must be logged in

    Scenario: add to shopping cart

Given I am on "localhost/eCom/flight/index"
And click Add to cart
I click on my shopping cart
Then I see the flight added