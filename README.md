# SoftwareFinalProject

Project: Ticket System
Gerard Boniello, Kayla Pollock & Progga Deb
CSC 440: Software Engineering
December 14th, 2018

## Overview
Since all of the members on our team work for Adelphi’s Information Technology, either as help desk workers, system administrators, or former endpoint members, we wanted to recreate the Ticket System we use every day. The Ticket System that we can created can theoretically be implemented in any organization that wishes to monitor and respond to user issues that requires the assistance of others. In particular, the KPG Ticket System that we developed focused on responding to and fixing technology related issues. We decided to work with databases, html, and php, to create a user friendly website that will be able to resolve any issues as they arise. 


To find all of our code, visit: GitHub.com/k-pollock/Software-Final-Project


## Requirements
We would like you to develop a software system for different users to put in problems that they have with technology. Basic users (Professors, faculty, students, etc) and employees (help desk workers, endpoint workers, sys admins, etc.) should be able to log in and have a corresponding ID. This system will be used by basic users and workers alike. Workers are required to log in upon accessing the ticket system website. Any user who is not logged in will be able to create and view the status of their tickets. All basic users (students and faculty) should not be able to alter the tickets once they are submitted, only view. Employees can update information, but the type of information they can update is based off of their position. Help desk workers must review all tickets and properly assign them to the correct department. Endpoint Workers should only be able to update the description of the issue. System Administrators should also be able to update the description of the issue, but be the only ones who can close a ticket. 

![Requirements](/img/fig1.png)

## Design
To satisfy the requirements specified, we constructed design documents via StarUML. This software made it easy to set up and organize our thoughts, and our entire development process mimicked the process of the Spiral Model, continuously revisiting our requirements, design, code, and testing. We created use case diagrams (FIG 2) at first to get an overall sense of who will be using our system and what each user should and should not be able to do. Building off of the use case diagrams, we constructed object diagrams (FIG 3) to better visualize how this system will be implemented, noting inheritance and the relationship between objects. In addition to “formal” modeling (use case and object) we also used regular pen and paper (and whiteboard and marker) to help us visualize our thoughts and communicate them with our other team members to maintain organization and keep everyone on the same page throughout the process. 

Our design process did not stop with models though; we also followed a software development framework in order to enhance the quality of our software. We followed agile methodologies, specifically, extreme programming (XP). Our sprints were executed in one to two week periods. Another trait of extreme programming that we closely followed, was the modifications to iterations. As we worked on our system, we of course, did not plan it out perfectly the first time. We kept modifying our process and our iterations in order to adapt and meet our deadlines. Strict priority was also maintained, since we focused on adding issues first, since that is the main goal of our system, then focused on logging in, searching for issues, and so on, using pair programming, test-driven development, and simple design engineering practices. We also considered security when it came to displaying ticket information, as well as failed login attempts. Since the user’s name, email, and phone number were inputted, we were careful not to display all of this information, so only displayed the contact’s email, but if needed, a worker can access the phone, full name, and username. When a login attempt does not succeed, a new webpage is opened, slowing down possible Brute Force attacks.

Along with the visuals on the next page, we also decided that we would need two databases, one to store login credentials, and one to store the ticket information.

![Use Case Diagram](/img/fig2.png)

![Object Diagram](/img/fig3.png)

![Visualization](/img/fig4.png)

## Implementation
There are no hardware restrictions related to our system because everything was done on the compsci.adelphi.edu VM. When we were implementing and testing the project, we tested it directly on the server itself, as we wanted to make sure that it updated correctly like it would in a real life scenario. Our system, as you will see in the user manual, can be accessed by going to http://compsci.adelphi.edu/~proggadeb/Software-Final-Project/home.php  so all a user needs is access to the internet. 

Initially, to keep track of all of our files, we started out just using Google Drive to share all models and information, however, once we really got into the coding, we used GitHub as well. We used StarUML for our design diagrams and models because it was a software we all had access to and knew how to use. On the Google Drive, we maintained outlines and goals of each sprint, noting any changes made to our system to aid in organization and understanding, but the actual code was kept on GitHub so that we all could pull the code onto our own servers and work off it at the same time. We made the decision to use GitHub since it is widely used for version control and peer programming, and Google Drive was used because it is easy to share text documents. 

When it comes to executing our code, we stuck with the compsci terminal. We did this because as Adelphi computer science students, we all have access to this and it was a way to standardize our code. The languages, as mentioned before were php, html, and SQL, specifically using the mySQL database as opposed to pSQL. We chose html and php because we wanted to create a webpage, and we chose mySQL because the majority of our team members had experience with this, and the mySQL Workbench feature made it easier to create and populate our databases.

From the perspective of the user, aka, front end, we wanted our system to be easy to understand and simple. We stuck to a black/white/red theme to add a pop of color while maintaining a mature and sophisticated look.

Throughout the project lifespan, we experimented with changing our scope and design philosophy. Looking back now, we feel that we may have made too many changes and may have been too ambitious to begin with, because our final project did not include a remove feature, however, we are proud of what we accomplished. Our scope was too small to start out and we had to expand it, but it was hard to implement the scope expansion in time, and the expansion should have taken place earlier on.


## Sprint Schedule
During our first sprint, we focused on how a user will add a ticket. In these first two weeks we focused on design: how we want our pages to work and how many pages we will need to create. Before linking a database and doing the entire project, we wanted to make sure that our web pages functioned properly, so we began with the code for how a ticket will be added, and what each user will see upon log in (log in to be done later).

During sprint 2, we focused on creating the database and updating all of our webpages to pull from this database based on certain criteria (ex: endpoint queue displays everything where assignee = “endpoint”). We also began creating a way to login to the system, which will be tested more in depth during our next sprint. All of our work in Sprint 2 meets the criteria we specified because our database has all of the attribute required to input tickets and determine what queue will be displayed based off assignee. 

Sprint 3 we focused on everything that we had left, and this sprint led up to our presentation. We populated our login table, made sure help desk workers could change the assignees on tickets, made the webages look nicer, attempted to get a remove page (but did not succeed in time) and of course, tested continuously. Our testing in this final sprint led us to create a new page, when it came to invalid login credentials. Previously, we displayed an error message, but during this sprint we realized there should be no “dead ends” and a way to return back to using the system.


## User Manual
Thank you for using the KPG Ticket System! Here, you will find step-by-step instructions on how to use all of the features this system has to offer. If you wish to implement this code on your own system, we recommend keeping it all in one spot, like on a terminal so it is easy to access if needed, and easy to maintain. 

To access the KPQ Ticket System, please visit: http://compsci.adelphi.edu/~proggadeb/Software-Final-Project/home.php

If you have any questions, please contact kaylapollock@mail.adelphi.edu or our Help Desk

  ![Home](/img/1.png)
  
Everytime you visit our site, you will be brought to this page, the homepage. From here, you are given the option to add an issue, query issues, or log in if you are a worker. Our contact information is listed in the middle, should you need any assistance, and you will be able to revisit the homepage whenever you want.

## Testing
Testing helps you to evaluate how a system will actually perform when it is used by others, so of course, we needed to test our system. Because out system was not in Java so JUnit was not applicable, we conducted our own unit tests. We tested what will happen when logging in with invalid credentials, we made sure each user was able to have the correct access, and unable to access/alter information they were not authorized to. We manually tried breaking our system by running through it multiple times. We tested our code as we went and made sure it was secure and worked as intended before moving on. For example, we focused on logging in as all users first, making sure access was granted properly and making sure basic users could not change any information, before moving on to another part. By testing as we went, we saved ourselves a lot of time. If we kept going and worked on fragments of code from different sections each week, we would have had a lot of testing to do in the end, and all at once.

## References
We would like to credit Dr. Chay’s PowerPoints, that we referenced throughout the development process, when it came to the design phases and modeling, as well as testing and agile methodologies.

We also incorporated our knowledge of databases, html, and php that we obtained in our Database Management Systems course during our time at Adelphi.

We also used https://time.is/ for our date and time display on the homepage

## Concluding Remarks
When it comes to tracking who exactly did what, that is hard to do, and perhaps something we should have tried to do better. It was hard to keep track of exactly who did what, since we all adjusted each other’s code and all worked together, making over 1,000 additions and deletions to our code, as seen on our GitHub. It is also inaccurate in terms of who did what, because at first, not all of our members used GitHub, and code was emailed or texted to the Project Manager to upload, since we all were unfamiliar with GitHub at first. In the end, it all worked out. Kayla was the Project Manager, Gerard focused on Backend, Progga focused on Frontend however, we all worked together and helped each other out. 

