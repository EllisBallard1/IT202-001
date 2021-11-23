# Project Name: Simple Bank
## Project Summary: This project will create a bank simulation for users. They’ll be able to have various accounts, do standard bank functions like deposit, withdraw, internal (user’s accounts)/external(other user’s accounts) transfers, and creating/closing accounts.
## Github Link: https://github.com/EllisBallard1/IT202-001/tree/prod
## Project Board Link: https://github.com/EllisBallard1/IT202-001/projects/1
## Website Link: https://eab4-prod.herokuapp.com/Project/login.php
## Your Name: Ellis Ballard

<!--
### Line item / Feature template (use this for each bullet point)
#### Don't delete this

- [ ] \(mm/dd/yyyy of completion) Feature Title (from the proposal bullet point, if it's a sub-point indent it properly)
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show
### End Line item / Feature Template
--> 
### Proposal Checklist and Evidence

- Milestone 1
    - [ ] \(11/1/2021 of completion) Feature Title (User will be able to register a new account)
    -  List of Evidence of Feature Completion
        - Status: (Completed)
        - Direct Link: https://eab4-dev.herokuapp.com/Project/register.php
        - Pull Requests
        - PR link #1 (repeat as necessary)
        - https://github.com/EllisBallard1/IT202-001/pull/10
        - Screenshots
        - Screenshot #1 
          - ![image](https://user-images.githubusercontent.com/89932304/140788172-c13945a2-2969-4765-b798-7e589df8d014.png)
            - Screenshot #1 description: This picture shows that a new user was successfully able to register an account in the database.
        - Screenshot #2 
          - ![image](https://user-images.githubusercontent.com/89932304/140788242-b53aa76d-4ae1-4ef6-a6a3-90904165499e.png)
            - Screenshot #2 description: This picture shows the confirmation that the user is now successfully registered and stored in the database.

    - [ ] \(11/8/2021 of completion) Feature Title (User will be able to login to their account (given they enter the correct credentials))
    -  List of Evidence of Feature Completion
        - Status: (Completed)
        - Direct Link: https://eab4-prod.herokuapp.com/Project/home.php
        - Pull Requests
        - PR link #1 https://github.com/EllisBallard1/IT202-001/pull/10
        - Screenshots
        - Screenshot #1 
          - ![image](https://user-images.githubusercontent.com/89932304/140788966-36c241a3-b9cb-4aae-8a7f-99f0f050eb61.png)
            - This screenshot shows the validation message and information for when the user is able to successfully login.

    - [ ] \(11/8/2021 of completion) Feature Title (User will be able to logout)
    -  List of Evidence of Feature Completion
        - Status: (Completed)
        - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
        - Pull Requests
        - PR link #1 https://github.com/EllisBallard1/IT202-001/pull/11
        - PR Link #2 https://github.com/EllisBallard1/IT202-001/pull/32
        - Screenshots
        - Screenshot #1 
          - ![image](https://user-images.githubusercontent.com/89932304/140790080-8139e38d-7fe0-4d8a-9436-2b176f311716.png)
            - Screenshot #1 description: This screenshot shows the success message presented to the user when they logout of their account

    - [ ] \(11/8/2021 of completion) Feature Title (Basic security rules implemented)
    -  List of Evidence of Feature Completion
        - Status: Pending (Completed, Partially working, Incomplete, Pending)
        - Direct Link: https://eab4-prod.herokuapp.com/Project/admin/list_roles.php
        - Pull Requests
        - PR link #1 https://github.com/EllisBallard1/IT202-001/pull/24
        - Screenshots
        - Screenshot #1 
          - ![image](https://user-images.githubusercontent.com/89932304/140791007-6e95288c-7a51-4f37-b6b8-e2b6e93bb0d9.png)
            - This screenshot shows the Admin role being implemented in the database. From here only the admin user(s) are able to create roles or view sensitive information.
        - Screenshot #2 
          - ![image](https://user-images.githubusercontent.com/89932304/140791212-59a8c614-1a09-44d1-ad23-a01ceb992954.png)
            - This screenshot shows the admin role being kept within the database table.
        - Screenshot #3 
          - ![image](https://user-images.githubusercontent.com/89932304/140791504-fcdfe6cf-e50b-41ad-a297-60a2c75f85d2.png)
            - This screenshot shows the admin page where they can monitor the security roles on the site.

    - [ ] \(11/8/2021 of completion) Feature Title (Basic Roles implemented)
    -  List of Evidence of Feature Completion
        - Status: (Completed)
        - Direct Link: https://eab4-prod.herokuapp.com/Project/admin/list_roles.php
        - Pull Requests
        - PR link #1 https://github.com/EllisBallard1/IT202-001/pull/24
        - Screenshots
        - Screenshot #1 
          - ![image](https://user-images.githubusercontent.com/89932304/140791504-fcdfe6cf-e50b-41ad-a297-60a2c75f85d2.png)
            - This screenshot shows the admin view for the roles of the site. Also from this area the admin user can create roles or update features for the roles
        - Screenshot #2 
          - ![image](https://user-images.githubusercontent.com/89932304/140795238-63f04d9e-5e2b-402c-9507-67e761c8f7ce.png)
            - This screenshot shows the user roles table containing the admin role set to the value of 1
        - Screenshot #3 
           - ![image](https://user-images.githubusercontent.com/89932304/140795377-6a942808-1f21-42c5-b871-6f490993bb25.png)
            - This screenshot shows the entire table containing the users, with the admin user having a filter of 1


    - [ ] \(11/8/2021 of completion) Feature Title (Site should have basic styles/theme applied; everything should be styled)
    -  List of Evidence of Feature Completion
        - Status: (Completed)
        - Direct Link: https://eab4-prod.herokuapp.com/Project/login.php
        - Pull Requests
        - PR link #1 https://github.com/EllisBallard1/IT202-001/pull/23
        - Screenshots
        - Screenshot #1 
          - ![image](https://user-images.githubusercontent.com/89932304/140797927-a2e96124-ccff-44ba-8986-d2ed339da9b7.png)
            - This screenshot shows the styling that I applied to the page, such as the coloring and margins for the text input areas.

    - [ ] \(11/8/2021 of completion) Feature Title (Any output messages/errors should be “user friendly”)
    -  List of Evidence of Feature Completion
        - Status: (Completed)
        - Direct Link: https://eab4-prod.herokuapp.com/Project/login.php
        - Pull Requests
        - PR link #1 https://github.com/EllisBallard1/IT202-001/pull/11
        - Screenshots
        - Screenshot #1 
          - ![image](https://user-images.githubusercontent.com/89932304/140798534-99b21a74-1692-44d2-ba6c-15ceacf6df0f.png)
            - This screenshot shows an example of an error message that gets displayed if the user makes an error while trying to access the site

    - [ ] \(11/8/2021 of completion) Feature Title (User will be able to see their profile)
    -  List of Evidence of Feature Completion
        - Status: (Completed)
        - Direct Link: https://eab4-prod.herokuapp.com/Project/profile.php
        - Pull Requests
        - PR link #1 https://github.com/EllisBallard1/IT202-001/pull/25
        - PR link #2 https://github.com/EllisBallard1/IT202-001/pull/24
        - Screenshots
        - Screenshot #1 
          - ![image](https://user-images.githubusercontent.com/89932304/140798763-92d5055e-8fa6-4487-9dc9-69d47e541c3f.png)
            - This screenshow shows the page that allows the user to view their profile and update their password if they want
            
    - [ ] \(11/8/2021 of completion) Feature Title (User will be able to edit their profile)
    -  List of Evidence of Feature Completion
        - Status: (Completed)
        - Direct Link: https://eab4-prod.herokuapp.com/Project/profile.php
        - Pull Requests
        - PR link #1 (repeat as necessary)
        - Screenshots
        - Screenshot #1 
          - ![image](https://user-images.githubusercontent.com/89932304/140799093-e3f0ae24-22a3-4d3b-a6fa-d4ead0fdc7ce.png)
            - This screenshot shows the confirmation message when the user updates their password for accessing the database.
        - Screenshot #2 
          - ![image](https://user-images.githubusercontent.com/89932304/140799459-60d8790e-11cb-4763-b703-735b851e927d.png)
            - This screenshot shows the message that appears when the user attmepts to update their email to one that is already in use.

- Milestone 2

- [ ] \(mm/dd/yyyy of completion) Feature Title: Create the Accounts Table
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show

- [ ] \(mm/dd/yyyy of completion) Feature Title: System User Check and World Account
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show

- [ ] \(mm/dd/yyyy of completion) Feature Title: Create the Transactions Table
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show

- [ ] \(mm/dd/yyyy of completion) Feature Title: Dashboard Page
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show

- [ ] \(mm/dd/yyyy of completion) Feature Title: User Created Checking Account
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show

- [ ] \(mm/dd/yyyy of completion) Feature Title: List Accounts for User
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show

- [ ] \(mm/dd/yyyy of completion) Feature Title: Account Information
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show

- [ ] \(mm/dd/yyyy of completion) Feature Title: Account Deposit/Withdraw
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show

- Milestone 3
- [ ] \(mm/dd/yyyy of completion) Feature Title (User will be able to transfer between their accounts)
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show

- [ ] \(mm/dd/yyyy of completion) Feature Title (Transaction History page)
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show

- [ ] \(mm/dd/yyyy of completion) Feature Title (User’s profile page should record/show First and Last name)
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show

- [ ] \(mm/dd/yyyy of completion) Feature Title (User will be able to transfer funds to another user’s account)
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show

- Milestone 4
### Intructions
#### Don't delete this
1. Pick one project type
2. Create a proposal.md file in the root of your project directory of your GitHub repository
3. Copy the contents of the Google Doc into this readme file
4. Convert the list items to markdown checkboxes (apply any other markdown for organizational purposes)
5. Create a new Project Board on GitHub
   - Choose the Automated Kanban Board Template
   - For each major line item (or sub line item if applicable) create a GitHub issue
   - The title should be the line item text
   - The first comment should be the acceptance criteria (i.e., what you need to accomplish for it to be "complete")
   - Leave these in "to do" status until you start working on them
   - Assign each issue to your Project Board (the right-side panel)
   - Assign each issue to yourself (the right-side panel)
6. As you work
  1. As you work on features, create separate branches for the code in the style of Feature-ShortDescription (using the Milestone branch as the source)
  2. Add, commit, push the related file changes to this branch
  3. Add evidence to the PR (Feat to Milestone) conversation view comments showing the feature being implemented
     - Screenshot(s) of the site view (make sure they clearly show the feature)
     - Screenshot of the database data if applicable
     - Describe each screenshot to specify exactly what's being shown
     - A code snippet screenshot or reference via GitHub markdown may be used as an alternative for evidence that can't be captured on the screen
  4. Update the checklist of the proposal.md file for each feature this is completing (ideally should be 1 branch/pull request per feature, but some cases may have multiple)
    - Basically add an x to the checkbox markdown along with a date after
      - (i.e.,   - [x] (mm/dd/yy) ....) See Template above
    - Add the pull request link as a new indented line for each line item being completed
    - Attach any related issue items on the right-side panel
  5. Merge the Feature Branch into your Milestone branch (this should close the pull request and the attached issues)
    - Merge the Milestone branch into dev, then dev into prod as needed
    - Last two steps are mostly for getting it to prod for delivery of the assignment 
  7. If the attached issues don't close wait until the next step
  8. Merge the updated dev branch into your production branch via a pull request
  9. Close any related issues that didn't auto close
    - You can edit the dropdown on the issue or drag/drop it to the proper column on the project board