# Instagram Phishing Page

## Project Description

This project is a demonstration of a phishing attack, specifically targeting Instagram login credentials. It consists of:

* **HTML Login Page:** A fake Instagram login page designed to mimic the real one.
* **PHP Script:** A backend script to capture and store the submitted login credentials.
* **HTML Email Template:** An email designed to lure victims into clicking the link to the fake login page.

**⚠️ IMPORTANT: READ THIS CAREFULLY ⚠️**

**I DO NOT ENCOURAGE ANY ILLEGAL ACTIVITY. THIS PROJECT IS FOR EDUCATIONAL AND DEMONSTRATION PURPOSES ONLY. THE INTENTION IS TO RAISE AWARENESS ABOUT PHISHING ATTACKS AND HOW TO PROTECT AGAINST THEM. ANY UNAUTHORIZED USE OF THIS CODE IS STRICTLY PROHIBITED AND MAY BE ILLEGAL.**

## How It Works

1.  **Victim Receives Email:** The victim receives a seemingly legitimate email (included in this project) that urges them to log in to their Instagram account due to "suspicious activity" or some other fabricated reason.
2.  **Victim Clicks Link:** The email contains a link that directs the victim to the fake Instagram login page (HTML).
3.  **Victim Enters Credentials:** The victim, believing the page to be real, enters their username/email and password.
4.  **Credentials Captured:** The fake login page (HTML form) sends the entered credentials to the PHP script.
5.  **PHP Script Stores Data:** The PHP script captures the username/email and password and stores them in a database (or potentially sends them to an attacker in a real-world scenario - this script is set up to store in a database).
6.  **Victim Redirected:** After submitting the form, the victim is redirected to a legitimate Instagram help page, further deceiving them.

## How to Use This (FOR EDUCATIONAL PURPOSES ONLY)

**AGAIN: This is for demonstrating the *mechanics* of a phishing attack. Do not use this to steal anyone's information.**

1.  **Set up a Web Server:** You will need a web server (e.g., Apache, Nginx) to host the HTML and PHP files.
2.  **Configure PHP:** Ensure PHP is installed and configured on your web server.
3.  **Set up a Database:**
    * Create a database (e.g., MySQL).
    * Create a table (e.g., `logins`) with columns for `username` and `password`.  **In a real application, you would NEVER store passwords in plain text!** This is for demonstration only.
    * Modify the `info.php` file with your database credentials (`servername`, `username`, `password`, `dbname`).
4.  **Place Files:** Put the HTML, PHP, and CSS files in the appropriate directory on your web server (e.g., `htdocs` for Apache).
5.  **Access the Fake Login Page:** You can now access the fake login page through your web server (e.g., `http://your-server/index.html`).  Do *NOT* send this link to anyone who is not part of your *authorized* educational demonstration.
6. **Send Email:** (For demonstration only)  Send the provided email.html (or a modified version) to a test email account.  Most email providers will flag this, so you may need to configure an email server for testing.
7.  **Check the Database:** After someone submits the fake login form, you can check your database to see the captured credentials.

## Files Included

* `index.html`: The HTML code for the fake Instagram login page.
* `style.css`: The CSS stylesheet for the fake login page.
* `info.php`: The PHP script to handle the submitted form data.
* `email.html`:  HTML for a sample phishing email.

## Disclaimer

**This project is intended solely for educational and demonstration purposes.  It should NOT be used for any illegal activities.  I am not responsible for any misuse of this code.  Phishing is a serious crime, and engaging in such activities can have severe legal consequences.**
