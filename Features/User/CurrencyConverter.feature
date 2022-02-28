Feature #30

Feature: converting currencies

The seller needs to select two currencies and input the amount

    Scenario: converting usd to cad

Given I am on "localhost/eCom/Converter/index"
When I choose usd as original
When I choose cad to new
When I enter 120 in original
And click convert
Then I see 153$

    Scenario: converting cad to usd

Given I am on "localhost/eCom/Converter/index"
When I choose usd as original
When I choose cad to new
When I enter 153 in original
And click convert
Then I see 120$