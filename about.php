<!DOCTYPE html>
<html>
<!--

First Website
and comment
in html
(comments can span multiple lines)

-->

<!-- This is the head -->
<!-- All styles and javascript go inside the head -->
    <head>
        <meta charset="utf-8" />
        <title>Rowena Terrado: Personal Website</title>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet"> 
    </head>
<!-- closing head -->

    <!-- This is the body -->
    <!-- This is where we place the content of our website -->
    <body>
        <header>
            <h1> Rowena Terrado </h1>
        </header>
        <hr />
        <nav>
            <a href="index.php">Home</a>
            <a href="about.php" id="currentpage">About</a>
            <a href="contact.php">Contact</a>
        </nav>
        <br /><br />
        <div id="content">
            <!-- Create the table to hold experience data -->
            <table>
                <tr id="table-header">
                    <td><strong>Programming Language</strong></td>
                    <td><strong>Years Experience</strong></td>
                </tr>
                <tr class="table-row">
                    <td>Java</td>
                    <td>3</td>
                </tr>
                <tr class="table-row">
                    <td>C++</td>
                    <td>2</td>
                </tr>
                <tr class="table-row">
                    <td>PHP</td>
                    <td>1</td>
                </tr>
            </table>
            
            <ul>
                <li><span class="hobby">Video games:</span> I enjoy RPGs, action games, and weird experimental art games!</li>
                <li><span class="hobby">Art:</span> I love traditional and digital art as a hobby.</li>
                <li><span class="hobby">Fibercraft:</span> Knitting and crocheting are great pasttimes.</li>
                <li><span class="hobby">Reading:</span> Mostly nonfiction and articles.</li>
            </ul>
        </div>
        
        <!-- This is the footer -->
        <!-- The footer goes inside the body but not always -->
        <footer>
            <hr>
            CST336 Internet Programming. 2020&copy;Terrado <br />
            <strong>Disclaimer:</strong> The information in this webpage is fictitious. </br >
            It is used for academic purposes only.
            <br /><br /><img src="img/csumb_logo.png" />
        </footer>
        <!-- closing footer -->
        
    </body>
    <!-- closing body -->

</html>