# Feature 3

Feature: track sales
As an administrator
The seller needs the option to view all the sales that has been purchased

    Scenario: try to view sales

Given I am on "localhost/eCom/Trip/Plane"
And click "Plane Sales"
Then I see all the sales that have been purchased for traveling by plane

    Scenario: try to view sales

Given I am on "localhost/eCom/Trip/Cruise"
And click "Cruise Sales"
Then I see all the sales that have been purchased for traveling by cruise