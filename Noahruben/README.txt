********** NOAH'S ONLINE BOOKSTORE DEPLOYMENT DOCUMENTATION **********

Developed by: Noah Ruben


This file will explain to the user how to deploy the software that is used to run Noah's online bookstore.

Besides the contents that are in this folder, the two other programs you will need are:

 - XAMMP for PHP 7.4 Local Version (https://www.apachefriends.org/index.html)
 - PHP CodeIgniter 4 (https://codeigniter.com/download)
 - Web Browser (Google Chrome or Firefox recommended)

 
STEP 1: Copy entire 'Noahruben' folder with its contents and paste it to the 'htdocs' folder in your XAAMP folder.

            - On Mac, the XAAMP folder is in the Applications folder
            - On Windows, the XAAMP folder should be at the root of your C drive

STEP 2: Open the XAAMP manager, press the 'Manage Servers' tab and start running all of the servers.

STEP 3: Import the SQL database to your local server

        - Open your internet browser, type in 'localhost/' and press enter. You should see a XAAMP themed web page.

        - Navigate to the top right corner and click the 'phpMyAdmin' tab.

        - Click 'Databases', create a database and name it 'bookstore' as shown.

        - After you click create, press the 'Import' button. Click 'Choose File' and navigate to the 'bookstore.sql' file in the 'db' folder inside of 'Noahruben'.

        - Press 'Go'. The file should import successfully and the database will be set up.

STEP 4: Type 'localhost/Noahruben' in your browser and press Enter.

STEP 5: Sign up for a customer account or sign in to the admin account with the following credentials:

        - Username: admin@gmail.com 
        - Password: 12345

STEP 6: Enjoy Shopping!


TIPS / FUNCTIONALITIES

    - When signed in to a customer account, the user can only shop for books, comment/rate books, and see other customers. 
    - Admin accounts have access to more functionalities, including viewing all order history, changing inventory information, adding other admin accounts, and changing customer accounts.

    ALL USER FUNCTIONALITIES
    - To see the bookstore marketplace, click 'Shop Now'. This will allow the user to browse and search through all of the books and add books to their cart and check out.
    - To see and make comments on a book, click 'Read More' on any book in the browsing area.
    - To see other customers on the website who have made orders, go to the dashboard and press the 'Customers' button.
    - To sign out of your account, click your username on the top right corner and press the 'Sign Out' button.

    ADMIN FUNCTIONALITIES ONLY 
    - To add and remove users and other admins press the 'Admin' tab on the left.
    - To view the list of all orders press the 'Orders' tab on the left.
    - To view the list of all individual products that have been ordered press the 'Products Ordered' tab on the left.
    - To add, delete, and edit inventory, press the 'Products' button on the dashboard.

    





