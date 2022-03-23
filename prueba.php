
    <?php
   
     function mostrar($usua){
        $i=0;

        $conn = new mysqli('localhost', 'root', '', 'proyecto');
        $sqlCon="SELECT * FROM `noticias` where usuario_id = '$usua'";
        $quer= mysqli_query($conn,$sqlCon);
        while($row=mysqli_fetch_array($quer)){
                $title = $row['titulo'];
                $link = $row['link'];
                $description =$row['descripcion'];
                $postDate = $row['fecha'] ;
                $pubDate = date('D, d M Y',strtotime($postDate));

                // 5 es el número de noticias a mostrar
                if($i>=100) break;
        ?>
                <!--contruimos cada una de las noticias-->
                <div class="post">
                    <div class="post-head">
                        <!--Título de la noticia-->
                        <h2><a class="feed_title" href="<?php echo $link; ?>"><?php echo $title; ?></a></h2>
                        <span><?php echo $pubDate; ?></span> <!--Fecha de la publicación-->
                    </div>
                    <!-- Cuerpo de la noticia-->
                    <div class="post-content">
                        <?php echo implode(' ', array_slice(explode(' ', $description), 0, 20)) . "..."; ?> <a href="<?php echo $link; ?>">Leer más</a> <!-- botón leer más. Con enlace a la noticia-->
                    </div>
                </div>

                <?php
                $i++;
            }
        }
        
    ?>
        </div>
         
    }
       
 