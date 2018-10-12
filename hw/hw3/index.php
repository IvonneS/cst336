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
        <h1>Quiz Generator</h1>
    </head>
    <body>
        <form method = "GET">
            
             <h2>Choose one</h2>
             <input type="radio" name="high"/> Advanced
             <input type="radio" name="middle"/> Intermediate
             <input type="radio" name="low"/> Beginner <br/><br/>
             
             <select name = "select">
              <option value = "selectOne">- Select Topic -</option>
              <option value = "math">Math</option>
              <option value = "art">Art</option>
              <option value = "css">CSS</option>
              <option value = "tv">TV</option>
              </select>
              <br/><br/>
               how many questions? <input type="text" name="question_num" size="5" id="question_num"/> <br/>
              <input type="checkbox" name="checkbox" id="digits" value ="digits" unchecked="unchecked"/> Include digits(up to 3 digits will be part of the password)</font><br/><br/>
     
            <div>
                 <br/>
              <input type="submit" name="submitBtn" id = "b1" value="Create Quiz" />
            </div>
        </form>

    </body>
</html>