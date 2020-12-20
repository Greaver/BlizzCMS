    <section class="uk-section uk-section-xsmall" data-uk-height-viewport="expand: true">
      <div class="uk-container">
        <div class="uk-grid uk-grid-small uk-margin-small" data-uk-grid>
          <div class="uk-width-expand">
            <h4 class="uk-h4 uk-margin-remove"><?= lang('slides'); ?></h4>
            <ul class="uk-breadcrumb uk-margin-remove">
              <li><a href="<?= site_url('admin'); ?>"><?= lang('dashboard'); ?></a></li>
              <li><span><?= lang('slides'); ?></span></li>
            </ul>
          </div>
          <div class="uk-width-auto">
            <a href="<?= site_url('admin/slides'); ?>" class="uk-button uk-button-primary uk-button-small"><i class="fas fa-arrow-circle-left"></i></a>
          </div>
        </div>
        <?= $template['partials']['alerts']; ?>
        <?= form_open(current_url()); ?>
        <div class="uk-card uk-card-default">
          <div class="uk-card-header">
            <h4 class="uk-h4"><i class="fas fa-pen"></i> <?= lang('edit_slide'); ?></h4>
          </div>
          <div class="uk-card-body">
            <div class="uk-margin-small">
              <label class="uk-form-label"><?= lang('title'); ?></label>
              <div class="uk-form-controls">
                <div class="uk-inline uk-width-1-1">
                  <input class="uk-input" type="text" name="title" value="<?= $slide->title; ?>" placeholder="<?= lang('title'); ?>">
                </div>
              </div>
              <?= form_error('title', '<span class="uk-text-small uk-text-danger">', '</span>'); ?>
            </div>
            <div class="uk-margin-small">
              <label class="uk-form-label"><?= lang('description'); ?></label>
              <div class="uk-form-controls">
                <textarea class="uk-textarea" name="description" rows="3"><?= $slide->description; ?></textarea>
              </div>
              <?= form_error('description', '<span class="uk-text-small uk-text-danger">', '</span>'); ?>
            </div>
            <div class="uk-margin-small">
              <div class="uk-grid uk-grid-small" data-uk-grid>
                <div class="uk-inline uk-width-1-3@s">
                  <label class="uk-form-label"><?= lang('type'); ?></label>
                  <div class="uk-form-controls">
                    <select class="uk-select" name="type">
                      <option value="<?= TYPE_IMAGE ?>" <?php if ($slide->type === TYPE_IMAGE) echo 'selected'; ?>><?= lang('image'); ?></option>
                      <option value="<?= TYPE_VIDEO ?>" <?php if ($slide->type === TYPE_VIDEO) echo 'selected'; ?>><?= lang('video'); ?></option>
                      <option value="<?= TYPE_IFRAME ?>" <?php if ($slide->type === TYPE_IFRAME) echo 'selected'; ?>><?= lang('iframe'); ?></option>
                    </select>
                  </div>
                  <?= form_error('type', '<span class="uk-text-small uk-text-danger">', '</span>'); ?>
                </div>
                <div class="uk-inline uk-width-2-3@s">
                  <label class="uk-form-label"><?= lang('route'); ?></label>
                  <div class="uk-form-controls">
                    <input class="uk-input" type="text" name="route" value="<?= $slide->route; ?>" placeholder="URL or Image Name">
                  </div>
                  <?= form_error('route', '<span class="uk-text-small uk-text-danger">', '</span>'); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button class="uk-button uk-button-primary uk-margin-small" type="submit"><i class="fas fa-save"></i> <?= lang('save'); ?></button>
        <?= form_close(); ?>
      </div>
    </section>