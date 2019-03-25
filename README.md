# CGS 3066: Web Programming and Design
## Florida State University
### Team Project Proposal Template
*Please use this template to write your project proposal. Your proposal must be between 1 and 2 pages. Please do not change the font, font size, margins or line spacing. All the text in italic should be removed from your final submission.*

1. Team Members   
**Will Bollock**
**Isaac Wolfe**
**Bryan Levy**

2. Project Title   
**AAF Fantasy Football**

3. Motivation   
We as a group have expressed similar interests in fantasy football as an entity. Since fantasy football has a such a large target audience we have decided what better way to expand the fantasy football market than to open the platform up to the new football league the Alliance of American Football. 

4. Brief overview of what you are proposing   
This website will allow users to login, create an AAF fantasy football team, and save or modify their team. The team will save for the user in between browser sessions. We will input real AAF player data in order to simulate a full fantasy football site. 

5. Features to be implemented (Functional requirements)   
* User creation
* User authentication
* Storing user team data between user sessions
* Storing user account information, especially safely storing password
* Player lists for user team selection
* Team list per user (1 team per user)
* Backend: PHP
* Database: SQL Server
* Frontend: CSS/HTML
* User interactivity, forms: JS
* Use of Git to maintain files

6. Risk / Challenges
* Some risks and challenges that come with the development of this application include: 
* Lack of experience in the development of fantasy sports applications
* Maintaining the scope of the project
* Not sanitizing input properly on login fields
* Not having full access to the server we will be using
* Not fully understanding how to connect everything (frontend web page to backend data)
* Keeping everything in scope - not adding or removing previously upon players
* Dealing with multiple users and their data (for example, users making an account with the same username)


## TODO
###Implement Front End
#### HTML/CSS
* Need a page for user to log in, user to make an account, user to check their team, and user to add to their team
#### JS
* Validate user inputs, similar to A4. Make password certain length, make username certain length, etc. Prevent odd characters in username?
#### Implement Back End
* Make a database w/ SQL 
* Will need primary key (userid), team name, team roster
* Link database to web page, somehow [DIFFICULT?]
