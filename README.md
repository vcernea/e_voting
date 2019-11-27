# e_voting
PHP-based platform for running online pools

## Installation

Generate a database with ```database_files/create_db.sql```.
Fill `cetateni` with voters and `partide` with candidates/questions.
Edit `code.php`, `index.html` to show and allow to choose an option.
`db.php` - database connection;
`getres.php` together with `prezenta.html` will print a live board of the number of people (organized by groups in `clase` from db) who voted so far.
`rezultate.php` displays the final results, needs to be updated with the candidates/questions.