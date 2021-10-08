<h3>MAIL TEMPLATE</h3>
<p>Gelen Bilgiler</p>
<hr>
<p>Adı: {{ $data['name'] }}</p>
<p>Soyadı: {{$data['surname']}}</p>
<p>Webinara Katılmak için <a href="{{ $data['webinarURL'] }}">tıklayın</a></p>