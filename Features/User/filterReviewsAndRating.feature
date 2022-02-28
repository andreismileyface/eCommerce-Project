# Feature 21

Feature: Filter ratings

    Scenario: Show good ratings

Given I am on "localhost/eCom/flight/:id/ratings"
And choose Positive
Then I see positive reviews

    Scenario: Filter a reviews by positivity

Given I am on "localhost/eCom/flight/:id/reviews"
And choose Positive
Then I see positive reviews