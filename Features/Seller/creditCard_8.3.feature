Feature: delete credit 
As a administrator
The administrator delete credit card information from the system

Scenario: delete credit card from system 

Given I am on "localhost/eCom/Shopping/Credit/Delete"
And click delete icon
Then the customer credit card information in his account is deleted