<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Home</title>
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
</head>
<body>

    




<div  class="register " align="center
">
    <h3>Register here!</h3>
    <div class="card1 mx-auto" height="40px" width="30px">
  <div class="card-body">
  <form action="{{url('upload')}}" method="POST" enctype="multipart/form-data">

@csrf    
<div style="padding:10px;">
    <input type="text" name="name" placeholder="Full name">
</div>
<div style="padding:10px;">
    
    <input type="text" name="address" placeholder="Address">
</div>
<div style="padding:10px;">
    
    <input type="text" name="contact" placeholder="Contact no">
</div>
<div style="padding:10px;">
    <input type="email" name="email" placeholder="Email">
</div>

<div style="padding:10px;">
    
    <select name="gender" id="gender_select" placeholder="Gender"><option ><--Select Gender--></option><option value="male">Male</option><option value="female">Female</option></select>
</div>
<div style="padding:10px;">
    <label >DOB :</label>
    <input type="date" name="dob" placeholder="DOB">
</div>
<div style="padding:10px;">

   

     <select name="course" id="course_select" placeholder="Course"><option ><--Select course--></option><option value="management">Management</option><option value="it">IT</option></select>
</div>
<div style="padding:10px;">
    <input type="text" name="nic" placeholder="NIC">
</div>
<div style="padding:10px;">
    
    <input type="text" name="postcode" placeholder="Post Code">
</div>

<!-- <div style="padding:10px;">
    <label >Image</label>
    <input type="file" name="file">
</div> -->
<div style="padding:10px;">
    
    <input class="button" type="submit">
</div>
</form>
  </div>
</div>
  
</div>
<div class="mt-3"  align="center"><P>Click below to view table</P><a class="stdT" href="{{url('/view')}}">Student Table</a></div>
<script src="/js/app.js"></script>
    
</body>
</html>