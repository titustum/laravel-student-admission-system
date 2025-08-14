# 🎓 College Student Admission System

A basic Laravel application for managing student admissions using the Filament admin panel.

This system allows students to apply for admission into college courses through a public-facing form. Admin users can manage colleges, courses, and student applications from a secure admin dashboard built with Filament. Upon application, students receive a confirmation message and are notified that their application is pending approval.

✅ Designed for fast prototyping — with pre-seeded data for colleges, courses, and students.

🛠️ Built with Laravel’s powerful backend and Filament’s beautiful admin interface for rapid development and clean management.

---

## ✨ Features

- 🧑‍🎓 Students can apply for courses
- ⏳ Application status defaults to `Pending`
- ✅ Admins can approve applications via Filament panel
- 🏫 Colleges and Courses managed via admin
- 🔄 Seeders for Colleges, Courses, and Students

---

## 🛠️ Tech Stack

- Laravel 11+
- Filament Admin Panel
- MySQL / SQLite
- TailwindCSS (via Filament)
  
---

## 🚀 Setup Instructions

1. **Clone the Repository**

   ```bash
   git clone https://github.com/titustum/laravel-student-admission-system.git
   cd laravel-student-admission-system
   ```

2. **Install Dependencies**

   ```bash
   composer install
   ```

3. **Environment Setup**

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Database Setup**

   - Configure `.env` database settings
   - Then run:

     ```bash
     php artisan migrate --seed
     ```

5. **Create Admin User**

   ```bash
   php artisan make:filament-user
   ```

6. **Serve the App**

   ```bash
   php artisan serve
   ```

7. **Access the Admin Panel**

   - URL: `http://localhost:8000/admin`
   - Use the credentials from the command above

---

## 📝 Notes

- Public application form: `/apply`
- (Optional) Check application status: `/status`
- Approval process is handled manually by admin via Filament

---

## 📦 Seeder Overview

- `CollegeSeeder`: Adds demo colleges
- `CourseSeeder`: Adds courses under each college
- `StudentSeeder`: Adds demo students with `approved` status

---

## 📄 License

This project is open-source and free to use
