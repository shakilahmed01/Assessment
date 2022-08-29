<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Update card status</title>
    <style>
    .center {
      margin: auto;
      width: 20%;
      /* border: 3px solid #73AD21; */
      padding: 10px;
      display:flex;
    }
    .button {
      background-color: #4CAF50;
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
    }
    input[type=text], select {
      width: 100%;
      padding: 12px 20px;
      margin: auto;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    </style>
  </head>

<body>
  <!-- Modal content -->
  <div class="center">
    <span class="close"></span>
    <form action="{{route('update_task')}}" method="post">
      @csrf
      <input type="hidden"  name="id" value="{{$list->id}}" placeholder="Write your Task"><br><br>
      <input type="text" id="fname" name="title" value="{{$list->title}}" placeholder="Write your Task"><br><br>
      <input type="submit" class="button" value="Change">
    </form>

</div>
</body>
</html>
