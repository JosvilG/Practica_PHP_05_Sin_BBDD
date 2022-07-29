<!DOCTYPE html>
<HTML>
<HEAD>
<meta lang="es" charset="utf-8">
<TITLE>Exercici 5 - Josep Vilchez</TITLE>
</HEAD>

<BODY>
<H1>CENTRE DE LA IMATGE I TECNOLOGIA MULTIMÈDIA</H1>

<?php    
    
$fecha = date ("j/n/Y H:i\n");
print ("$fecha");
?>
    
<style>

    body{
        font-family: sans-serif, arial;
        text-align: center;
    }
    
    h2:hover{
        cursor: pointer;
    }
    
</style>    
  
<?php
function Noticia1(){
    $MaxChar = 100;
	$resumenC = " ";
	$k = "\nUn grupo de estudiantes del Lycée Polyvalent Victor Anicet – Lycée Numérique du Design et des Arts Appliqés de Martinica, \n acompañados por tres profesores, visitaron el Centro de la Imagen y la Tecnología Multimedia con el objetivo \n de conocer su plan de estudios y sus instalaciones. La isla Martinica forma parte de la República Francesa y pertenece a \n la Unión Europea como región ultra periférica, en las llamadas Antillas menores.\n"; 
    
	if(strlen($k) > 100){
		$resumenC = substr($k, 0 ,$MaxChar).'...';
	}
    $titulo = "\n Alumnos de una escuela de Artes Aplicadas de la Isla Martinica visitan el CITM \n";
    $img = "https://www.citm.upc.edu/blog/wp-content/uploads/2019/09/IllaMartinica-437x300.jpg";
    $fecha = date ("\n 25/09/2019 H:i\n ");
    $link = "https://www.citm.upc.edu/blog/alumnos-de-una-escuela-de-artes-aplicadas-de-la-isla-martinica-visitan-el-citm/";
    
    return array($titulo, $fecha, $resumenC, $img, $link);
}

function Noticia2(){
    $MaxChar = 100;
	$resumenC = " ";
	$k = "\n El plató del Centro de la Imagen y la Tecnología Multimedia ha sido el punto de encuentro de nuevos alumnos, profesores y personal de administración del centro para dar el pistoletazo de salida al nuevo curso académico. \n Este año, se han realizado dos convocatorias para dar la bienvenida a todos los nuevos estudiantes. Una primera sesión a las 9:30 h con los nuevos alumnos de Multimedia y Animación y una segunda convocatoria a las 12:00 h para los estudiantes de los dos grados en Videojuegos que imparte el CITM.\n"; 
    
	if(strlen($k) > 100){
		$resumenC = substr($k, 0 ,$MaxChar).'...';
	} 
    $titulo = "\n El CITM da la bienvenida al nuevo curso académico \n";
    $img = "https://www.citm.upc.edu/blog/wp-content/uploads/2019/09/David_Sanchez-423x300.jpg";
    $fecha = date ("18/09/2019 H:i");
    $link = "https://www.citm.upc.edu/blog/el-citm-da-la-bienvenida-al-nuevo-curso-academico-2/";
    return array($titulo, $fecha, $resumenC, $img, $link);
}

function Noticia3(){
        $MaxChar = 100;
	$resumenC = " ";
	$k = "\n Bea Martínez, profesora de los grados del CITM y directora académica del posgrado en Digitalización del Patrimonio Cultural: \n Procesos de Captación de Imagen Fija de la UPC, fue invitada por la Facultad de Bellas Artes de la Universidad de la República de Uruguay, donde impartió un taller sobre gestión del color y sistemas de impresión. \n También estuvo presente en el Centro de Fotografía de Montevideo, donde dio un curso técnico sobre digitalización fotográfica. Su trabajo e investigación en el ámbito de la gestión del color y también de la digitalización de fondos fotográficos son un referente en el sector de la imagen y la fotografía.\n"; 
    
	if(strlen($k) > 100){
		$resumenC = substr($k, 0 ,$MaxChar).'...';
	} 
    $titulo = "\n La profesora del CITM Bea Martínez imparte dos talleres técnicos sobre fotografía en Uruguay \n";
    $img = "https://www.citm.upc.edu/blog/wp-content/uploads/2019/06/TallersBea-300x230.jpg";
    $fecha = date ("28/06/2019  H:i");
    $link = "https://www.citm.upc.edu/blog/la-profesora-del-citm-bea-martinez-imparte-dos-talleres-tecnicos-sobre-fotografia-en-uruguay/";
    return array($titulo, $fecha, $resumenC, $img, $link);
}

function Noticia4(){

    $MaxChar = 100;
	$resumenC = " ";
	$k = "\n Helena Córdoba, estudiante del grado en Multimedia del CITM, presentará al público su Trabajo Final de Grado (TFG) en forma de un espectáculo de danza y multimedia llamado \n “Parallels”. Será el próximo viernes 14 de junio, a las 19h, en el Auditorio de Sant Martí de Provençals, en la ciudad de Barcelona. Con danza acompañada de diferentes componentes tecnológicos y multimedia, la \n estudiante del CITM ofrecerá su espectáculo al público, antes de presentarlo al jurado académico del CITM que evaluará su proyecto.\n"; 
    
	if(strlen($k) > 100){
		$resumenC = substr($k, 0 ,$MaxChar).'...';
	}
    $titulo = "\n La estudiante Helena Córdoba presenta la coreografía de su TFG en el Auditorio de Sant Martí de Barcelona \n";
    $img = "https://www.citm.upc.edu/blog/wp-content/uploads/2019/06/Parallels-282x300.jpg";
    $fecha = date ("03/06/2019 H:i");
    $link = "https://www.citm.upc.edu/blog/la-estudiante-helena-cordoba-presenta-la-coreografia-de-su-tfg-en-el-auditorio-de-sant-marti-de-barcelona/";
    return array($titulo, $fecha, $resumenC, $img, $link);
}
    ?>
    
    <?php
$i=0;  
$f=0;
$z=0;
$opc=1;
    
do{ 
    switch ($opc){
            
    case 1:
        
        for($i=0;$i<1;$i++){
            ?> <article><br> <?php
            ?> <h2><a href=" <?php echo Noticia1()[4] ?>"> <?php echo Noticia1()[0] ?> </a></h2><?php
            
                for($f=0;$f<=1;$f++){
                    echo Noticia1()[$f+1]?> <br> <?php   
                }
            ?> <article><br> <?php
            ?> <img src=" <?php echo Noticia1()[3] ?>"> <?php
            ?> </article> <?php
            $opc++;
            $z++; 
        }
            break;
    case 2:
        
        for($i=0;$i<1;$i++){
           ?> <article><br> <?php
             ?> <h2><a href="<?php echo Noticia2()[4] ?>"> <?php echo Noticia2()[0] ?> </a></h2><?php
            
                for($f=0;$f<=1;$f++){
                    echo Noticia2()[$f+1]?> <br> <?php
                }
            ?> <article><br> <?php
            ?> <img src=" <?php echo Noticia2()[3] ?>"> <?php
            ?> </article> <?php
            $opc++;
            $z++;
        }
            break;
     case 3:
        
        for($i=0;$i<1;$i++){
            ?> <article><br> <?php
              ?> <h2><a href="<?php echo Noticia3()[4] ?>"> <?php echo Noticia3()[0] ?> </a></h2><?php
            
                for($f=0;$f<=1;$f++){
                    echo Noticia3()[$f+1]?> <br> <?php
                }
            ?> <article><br> <?php
            ?> <img src=" <?php echo Noticia3()[3] ?>"> <?php
            ?> </article> <?php
            $opc++;
            $z++; 
        }
            break;
            
     case 4:
        
        for($i=0;$i<1;$i++){
            ?> <article><br> <?php
             ?> <h2><a href="<?php echo Noticia4()[4] ?>"> <?php echo Noticia4()[0] ?> </a></h2><?php
            
                for($f=0;$f<=1;$f++){
                    echo Noticia4()[$f+1]?> <br> <?php
                }
            ?> <article><br> <?php
            ?> <img src="<?php echo Noticia4()[3] ?>"> <?php
            ?> </article> <?php
            $opc++;
            $z++; 
        }
            break;
        
        default:
            echo "No hay ninguna noticia";
            $z=4;
    } 
    
}while($z<4);
?>
    
</BODY>
</HTML>