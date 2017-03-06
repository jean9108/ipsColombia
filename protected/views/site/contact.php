<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */
?>

<div class="col-sm-12 titulo">
    <h1>Contactenos</h1>
</div>

<?php if (Yii::app()->user->hasFlash('contact')): ?>

    <div class="flash-success">
        <?php echo Yii::app()->user->getFlash('contact'); ?>
    </div>

<?php else: ?>

    <div class="col-sm-12 info">
        <p>
            Para enviarnos un mensaje vía e-mail, diligencie el siguiente formulario:
        </p>
    </div>

    <div class="form">

        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'contact-form',
            'enableClientValidation' => true,
            'clientOptions' => array(
                'validateOnSubmit' => true,
            ),
        ));
        ?>

        <?php echo $form->errorSummary($model); ?>
      
        <div class="col-sm-12 row formulario">
            <?php echo $form->labelEx($model, 'firstName'); ?>
            <?php echo $form->textField($model, 'firstName',array('class'=> 'form-control')); ?>
            <?php echo $form->error($model, 'firstName'); ?>
        </div>
        
        <div class="row formulario">
            <?php echo $form->labelEx($model, 'name'); ?>
            <?php echo $form->textField($model, 'name',array('class'=> 'form-control')); ?>
            <?php echo $form->error($model, 'name'); ?>
        </div>
        
        <div class="row formulario">
            <?php echo $form->labelEx($model, 'country'); ?>
            <?php echo $form->textField($model, 'country',array('class'=> 'form-control')); ?>
            <?php echo $form->error($model, 'country'); ?>
        </div>
        
        <div class="row formulario">
            <?php echo $form->labelEx($model, 'city'); ?>
            <?php echo $form->textField($model, 'city',array('class'=> 'form-control')); ?>
            <?php echo $form->error($model, 'city'); ?>
        </div>

        <div class="row formulario">
            <?php echo $form->labelEx($model, 'phone'); ?>
            <?php echo $form->textField($model, 'phone', array('class'=> 'form-control')); ?>
            <?php echo $form->error($model, 'phone'); ?>
        </div>

        <div class="row formulario">
            <?php echo $form->labelEx($model, 'email'); ?>
            <?php echo $form->textField($model, 'email',array('class'=> 'form-control')); ?>
            <?php echo $form->error($model, 'email'); ?>
        </div>

        <div class="row formulario">
            <?php echo $form->labelEx($model, 'subject'); ?>
            <?php echo $form->textField($model, 'subject', array('size' => 60, 'maxlength' => 128, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'subject'); ?>
        </div>

        <div class="row buttons">
            <?php echo CHtml::submitButton('Enviar', array('class' => 'btn btn-primary')); ?>
        </div>

        <?php $this->endWidget(); ?>

    </div><!-- form -->

<?php endif; ?>