Feature: see country details
As a customer
The customer can see the country descriptions

Scenario: see country location on map

Given I am on "localhost/eCom/Trip/Map/Desciption/"
And I click on description
Then I see all the coutries descriptions
