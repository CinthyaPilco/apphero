<?php requiere_once("index.html") ?>
<!DOCTYPE html>
<html>
<head>
<title>CONTROL DE LUCES PANECILLO</title>
<script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-analytics.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-database.js"></script>

 </head>
<h1 style="background-color:#45B39D ;"><center>SISTEMA DE CONTROL DE ENECENDIDO Y APAGADO DE LUCES PANECILLO</center></h1>
<body background="https://www.solofondos.com/wp-content/uploads/2017/08/e_hd169_9-minimalistic.jpg">
<p style="color:#000000 ;"><b>Integrantes:</b></p>
<p style="color:#000000 ;"><b>Andres Faican </b></p>
<p style="color:#000000 ;"><b>Samy Mestanza </b></p>
<p style="color:#000000 ;"><b>Cinthya Pilco </b></p>

<p></p>
<h1 style="background-color:#45B39D ;"><center>PLANTA BAJA</center></h1>	

<button type="button" ondblclick="luztecho_();" onclick="luztecho();">S1 TECHO </button>
<button type="button" ondblclick="luzpasillo_();" onclick="luzpasillo();">S2 PASILLO</button>
<button type="button" ondblclick="luzcuadros_();" onclick="luzcuadros();">S3 CUADROS</button>
<button type="button" ondblclick="luzlocales_();" onclick="luzlocales;">S4 LOCALES</button><p></p>

<h1 style="background-color:#45B39D ;"><center>PRIMER PISO</center></h1>

<button type="button" ondblclick="luztecho1_();" onclick="luztecho1();">S5 TECHO </button>
<button type="button" ondblclick="luzpasillocristal_();" onclick="luzpasillocristal();">S6 PASILLO</button>
<button type="button" ondblclick="vitrinas_();" onclick="vitrinas();">S7 VITRINAS</button>

<h1 style="background-color:#45B39D ;"><center>SEGUNDO PISO</center></h1>
<button type="button" ondblclick="luztecho2_();" onclick="luztecho2();">S8 TECHO </button>
<button type="button" ondblclick="luzcuadros2_();" onclick="luzcuadros2();">S9 CUADROS</button>

<h1 style="background-color:#45B39D ;"><center>TERCER PISO</center></h1>
<button type="button" ondblclick="luztecho3_();" onclick="luztecho3();">S10 TECHO </button>
<button type="button" ondblclick="luzcuadros3_();" onclick="luzcuadros3();">S11 CUADROS</button>

<h1 style="background-color:#45B39D ;"><center>ESTATUA </center></h1>
<button type="button" ondblclick="apliques_();" onclick="apliques();">S12 LAMPARA APLIQUES </button>
<button type="button" ondblclick="reflectores_();" onclick="reflectores();">S13 REFLECTORES</button>


<script>
const F= "Botones"
</script>
<script>
function luztecho(){
  writeUserData(F,'A')
}
</script>

<script>
function luzpasillo(){
  writeUserData(F,'B')
}
</script>
<script>
function luzcuadros(){
  writeUserData(F,'C')
}
</script>
<script>
function luzlocales(){
  writeUserData(F,'D')
}
</script>
<script>
function luztecho1(){
  writeUserData(F,'E')
}
</script>
<script>
function luzpasillocristal(){
  writeUserData(F,'F')
}
</script>
<script>
function vitrinas(){
  writeUserData(F,'G')
}
</script>
<script>
function luztecho2(){
  writeUserData(F,'H')
}
</script>
<script>
function luzcuadros2(){
  writeUserData(F,'I')
}
</script>
<script>
function luztecho3(){
  writeUserData(F,'J')
}
</script>
<script>
function luzcuadros3(){
  writeUserData(F,'K')
}
</script>
<script>
function apliques(){
  writeUserData(F,'L')
}
</script>
<script>
function reflectores(){
  writeUserData(F,'M')
}
</script>
<script>
function luztecho_(){
  writeUserData(F,'N')
}
</script>
<script>
function luzpasillo_(){
  writeUserData(F,'Ñ')
}
</script>
<script>
function luzcuadros_(){
  writeUserData(F,'O')
}
</script>
<script>
function luzlocales_(){
  writeUserData(F,'P')
}
</script>
<script>
function luztecho1_(){
  writeUserData(F,'Q')
}
</script>
<script>
function luzpasillocristal_(){
  writeUserData(F,'R')
}
</script>
<script>
function vitrinas_(){
  writeUserData(F,'S')
}
</script>
<script>
function luztecho2_(){
  writeUserData(F,'T')
}
</script>
<script>
function luzcuadros2_(){
  writeUserData(F,'U')
}
</script>
<script>
function luztecho3_(){
  writeUserData(F,'V')
}
</script>
<script>
function luzcuadros3_(){
  writeUserData(F,'W')
}
</script>
<script>
function apliques_(){
  writeUserData(F,'X')
}
</script>
<script>
function reflectores_(){
  writeUserData(F,'Y')
}
</script>

<script>
function writeUserData(userId, name) {
  firebase.database().ref(userId).set({
    Accion: name,
  });
}
</script>
<script>
const config = {
    apiKey: "AIzaSyDOrhe2QfTGSzCoq6n_YUVUGB4JjreDK_Q",
    authDomain: "panecillo-fb589.firebaseapp.com",
    databaseURL: "https://panecillo-fb589.firebaseio.com",
    projectId: "panecillo-fb589",
    storageBucket: "panecillo-fb589.appspot.com",
    messagingSenderId: "380240411227",
    appId: "1:380240411227:web:b9cdd7476f3de76df6dd7e",
    measurementId: "G-Z06E6Z452V"
  };
 firebase.initializeApp(config);
 firebase.analytics();

</script>
</script>
</body>
</html>