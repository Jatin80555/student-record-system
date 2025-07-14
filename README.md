# 🎓 Student Record Management System (PHP + MySQL)

This is a web-based application that allows administrators to manage student records easily. It includes features like login authentication, CRUD operations (Create, Read, Update, Delete), search functionality, and export to Excel.

---

## 🛠️ Technologies Used

- **Frontend**: HTML, CSS
- **Backend**: PHP
- **Database**: MySQL
- **Server**: Apache (via XAMPP or 000webhost)
- **Other Tools**: phpMyAdmin

---

## 📦 Features

- 🔐 Admin login with session-based authentication
- ➕ Add new students
- 🧾 View all student records
- 🔍 Search by name or roll number
- ✏️ Edit existing records
- ❌ Delete students
- 📤 Export student data to Excel (CSV)
- 🚪 Secure logout

---

## 🗂️ Project Structure

student-record-system/
├── index.php # Student list (dashboard)
├── add.php # Add new student
├── edit.php # Edit student info
├── delete.php # Delete student
├── search.php # Search form
├── export.php # Export to Excel
├── login.php # Admin login
├── logout.php # Admin logout
├── config.php # Database connection
└── assets/
└── style.css # Custom styling


---

## 🧪 How to Run Locally

1. Install **XAMPP**
2. Place project folder inside `htdocs`
3. Start Apache and MySQL
4. Import the database using `student_db.sql` in phpMyAdmin
5. Update `config.php` with your local DB credentials
6. Access the app at `http://localhost/student-record-system/login.php`

---

## 🌐 Live Demo

You can host the system online using **000webhost** or **InfinityFree**.

Example:  
🔗 [Live Site](https://student-record.000webhostapp.com) *(if hosted)*

---

## 👨‍💻 Admin Credentials (Default)

Username: admin
Password: admin123


> Password is stored in MD5 format in the database.

---

## 📄 License

This project is for educational purposes only. You can modify and use it freely for learning.

---

## 🙏 Acknowledgments

Thanks to:
- PHP open-source community
- Stack Overflow & W3Schools
- ChatGPT for step-by-step assistance
