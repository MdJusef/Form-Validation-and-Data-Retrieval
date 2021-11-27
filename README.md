# Form-Validation-and-Data-Retrieval using php and mysql

The web application is a simple implementation of Registration Form data insertion,show and search using Php and Mysql.
To successfully run the web application you must follow these steps:
<br>
<ol>
    <li>Download and Install xampp.</li>
    <li>After Installing, Copy and Paste the whole folder 'project'  to this directory: C:\xampp\htdocs</li>
    <li>Open Xampp program and then start Apache and Mysql.</li>
    <li> Click on "Admin" button of "Mysql". Your Browser will open and you will be redirected to phpmyadmin page.</li>
    <li>Create a new database with exactly the same name as the <testdb.sql> file situated at 
        location C:\xampp\htdocs\project</li>
    <li>Click on "Import" tab. From the browse option click on choose file and select <testdb.sql> file 
        from location C:\xampp\htdocs\project. 
        Finally, Scroll down and click on go.</li>
    <li>Now open a browser and in address bar, type: localhost/project</li>
    <li>Enter some information for several time to get started and check.</li>
    <li>I hope you like it!</li>
</ol>

# Form Contain Following Input Field
<ol>
    <li> Username </li>
    <li> Password </li>
    <li> Email </li>
    <li> Address </li>
    <li> Web Address </li>
    <li> Date of Birth </li>
    <li> Gender </li>
    <li> Number of Course Enrolled </li>
    <li> Register Button </li>
</ol>

# I Validate the form with by following condition
<ul>
    <li> All input field is required. (Display error message shown if empty) </li>
    <li> Must have valid Email. </li>
    <li> Username length must be 5-20 characters long. </li>
    <li> Password must contain an uppercase,a lowercase,a number,a special character. </li>
    <li> Gender must be checked. </li>
    <li> Number of course Enrolled must be an integer and positive value. </li>
    <li> Age at least 18 to register in the website. </li>
    <li> Web Address must follow the standard URL. </li>
    <li> Validate with php and MySQL </li>
</ul>

# Technology
<ul>
    <li>PHP</li>
    <li>Bootstrap</li>
    <li>Html</li>
    <li>MySQL</li>
</ul>

# Live Demo Screenshot
        
 <h4>* Form Design Using HTML and Bootstrap </h4>
 <img src="/DemoScreenshot/bootstrap%20form.png" alt="">
  
<h4>* Empty Input Validation</h4>
 <img src="/DemoScreenshot/empty%20input.png" alt="">
  
<h4>* Search Result</h4>
 <img src="/DemoScreenshot/search%20result.png" alt="">
  
<h4>* User Data Show</h4>
 <img src="/DemoScreenshot/user%20data.png" alt="">
  
<h4>* Validation Check</h4>
 <img src="/DemoScreenshot/validation.png" alt="">
 
 # After Validation
 After validation, I stores information in a MySQL database. And I Retrieved the results. After that I showed the data in a HTML table. You can search a specific information also. 
