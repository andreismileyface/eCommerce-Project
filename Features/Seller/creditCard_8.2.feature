Feature: change credit card information
As a administrator
The administrator can change his/her credit card information

Scenario: respond to email 

Given I am on "localhost/eCom/Shopping/Credit/Change"
And click modify
And when I enter "4739 4383 4849 0338" in the card number text box
And when I enter "494" in the cvc text box
And when I enter "09/22" in the expire date text box
And click Submit
Then I my credit informention has changed