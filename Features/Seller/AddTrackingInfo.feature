# Feature 5

Feature: adding tracking information
As an administrator
The seller needs to input information for the tracking details

    Scenario: adding tracking information for plane

Given I am on "localhost/eCom/Trip/Plane"
And click Add Information
When I enter "The lane will be departing soon" in the message box
And click submit
Then I see "The plane will be departing soon" in the detail section

    Scenario: adding tracking information for cruise

Given I am on "localhost/eCom/Trip/Cruise"
And click Add Information
When I enter "The cruise will be departing soon" in the message box
And click submit
Then I see "The cruise will be departing soon" in the detail section