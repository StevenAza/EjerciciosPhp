<html>
 <head>
 <title>ecuacion2b</title>
 <script>
 function res()
 {
 a=document.datos.a.value;b=document.datos.b.value;c=document.datos.c.value;
 disc=parseFloat(b*b-4*a*c);
 document.datos.d.value=disc;
 if (disc<0) {alert('No hay solución real')}
 else
 { x1=(-b-Math.sqrt(disc))/(2*a);
 x2=(-b+Math.sqrt(disc))/(2*a);
 document.datos.x1.value=x1;
 document.datos.x2.value=x2; }
 }
 </script>
</head>
<body text=white bgcolor=blue>
 <form name="datos">
 <input type="text" name="a" size="3">x2+<input type="text" name="b" size="3">
 x+<input type="text" name="c" size="3">=0<BR>
 discriminante<input type="text" name="d" size="3"><BR><BR>
 x1=<input type="text" name="x1" size="3"><BR>
 x2=<input type="text" name="x2" size="3"><BR>
 <input type="button" value="Resolver" onClick="res()">
 </form>
 </body>
</html>

