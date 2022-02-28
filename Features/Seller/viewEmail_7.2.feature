Feature: send email to customers
As an administrator
The administrator can respond to customer email

Scenario: respond to email 

Given I am on "localhost/eCom/Contact/Email"
And click Answer
When I enter the answer textbox
And when I enter "You can find your credit card information in the shopping cart section"
And click Submit
Then the customer can see the answer to their question