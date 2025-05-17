# php-learning-project

This project is designed for learning PHP and understanding the MVC (Model-View-Controller) architecture. 

## Project Structure

- **src/**: Contains the main application code.
  - **controllers/**: Holds the controller classes that handle requests.
  - **models/**: Contains the model classes that represent the data.
  - **views/**: Includes the view files that render the user interface.
- **public/**: The entry point of the application.
- **config/**: Contains configuration files, such as database settings.
- **tests/**: Holds test cases for the application.
- **composer.json**: Lists the dependencies required for the project.

## Setup Instructions

1. Clone the repository:
   ```
   git clone <repository-url>
   ```

2. Navigate to the project directory:
   ```
   cd php-learning-project
   ```

3. Install dependencies using Composer:
   ```
   composer install
   ```

4. Configure your database settings in `config/database.php`.

5. Start the application by accessing `public/index.php` in your web browser.

## Overview

This application demonstrates a simple PHP MVC framework. It includes a home page that can be accessed through the main controller, and it interacts with a user model to manage user data. The project is structured to facilitate learning and experimentation with PHP development practices.