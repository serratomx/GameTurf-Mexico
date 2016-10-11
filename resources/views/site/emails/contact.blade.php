<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>Solicitud de contacto | 2G&T</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&subset=latin-ext" rel="stylesheet">
</head>
<body style="font-family: 'Roboto', helvetica, arial, sans-serif;margin:0;background-color: #F5F5F5;font-size:16px;">
<div style="display:block;margin:auto;width:996px;background-color:#FFFFFF;">
  <div style="width:92%;display:block;margin:auto;padding:30px 25px 60px 25px;">
    <div style="width:100%;display:inline-block;margin:auto;text-align:center;">
      <img src="{!! asset('public/assets/img/gameturfmexico-logo.png') !!}" alt="Logo GameTurf México" title="Logo GameTurf México" style="height:90px;display:inline-block;margin-bottom:10px;" />
    </div>
    <div style="width:100%;display:inline-block;margin:auto;">
      <div style="text-align:center;margin-bottom:45px;">
        <h1 style="font-weight:bold;">Solicitud de contacto</h1>
        <h4 style="font-weight:normal;">Un visitante ha generado una solicitud de contacto con los siguientes datos: </h4>
      </div>
      <p><b>Nombre:</b> {{ $contact['name'] }}</p>
      <p><b>Teléfono:</b> {{ $contact['telephone'] }}</p>
      <p><b>Empresa:</b> {{ $contact['company'] }}</p>
      <p><b>Correo electrónico:</b> <a href="mailto:{{ $contact['email'] }}" style="color:#6EAD3B;text-decoration:none;">{{ $contact['email'] }}</a></p>
      <p><b>Uso:</b> {{ $contact['use'] }}</p>
      <p><b>Metros cuadrados:</b> {{ $contact['square-meter'] }}</p>
      <p><b>Su mensaje:</b> {{ $contact['message'] }}</p>
    </div>
  </div>
  <div style="width:100%;display:inline-block;margin:auto;min-height:90px;background-color: #333333;border-top:4px solid #6EAD3B;color: #f1f1f1;">
    <p style="text-align:center;margin-top:25px;">Copyright &copy; {!! date('Y') !!} | Todos los derechos reservados.</p>
  </div>
</div>
</body>
</html>