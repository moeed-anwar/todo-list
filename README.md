
# Laravel Todo App 📝

A simple yet powerful Todo List web application built with **Laravel**, **Tailwind CSS**, and **Breeze**. Users can register, log in, and manage their tasks — including creating, updating, and deleting todos. The UI adapts to light/dark themes and is responsive across devices.

---

## 🚀 Features

- 🧑‍💼 Authentication (Laravel Breeze)
- ✅ Add / Edit / Delete todos
- 🌗 Dark & Light theme
- 📱 Fully responsive UI with Tailwind CSS
- 📅 Timestamps for task creation and updates

---

## 🛠️ Tech Stack

- [Laravel 10+](https://laravel.com/)
- [Laravel Breeze](https://laravel.com/docs/starter-kits#laravel-breeze)
- [Tailwind CSS](https://tailwindcss.com/)
- Blade templates

---

## 📦 Installation & Setup

Make sure you have PHP, Composer, Node.js, and a database (like MySQL) installed.

### 1. Clone the Repository

```bash
git clone https://github.com/moeed-anwar/todo-list.git
cd laravel-todo-app
````

### 2. Install PHP Dependencies

```bash
composer install
```

### 3. Copy `.env` and Set Up Environment

```bash
cp .env.example .env
php artisan key:generate
```

> Configure your database and mail settings in `.env`

### 4. Run Migrations and Seed Data (if applicable)

```bash
php artisan migrate
```

### 5. Install Frontend Dependencies

```bash
npm install
npm run dev
```

### 6. Serve the App

```bash
php artisan serve
```

Visit [http://localhost:8000](http://localhost:8000)

---

## 🔐 Authentication

This project uses **Laravel Breeze** for authentication.

You can register a new user or log in with existing credentials.


---

## 📁 Folder Structure Highlights

* `/resources/views/` – Blade templates
* `/routes/web.php` – Web routes
* `/app/Http/Controllers/` – Todo controller logic
* `/app/Models/` – Task model

---

## 📄 License

This project is open-source and available under the [MIT license](LICENSE).

---

## 🙋‍♂️ Author

**Moeed Anwar**
[GitHub Profile](https://github.com/moeed-anwar)
