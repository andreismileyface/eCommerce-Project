# Feature 7

Feature: maximum amount of travelers
As an administrator
The seller needs the option to set a maximum of people who can purchase a ticket since we do not have unlimited space

    Scenario: try add maximum amount

Given I am on "localhost/eCom/Trip/Plane"
And click Maximum Amount
When I enter "15" in the Maximum box
Then the maximum amount for that trip is 15

    Scenario: try add maximum amount

Given I am on "localhost/eCom/Trip/Cruise"
And click Maximum Amount
When I enter "10" in the Maximum box
Then the maximum amount for that trip is 10