# Bank website
Isaac's, Austin's and Sven's  Project

#Summary:
Using docker, this is a pseudo Bank website that allows users to 
create an account with bank accounts that hold money that can be changed via transactions.

======================================

#Report of Bank website
Written by Sven Gerhards. Reviewed and discussed with Isaac Clancy and Austin Chen.

#About

The purpose of this report is to introduce our First National Bank Project. Every feature and design decision will be listed and discussed in details. There is also a specific instruction for End-Users.
We continuously worked on our project using GitHub (https://github.com/Paraakie/Bank-website)

#Features
#User-Accounts

In order to use our website, one has to create a user-account. A user account has three variables ID, which are generated by the program as well as a Name and a Password. The Password has to be at least 4 characters - long. After registering, the user will be logged-in automatically and has the ability to log-out. The user will also be able to view all of the transactions made by their own account.

#Bank-Accounts

Once the user log into their user-account they will have the ability to create unlimited bank accounts. Creating a bank account requires the user to enter a name. There will be no restrictions applied to the name because multiple users are expected to use generic names such as ‘Savings’. Furthermore, they can see all of their bank accounts and the accounts’ details. A single bank account can be deleted if the owner decides to withdraw all the funds. Additionally the user can look at transactions specifically to a single account.

#Transactions

Having a bank account allows the user to deposit, withdrawal and transfer money from their accounts. Transferring their money is only allowed between bank accounts in our database. Invalid input is accounted for with was addresses using the html input-tag attributes.
	Deposit
	This feature prompts the user to enter a number they’d like to add to their account.
	Withdrawal
	In parallel to the deposit features, this feature removes money from an account.
	Transfer
In order to transfer money between accounts, a user is required to enter the money value and the account that money is being transferred to. Transfers will be recorded as a combination of a deposit and a withdrawal.
Design Choices

#Data-Modelling

During the initial drafting phase, this was the first draft we came up with for the database.
“UserID” would be the foreign key of User’s “ID” and “AccountID” would be Accounts’ “ID”.


However during development, we agreed that a name for an account was necessary for the user to identify their account more easily; hence, a name variable was added to Accounts.
Deleting accounts was complicated and resulted in bugs, we came to the conclusion that “AccountID” couldn’t be a Foreign key. Additionally, the connection between accounts and transactions is generally weak as it was only used to display the transactions. The values in question can’t be changed, this change shouldn’t cause any bugs or problems.


#Instructions for end users for First National Bank

#Create an account

Connect to localhost:8000 to connect to the website. 
If this is the first time with First National Bank (FNB), the user has to click the Sign-up button to create an account. They need to be aware that the password has to be at least 4 character -  long. 



#Manage your money

To get started click “Create Bank Account”. Name the account something is easy to understand like “Savings” or “For House” as the name can’t be changed. 
Once created you got a wide range of options to manage your account, start with deposit, a recommended starting amount is $1000. Your money can be withdrawn at any time! If you want to move money from one account to another, pay someone, whatever; you can transfer your money, as long as the account was created with FNB.



