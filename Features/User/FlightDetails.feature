# Feature 6

Feature: track flight details
As a user
The seller needs to see details on the flight

    Scenario: view flight details

Given I am on "localhost/eCom/Trip/Plane"
And click Details (of specific flight)
Then I see "The plane will be departing soon" in the detail box for the flight

    Scenario: view flight details

Given I am on "localhost/eCom/Trip/Cruise"
And click Details (of specific cruise)
Then I see "The cruise will be departing soon" in the detail box for the cruises