# Feature 27

Feature: Checking if there's enough founds in the credit card
The seller needs to input information of his credit card

    Scenario: payment for a flight

Given I am on "localhost/eCom/Checkout/index"
When I enter credit card informations
And click submit
Then I see "Not enough balance to pay"