<!DOCTYPE html>

<html>

<head>

    <title>From Evisaaz.Org</title>

</head>

<body>

 <h1 style="color: green;">From Evisaaz.Org</h1>

 <h2 style="color:crimson;">User who want to contact with you regarding this information:</h2>

 <p><b>Message Type: </b> @if($msg->message_type==2) Assistance @else {{$msg->message_type}} @endif</p><br>

 <p><b>First Name:</b> {{$msg->firstname}}</p><br>

 <p><b>Surname:</b> {{$msg->lastname or 'N/A'}}</p><br>

 <p><b>Email:</b> {{$msg->email}}</p><br>

 <p><b>Country:</b> {{$msg->country}}</p><br>


 <p><b>Travel Doc Number:</b> {{$msg->doc_number or 'N/A'}}</p><br>

 <p><b>Message:</b> {{$msg->message}}</p>

</body>

</html>