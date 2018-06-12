# FORESE Website
This is the official GitHub page for the FORESE website. All backups are stored here.

## Adding members to the website

1. Start off by downloading a FTP client, such as Cyberduck or Filezilla. Cyberduck is preferred because it's much more simpler to understand if you're a beginner. [Here's a link.](https://cyberduck.io)
2. Launch the application once it's been installed properly. Open up a new connection. When prompted for the details, enter the following.
  ```
Server: www.forese.in
Username: forese_techteam@forese.in
Password: <enter the one I gave you>
```
3. If you entered all the details correctly, then you should have a message at the bottom saying "login successfully" and the window will be filled with all sorts of folders and files.
4. The file that needs to be edited is the ```index.html``` file. Open the file in a text editor of your choice.
5. When you open the file, the code might seem overwhelming, but don't worry. Scroll down to line 592.
6. As you're scrolling down, you might see repeating sections of code with names and other details in them. They will look similar to this.
```
<div class="teamMember">
    <img src="2nd/arj.jpg" class="teamImgs">
    <p class="teamDescs">Arjun Aravind<br><br>Member<br><br><span id="color">The guy who made this site. #Wakanda</span></p>
</div>

...
...

<div class="teamMember">
    <img src="2nd/ara.jpg" class="teamImgs">
    <p class="teamDescs">Aravind Balki<br><br>Member<br><br><span id="color">Arjun's best friend.</span></p>
</div>
```
These are the HTML 'divs' (or divisions) which make up each particular entry in the webpage.
7. Your job is to copy-paste these divs and modify them so that you can create new entries for the 5 people that you have been assigned.
8. Just to be clear, the div should be of the format:
```
<div class="teamMember">
    <img src="1st/<IMAGE FILE NAME WITH EXTENSION>" class="teamImgs">
    <p class="teamDescs">NAME OF STUDENT HERE<br><br>Member<br><br><span id="color">BIO HERE</span></p>
</div>
```
Don't change anything else.

9. Now, you would have noticed that you are supposed to provide the image name in the second line of each 'div'. However, for this, shouldn't we upload the photo first? So, go to the Cyberduck window with all the files and folders. There should be a folder called '1st'. Go into this folder and copy-paste the images of the 5 students that you want to add into the page.
10. Make sure the photos have a one-word name such as "rajini.jpg" or "kamal.jpg".
10. Go back to the ```index.html``` file, add 5 entries with the corresponding information and SAVE IT. Make sure you save it, guys.
11. Just to make sure you've done it perfectly, navigate to the 'images' tab in the FORESE website and see if your changes have been applied. Scroll down though, it'll be all the way at the bottom. If it's not, try saving the file again. If this doesn't work or if the page seems to be not working properly, give me a call.

If you guys face any problems or have any queries, call me. 
