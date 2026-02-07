# 🚍 BookBus - Smart Bus Reservation Platform

![BookBus Banner](public\images\homepage.png)

## 📝 About The Project

**BookBus** is a modern Full-Stack web application designed to simplify inter-city bus travel in Morocco. Inspired by platforms like _marKoub.ma_, this project allows users to search for trips, compare schedules, and book tickets securely.

Built with **Laravel** and **Tailwind CSS**, BookBus focuses on performance, security, and a seamless User Experience (UX).

## ✨ Key Features

### 👤 User Features

- **Secure Authentication:** Registration and Login powered by Laravel Breeze.
- **Smart Search Engine:** Filter trips by Departure City, Arrival City, and Date.
- **Booking Management:** Real-time seat availability and booking confirmation.
- **User Dashboard:** View booking history, check payment status, and download tickets.
- **Responsive Design:** Fully optimized for Desktop and Mobile devices.

### ⚙️ Technical Highlights

- **MVC Architecture:** Clean code structure following Laravel best practices.
- **Database Relationships:** Complex Eloquent relationships (Users, Segments, Schedules, Bookings).
- **Form Validation:** Robust backend validation for secure data entry.
- **Modern Styling:** Custom UI components built with Tailwind CSS.

## 🛠️ Tech Stack

- **Backend:** PHP 8.2, Laravel 10/11
- **Frontend:** Blade Templates, Tailwind CSS, Alpine.js
- **Database:** MySQL
- **Version Control:** Git & GitHub

## 🚀 Getting Started

Follow these steps to run the project locally on your machine.

### Prerequisites

- PHP >= 8.1
- Composer
- MySQL
- npm

### Installation

1.  **Clone the repository**

    ```bash
    git clone https://github.com/OUBELKACEMhub/Bookbus_Laravel.git
    cd bookbus-laravel
    ```

2.  **Install PHP dependencies**

    ```bash
    composer install
    ```

3.  **Install NPM dependencies**

    ```bash
    npm install
    npm run build
    ```

4.  **Environment Setup**

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

5.  **Database Setup**
    - Create a database named `laravel` in your MySQL server.
    - Run migrations and seeders:

    ```bash
    php artisan migrate --seed
    ```

6.  **Run the Server**
    ```bash
    php artisan serve
    ```

Visit `http://localhost:8000` to view the application.

## 📸 Screenshots

|            login Page            |               Search Results                |
| :------------------------------: | :-----------------------------------------: |
| ![Home](public\images\login.png) | ![Search](public\images\searchResultat.png) |

|                  Booking Ticket                  |              User Dashboard              |
| :----------------------------------------------: | :--------------------------------------: |
| ![Ticket](public\images\process_reservation.png) | ![Dashboard](public\images\homepage.png) |

_(Don't forget to add your screenshots in a folder named `screenshots`)_

## 👤 Author

**[Your Name]**

- **LinkedIn:** [Your LinkedIn Profile](www.linkedin.com/in/oubelkacem-ahmed-8b2090242)
- **GitHub:** [Your GitHub Profile](https://github.com/OUBELKACEMhub)
- **Email:** oubelkacemahmed78@gmail.com

---

_This project was developed for educational purposes as part of the Full Stack Web Development curriculum._
