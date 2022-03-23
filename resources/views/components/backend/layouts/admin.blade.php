<!DOCTYPE html>
<html lang="en">

<head>
    <title>Education Master Template</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Education master is one of the best educational html template, it's suitable for all education websites like university,college,school,online education,tution center,distance education,computer education">
    <meta name="keyword" content="education html template, university template, college template, school template, online education template, tution center template">
    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="shortcut icon" href="{{asset('ui/frontend')}}/images/fav.ico" type="image/x-icon">
    <!-- GOOGLE FONT -->
    <link rel="stylesheet" href="
    https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="
    https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700" rel="stylesheet">
    <!-- FONTAWESOME ICONS -->
    <link rel="stylesheet" href="{{asset('ui/frontend')}}/css/font-awesome.min.css">
    <!-- ALL CSS FILES -->
    <link href="{{asset('ui/frontend')}}/css/materialize.css" rel="stylesheet">
    <link href="{{asset('ui/frontend')}}/css/bootstrap.css" rel="stylesheet" />
    <link href="{{asset('ui/frontend')}}/css/style.css" rel="stylesheet" />
    <!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
    <link href="{{asset('ui/frontend')}}/css/style-mob.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <!--== MAIN CONTRAINER ==-->
    <div class="container-fluid sb1">
        <div class="row">
        @include('components.backend.layouts.partials.topbar')
        </div>

    </div>



    <!--== BODY CONTNAINER ==-->
    <div class="container-fluid sb2">
        <div class="row">
            <div class="sb2-1">
                <!--== USER INFO ==-->
                <div class="sb2-12">
                    <ul>
                        <li><img src="{{asset('ui/backend')}}/images/placeholder.jpg" alt="">
                        </li>
                        <li>
                            <h5>Victoria Baker <span> Santa Ana, CA</span></h5>
                        </li>
                        <li></li>
                    </ul>
                </div>
                <!--== LEFT MENU ==-->
                @include('components.backend.layouts.partials.sidebar')
            </div>

            <!--== BODY INNER CONTAINER ==-->
            <div class="sb2-2">
                <!--== breadcrumbs ==-->
               

                {{$slot}}
                
        </div>

        </div>
    </div>

    <!--Import jQuery before materialize.js-->
    <script src="{{asset('ui/backend')}}/js/main.min.js"></script>
    <script src="{{asset('ui/backend')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('ui/backend')}}/js/materialize.min.js"></script>
    <script src="{{asset('ui/backend')}}/js/custom.js"></script>
</body>


</html>