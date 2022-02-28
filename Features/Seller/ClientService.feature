# Feature 9

Feature: view client service request
As an administrator
The seller needs the option to view all the requests given by the client and be up to date with the information

    Scenario: view client requests

Given I am on "localhost/eCom/Trip"
And click Requests
Then I see different client requests