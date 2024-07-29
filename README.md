# Simple To-Do List with Laravel Livewire and TailwindCSS

This is a simple to-do list application built using **Laravel Livewire** and **TailwindCSS**. The project serves as a beginner-friendly demonstration of how Livewire works with Laravel and TailwindCSS.
## Features

- **Add Tasks**: Add new tasks to your to-do list.
- **View Tasks**: Display a list of tasks with basic styling.
- **Basic Styling**: Utilizes TailwindCSS for a clean and responsive design.

## Technologies Used

- **Laravel**: PHP framework used for building the backend.
- **Livewire**: Full-stack framework that simplifies dynamic interfaces in Laravel.
- **TailwindCSS**: Utility-first CSS framework used for styling the application.

## Purpose

I'm using **Laravel Livewire** and **TailwindCSS** to build a simple to-do list application. As a complete beginner with Livewire, my goal is to use this project to test and learn how Livewire works within the Laravel ecosystem. Currently, the application allows you to add tasks, and I plan to extend its functionality by adding features like checkboxes and other enhancements. This project is a hands-on way for me to gain experience with **Livewire** while also leveraging the modern, utility-first styling of TailwindCSS.

## Future Improvements

- **Task Completion**: Add checkboxes to mark tasks as completed.
- **Task Deletion**: Implement functionality to remove tasks from the list.
- **Persistent Storage**: Save tasks to a database for persistence across sessions.
- **Enhanced UI/UX**: Improve user interface and experience with additional styling and features.

## Getting Started

To get a local copy up and running, follow these steps:

1. Clone the repository:
   ```sh
   git clone https://github.com/Lutreze16/Simple-to-do-list.git
   ```

2. Navigate to the project directory:
   ```sh
   cd Simple-to-do-list
   ```

3. Install dependencies:
   ```sh
   composer install
   npm install
   ```

4. Set up your environment file:
   ```sh
   cp .env.example .env
   php artisan key:generate
   ```

5. Run the migrations:
   
   **Note:** This project does not currently include any database migrations. You can skip this step for now.
   ```sh
   php artisan migrate
   ```

6. Start the development server:
   ```sh
   php artisan serve
   npm run dev
   ```

7. Open your browser and visit `http://localhost:8000` to see the application in action.
