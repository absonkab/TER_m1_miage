How to Setup a Laravel Project You Cloned from Github.com

1. Clone GitHub repo for this project locally
As the project is hosted on github, you can use git on your local computer to clone it from github onto your local computer.

Note: Make sure you have git installed locally on your computer first.

2. cd into your project
You will need to be inside that project folder after the clone

3. Install Composer Dependencies
Whenever you clone a new Laravel project you must now install all of the project dependencies. This is what actually installs Laravel itself, among other necessary packages to get started.

When we run composer, it checks the composer.json file which is submitted to the github repo and lists all of the composer (PHP) packages that your repo requires. Because these packages are constantly changing, the source code is generally not submitted to github, but instead we let composer handle these updates. So to install all this source code we run composer with the following command.

composer install

4. Install NPM Dependencies
Just like how we must install composer packages to move forward, we must also install necessary NPM packages to move forward. This will install Vue.js, Bootstrap.css, Lodash, and Laravel Mix.

npm install

5. Create a copy of your .env file
.env files are not generally committed to source control for security reasons. But there is a .env.example which is a template of the .env file that the project expects us to have. So we will make a copy of the .env.example file and create a .env file that we can start to fill out to do things like database configuration in the next few steps.

cp .env.example .env

This will create a copy of the .env.example file in your project and name the copy simply .env.

6. Generate an app encryption key
Laravel requires you to have an app encryption key which is generally randomly generated and stored in your .env file. The app will use this encryption key to encode various elements of your application from cookies to password hashes and more.

Laravel’s command line tools thankfully make it super easy to generate this. In the terminal we can run this command to generate that key. (Make sure that you have already installed Laravel via composer and created an .env file before doing this, of which we have done both).

php artisan key:generate

If you check the .env file again, you will see that it now has a long random string of characters in the APP_KEY field. We now have a valid app encryption key.

7. In the .env file, add database information to allow Laravel to connect to the database
We will want to allow Laravel to connect to the database that you just created in the previous step. To do this, we must add the connection credentials in the .env file and Laravel will handle the connection from there.

In the .env file fill in the DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, and DB_PASSWORD options to match the credentials of the database you just created. This will allow us to run migrations and seed the database in the next step.

8. Migrate the database
Once your credentials are in the .env file, now you can migrate your database.

php artisan migrate

It’s not a bad idea to check your database to make sure everything migrated the way you expected.

9. [Optional]: Seed the database
If your repository has a seeding file setup, then now is the time to run the seed, which fills your database with starter or dummy data. If the repo doesn’t mention the existence of a seeder file, then skip this step.

After the migrations are complete and you have the database structure required, then you can seed the database (which means add dummy data to it).

php artisan db:seed
Many of the repos I create for tutorials here on DevMarketer will create 25 randomly generated users and 100 randomly generated blog posts in your database. If you want to log in as a user, grab an email address from the database and use “secret” as the password to log in as that user. That is the default password I generally use.

All of this information is usually contained within the GitHub readme file, so be sure to check it when starting a new project from a Github repo.

