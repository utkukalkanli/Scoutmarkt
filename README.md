 
Bilkent University

 
Department of Computer Engineering
 



Database Systems Project
Project Name: ScoutMarkt


Proposal Report


Berfu Deniz Kara	21201662	Section 2
Elif Demir		21601571	Section 2
Ömer Faruk Oflaz	21602649	Section 2
Utku Kalkanlı		21602325	Section 3
	
Instructor: Uğur Güdükbay / Özgür Ulusoy
Teaching Assistant: Mustafa Can Çavdar
 
 
Proposal Report, Mar 02 2020

Table of Contents

1. Introduction	2
2. Project Description	2
2.1 Why a Database System Is Needed	2
2.2 How a Database System Is Going to Be Used	3
3. Requirements	3
3.1 Functional Requirements	3
3.1.1 Football Club Requirements	3
3.1.2 Agency Requirements	3
3.1.3 Agent Requirements	3
3.1.5 Admin Requirements	4
3.1.6 System Requirements	4
3.2 Non-Functional Requirements	4
3.2.1 Performance	4
3.2.2 Reliability	4
3.2.3 Maintainability	4
3.2.4 User Friendly Interface	4
3.3 Pseudo Requirements (Constraints)	4
4. Limitations	5
5. Entity - Relationship Model	6
5.1 Entity - Relationship Diagram	6
5.2 Entity - Relationship Diagram Description	7
6. Conclusion	7
7. References	7













1. Introduction
This report is the proposal report for the CS 353 Database Systems term project. This project is designed to create a scouting platform for the football clubs. This proposal report details the project description, functional and non-functional requirements, limitations and entity-relationship model for the database system. Progress of the project can be followed through this website: https://github.com/utkukalkanli319/Scoutmarkt
2. Project Description
	This project is a web-based scouting platform for football players just like https://scoutingsystem.com. There are clubs, scouting agencies, scouts, football players and agents. Clubs request scouts from scouting agencies to observe and find talented football players in certain tournaments and/or countries. According to club requests scouting agencies select suitable scouts and assign them to tasks. After their observations finish scouts write a report on the talented football players and serves it back to clubs. Clubs compare their football players with the reported football players and may choose to make a transfer offer to the talented football player’s club and agent.

2.1 Why a Database System Is Needed 
	Football environment contains vast amount of information about its participants such as players, clubs, tournaments, agents, scouts and so on. Informations about these components are not just static. They are also changed and updated in time. In addition, there are actions to be recorded such as transfer to maintain consistency in the system and to it reliable. It is remarkably difficult to store and update such a huge amount of information without automated system. Therefore, we use database to handle this difficulty and regulate a certain actions that users perform.
2.2 How a Database System Is Going to Be Used

	The database is going to provide structure to manage all data related to scouting in football. We are going to use the database management system so as to search for the relevant data regarding users’ demands by way of queries. We are going to update the database considering different events such as matches, transfers, performance changes by creating new entries or updating the current ones. The database is going to provide data about clubs requesting talented players and scouting agencies that have agents. Thus, clubs can find a talented players and compare them with their own players among these data. Additionally, we are going to use the database triggers to relate distinct elements to each other to provide a fluid and functional system.
3. Requirements
3.1 Functional Requirements
	3.1.1 Football Club Requirements 
Football clubs have the name, league, rank and country.
Football clubs can request scouts from scout agencies. 
Football clubs compare footballers by their talents.
Clubs can make transfer offer.
Clubs can accept or decline transfer offer.
Clubs will have contract with their own football players
	3.1.2 Scouting Agency Requirements 
Scouting agencies have name and scouts.
Scouting agencies will assign scouts. 

	3.1.3 Scout Requirements
Scouts will have id, name, availability and task attributes
Scouts will be unique in their Scouting Agency, by their ID.
Scouts will watch matches in events
Scouts will prepare report with a list of talented players they have found.
Scouts will find talented football players according to their skill.
 
	3.1.4 Agent Requirements 
Agents have to register with their name, country and, if they are not independent agency name. 
They are not working in scouting agencies. 
They represent the football players and football clubs needs their respond in order make the transfer. 
One agent can have many football player, but one football player will have only one agent.
3.1.4 Football Player Requirements 
Football Players will have uniqueID, name, height, age, team, country, league, minutesPlayed, position, bestFoot, birth country, transfer fee, goal, asist and skills attributes.
Football players will have contract with their clubs.
Football players will have agents, and agents will handle the transfers.

3.1.5 Event Requirements 
Events will have name, startdate, enddate, and country attributes.
Events will have matches, and matches will have date and score, with participating clubs.
Events will have two sub-types, an event can be League or Tournament.
3.1.6 Transfer Requirements 
Transfers will happen with the participation of offering club, responding club, and the agent of the football player the offer made.
Transfer offers will have player name and fee.
3.1.6 Admin Requirements 
Admins have special access to the system in order to control the technical process and problems. 
	3.1.7 System Requirements 
System sends a notification when there is an update related to transfer offers. 
3.2 Non-Functional Requirements
	3.2.1 Performance
	In order to maintain the online traffic through the system, the server will handle more than 100 people at the same time.  
3.2.2 Reliability
Our system has different types of entrance to the system such as the football club or scouting agency.  Therefore, it is important to distinguish the sign in properties according to different types of users. To achieve this goal our system will have usernames and password. In order to obtain a secure system this information is encrypted by MD5 algorithm. 
3.2.3 Maintainability
In order to obtain maintainability, the design patterns will be used to make the development process easier. Also the project will be done according to object oriented engineering principles. 
3.2.4 User Friendly Interface
	The target users of our project are agencies and football clubs. Since these users are not expected to be knowledge on database usage, our main goal is to prepare an user friendly interface to those who will use our system. The user friendly interface includes the easy and quick log in to the system, the plain design of the buttons which are easy to find and use, different types of interface which is design to the user types such as club, agent or agency. 
 
3.3 Pseudo Requirements (Constraints)
We will use MySQL as Structured Query Language
We will use PHP for back-end development
HTML, CSS and Javascript will be used for our website
We plan to use AJAX to interactively communicate between webpage and database
We will use MD5 algorithm for encryption. 

4. Limitations
In order to sign up to the system, users with personal accounts must give their real name, surname, and they have to select the company or football player that are working for. 
The password must have at least 5 characters which are consist of at least one letter and one number. 
The transfer only happens if both the football club and the football player's personal agency approve the process. 
A user ( football club, agent, agency) can only one account in the system. 
In order to register to the system as the football club or agency services, legal name and country must be stated. Football clubs are also expected to state their current players. 
The agents, clubs and agents can add a picture or logo if it is less than 20 MB.
Admins cannot create a user account. 
5. Entity - Relationship Model
5.1 Entity - Relationship Diagram


6. Conclusion
Clubs play matches which can be in a tournament or a league. Clubs have football players. Every football player have an agent who represents the player in transfer request. The clubs can make a request to the scouting agency for scouting talented players. After the request is made, the agency assign a scout to an event to watch players and the scout prepares a report to state the players' abilities. This report is sent to the club for evaluation. Clubs can compare the talented players in the report and make a transfer offer in demand. If both the requesting club and football player's agent approve the transfer, it happens.

Website :   https://utkukalkanli319.github.io/Scoutmarkt/
7. References
Avi Silberschatz , Henry F. Korth , S. Sudarshan, “Database System Concepts, Sixth
Edition”, ISBN-13: 978-93-3290-138-4, MCGraw Hill

 
