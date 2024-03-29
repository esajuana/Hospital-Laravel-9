<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
@include('admin.sidebar')
<!-- partial -->
        <!-- partial:partials/_navbar.html -->
    @include('admin.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <div align="center" style="padding: 100px;">

            <table>
                <tr style="background-color: black">
                    <th style="padding: 10px;">Doctor Name</th>
                    <th style="padding: 10px;">Phone</th>
                    <th style="padding: 10px;">Speciality</th>
                    <th style="padding: 10px;">Room No</th>
                    <th style="padding: 10px;">Images</th>
                    <th style="padding: 10px;">Delete</th>
                    <th style="padding: 10px;">Update</th>

                </tr>

                @foreach($data as $doctor)
                <tr align="center" style="background-color: skyblue;">
                    <td>{{$doctor->name}}</td>
                    <td>{{$doctor->phone}}</td>
                    <td>{{$doctor->speciality}}</td>
                    <td>{{$doctor->room}}</td>
                    <td><img height="100" width="100" src="doctorimage/{{$doctor->image}}"></td>

                    <td><a onclick="return confirm('are you sure to delete this')" class="btn btn-danger" href="{{url('deletedoctor',$doctor->id)}}">Delete</a></td>
                    <td><a class="btn btn-primary" href="{{url('updatedoctor',$doctor->id)}}">Update</a></td>
                </tr>
                @endforeach
            </table>

        </div>
    </div>
    <!-- main-panel ends -->
    <!-- page-body-wrapper ends -->
</div>
@include('admin.script')
</body>
</html>
