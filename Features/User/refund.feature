# Feature 23

Feature: Refund a flight
The user must be logged in, and payed for a flight

    Scenario: Refund a flight

Given I am on "localhost/eCom/flight/refund"
And click Refund on flight
Then I see "Your flight has been refunded!"