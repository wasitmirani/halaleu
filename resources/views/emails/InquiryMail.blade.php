<x-mail::message>
#Inquiry Mail<br>

Hi,Administrator

<strong>Name:</strong>  <span>{{$body['name']}}</span> <br>
<strong>Email:</strong> <span> {{$body['email']}}</span><br>
<strong>Phone:</strong> <span>{{$body['phone']}}</span><br>
<strong>Business:</strong>  <span>{{$body['business']}}</span><br>
<strong>Position: </strong> <span>{{$body['position']}}</span> <br>
<strong>Company: </strong> <span>{{$body['company']}}</span> <br>
<strong>Site: </strong> <span>{{$body['site']}}</span> <br>
<strong>Fax: </strong> <span>{{$body['fax']}}</span> <br>
<strong>Message: </strong> <span>{{$body['message']}}</span> <br>


<br>
<hr>
<h4>FootPrints Info</h4>
<br>
<span> Website: {{ url('/') }} </span><br>
<br>
<hr>
<h4>IP Info</h4>


<span> IP: {{$body['footprints']->ip}}</span><br>
<span> IP to ISP:  {{$body['footprints']->isp}}</span><br>
<span> IP to Org:  {{$body['footprints']->as}}</span><br>
<span> IP to Zip:  {{$body['footprints']->zip}}</span><br>
<span> IP to City:  {{$body['footprints']->city}}</span><br>
<span> IP to Lat:  {{$body['footprints']->lat}}</span><br>
<span> IP to Log:  {{$body['footprints']->log}}</span><br>
<span> IP to Timezone:  {{$body['footprints']->timezone}}</span><br>
<span> IP to Status:  {{$body['footprints']->status}}</span><br>
<span> IP to Region:  {{$body['footprints']->region}}</span><br>
<span> IP to Country:  {{$body['footprints']->country}}</span><br>


Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
