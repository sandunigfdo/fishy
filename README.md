# Phishing Simulation Application

This is a Laravel-based phishing simulation application designed to enhance user awareness by simulating credential harvesting attacks. The application allows you to create and manage phishing campaigns, track employee actions.

## Features

- Simulate credential harvesting attacks.
- Add employees and group them by department or role.
- Create phishing email campaigns with a given custom template.
- Track employee interactions with phishing emails.

## Prerequisites
1. **[Install php](https://www.php.net/manual/en/install.php)**
2. **[Install composer](https://getcomposer.org/download/)**
    

## Installation

Follow these steps to set up and run the application in your environment:

1. **Clone the Repository**

2. **Install Dependencies**
    `composer install`

3. **Set Up Environment Variables**
    Copy the example environment file and update the necessary environment variables
    `cp .env.example .env`
    Then, open the .env file and set up values like your database credentials, mail configuration, and other environment-specific settings.

4. **Start Laravel Sail**
    `./vendor/bin/sail up`

5. **Run Database Migrations**
    `./vendor/bin/sail artisan migrate`

6. **Build Front-End Assets**
    `./vendor/bin/sail npm run dev`

## Default User Account Credentials
Email - sandunigfdo@gmail.com
PAssword - password

