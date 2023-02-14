echo '<form method = "POST"><dic class= "row style"= "margit-bottom:4px;">';
    echo '<div class = "col-md-1 form-group"><input class = "form-control" id = "id" name = "id" value ="'.$post->id.'" readonly type = "text"></div>';
    echo '<div class = "col-md-1 form-group"><input class = "form-control img_responsive" name= "src_image" src="'.$src_image.'" style = "widht:4vw;" type="image"></div>:
    echo '<div class = "col-md-2 form-group"><input class = "form-control" name = "name" value = "'.&post->name.'" style = "widht:100px;text-align:left;" type = "text"></div>;
    echo '<div class = "col-md-4 form-group"><input class = "form-control" name = "short_description" value = "'.strip_tags(&post->short_description).'" type = "text"></div>;
    echo '<div class = "col-md-1 form-group"><button class = "btn center" formaction="servei_actualitzar_id.php"><i class="bi bi-arrow-clockwise"></i></button></div>;
    echo </form></div>;