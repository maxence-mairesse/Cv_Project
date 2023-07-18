<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Maxence Mairesse</title>
</head>

<body>

    <header>
        <nav>
            <ul>
                <li><a href="">About</a></li>
                <li><a href="#experience">Experience</a></li>
                <li><a href="">Portfolio</a></li>
                <li><a href="">Contact</a></li>
            </ul>


        </nav>

        <section>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ratione, quos tempora fuga odit non atque
                inventore soluta aperiam quibusdam, harum exercitationem repudiandae doloremque ad. Labore, quo nisi
                repellendus ipsum soluta dolorem possimus ea dolores eveniet quod porro corporis quos deleniti quidem
                totam minus harum omnis, nemo eos voluptates vel? Dicta, quas dolores. Iste fugiat nisi ipsa deleniti
                nesciunt libero non voluptatem repudiandae iusto. Harum quasi magnam optio culpa rerum. Assumenda cumque
                nulla, tenetur ea ipsa incidunt, officiis rem alias saepe totam unde nesciunt sunt fuga fugiat.
                Consequatur, at voluptatibus. Ea praesentium unde totam, assumenda ducimus tempore neque enim, ex
                tenetur quos dolorem odit fuga fugit cupiditate in, error odio similique suscipit voluptates commodi
               
            </p>
        </section>
    </header>

    <main>
<article id="experience">
    <h2>Mes Expériences</h2>
    <ul>
       
        <?php 
        require "inc/experience.php";
        for ($i=0; $i <count($experiences['name']) ; $i++) { 
            echo "<li>".$experiences['name'][$i]." - ".$experiences['titre'][$i]. " - <em>".$experiences['date'][$i]."</em> </li>";
        }
        ?>
    </ul>
</article>
<hr>
<article>
    <h2>Mes Diplômes</h2>
    <ul>
    <?php 
        require "inc/experience.php";
        for ($i=0; $i <count($diplomes['name']) ; $i++) { 
            echo "<li>".$diplomes['name'][$i].", ".$diplomes['ecole'][$i]. ", <em>".$diplomes['date'][$i]."</em> </li>";
        }
        ?>
    </ul>

</article>
<article>
    <h2>Mes competences</h2>
</article>

    </main>

    <footer></footer>
</body>

</html>