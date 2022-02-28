# Feature 1

Feature: adding trips
As an administrator
The seller needs to add new trips

    Scenario: try add trip

Given I am on "localhost/eCom/Trip/Options"
And click Add
When I enter "Miami" in the tripLocation box
And when I enter "$400" in the price box
And when I enter "url (of an image)" in the picture box
And when I enter "4 hours" in the time box
And click Submit
Then I see a new made trip

    Scenario: try add trip

Given I am on "localhost/eCom/Trip/Options"
And click Add
When I enter "Punta Cana" in the tripLocation box
And when I enter "$345" in the price box
And when I enter "url (of an image)" in the picture box
And when I enter "3 hours" in the time box
And click Submit
Then I see a new made trip