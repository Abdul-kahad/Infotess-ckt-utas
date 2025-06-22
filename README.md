 INFORMATION TECHNOLOGY DEPARTMENT WEB PORTAL

---

 📝 Description

This documentation provides a comprehensive overview of the Information Technology Department Web Portal, a user-friendly and responsive website developed to serve the needs of students within the C.K. Tedam University of Technology and Applied Sciences (C.K.T UTAS) IT Department.

The portal is designed to facilitate easy access to departmental resources, announcements, academic information, and student services, significantly enhancing communication and collaboration among students and faculty. Built with modern web technologies including JavaScript for responsive design and custom CSS for a polished user interface, the website ensures accessibility and optimal usability across various devices such as desktops, tablets, and smartphones.

This project aims to improve the overall student experience within the Information Technology department, fostering a connected and informed academic community.

---

 ✨ Features

The Information Technology Department Web Portal offers a robust set of functionalities designed to support students and departmental communication:

 Centralized Resource Access: Provides a single point of access for departmental resources and academic information.
 Dynamic Announcements: Delivers timely updates and announcements to keep students informed.
 User-Friendly Interface: Designed with custom CSS for an intuitive and aesthetically pleasing user experience.
 Responsive Design: Ensures seamless accessibility and proper display across a wide range of devices (desktops, tablets, smartphones).
 User Authentication & Session Management: Secure system for managing user logins and sessions.
 Backend Data Handling: Robust server-side logic for managing and serving dynamic content, user information, and academic records.
 Enhanced Communication & Collaboration: Aims to foster a more connected and informed academic environment.

---

 🛠️ Technologies Used

The website was meticulously developed using the following core web technologies:

 HTML (HyperText Markup Language): Forms the basic structure and content of all webpages, including text, images, and interactive forms.
 CSS (Cascading Style Sheets): Used for comprehensive styling of HTML elements, enabling an attractive, consistent, and responsive design.
 JavaScript: Implements client-side functionalities such as animations, interactive elements, and dynamic content manipulation to enhance user experience.
 PHP (Hypertext Preprocessor): The server-side scripting language handling backend processes like user authentication, session management, and communication with the MySQL database.
 MySQL (Structured Query Language): A relational database management system used to store, retrieve, and manage all website data, including user information, academic records, and announcements across multiple connected databases.

These technologies work together to create a dynamic, responsive, and user-friendly website for the Information Technology department.

---

 🚀 Getting Started (Local Setup)

Follow these steps to get a local copy of the project up and running on your development machine.

 Prerequisites

To run this project locally, you will need the following software installed:

 Git: For cloning the repository.
 A Local Web Server with PHP Support: (e.g., Apache HTTP Server, Nginx).
     Recommended: A WAMP (Windows), MAMP (macOS), or XAMPP (Cross-platform) stack, which bundles Apache, MySQL, and PHP together.
 MySQL Server: To host the project's databases.
 Web Browser: (e.g., Chrome, Firefox, Edge, Safari) to view the application.

 Installation & Setup

1.  Clone the repository:
    Open your terminal or command prompt and navigate to your web server's document root directory (e.g., `htdocs` for Apache/XAMPP, `www` for WAMP/MAMP). Then, clone the repository:
    ```bash
    git clone [https://github.com/](https://github.com/)[your-github-username]/information-technology-department-web-portal.git
    ```
    (IMPORTANT: Replace `[your-github-username]` with your actual GitHub username. The repository name used here is a suggestion based on the project title.)

2.  Navigate into the project directory:
    ```bash
    cd information-technology-department-web-portal
    ```
    (Adjust `information-technology-department-web-portal` if your cloned folder has a different name.)

3.  Ensure project files are on your web server:
    Verify that the cloned project files are located within your local web server's document root (e.g., `C:\xampp\htdocs\information-technology-department-web-portal`).

4.  Database Setup:
    This project uses multiple MySQL databases. You will need to create them and import any available schema files.

     Start your MySQL Server.
     Access your MySQL administration tool (e.g., phpMyAdmin, MySQL Workbench, or the MySQL command line).
     Create the following three empty databases:
         `login_db`
         `emails`
         `db1`
        (Example SQL command to create one database, repeat for others):
        ```sql
        CREATE DATABASE login_db;
        ```
     Import Schema/Initial Data: If your project includes `.sql` files for database schemas (e.g., `database/schema_login_db.sql`, `database/schema_emails.sql`, `database/schema_db1.sql`), import them into their respective newly created databases. This will set up the necessary tables and populate any initial data.

5.  Configure Database Connection:
    Your project's database connection details are crucial for local operation. Based on the provided information, your connection uses `root` as the user with no password for `localhost`.

     Locate the PHP file(s) responsible for database connections in your project. This is often named `db_config.php`, `connection.php`, or similar.
     Ensure the connection variables are set as follows (these are the default local settings, do not use these for production):
        ```php
        <?php
        $DB_HOST = 'localhost';
        $DB_USER = 'root';
        $DB_PASS = ''; // No password for 'root' on default XAMPP/WAMP
        $DB_NAME_LOGIN = 'login_db';
        $DB_NAME_EMAILS = 'emails';
        $DB_NAME_DB1 = 'db1';

        $con = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME_LOGIN);
        $news_conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME_EMAILS);
        $users_conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME_LOGIN);
        $students_conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME_DB1);

        if ($con === false || $news_conn === false || $users_conn === false || $students_conn === false) {
            die("Connection Error: " . mysqli_connect_error());
        }
        // Add more error handling or a graceful redirect if connection fails
        ?>
        ```
     Security Reminder: For any deployment beyond local development, it is critical to use strong database credentials and avoid hardcoding them directly in your code. Utilize     environment variables for production security.

---

 💻 Usage (Running the Application Locally)

1.  Ensure your local web server (e.g., Apache) and MySQL server are running.
2.  Access the application:
    Open your web browser and navigate to the local address of your project. This will typically be:
    `http://localhost/[your-project-folder-name]`
    Example: `http://localhost/information-technology-department-web-portal`
    (Adjust the URL based on your web server's configuration and the exact name of your project folder.)

3.  Explore the Portal:
    Once loaded, you can navigate through the website, access departmental resources, view announcements, and utilize student services as implemented.

---

 👥 Team Members (THE CODERS)

This website was a collaborative effort developed by The Coders team from C.K. Tedam University of Technology and Applied Sciences (C.K.T UTAS). Each member's contribution was essential to delivering a functional, attractive, and efficient website tailored for the IT department’s students and faculty.

| Name                 | Role Played           |
| :------------------- | :-------------------- |
| BALAFAM TIMOTHY BASAH| Project Manager       |
| BINAB CHARITY DAPOK  | Project Manager       |
| MUTARU ABDUL-KUDUS   | Front-End Developer   |
| BILPIT MAJEED MOSES  | Front-End Developer   |
| MUTARU ABDUL-KUDUS   | Responsiveness (UI/UX)|
| BILPIT MAJEED MOSES  | UI/UX Designer        |
| AKUMBE AYAABA        | UI/UX Designer        |
| BUHARI ABDUL-KAHAD   | Back-End Developer    |
| NGULA ARAFAT         | Content Writer        |

---

📄 License

This project is licensed under the MIT License.
