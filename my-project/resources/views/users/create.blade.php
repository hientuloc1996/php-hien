<h1>Tao Nguoi Dung Moi</h1>

<form action="{{route('store')}}" method="POST">
  <input type="hidden" name="_token" value="{{csrf_token()}}">

  <div>
    Ten:
    <input type="text" name="ten">
  </div>
  <div>
    Thu Dien Tu:
    <input type="email" name="thuDienTu">
  </div>
  <div>
    Mật khẩu:
    <input type="text" name="password">
  </div>
  <button type="submit">
    Tao Moi
  </button>
</form>