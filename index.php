<?php 
if(isset($_GET['msg']))
{
    $msg=$_GET['msg'];
}
 include 'header.php';
?>
<div class="col-sm-8 bg-light ml-5 mx-auto ">
    <form action="db.php" method="post">
    <h5 class="text-primary"> <?php if(!empty ($msg)) {echo $msg;}?> </h5>
    <h2 class="text-primary text-center">Add Details</h2><br> 
         <div class="form-group row">
        <label for="username" class="col-4 col-form-label"> First Name :</label> 
        <input type="text"name="fnm" class="form-control col-8">
        </div>
        <div class="form-group row">
        <label for="username" class="col-4 col-form-label">Last Name :</label> 
        <input type="text"name="lnm" class="form-control col-8">
        </div>
        <div class="form-group row">
        <label for="username" class="col-4 col-form-label">Email :</label> 
        <input type="email"name="eml" class="form-control col-8">
        </div>
        <div class="form-group row">
        <label for="username" class="col-4 col-form-label">Designation:</label> 
        <input type="text"name="deg" class="form-control col-8">
        </div>
       
        <div class="form-group row">
        <label for="name" class="col-4 col-form-label">DOB:</label> 
        <input type="date" name="dob" class="form-control col-8">
        </div> 
        <div class="form-group row">
        <label for="name" class="col-4 col-form-label">Mobile:</label> 
        <input type="text" name="mob" class="form-control col-8">
        </div>      
        <div class="">
        <label class="col-4 col-form-label">Gender:</label>
            <input type="radio" name="gen" value="Male" class="">
            <label for="ml">Male</label>
            <input type="radio" name="gen" value="Female" class="ml-5">
            <label for="fml">Female</label>
        </div>
        <div class="">
        <label class="col-4 col-form-label">Hobbies:</label>         
            <input type="checkbox" name="hb[]" value="football" class="">
                <label for="ml">Football:</label>
            <input type="checkbox" name="hb[]" value="hockey" class="ml-3">     
                <label for="ml">Hockey:</label>
           <input type="checkbox" name="hb[]" value="tennis" class="ml-3">
                <label for="ml">Tennis:</label>
            <input type="checkbox" name="hb[]" value="cricket" class="ml-3">
                <label for="ml">Cricket:</label>       
        </div>
        

        <div class="text-center">
            <input type="submit" name="reg" value="Submit"  class="btn btn-primary">
        </div>
        
    </form>
</div>
<?php
include 'footer.php'; 
?>