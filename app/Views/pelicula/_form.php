<label for="titulo">Título</label>
        <input type="text" name="titulo" placeholder="Título" id="titulo" value="<?=$pelicula['titulo']?>">
        <label for="descripion">Descripción</label>
        <textarea name="description" id="description">
            <?=$pelicula['description']?>
        </textarea>
        <button type="submit"><?= $op?></button>