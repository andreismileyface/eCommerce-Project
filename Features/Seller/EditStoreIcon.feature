# Feature 4

Feature: edit store icon
As an administrator
The seller needs to have an option to edit the icon of his store if he decides to change it

    Scenario: edit store icon

Given I am on "localhost/eCom/Trip/Options"
And click icon
And when I enter "url (of an image)" in the picture box
And click Submit
Then I see "url (of an image)" as the icon