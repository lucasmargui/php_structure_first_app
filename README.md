<H1 align="center"> First PHP app </H1>
<p align="center">🚀 Project to create a first app using PHP for future references</p>

## Resources Used

- XAMPP

## Extensions in VsCode

- PHP Intelephense
- Format HTML in PHP
- PHP Awesome Snippets


# PHP server installation

To develop and test PHP applications locally, you need to install a web server that supports PHP. There are several options available, such as Apache, Nginx and Windows' IIS. A typical installation involves downloading PHP from the official website, configuring the web server to interpret PHP scripts, and testing the configuration with a simple PHP file. In development environments, packages such as XAMPP or WAMP simplify this process, as they already come with a pre-configured Apache, MySQL and PHP server.


# Running XAMPP
XAMPP is a free software package that makes it easy to install a local server environment. It includes Apache (web server), MySQL (database), PHP (scripting language) and Perl. To run XAMPP, simply download the package corresponding to your operating system, install and launch the XAMPP control panel. From the control panel, you can start or stop the Apache and MySQL services, as well as access other tools such as phpMyAdmin.

![image](https://github.com/user-attachments/assets/7355e72a-5c3d-4b8d-b458-99695d8c922d)


# Directory creation in PHP
After installing the PHP server, you need to create a directory to store your PHP files. In XAMPP, for example, the default directory is "htdocs". To create a new directory, simply navigate to the "htdocs" directory (or equivalent on your server) and create a new folder. Inside this folder, you can save your PHP files. This directory will be the entry point for accessing your PHP scripts through the browser, using a URL corresponding to the directory path.

![image](https://github.com/user-attachments/assets/03b51b17-76e7-4a65-b3d5-754daae06e5d)



# Getting data from a form in PHP

Getting data from a form in PHP involves creating the form, capturing the data upon submission, validating it, and providing feedback to users.

![image](https://github.com/user-attachments/assets/d8103566-b40e-4683-8b71-793b046cfbc0)


# Processing data from a form in PHP

Processing data from a PHP form involves collecting user-submitted data through an HTML form and handling that data on the server. Once you have the data, you can validate, process, and store it as needed, for example, by saving it to a database or sending an email.

![image](https://github.com/user-attachments/assets/65ee3ef5-cb15-46da-be84-d0faaeb1de35)



### $_GET
The $_GET superglobal is used to collect data sent via URL parameters or HTML forms that use the GET method. Data sent this way is appended to the URL and thus visible in the browser's address bar. It is ideal for sending small amounts of data that are not sensitive.

### $_POST
The $_POST superglobal is used to collect data sent by HTML forms that use the POST method. Unlike GET, data sent by POST is not displayed in the URL, making it more secure for transmitting sensitive information. It also allows the transmission of larger amounts of data.

### $_REQUEST
The $_REQUEST superglobal is a combination of $_GET, $_POST, and $_COOKIE data. It can be used to collect data from any of these methods, but its use is not recommended due to potential security issues and ambiguity regarding the data's origin.

### $_FILES
The $_FILES superglobal is used to handle file uploads sent via HTML forms. It contains information about the uploaded files, such as name, type, size, and temporary data. It is essential for implementing file upload functionality in web applications.

### $_COOKIE
The $_COOKIE superglobal is used to access data stored in the browser's cookies. Cookies are small pieces of data sent from the server to the browser for storage and subsequent return to the server in future requests. They are used for state persistence, such as maintaining user sessions.

### $_SESSION
The $_SESSION superglobal is used to store session data. A session is a way to store information about a user while they navigate different pages on a site. The data is stored on the server and associated with a unique session identifier, usually sent to the client as a cookie.

### $_ENV
The $_ENV superglobal contains environment variables passed to the script by the server's environment. These variables are typically configured on the server or in the PHP configuration file and can be used to configure the application according to the environment in which it is running.

### $_SERVER
The $_SERVER superglobal contains information about headers, paths, and script locations. It includes a wide array of information such as HTTP headers, server and request information, and execution data. It is useful for obtaining details about the execution environment and the current request.

### $_GLOBALS
The $_GLOBALS superglobal is an associative array containing all global variables defined in the script. It allows access to and modification of any global variable from anywhere in the script.



