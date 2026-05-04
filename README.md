# 🎓 Student Information Management System (SIMS)

A web-based student records system built for the **Department of Computer Science & Engineering at Rajshahi University of Engineering & Technology (RUET)**. The system allows administrators to register students, search records by multiple criteria, and delete entries — all through a browser-based interface backed by a MySQL database.

---

## 📋 Table of Contents

- [Overview](#-overview)
- [Features](#-features)
- [Project Structure](#-project-structure)
- [Tech Stack](#-tech-stack)
- [Database Schema](#-database-schema)
- [Prerequisites](#-prerequisites)
- [Installation](#-installation)
- [How to Use](#-how-to-use)
- [Author](#-author)

---

## 🔍 Overview

This system was developed to replace paper-based student record keeping in a university department. It provides a centralised web portal where staff can register new students, look up existing records by roll number, name, or age, and remove outdated entries — all without touching the database directly.

---

## ✨ Features

- 📝 **Student Registration** — capture roll number, registration number, series/batch, name, age, gender, mobile, and email
- 🔎 **Search by ID** — look up a student record by their roll number
- 🔎 **Search by Name** — retrieve records matching a student's name
- 🔎 **Search by Age** — filter students by age
- 🗑️ **Delete by ID / Name / Age** — remove records using any of the three search criteria
- 🏫 **Department Portal** — homepage with image slider, navigation menu, and department information
- 👥 **Academic Profiles** — individual pages for faculty and students by series (04, 05, 06… series)
- 📞 **Contact & About pages** — department contact and information pages

---

## 📁 Project Structure

```
Student-Information-Management/
│
├── index.htm                  # Homepage — department portal with image slider
├── registration.htm           # Student registration form
├── registration.sql           # MySQL database schema
│
├── id.htm / idd.htm           # Search / Delete by ID (forms)
├── name.htm / named.htm       # Search / Delete by Name (forms)
├── age.htm / aged.htm         # Search / Delete by Age (forms)
│
├── sno.php                    # PHP — search by roll number
├── name.php                   # PHP — search by name
├── age.php                    # PHP — search by age
├── snod.php                   # PHP — delete by roll number
├── named.php                  # PHP — delete by name
├── aged.php                   # PHP — delete by age
│
├── aboutus.htm                # About the department
├── contact.htm                # Contact page
├── incharge.htm               # Head of Department page
├── instructor.htm             # Teachers page
├── staff.htm                  # Staff page
├── firoz.htm / syed.htm       # Individual academic profile pages
│
├── css/
│   ├── mainstyle.css          # Global styles
│   ├── navbar.css             # Navigation bar styles
│   └── dropdown.css           # Dropdown menu styles
│
├── js/
│   ├── js-image-slider.js     # Image slider script
│   └── js-image-slider.css    # Image slider styles
│
└── Images/
    └── Slider/                # Campus photo slideshow images (a.jpg – h.jpg)
```

---

## 🛠 Tech Stack

| Layer      | Technology                        |
|------------|-----------------------------------|
| Frontend   | HTML5, CSS3                       |
| Backend    | PHP (mysqli)                      |
| Database   | MySQL                             |
| Environment| XAMPP / WAMP / LAMP               |

---

## 🗄️ Database Schema

The system uses a single `registration` table in the `cse` database:

```sql
CREATE TABLE `registration` (
  `sn`       int(2)       NOT NULL,   -- Serial number (Primary Key)
  `regno`    varchar(10)  NOT NULL,   -- Registration number
  `batno`    varchar(10)  NOT NULL,   -- Batch / series number
  `name`     varchar(35)  NOT NULL,   -- Student full name
  `age`      int(3)       NOT NULL,   -- Age
  `gender`   varchar(6)   NOT NULL,   -- Male / Female
  `mobileno` varchar(15)  NOT NULL,   -- Mobile number
  `email`    varchar(30)  NOT NULL,   -- Email address
  PRIMARY KEY (`sn`)
);
```

---

## 🛠 Prerequisites

- **XAMPP**, **WAMP**, or **LAMP** stack installed
- PHP 5.x or later
- MySQL 5.x or later
- A modern web browser

---

## ⚙️ Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/frmahmud/Student-Information-Management.git
   ```

2. **Move the project folder** to your server's web root:
   - XAMPP: `C:/xampp/htdocs/`
   - WAMP: `C:/wamp/www/`
   - LAMP: `/var/www/html/`

3. **Import the database**
   - Open **phpMyAdmin** at `http://localhost/phpmyadmin`
   - Create a new database named `cse`
   - Import `registration.sql` into that database

4. **Check the database connection** in each PHP file — the default credentials are:
   ```php
   mysqli_connect("localhost", "root", "", "cse");
   ```
   Update the username/password if your local MySQL setup differs.

5. **Launch the app** in your browser:
   ```
   http://localhost/Student-Information-Management/index.htm
   ```

---

## 🕹 How to Use

| Task                  | Page                          |
|-----------------------|-------------------------------|
| Register a student    | `registration.htm`            |
| Search by roll number | `id.htm` → processed by `sno.php`   |
| Search by name        | `name.htm` → processed by `name.php` |
| Search by age         | `age.htm` → processed by `age.php`  |
| Delete by roll number | `idd.htm` → processed by `snod.php` |
| Delete by name        | `named.htm` → processed by `named.php` |
| Delete by age         | `aged.htm` → processed by `aged.php`   |

All pages are also accessible from the **navigation menu** on the homepage.

---

## 👤 Author

**Firoz Mahmud**  
📧 fmahmud.ruet@gmail.com  
🌐 [frmahmud.github.io](https://frmahmud.github.io)

---

*CSE Department, RUET — Built with PHP & MySQL*
