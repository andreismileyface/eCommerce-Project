# Feature 8

Feature: disable purchases
As a user
I input a sale and when I finish since it was the last sale possible then the trip will be disabled to the user (if it reached the maximum of trips) (we will disable and blur it a little if possible)

    Scenario: view disabled trip

Given I am on "localhost/eCom/Trip/Cruise/Panama/Pay"
And click submit payment
Then I see Panama trip disabled

    Scenario: view disabled trip

Given I am on "localhost/eCom/Trip/Plane/Brasil/Pay"
And click submit payment
Then I see Brasil trip disabled