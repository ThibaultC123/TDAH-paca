@include('includes.head')
<link rel="stylesheet" type="text/css" href="default_blue.css" />

<body>
@include('includes.header')
<div id="main">
        <div>
                <img src={{ asset('images/fond.jpg') }} alt="nice" class="img-fluid" id="fond">
                <img src={{ asset('images/calendrier.jpg') }} alt="cal" id="cal">
        </div>
</div>
@include('includes.footer')
</body>

