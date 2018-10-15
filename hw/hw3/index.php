<!--
Idea: Create a multiple choice quiz generator
Requirements: *There are at least four different types of Form Elements.
              *Upon submission of the form, the data is "processed" and new data is displayed.
              *Validation for all unset or empty values with error messages. 
              *Upon submission of the form, the form is displayed again,
              with the submitted values pre-filled.
-->

<!DOCTYPE html>
<html>
    <head>
        <title> homework #3</title>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <h1>Quiz Generator</h1>
    </head>
    <body>
        <form method = "GET">
            
             <h2>Choose one</h2>
             <input type="radio" name = "option" id="high"/> Advanced
             <input type="radio" name = "option" id="middle"/> Intermediate
             <input type="radio" name = "option" id="low"/> Beginner <br/><br/>
             
             <select name = "select">
              <option value = "selectOne">- Select Topic -</option>
              <option value = "1">1</option>
              <option value = "2">2</option>
              <option value = "3">3</option>
              <option value = "4">4</option>
              <option value = "5">5</option>
              <option value = "6">6</option>
              <option value = "7">7</option>
              <option value = "8">8</option>
              <option value = "9">9</option>
              <option value = "10">10</option>
              </select>
              <br/><br/>
               how many questions? <input type="text" name="question_num" size="5" id="question_num"/> <br/>
              <input type="checkbox" name="checkbox" id="digits" value ="digits" unchecked="unchecked"/> Include Something</font><br/><br/>
     
            <div>
                 <br/>
              <input type="submit" name="submitBtn" id = "b1" value="Create Quiz" />
            </div>
        </form>

    </body>
</html>