# admin_dashboard
# To run this project we need to install composer first
# Open your terminal ( VS Code or Command Line Interface ) and do the following steps:
# Install composer
Step 1: composer install
# Install Node Package Manager
Step 2: npm install
# For Laravel Mix Development and then;
Step 3: npm run dev
# To create and duplicate environment file.
Step 4: cp .env.example .env
# To Generate key
Step 5: php artisan key:generate
# Before we go to last step, we need to configure first your database, to configure it, open the copied environment file ( .env ) and look for the following:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=databasename
DB_USERNAME=root
DB_PASSWORD=
# Then after you've edited it in the .env file run this command in your terminal
Step 6: php artisan migrate/ php artisan migrate:fresh --seed
# Then lastly, you can run your project with this command
Step 7: php artisan serve

## This is to configurate the email using gmail
MAIL_DRIVER=smtp
MAIL_HOST=smtp.googlemail.com
MAIL_PORT=465
MAIL_USERNAME= SENDERS EMAIL
MAIL_PASSWORD= SENDERS PASSWORD
MAIL_ENCRYPTION=ssl
MAIL_FROM_ADDRESS= sendersEmail
