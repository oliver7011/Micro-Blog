# Micro-Blog Assignment involving MySQL - (HTML/Javascript/CSS/PHP):

Built using the codeigniter framework, the blog interfaces with a mySQL database stored externally. 
The database contains:
- Login Data
- Message Data
- User Data

Login Screen:
<p>
  <img src="https://github.com/oliver7011/Micro-Blog/blob/main/login.PNG" width="445" height="365">
</p>
The login data is sent with a POST request to an authentication script. The password is hashed using SHA1 and compared to the database.
If the login is sucessful a session is created storing the users data and they are redirected to the their message feed.

Message Feed:
<p>
  <img src="https://github.com/oliver7011/Micro-Blog/blob/main/feed.PNG" width="796" height="411">
</p>
The message feed dynamically updates depending on the messages posted by those who they follow.
This feed assigns a colour to each message writer using a javascript function.

Messages can be written to database with the 'post' form and searched for with the 'search' form.
<p>
  <img src="https://github.com/oliver7011/Micro-Blog/blob/main/post.PNG" width="390" height="194">
  
  
  
  <img src="https://github.com/oliver7011/Micro-Blog/blob/main/search.PNG" width="390" height="194">
</p>
