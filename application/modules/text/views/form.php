<p>
    <?= nl2br($text['original']) ?>
</p>
<?= form_open_multipart( 'text/save/'.$post_id.'/'.$module_id, 'class="well form-inline"' ) ?>
    <div class="error"><?php echo validation_errors(); ?></div>
    <textarea class="input-textarea" id="textarea_<?= $module_id ?>" name="original"><?= form_prep($text['full']) ?></textarea>
    <div class="controlls"><input type="submit" class="btn btn-success" value="Сохранить" /></div>
<?= form_close() ?>