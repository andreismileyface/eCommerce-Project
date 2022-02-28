# Feature 10

Feature: answer questions
As an administrator
The seller can respond to the requests that the user asks of them

    Scenario: respond to questions

Given I am on "localhost/eCom/Trip/Request"
And click answer (on specific question)
When I enter "Here is the answer" in the answer box
And click submit
Then the question will be answered

    Scenario: respond to questions

Given I am on "localhost/eCom/Trip/Request"
And click answer (on specific question)
When I enter "Here is the answer" in the answer box
And click submit
Then the question will be answered