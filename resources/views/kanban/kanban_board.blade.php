
<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: orange;
  color: white;
}
.center {
  margin: auto;
  width: 60%;
  border: 3px solid #73AD21;
  padding: 10px;
}
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 6px 12px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
input[type=text], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
</style>
</head>
<body>


  <form action="{{route('post_kanban')}}" method="post">
    @csrf
    <div class="center">
    <input type="text" id="fname" name="title" placeholder="Write your Task"><br><br>
    <input type="submit" class="button" value="Add">
  </div>
  </form>
<h1 >Kanban Board</h1>

<table id="customers">
  <tr>
    <th>To do</th>
    <th>In progress</th>
    <th>Done</th>
  </tr>
  @foreach($lists as $lis)
  <tr>
    <td>
      <a href="{{ url('/kanban/board/edit/') }}/{{ $lis->id }}" >
      <div class="card">

        <div class="container">
          <h4><b>Task {{$lis->id}}.</b></h4>
          <p>{{$lis->title}}</p>
        </div>
      </div>
    </a>
      
    </td>
    <td><div class="card">

      <div class="container">
        <h4><b>Task {{$lis->id}}.</b></h4>
        <p>{{$lis->title}}</p>
      </div>
    </div></td>
    <td><div class="card">

      <div class="container">
        <h4><b>Task {{$lis->id}}.</b></h4>
        <p>{{$lis->title}}</p>
      </div>
    </div></td>
  </tr>
  @endforeach

</table>


</body>
</html>
