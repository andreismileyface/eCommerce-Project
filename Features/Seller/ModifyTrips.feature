# Feature 2

Feature: modify trips
As an administrator
The seller needs to modify the trip information, so the information that I give will have to be different then the one originally placed

    Scenario: try modify trip

Given I am on "localhost/eCom/Trip/Options"
And click Modify
When I enter "$365" in the price box
And when I enter "Canada" in the tripLocation box
And click Submit
Then I see a modified trip

    Scenario: try modify trip

Given I am on "localhost/eCom/Trip/Options"
And click Modify
When I enter "$450" in the price box
And when I enter "url (of an image)" in the picture box
And click Submit
Then I see a modified trip