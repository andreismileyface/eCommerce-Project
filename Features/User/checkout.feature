# Feature 22

Feature: Checkout a flight
The user must be logged in, and entered Credit card information

    Scenario: Checkout a flight

Given I am on "localhost/eCom/flight/checking"
And click Buy button
Then I see "Your flight has been booked"