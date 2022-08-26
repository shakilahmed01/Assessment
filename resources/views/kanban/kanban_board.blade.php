
<!DOCTYPE html>
<html>
<head>
@include('kanban.css.css')
</head>
<body>


  <form action="{{route('post_kanban')}}" method="post">
    @csrf
    <div class="center">
    <input type="text" id="fname" name="title" placeholder="Write your Task"><br><br>
    <input type="submit" class="button" value="Add">
  </div>
  </form>
<h1 class="h">Kanban Board</h1>

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
