# Devine: Part 1 (Drupal)

This is part 2 of two eco systems that are integrated for demonstration purposes.

This is a PHP 8, MySQL 10 and Dupal 9.

## Setup

Now in your terminal, inside the root directory, 
run this command to install all the necessary modules.

```bash
composer install
```
Create a MySQL database called `drupal`.

## Testing the application

Spin up the application using Drupal's built-in PHP server 
```bash
php -S 127.0.0.1:8081 -t web
```
and open [localhost] and follow the prompts to install Drupal.
(http://127.0.0.1:8081)

Once completed, head over to admin/extend and activate the module
'Programming Languages' under Custom modules.

Then open the URL languages/list and see your results.

That's all!!

## License
[MIT](https://choosealicense.com/licenses/mit/)
