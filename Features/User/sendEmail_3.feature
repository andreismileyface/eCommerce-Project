Feature: send email to seller
As a user
The user can write an email to seller

Scenario: respond to email 

Given I am on "localhost/eCom/Tri/Request"
And click on question
When I enter on the question textbox
And when I enter "How can I view customers reviews"
And click Submit
Then I wait for a setller to answer my question