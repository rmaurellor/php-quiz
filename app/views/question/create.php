<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="row">
    <div class="col-l-3"></div>
    <div class="col-l-6">
        <?php require APPROOT . '/views/inc/navbar.php'; ?>
        <div id="question-create-box-form" class="row">
            <div class="col-l-1"></div>
            <div class="col-l-10">
                <div class="row">
                    <div>Agrega y administra preguntas y sus respuestas</div><br/>
                    <div id="question-create-form">
                        <form action="<?= URLROOT ?>/questions/register" method="post">
                            <input type="hidden" name="title" value="<?= (empty($data['title'])) ? '' : $data['title']; ?>" ><br>
                            <input type="hidden" name="question_id" value="<?= (empty($data['question_id'])) ? '' : $data['question_id']; ?>" ><br>
                            Pregunta : <input type="text" name="question_content" value="<?= $data['question_content'] ?>" <?= (empty($data['question_content'])) ? '' : 'readonly' ?> ><br>
                            <?php if ( !empty($data['answers']) ): ?>
                                <?php foreach($data['answers'] as $answer): ?>
                                    Respuesta : <input type="text" name="answer_content_<?= $answer->answer_id; ?>" value="<?= $answer->answer_content ?>" readonly ><br>
                                <?php endforeach; ?>
                            <?php endif; ?>
                            Respuesta : <input type="text" name="answer_content" value="<?= $data['answer_content'] ?>" ><br>
                            <input type="submit">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-l-1"></div>
        </div>
        
    </div>
    <div class="col-l-3"></div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>