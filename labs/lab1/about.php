<!DOCTYPE html>
<!--Table, list -->
<html>
    <head>
        <meta charset=”utf-8” /> <!--includes most characters from languages-->
        <title> My New Website </title> <!--Title on browser-->
        
    </head>
    <body>
        <header>
            <h1> About myself </h1>
       
          <nav>
             <hr width="70%"/>
             <strong> 
             <a href= "main.php">HOME</a>
             <a href= "contact.php">CONTACT</a>
             </strong>
         </nav>
       <style>
           header, nav, footer, main {
               text-align: center; 
           }
       </style>
       <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        </header>
        <main>
            <figure>
                <!--<img src="img/Leon-Map-1.jpg" width="200" height="150"/>-->
                <!--<img src="img/Arco.jpg" width="250" height="300"/>-->
                <!--<img src="img/Leon-Map-1.jpg" width="250" height="300"/>-->
            </figure>
            
            <div id="table">
           <table>
               <tr id="table-header"> 
                   <td><strong>Programming Language</strong></td>
                   <td><strong>Years Experience</strong></td>
               </tr>
               <tr class="table-row">
                   <td>C++</td>
                   <td>2</td></td>
               </tr>
               <tr class="table-row">
                   <td>Java</td>
                   <td>1</td>
               </tr>
               <tr class="table-row">
                   <td>Python</td>
                   <td>1</td>
               </tr>
           </table> 
            
           </div>
           
        </main>
        
        <div>
        <ul>
                <li><span class="hobby">Read</span>: I love reading science fiction books and history books. </li>
                <li><span class="hobby">Music</span>: I try to learn how to play different instruments; I like to play the electric bass and the drums.</li>
                <li><span class="hobby">Dance</span>: I'm part of a folklore dance grup. I like dance folklore (Mexican Culture) since fifth grade of school.</li>
        </ul>
        </div>
        
        <hr width="100%"/>
        
         <footer>
              <em>CST336 Internet Programming. 2018&copy; Garcia<br /></em> 
             <strong>Disclaimer:</strong> The information in this webpage fictitous. <br />
             It is used for academic purposes only.<br>
             <img src="img/csumb.png" width="100" height="50"/>
         </footer>
         
    </body>
</html>