<p>{{session('success')}}</p>
<form action="{{route('sendpost')}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Ad Soyad">
    <input type="text" name="email" placeholder="Email">
    <input type="submit" value="Mail Gönder">
</form>