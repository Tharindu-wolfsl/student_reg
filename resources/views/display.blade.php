<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Display</title>
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
</head>
<body>
    <div class="reg"><a href="{{url('/')}}"><h4>Register</h4></a></div>

    <h1 align="center">Student Details Table</h1>
    <form class="form1" action="{{url('search')}}" method="get" align="center">

    <input class="s1" type="search" name="search" placeholder="Search for something">


    <input class="s1" type="submit" value="Search">





    </form>
    <br><br>
    
    <table border="1px" align="center">
        <tr>
            <th>Student name</th>
            <th>Address</th>
            <th>Contact</th>
            <th>Email</th>
            <th>Gender</th>
            <th>DOB</th>
            <th>Course</th>
            <th>NIC</th>
            <th>Post code</th>
            <th class="deleteh"></th>
            <th class="updateh"></th>

        </tr>
        @foreach($data as $student)
        <tr>
            <td>{{$student->name}}</td>
            <td>{{$student->address}}</td>
            <td>{{$student->contact}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->gender}}</td>
            
            <td>{{$student->dob}}</td>
            <td>{{$student->course}}</td>
            <td>{{$student->nic}}</td>
            <td>{{$student->postcode}}</td>
            
            <!-- <td>

                <img height="70" width="50" src="student/{{$student->image}}">
            </td> -->
            <td class="delete"><a  href="{{url('delete',$student->id)}}">Delete</a></td>
            <td  class="update"><a href="{{url('update_view',$student->id)}}">Update</a></td>
        </tr>
        @endforeach
    </table>
    <script src="/js/app.js"></script>
</body>
</html>