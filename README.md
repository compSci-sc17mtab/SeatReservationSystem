<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Get Started
- [Installation](#section-1)
- [Create Account](#section-2)
- [Add a local admin](#section-3)
- [Create Institution](#section-4)
- [Create a room](#section-5)
- [Booking a seat](#section-6)
- [Track and Trace](#section-7)

>User Documentation  can be found within /resources/docs/1.0






<a name="section-1"></a>
# Installation

---

- [Step 1: XAMPP](#section-1-1)
- [Step 2: Composer](#section-1-2)
- [Step 3: NPM](#section-1-3)
- [Step 4: Clone Git Repo](#section-1-4)
- [Step 5: Install Dependencies](#section-1-5)
- [Step 6: Create and Connect Database](#section-1-6)
- [Step 7: Migrate and Seed Database](#section-1-7)

<a name="section-1-1"></a>
## Step 1: XAMPP 
Install XAMPP onto your system, 
- (Download Link) : https://www.apachefriends.org/download.html
- (Alternate Download Link) : https://www.apachefriends.org/index.html
    - These links have installers for Windows, MacOS and Linux

<a name="section-1-2"></a>
## Step 2: Composer
Install Composer onto your system
Composer is a package manager for PHP 
- (Download link + Tutorial) : https://getcomposer.org/download/
    - Links has information on how to install for Windows, MacOS and Linux -

- Once downloaded run command  `composer -V` to ensure it is installed correctly

<a name="section-1-3"></a>
## Step 3: NPM 
- Ensure that NPM is installed on the system

<a name="section-1-4"></a>
## Step 4: Clone Git Repo
- Open a command line interface 
- Navigate to the directory you would like the application to be 
- Use the command `git clone https://github.com/compSci-sc17mtab/SeatReservationSystem.git`
    - Git URL: https://github.com/compSci-sc17mtab/SeatReservationSystem.git

<a name="section-1-5"></a>
## Step 5: Install Dependencies 
- Ensure you are within the project directory 
- Run command `composer install` to install Laravel dependencies
- Run command  `npm install` to install JS dependencies

<a name="section-1-6"></a>
## Step 6: Create and Connect Database
### Create Database
A database can be created using two methods 
#### Method 1 
> Ensure you have the MySQL path in your variables
- Open a command line interface and enter command  `mysql -u root`
- Once logged in use `create database app;` to create the database

#### Method 2 
- Start `XAMPP`
- Start `MySQL` and `Apache` servers
- Open `phpMyAdmin` through XAMPP
- Create a new database called `app`

### Connect to Database
- Open the `.env` file 
    - If there is no `.env` file then rename the '.env.example' to '.env' and use  that
- Find the `DB_DATABASE=` line. 
- Change this to `DB_DATABASE=app`
- Run the command `php artisan serve` command. It should automatically connect to the database

<a name="section-1-7"></a>
## Step 7: Migrate and Seed Database
>  If you have just run `php artisan serve` ensure that this is stopped before proceeding!

### Migrate 
- Use the command `php artisan migrate` to migrate the database

- Find the file `SeatReservationSystem/database/AdminSeeder.php`
- This file will create the administrator account 
- Change the email from `PleaseChangeThis@gmail.com` to the email address of the chosen administrator 
- Please change the password from `PleaseChange` to what you would like. 

> If in production change this password once database is seeded 


- The database can populate the database with example data to help with testing, if you would like this, tun the command  `php artisan db:seed`
- If you do not want these examples use the command `php artisan db:seed --class=AdminSeed` to only seed the admin account.  

- The example data creates:
    - Example Institute called `Example Institute`
    - Example Room called `Example Room`
    - Multiple bookings on `25/07/2021` at `7:00` 

    




<a name="section-2"></a>
# Create an Account
- [Register](#section-2-1)
- [Local Admins](#section-2-2)

<a name="section-2-1"></a>
## Register
- Click the ‘Register’ Button,
- Enter your details
- Press the ‘Register’ button once the details are entered.
- Ensure that the dashboard is displayed


<a name="section-2-2"></a>
## Local Admins
- If they need to be made a  Local administrator pleases see [Add Local Admin](#section-3)




<a name="section-3"></a>
# Add Local Admin

- [Prerequisites](#section-3-1)
- [Adding Permissions](#section-3-2)

<a name="section-3-1"></a>
## Prerequisistes
- Ensure you are logged in as the main Administration account
- Within the top right dropdown select `Team Settings`

  
<a name="section-3-2"></a>
## Adding Permissions
- Ensure that the currently selected team under `Team Name` is `Local Admins`
- Under the `Add Team Member` section enter the local admins email address
- There are three options for their role, select the `Local Admin` role
>  Ensure that you do not select `Administrator` or `Editor` this will give them the incorrect permission

- Select the `Add` button to add them to the `Local Admins` team.


## Removing Permissions 
- Ensure that the currently selected team under `Team Name` is `Local Admins`
- Under the `Team Members` section find the user that needs their permissions removed
- Select `Remove` on the far right to remove, select `Remove` on the pop-up to confirm 




<a name="section-4"></a>
# Create an Institution

- [Prerequisites](#section-4-1)
- [Creat an Institution](#section-4-2)


<a name="section-4-1"></a>
## Prerequisistes
- Ensure that user has been added to the  'Local Admins` team.
    - Within the top right dropdown select `Team Settings`
    - The users teams are listed within the `Switch Teams` section of the dropdown
    - See [Add Local Admin](#section-3) for more details   

<a name="section-4-2"></a>
## Create an Institution
- Within `Extra` select the `Add Institution` option
- Input the name and the passcode
    - Passcode is used to access an institution to make a booking




<a name="section-5"></a>
# Create a Room

- [Prerequisite](#section-5-1)
- [Creating a Room](#section-5-2)
- [Selecting a Room to Edit](#section-5-3)
- [Step by Step Guide](#section-5-4)

<a name="section-5-1"></a>
## Prerequisite
- Ensure you are within the `Local Admins` team.
- This can be found by selecting the dropdown in the top right, the users teams will be displayed in the `Switch Teams` section.
- Ensure that you have the correct institution selected.

<a name="section-5-2"></a>
## Creating a room
- Select the `Extra` drop down
- Within this select the `Create Room` option 
  

- Input the `Room Name`, `Opening Time` and the `Closing Time`
- Upload the rooms floor plan
>  Ensure that the floor plan is correctly scaled or the social distancing safety feature will not work


<a name="section-5-3"></a>
## Select Room to Edit
- Within the `Extra` dropdown select the `Edit Room` option.
- Select room that needs editing.


<a name="section-5-4"></a>
## Step by Step guide

### How to use the canvas
- 'ALT' + 'Left Click': Move view of canvas
- 'Mouse wheel': Changes level of zoom
- 'Alter Slider': Changes size of shapes
- 'Reset View': Resets the view of the canvas 
- 'Colour Options' : Various Colour Pallets to allow a user to change the seat colours

### Step 1
- The reference length is used to ensure that seats are socially distanced. 
- Find the length of a real world wall/room/area
- Align the reference on the canvas with the length by moving it around the canvas
    - The `Scale Reference` can be used to change the length of the line
    - The `Angle Reference` can be used to rotate the line 
- Then input the real world length (in metres) within the `Real-Life Length (metres)` input field
- Select `Set Reference` button.

### Step 2
- `Seating Area`, where the seats will be. 
- Each area is an enclosed space so will only check the social distancing for the seats within the area.
- `Exclusion Area`, where seats aren't allowed to be. 
- `Set Seat Area`, once the seating areas are where you want them be they need to be 'set' so that its easier to add the seats.
- `Unset seat area`, if there's a problem with the seating areas you can unset them and change them. 
- `Delete Area`, can delete a seating area or exclusion area if its not needed.

### Step 3
- Add the number of the seats required using the `Add More Seats` .
- Can resize the seats with the `Size of Seats` slider.
- `Delete seat`, can delete un-needed seats.

### Step 4
- Enter the distance that you would like the seats to be apart (minimum)
- When attempting to save the system will alert you to any errors, this includes:
    - Seats overlapping
    - Seat not in a seating area
    - Seating area overlap with an Exclusion area
    - Where seats are too close together
    
- If the reference length is not set a warning will appear informing the user of this. 





<a name="section-6"></a>
# Create a Booking
- [Prerequisite](#section-6-1)
- [Select the Room](#section-6-2)
- [Input Date/Time](#section-6-3)
- [Select Seat](#section-6-4)
  
<a name="section-6-1"></a>
## Prerequisite
- Ensure that you have the correct institution selected.

<a name="section-6-2"></a>
## Select the Room
- Select the `Book a Seat` link in the top navigation bar
- If you do not have a room selected it will show a list of rooms below

<a name="section-6-3"></a>
## Input Date/Time

<a name="section-6-4"></a>
## Select Seat 
- The rooms floorplan will then be displayed
- The default colour are 
    - `Red` : `Not Available` 
    - `Green` : `Available`
- Colour scheme can be changed through `Colour Options`
- Select the seat to book
- A `Book Seat` should appear, select it 
- System will notify the user about the status: Successful/Error 






<a name="section-7"></a>
# Track & Trace

- [Input Data](#section-7-1)
- [View Results](#section-7-2)


<a name="section-7-1"></a>
## Input Data 

- Input the date
- Select the Institution
- Select the Room
- Input the start time of the booking
- Click `Submit`

<a name="section-7-2"></a>

## View Results 
- The system will give you a list of emails to contact
- The system should also open your local email client and create a generic email informing the users of the incident




