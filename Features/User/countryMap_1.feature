Feature: see country details
As a customer
The customer can see the country location

Scenario: see country location on map

Given I am on "localhost/eCom/Trip/Map/Brasil"
And I click on map
Then the customer can see the geographic location of the country
