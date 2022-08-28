<!DOCTYPE html>
<html>
<head>
@include('kanban.css.css1')
</head>
<body>


  <form action="{{route('post_kanban')}}" method="post">
    @csrf

    <div class="center">
    <input type="text" id="fname" name="title" placeholder="Write your Task"><br><br>
    <input type="submit" class="button" value="Add">
  </div>
  </form>
  <br>
  <br>
<br>
<div class="table_container">
    <table >
    <tr>
        <th class="col_head">To do</th>
    </tr>

      @foreach($lists as $lis)
      <tr>
          <td >
              <a href="{{ url('/kanban/board/edit/') }}/{{ $lis->id }}" >
                  <div class="card">
                      <div class="container">
                      <h4 class="ttid"><b>Task {{$lis->id}}.  </b></h4>

                      <p class="ttid">{{$lis->title}} </p>
                      </div>
                  </div>
            </a>
          </td>
      </tr>
      @endforeach
    </table>

    <table >
    <tr>
        <th class="col_head"> In progress</th>
    </tr>
    @foreach($lists as $lis)
    <tr>
        <td >
<a href="{{ url('/kanban/board/edit/') }}/{{ $lis->id }}" >
                <div class="card">
                    <div class="container">
                    <h4 class="ptid"><b>Task {{$lis->id}}.  </b></h4>

                    <p class="ptid">{{$lis->title}} </p>
                    </div>
                </div>
</a>
        </td>
    </tr>
    @endforeach
    </table>

    <table >
    <tr>
        <th class="col_head">Done</th>
    </tr>
    @foreach($lists as $lis)
    <tr>
        <td >
<a href="{{ url('/kanban/board/edit/') }}/{{ $lis->id }}" >
                <div class="card">
                    <div class="container">
                    <h4 class="tid"><b>Task {{$lis->id}}.  </b></h4>

                    <p class="tid">{{$lis->title}} </p>
                    </div>
                </div>
</a>
        </td>
    </tr>
    @endforeach
    </table>
</div>
<br>
<div class="paginate">
<button class="btn">{{ $lists->links() }}</button>
</div>
<br>
</body>
</html>
