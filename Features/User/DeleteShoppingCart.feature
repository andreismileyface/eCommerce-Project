# Feature 24

Feature: Remove a flight in shopping cart
The user must be logged in, and have items on the 

    Scenario: remove item to shopping cart

Given I am on "localhost/eCom/Profile/shoppingcart"
And click Remove to cart
I click on my shopping cart
Then I don't see the item