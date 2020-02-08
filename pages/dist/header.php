<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Aplikasi Kesiswaan</title>

    <!-- Custom fonts for this template-->
    <link
      href="./template/vendor/fontawesome-free/css/all.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet"
    />

    <!-- Custom styles for this template-->
    <link href="./template/css/sb-admin-2.css" rel="stylesheet" />
    <link rel="stylesheet" href="./template/vendor/datatables/dataTables.bootstrap4.min.css">
    <script src="./template/js/moment.min.js"></script>
  </head>

  <script>
    function jam(){
      document.getElementById("jam").innerHTML =
		"Waktu : " +
		moment()
			.locale("en-gb")
      .format("LTS");
            
      var skrng = moment().format("H");           
      if((skrng>=6) && (skrng<=11)) { 
      document.getElementById("waktu").innerHTML = "Pagi !!";
      }
      else if((skrng>11) && (skrng<=15)) {
        document.getElementById("waktu").innerHTML = "Siang !!";
      }
      else if((skrng>15) && (skrng<=18)){
         document.getElementById("waktu").innerHTML = "Sore !!";
      }
      else{
         document.getElementById("waktu").innerHTML = "Malam !!";
      }      
    }
    setInterval(jam, 1000);
  </script>