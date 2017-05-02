# Roundtable
Gina L. & Ryan M.
WebSys 2017

1. [GitHub] (https://github.com/mleegina/Roundtable)

2. We used a login tutorial from the site below to help with the login implementation.
    http://www.kodingmadesimple.com/2016/01/php-login-and-registration-script-with-mysql-example.html

    This tutorial was very helpful with the overall implementation of creating user accounts.
        -I learned how to check to see if a user was logged in by checking the session variable and then redirecting a user if they did not has a session variable.
            -if(isset($_SESSION['usr_id'])=="") {
              	header("Location: index.php");
              }
    From the lectures:
        -session_start() creates a unique session variable and sends it back as a cookie. It
          needs to be put at the start of each page that requires a session login.

3. HOW TO RUN ON LOCAL SERVER
    dbconnect.php
      - Enter your DB login details here
    db.sql
      - Run these SQL statements in mysql in order to create the DB & Tables needed for this app

4. HOW RESULTS ARE QUERIED & DISPLAYED - viewschedule.php
    - The lunch availability is concatenated and then stored as a string in the availdates table.
      When the app is figures out which groups of employees should eat together, it first takes the
      availability of the user, using their unique userid key.
    - It then users the userid to look up which users have the same availability using an INNER JOIN.
        - $sql = "SELECT name FROM users INNER JOIN availdates ON users.id = availdates.userid
                  where availdates.days like '%MonBring%' and users.id != '$varUserID'";
    - The availability and groups are shown in tables below.
