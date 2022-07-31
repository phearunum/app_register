<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Bootstrap 5 admin dashboard template & web App ui kit.">
    <meta name="csrf-token" value="{{ csrf_token() }}"/>
    <meta name="keyword" content="">
    <link rel="icon" href="/website/img/favicon.ico" type="image/x-icon">
    <title> Login Page-E-Filing  </title>
    <link rel="stylesheet" href="/website/css/all.min.css">

    <link rel="stylesheet" href="/website/css/avio-style.css">

    <script src="/website/js/plugins.js"></script>
   <!-- <link href="{!! url('css/app.css') !!}" rel="stylesheet"> -->
   <link rel="stylesheet" href="/css/app_them.css">
    <style>
        img {
     filter: saturate(1)!important;
}
.centered {
  position: fixed;
  top: 50%;
  left: 53%;
  margin-top: -50px;
  transform: translate(-50%, -50%);

}
.form-control {
            width: 100%;
            padding: 9px 20px;
            text-align: left;

            outline: 0;
            border-radius: 4px;
            background-color: #fff;
            font-size: 15px;
            font-weight: 300;
            color: #8D8D8D;
            -webkit-transition: all 0.3s ease;
            transition: all 0.3s ease;
            margin-top: 16px;
            height: calc(1.5em + 1.2rem + 2px) !important;
            font-family: 'Khmer OS Siemreap';
        }
        .toasted .primary.error, .toasted.toasted-primary.error{
            background-color: #ffe2e0!important;color: rgb(158, 73, 73);
            margin-top: -80px;
        }
        </style>
</head>

<body data-avio="theme-indigo">

    <div class="avio">

        <div class="page-body ">
              <div id="app">
               <login></login>
              </div>
            </div>
        </div>
    </div>


    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
   

</body>

</html>
