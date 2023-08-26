<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <title>Document</title>
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
</head>
<body>
    <div class="regpage"><a href="{{url('/')}}"><h2>Register</h2></a></div>
    <div class="tabelpage"><a href="{{url('/view')}}"><h2>Student Table</h2></a></div>
<div class="updatePage" align="center"><h1>Update page</h1>
<!-- {{$student->name}}
{{$student->email}}
<img src="/student/{{$student->image}}">



     -->
     <div class="card2 " align="center">
  <div class="card-body">
  <form action="{{url('update',$student->id)}}" method="POST" enctype="multipart/form-data">
         @csrf
         <div>
           
             <input class="inp" type="text" name="name" value="{{$student->name}}">
         </div>
         <div>
             
             <input class="inp" type="text" name="address" value="{{$student->address}}">
         </div>
         <div style="padding:10px;">
           
            <input class="inp" type="text" name="contact" value="{{$student->contact}}">
        </div>
        <div style="padding:10px;">
            
            <input class="inp" type="email" name="email" value="{{$student->email}}">
        </div>

        <div style="padding:10px;">
            
            <select class="inp" name="gender" id="gender_select" value="{{$student->gender}}"><option >Select Gender</option><option value="male">Male</option><option value="female">Female</option></select>
        </div>
        <div style="padding:10px;">
            
            <input class="inp" type="date" name="dob" value="{{$student->dob}}">
        </div>
        <div style="padding:10px;">
           
             <select class="inp" name="course" id="course_select" value="{{$student->course}}"><option >Select Course</option><option value="management">Management</option><option value="it">IT</option></select>
        </div>
        <div style="padding:10px;">
           
            <input class="inp" type="text" name="nic" value="{{$student->nic}}">
        </div>
        <div style="padding:10px;">
            
            <input class="inp" type="text" name="postcode" value="{{$student->postcode}}">
        </div>



         <!-- <div>
         <label for="">Old image</label>
             <img height="250" width="200" src="/student/{{$student->image}}">
             
         </div>
         <div>
         <label for="">Change the image</label>
             <input type="file" name="file">
             
         </div> -->
         <div>
             <input class="UpdateBtn" type="submit" value="Update">
         </div>
     </form>
  </div>
</div>

    </div>
     <script src="/js/app.js"></script>
</body>
</html>