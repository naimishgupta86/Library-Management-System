# 📚 Library Management System

A complete web-based **Library Management System** developed using **PHP, MySQL, HTML, CSS, JavaScript, and PHPMailer**. The system helps librarians manage books, students, book issuing, book returns, and email notifications efficiently.

---

## 🌐 Live Demo

🔗 https://librarymanage.xo.je

---
## 🔐 Demo Admin Login

Use the following credentials to explore the project:

| Username | Password |
|----------|----------|
| admin | 12345 |

> **Note:** These credentials are provided only for demonstration purposes.

---

## 🚀 Features

- 🔐 Admin Login
- 📚 Add, Update & Delete Books
- 👨‍🎓 Add, Update & Delete Students
- 📖 Issue Books
- 📥 Return Books
- 📦 Automatic Book Quantity Management
- 📧 Email Notification on Book Issue
- 📧 Email Notification on Book Return
- 🔍 Search Books
- 📋 View Issued Books
- 📊 Admin Dashboard
- 💻 Responsive User Interface

---

## 🛠️ Technologies Used

- PHP
- MySQL
- HTML5
- CSS3
- JavaScript
- PHPMailer
- Git & GitHub
- InfinityFree Hosting

---

## 📂 Project Structure

```
Library-Management-System/
│
├── index.php
├── login.php
├── dashboard.php
├── addbook.php
├── editbook.php
├── deletebook.php
├── viewbook.php
│
├── addstudent.php
├── editstudent.php
├── deletestudent.php
├── viewstudent.php
│
├── issuebook.php
├── insertissue.php
├── viewissued.php
├── returnbook.php
├── searchreturn.php
├── bookreturn.php
│
├── db.php
├── mail.php
├── style.css
├── logout.php
└── README.md
```

---

## 📌 Main Modules

### 📚 Book Management
- Add Book
- Edit Book
- Delete Book
- Search Book

### 👨‍🎓 Student Management
- Add Student
- Edit Student
- Delete Student

### 📖 Book Issue
- Issue book to students
- Automatic stock update
- Email notification with Issue ID

### 📥 Book Return
- Return book using Issue ID
- Automatic stock update
- Email notification after return

---

## 📧 Email Notification

The system automatically sends email notifications when:

- ✅ A book is issued
- ✅ A book is returned

Each email contains:

- Issue ID
- Book Name
- Student Name
- Issue Date
- Return Date

---

## ⚙️ Installation

### Clone Repository

```bash
git clone https://github.com/naimishgupta86/Library-Management-System.git
```

### Move Project

Copy the project folder to:

```
C:\wamp\www\
```

### Import Database

Import the SQL file into MySQL.

### Configure Database

Update **db.php**

```php
$host="localhost";
$user="root";
$password="";
$database="library";
```

### Start Server

- Apache
- MySQL

Open:

```
http://localhost/Library%20Mangement%20System/
```



## 👨‍💻 Developer

**Naimish Gupta**

GitHub:
https://github.com/naimishgupta86

Email:
naimishguptaqwqw@gmail.com

---

## ⭐ Project Highlights

- Live Hosted Website
- GitHub Repository
- Email Notification System
- Inventory Management
- User-Friendly Interface
- Suitable for College Projects & Learning

---



⭐ If you found this project useful, please consider giving it a **Star** on GitHub.
