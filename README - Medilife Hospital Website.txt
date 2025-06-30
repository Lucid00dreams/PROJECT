
===========================================================
                MEDILIFE HOSPITAL WEBSITE
===========================================================

DEVELOPERS
1.
2.
3.
4.
5. 
PROJECT TITLE: Medilife Hospital Website  

===========================================================
PROJECT OVERVIEW
===========================================================

The Medilife Hospital Website is a fully responsive, user-friendly platform designed to represent a modern healthcare institution online. 
It allows patients to:
- Explore hospital services and facilities
- Book medical appointments online
- Send contact messages directly through the website
- Subscribe to a newsletter
- View emergency contacts and hospital locations

===========================================================
FEATURES INCLUDED
===========================================================

- Home Page with Image Slider
- About Us & Services Page
- Dropdown for Medical Facilities
- Contact Form (stored in MySQL database)
- Appointment Booking Form (stored in MySQL database)
- Newsletter subscription input (non-functional placeholder)
- Responsive Layout (Mobile Friendly)
- PHP & MySQL Integration
- Form Validation and Alerts

===========================================================
TECHNOLOGIES USED
===========================================================

- Frontend: HTML5, CSS3, Bootstrap, jQuery, JavaScript
- Backend: PHP
- Database: MySQL (via phpMyAdmin)
- Development Server: XAMPP

===========================================================
DATABASE DETAILS
===========================================================

Database Name: `medilife_db`

Tables Used:
1. `contact_messages`
   - id (INT, Primary Key, AUTO_INCREMENT)
   - name (VARCHAR)
   - email (VARCHAR)
   - message (TEXT)
   - created_at (TIMESTAMP)

2. `appointments`
   - id (INT, Primary Key, AUTO_INCREMENT)
   - speciality (VARCHAR)
   - doctor (VARCHAR)
   - appointment_date (VARCHAR)
   - appointment_time (VARCHAR)
   - patient_name (VARCHAR)
   - phone (VARCHAR)
   - email (VARCHAR)
   - message (TEXT)
   - created_at (TIMESTAMP)

===========================================================
HOW TO SET UP AND EXECUTE
===========================================================

🔹 STEP 1: INSTALL XAMPP
- Download and install XAMPP from https://www.apachefriends.org/
- Start **Apache** and **MySQL** from the XAMPP control panel

🔹 STEP 2: SET UP THE PROJECT FOLDER
- Copy the folder `medilife` to: `C:\xampp\htdocs\`
- Example: `C:\xampp\htdocs\medilife\index.php`

🔹 STEP 3: IMPORT THE DATABASE
1. Go to `http://localhost/phpmyadmin`
2. Click **New**, create database named `medilife_db`
3. Click the new database → **Import** tab
4. Upload and import `medilife_db.sql` from your project folder

🔹 STEP 4: VIEW THE WEBSITE
- Open browser and go to: `http://localhost/medilife`

🔹 STEP 5: SUBMIT FORMS
- Navigate to:
  - `Contact Us` page to submit messages
  - `Appointment` page to book appointments
- Submitted data will appear in the respective tables in phpMyAdmin.

===========================================================
NOTES
===========================================================

- Make sure your files have a `.php` extension where backend processing is required (`contact.php`, `appointment.php`, etc.).
- Confirm database credentials in `db.php`:
<?php
$conn = mysqli_connect("localhost", "root", "", "medilife_db");
?>
- Data is stored in MySQL tables and can be viewed in phpMyAdmin.
- Ensure form `action` attributes point to the correct PHP files (e.g., `contact_process.php`, `appointment_process.php`).
- Uses alert() for form submission feedback (can be customized).

===========================================================
