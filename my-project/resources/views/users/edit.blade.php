<h1>Chỉnh Sửa Người Dùng</h1>

<form action="{{route('update',$user->id)}}" method="POST">
  <input type="hidden" name="_token" value="{{csrf_token()}}">
  <input type="hidden" name="_method" value="Post">
  <div>
    Ten:
    <input type="text" name="ten" value="{{$user->name}}">
  </div>
  <div>
    Email:
    <input type="email" name="email" value="{{$user->email}}">
  </div>
  <div>
    Password:
    <input type="text" name="password" value="{{$user->password}}">
  </div>
  <button type="submit">
    Chinh Sua
  </button>
</form>