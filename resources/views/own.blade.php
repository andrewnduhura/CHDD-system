<!DOCTYPE html>
<html>
<head>
    <title>Text Placement Example</title>
    <style>
        .content {
            position: absolute; /* Set the position to absolute */
            top: 220px; /* Set the top offset to 100 pixels from the top */
            left: 400px; /* Set the left offset to 200 pixels from the left */
            /* Additional styling for the content */
        
            
            
        }
        .content td {
            flex:1;
            padding: 20px;
                }
    </style>
</head>
<body>
    <div class="content">
        <h1>Diagnose</h1>
        <table style =  border="0" bgcolor="#f2f2f2" align="center" "width:800px">
            <tr>
                <td>
        <label for="myDropdown">Alcohol Drinking:</label>
    <select id="myDropdown">
        <option value="option1">Option 1</option>
        <option value="option2">Option 2</option>
        <option value="option3">Option 3</option>
    </select> </td>
      
    <td>
    <label for="myDropdown">Asthma:</label>
    <select id="myDropdown">
        <option value="option1">Option 1</option>
        <option value="option2">Option 2</option>
        <option value="option3">Option 3</option>
    </select> </td>

    <td>

    <label for="myDropdown">Age Category:</label>
    <select id="myDropdown">
        <option value="option1">Option 1</option>
        <option value="option2">Option 2</option>
        <option value="option3">Option 3</option>
    </select>
    </td>
    </tr>

    <tr>
                <td>
        <label for="myDropdown">Difficult Walking:</label>
    <select id="myDropdown">
        <option value="option1">Option 1</option>
        <option value="option2">Option 2</option>
        <option value="option3">Option 3</option>
    </select> </td>

    <td>
    <label for="myDropdown">Skin Cancer:</label>
    <select id="myDropdown">
        <option value="option1">Option 1</option>
        <option value="option2">Option 2</option>
        <option value="option3">Option 3</option>
    </select> </td>

    <td>
    <label for="myDropdown">Stroke:</label>
    <select id="myDropdown">
        <option value="option1">Option 1</option>
        <option value="option2">Option 2</option>
        <option value="option3">Option 3</option>
    </select>
    </td>
    </tr>

    <tr>
                <td>
        <label for="myDropdown">Diabetic:</label>
    <select id="myDropdown">
        <option value="option1">Option 1</option>
        <option value="option2">Option 2</option>
        <option value="option3">Option 3</option>
    </select> </td>

    <td>
    <label for="myDropdown">Physical Activity:</label>
    <select id="myDropdown">
        <option value="option1">Option 1</option>
        <option value="option2">Option 2</option>
        <option value="option3">Option 3</option>
    </select></td>
     
    <td>
    <label for="myDropdown">Smoking:</label>
    <select id="myDropdown">
        <option value="option1">Option 1</option>
        <option value="option2">Option 2</option>
        <option value="option3">Option 3</option>
    </select>
    </td>
    </tr>

    <tr>
                <td>
        <label for="myDropdown">Kidney Disease:</label>
    <select id="myDropdown">
        <option value="option1">Option 1</option>
        <option value="option2">Option 2</option>
        <option value="option3">Option 3</option>
    </select> </td>
     
    <td>
    <label for="myDropdown">Sex:</label>
    <select id="myDropdown">
        <option value="option1">Option 1</option>
        <option value="option2">Option 2</option>
        <option value="option3">Option 3</option>
    </select></td>

    <td>
    <label for="myDropdown">General health:</label>
    <select id="myDropdown">
        <option value="option1">Option 1</option>
        <option value="option2">Option 2</option>
        <option value="option3">Option 3</option>
    </select>
    </td>
    </tr>
     
    <tr>
        <td><label for="fname">Sleep Time:</label>
  <input type="text" id="fname" name="fname" value="John" style = "width:100px">

    </td>

    <td></td>


    <td><label for="fname">Mental Health:</label>
  <input type="text" id="fname" name="fname" value="John" style = "width:100px">

    </td>
    </tr>

    <tr>
        <td>
            <label for="fname">Physical Health:</label>
  <input type="text" id="fname" name="fname" value="John" style = "width:100px">
    </td>

  <td></td>

     <td>
    <label for="fname">BMI:</label>
  <input type="text" id="fname" name="fname" value="John" style = "width:100px">
    </td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td><input type="submit" value="Diagnose"></td>

    </tr>

    </table>


    


    </div>
</body>
</html>
