<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="row">
    <div class="col-l-3">...</div>
    <div class="col-l-6">
        <form action="<?= URLROOT ?>/quiz/register" method="post">
            <input type="hidden" name="quiz"><br>
            Pregunta: <input type="text" name="question"><br>
            Respuesta 01: <input type="text" name="answer_01"><br>
            Respuesta 02: <input type="text" name="answer_02"><br>
            Respuesta 03: <input type="text" name="answer_03"><br>
            Respuesta 04: <input type="text" name="answer_04"><br>
            <input type="submit">
        </form>
    </div>
    <div class="col-l-3">...</div>
</div>

<div style="text-align:center; margin-top:14%;">
<h1><?php echo $data['title'] ?></h1>

<p>Having issues? Please refer to the <a href="question/create">Docs</a> on how to use it</p>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>