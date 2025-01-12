# Online Exam System

## Project Description
The **Online Exam System** is a web-based application designed to facilitate seamless online examinations for students. This system leverages the power of **HTML**, **CSS**, **PHP**, and **SQL** to provide a user-friendly platform for conducting exams efficiently. It ensures a streamlined process for both students and administrators by offering features like user authentication, exam management, and result generation.

## Features
- **User-Friendly Interface**: Clean and intuitive design using HTML and CSS for easy navigation.
- **Dynamic Functionality**: Interactive features powered by PHP for handling user inputs and exam logic.
- **Secure Database Integration**: SQL database ensures secure storage of user data, exam questions, and results.
- **Role-Based Access**:
  - **Admin**: Manage questions, schedule exams, and view results.
  - **Student**: Take exams and view their scores.
- **Real-Time Result Generation**: Instant feedback after exam completion.

## Technologies Used
- **Frontend**: HTML, CSS
- **Backend**: PHP
- **Database**: SQL (MySQL preferred)

## Installation Steps
1. Clone the repository to your local system.
2. Set up a web server (e.g., XAMPP, WAMP, or LAMP).
3. Import the SQL database:
   - Locate the `.sql` file in the project folder.
   - Import it into your database management system (e.g., phpMyAdmin).
4. Configure the database connection in the `config.php` file:
   - Update the host, username, password, and database name.
5. Start the web server and access the project through your browser.

## How It Works
1. **Admin Panel**:
   - Add, edit, or delete exam questions.
   - Schedule exams and manage students.
   - View student results and analytics.
2. **Student Dashboard**:
   - Login to access assigned exams.
   - Answer questions and submit the exam.
   - View results immediately after completion.

## Contributing
Contributions are welcome! If you'd like to contribute to this project, please follow these steps:
1. Fork the repository.
2. Create a new branch (`git checkout -b feature-name`).
3. Commit your changes (`git commit -m 'Add some feature'`).
4. Push to the branch (`git push origin feature-name`).
5. Create a Pull Request.
