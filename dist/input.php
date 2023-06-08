<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link rel="stylesheet" href="">

    <title>Document</title>
</head>
<body>

<center>

<h1>Enter Your Information</h1>

<div class="grid grid-flow-col">
    <form action="">
        <label for="name" class="border w-10">Full Name: </label><br>
        <input type="text" name="" id="name" class="border-sky-900  border-4">
        <br><br>

        <h1>Education:</h1>

        <label for="EduCollege">Collge/University: </label><br>
        <input type="text" class="border-4" name="EduCollege" id="EduCollege" >
        <br><br>
        <label for="EduDegree">Degree: </label><br>
        <input type="text" class="border-4" name="EduDegree" id="EduDegree">
        <br><br>
        <label for="EduStudy">Field of Study: </label><br>
        <input type="text" class="border-4" name="EduStudy" id="EduStudy">
        <br><br>
        <label for="EduGradDate">Graduation Date: </label><br>
        <input type="date" class="border-4" name="EduGradDate" id="EduGradDate">
        
        <br>
        <br>

        <label for="level"> Experience: </label><br>
        <select name="level" id="level">
            <option value="Zero">Zero</option>
            <option value="Entry">Entry</option>
            <option value="Junior">Junior</option>
            <option value="Senior">Senior</option>
        </select>

        <br>
        
        <h1> Skills: </h1>

        <!-- skills -->
        <label for="chkbox1">Js</label>
        <input type="checkbox" name="" id="chkbox1" value="Js">
        <br>
        <label for="chkbox2">Dart</label>
        <input type="checkbox" name="" id="chkbox2" value="dart">
        <br>
        <label for="chkbox3">HTML5</label>
        <input type="checkbox" name="" id="chkbox3" value="html">
        <br>
        <label for="chkbox4">Css</label>
        <input type="checkbox" name="" id="chkbox4" value="css">
        <br>
        <label for="chkbox5">C++</label>
        <input type="checkbox" name="" id="chkbox5" value="c++">
        <br>
        <label for="chkbox6">C#</label>
        <input type="checkbox" name="" id="chkbox6" value="c#">
        <br>
        <label for="chkbox7">Flutter</label>
        <input type="checkbox" name="" id="chkbox7" value="Flutter">
        <br>
        <label for="chkbox8">Java</label>
        <input type="checkbox" name="" id="chkbox8" value="Java">
        <br>
        <label for="chkbox9">Python</label>
        <input type="checkbox" name="" id="chkbox9" value="Python">
        <br><br><br>

        <label for="textarea">Write about yourself.</label> <br>
        <textarea name="" id="textarea" cols="30" rows="10"></textarea>

        <h1>Please Enter your github to show your repositorties</h1>
        <label for="github">Github URL: </label><br>
        <input type="text" name="" id="github" placeholder="https://github.com/IboRasul">
        
        <br>

    </form>
</div>


</center>    


</body>
</html>

<?php 

?>