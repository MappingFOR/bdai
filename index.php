<?php

    $Status = array();
    require_once 'inc/config.php';
    require_once 'inc/login.php';

    if( isSet( $_GET['site'] ) ) {
        $C = $_GET['site'];
    } else {
        $C = 'index';
    }
    
    if( !file_exists( 'sub/'.$C.'.php' ) )
        $C = 'error';

?>
   <html>
	<head>
		<title>Edycja</title>
	</head>
	<style>
		* {
			font-family: "Segoe UI";
			color: rgb(172, 247, 241);
			font-size: 16px;
		}
        input {
            padding: 5px;
            color: #000 !important;
        }
		input[type="submit"] {
		}
		#form {
			background-color: #3399CC;
			width: 200px;
			text-align: center;
			margin-top: 19%;
			margin-left: 41%;
			padding: 20px;
			border-radius: 10px;
		}
        
        body {
			font-weight: 400;
			perspective:800px;
			height: 100vh;
            color: #FFF !important;
			margin:0;
			overflow: hidden;
			background: #EA5C54 ; /* Old browsers */
			background: -moz-linear-gradient(-45deg,  rgb(0,43,76)  0%, #bb6dec 100%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, right bottom, color-stop(0%,#EA5C54 ), color-stop(100%,#bb6dec)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(-45deg,  #EA5C54  0%,#bb6dec 100%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(-45deg,  #EA5C54  0%,#bb6dec 100%); /* Opera 11.10+ */
			background: -ms-linear-gradient(-45deg,  #EA5C54  0%,#bb6dec 100%); /* IE10+ */
			background: linear-gradient(135deg,  rgb(0,43,76)  0%,#bb6dec 100%); /* W3C */
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#EA5C54 ', endColorstr='#bb6dec',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */

            
        }
	</style>
	<body>
<?php
    include 'sub/'.$C.'.php';
    @mysql_close();
?>
       </body>
</html>