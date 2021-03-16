<div class="titulo">Integração CSS</div>
<h1>
    <?php
    echo 'Olá';
    echo '<samll>';
    echo ' Mundo!';
    echo '<small>'
    ?>
</h1>

<?= 'Outra forma de me expressar em PHP!' ?>
<br>

<div center ><button dobro><?= "Legal" ?></button></div>

<style>
    button {
        padding: 5px 20px;
        background-color: #4286f4;
        color: #EEE;
        font-weight: bolder;
        border-radius: 10px;
    }

    [center] {
        display: flex;
        justify-content: center;
    }

    [azul] {
        color: #4286f4;
    }

    [dobro] {
        font-size: 2rem;
    }
</style>