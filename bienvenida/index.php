<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Bienvenida</title>
    <link type="text/css" rel="stylesheet" href="css/easy-responsive-tabs.css" />
    <link type="text/css" rel="stylesheet" href="css/component.css">
    <script src="js/jquery-1.6.3.min.js"></script>
    <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
    <style type="text/css">
        .demo {
            width: 980px;
            margin: 0px auto;
			margin-top:2%;
        }
        .demo h1 {
                margin:33px 0 25px;
            }
        .demo h3 {
                margin: 10px 0;
            }

        @media only screen and (max-width: 780px) {
        .demo {
                margin: 5%;
                width: 90%;
				margin-top:2%;
         }
        .how-use {
                float: left;
                width: 300px;
                display: none;
            }
        }
        #tabInfo {
            display: none;
        }
    </style>
</head>
<body>
    <div class="demo">


      <!--Horizontal Tab-->
        <div id="horizontalTab">
            <ul class="resp-tabs-list">
                <li><button class="btn btn-5 btn-5a icon-bell"><span>Bienvenida</span></button></li>
                <li><button class="btn btn-5 btn-5a icon-gears"><span>Tutorial</span></button></li>
                <li><button class="btn btn-5 btn-5a icon-envelope-o"><span>Contacto</span></button></li>
                <li><button class="btn btn-5 btn-5a icon-group"><span>Nifet</span></button></li>
            </ul>
            <div class="resp-tabs-container">
                <div>
                    <p><?php include("cont1.html");?></p>
                </div>
                <div>
                    <p>This tab has icon in consectetur adipiscing eliconse consectetur adipiscing elit. Vestibulum nibh urna, ctetur adipiscing elit. Vestibulum nibh urna, t.consectetur adipiscing elit. Vestibulum nibh urna,  Vestibulum nibh urna,it.</p>
                </div>
                <div>
                    <p>Suspendisse blandit velit Integer laoreet placerat suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. Proin consectetur nibh quis Integer laoreet placerat suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. Proin consectetur nibh quis urna gravid urna gravid eget erat suscipit in malesuada odio venenatis.</p>
                </div>
                <div><p><?php ?></p></div>
            </div>
        </div>

    </div>
</body>
<script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true,   // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#tabInfo');
                var $name = $('span', $info);

                $name.text($tab.text());

                $info.show();
            }
        });


    });
</script>
</html>
