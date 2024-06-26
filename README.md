# Laravel Project

This is a basic Laravel project.

## Requirements

- PHP >= 8.2
- Composer
- MySQL or any other database supported by Laravel
- Node.js and npm (for frontend assets)

## Installation

1. **Clone the repository**:

    ```bash
    git clone https://github.com/FahadJrdev/p2p.git
    cd p2p
    ```

2. **Install dependencies**:

    ```bash
    composer install
    npm install
    ```

3. **Create a `.env` file**:

    Copy the `.env.example` file to `.env`:

    ```bash
    cp .env.example .env
    ```

4. **Generate an application key**:

    ```bash
    php artisan key:generate
    ```

5. **Configure the `.env` file**:

    Set your database credentials and other configuration in the `.env` file.

6. **Run migrations**:

    ```bash
    php artisan migrate
    ```

7. **Run the development server**:

    ```bash
    npm install
    npm run build
    php artisan serve
    ```

    You can now access your Laravel application at `http://localhost:8000`.

## Authentication

Laravel includes a simple way to scaffold basic login and registration views and routes:

1. **Generate authentication scaffolding**:

    ```bash
    php artisan make:auth
    ```

2. **Run migrations** (if not already done):

    ```bash
    php artisan migrate
    ```

## Frontend

1. **Compile assets**:

    ```bash
    npm run dev
    ```

    For production, use:

    ```bash
    npm run prod
    ```

## Routes

The following routes are protected by the `auth` middleware and can only be accessed by authenticated users:

- `/dashboard`
- `/binance`
- `/countries`
- `/cryptos`
- `/exchanges`
- `/kucoin`
- `/okex`
- `/orders`
- `/payments`
- `/prices`
- `/profile`
- `/transactions`

## License

This project is open-source and available under the [MIT license](https://opensource.org/licenses/MIT).

