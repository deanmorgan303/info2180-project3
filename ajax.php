<?php

$job = '<div id= "newJob">
            <form action="addJob.php" method="post" id="job">
            <h1>New Job</h1>
            
            
            <p>Job Titlte</p>
            <input type="text" name="title" id="">
            
            
            <p>Job Discription</p>
            <textarea name="discription" id="" cols="75.5" rows="10" spellcheck="false">

            </textarea>

            <p>Category</p>
            <select name="cat" id="">
                <option> Select a category</option>
                <option>Sales & Marketing</option>
                <option>Programming</option>
                <option>Business & Management</option>
                <option>Design</option>
                <option>DevOps & Sysadmin</option>
            </select>
            <p>Company</p>
            <input type="text" name="company" id="">
            <p>Location</p>
            <input type="text" name="location" id="">
            <input type="submit" name=""/>
            </form>

        </div>';
$adduse = '<div id="">
            
            <h1>New User</h1>
            
            <form action="some.php" id="login" method="post">
            <p>Firsr Name</p>
            <input type="text" name="fnames" id="fname">
            
            
            <p>Last Name</p>
            <input type="text" name="lnames" id="lname" spellcheck="false">
            <p>Password</p>
            <input type="password" name="pass" id="password">
            <p>Email</p>
            <input type="text" name="email" id="email" spellcheck="false">
            <p>Telephone</p>
            <input type="text" name="tele" id="telephone" spellcheck="false">
            <input type="submit" name=""/>
            </form>
        </div> '   ;     
if ($_GET["newJob"] == true){
    echo  $job;
}
elseif ($_GET["addUser"] == true){
    echo $adduse;
}
?>