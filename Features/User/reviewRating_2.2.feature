Feature: view clients rating
As a user
The customer can view clientd ratings

Scenario: respond to email 

Given I am on "localhost/eCom/Flight/reviews/rating"
And click rating
Then the user can see all the customers rating of their trip
