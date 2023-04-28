Do at least ONE of the following tasks: refactor is mandatory. Write tests is optional, will be good bonus to see it. 
Please do not invest more than 2-4 hours on this.
Upload your results to a Github repo, for easier sharing and reviewing.

Thank you and good luck!



Code to refactor
=================
1) app/Http/Controllers/BookingController.php
2) app/Repository/BookingRepository.php

Code to write tests (optional)
=====================
3) App/Helpers/TeHelper.php method willExpireAt
4) App/Repository/UserRepository.php, method createOrUpdate


----------------------------

What I expect in your repo:

X. A readme with:   Your thoughts about the code. What makes it amazing code. Or what makes it ok code. Or what makes it terrible code. How would you have done it. Thoughts on formatting, structure, logic.. The more details that you can provide about the code (what's terrible about it or/and what is good about it) the easier for us to assess your coding style, mentality etc

And 

Y.  Refactor it if you feel it needs refactoring. The more love you put into it. The easier for us to asses your thoughts, code principles etc


IMPORTANT: Make two commits. First commit with original code. Second with your refactor so we can easily trace changes. 


NB: you do not need to set up the code on local and make the web app run. It will not run as its not a complete web app. This is purely to assess you thoughts about code, formatting, logic etc


===== So expected output is a GitHub link with either =====

1. Readme described above (point X above) + refactored code 
OR
2. Readme described above (point X above) + refactored core + a unit test of the code that we have sent

Thank you!


-------------------------------------

Solution

X.
A readme with:   Your thoughts about the code. What makes it amazing code.


- My personally thoughts about the code are that code is not well structured. All business logic wrote in the repository class Which is not a good approach.
  Because the repository pattern is used to interact with the database like you define methods in the base repository. 
- I noticed that you are using Lazy loading in BookRepository class instead of eager loading which is not recommended.  So I replaced all lazy loading with eager loading
- In BookRepository store function I noticed excessive use of in_array functions which affect the performance. I changed that approach with associative array mapping.
I also noticed excessive use of hard-coded if else which makes code unreadable. I also noticed unnecessary variable memory allocation.
- In BookRespository class I found one common helper function convertToMints so I created separate helper class for that.
- In BookRespository class I found many email notifications which impact our code performance very badly. We always prefer to use queues for email notifications.
- In BookController class there is one function called "distancefeed". In that function, you validate request variables using if-else.
I replaced these if-else with validation form request class.

Y.  Refactor it if you feel it needs refactoring.

As you mentioned that Please do not invest more than 2-4 hours on this, so I tried my best to implement my way of thinking.
I am sure that it will give you an idea of my approach.Hope you give me a chance to appear in next interview for further evaluation
Thank you

===== So expected output is a GitHub link with either =====

https://github.com/faizan944/code_test_2022_v63

