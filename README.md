# Kebun Teh Wonosari

A Laravel-based tourism information and reservation website for Kebun Teh Wonosari. This project provides visitor information, package details, event information, testimonials, authentication, and reservation-related features.

## Features

- Tourism and destination information
- Package and ticket information
- Event information
- User authentication and registration
- Reservation-related workflow
- Contact and testimonial pages
- Responsive web interface

## Tech Stack

- **Backend:** Laravel, PHP
- **Frontend:** Blade, HTML, CSS, JavaScript
- **Database:** MySQL
- **Tools:** Git, GitHub, XAMPP, phpMyAdmin, Visual Studio Code

## Project Structure

```text
app/            Application logic
config/         Application configuration
database/       Migrations and seeders
public/         Public assets and entry point
resources/      Blade views, CSS, and JavaScript
routes/         Web routes
storage/        Runtime-generated files
```

## Installation

1. Clone this repository:

   ```bash
   git clone https://github.com/ajirmdhn23/kebun-teh-wonosari.git
   ```

2. Open the project directory:

   ```bash
   cd kebun-teh-wonosari
   ```

3. Install PHP dependencies:

   ```bash
   composer install
   ```

4. Copy the environment template:

   ```bash
   copy .env.example .env
   ```

5. Generate an application key:

   ```bash
   php artisan key:generate
   ```

6. Create a MySQL database named:

   ```text
   kebun_teh_wonosari
   ```

7. Configure the database values in `.env`, then run migrations:

   ```bash
   php artisan migrate
   ```

8. Install frontend dependencies and run Vite:

   ```bash
   npm install
   npm run dev
   ```

9. Start the local server:

   ```bash
   php artisan serve
   ```

Open the application at:

```text
http://127.0.0.1:8000
```

## Security Notes

- The `.env` file is excluded from version control.
- Do not commit credentials, database dumps, API keys, or personal data.
- Use `.env.example` as the configuration template.

## Author

Gadang Aji Ramadhan  
D3 Information Technology Student at Brawijaya University
