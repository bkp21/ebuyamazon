<div id="content-container">
    <div id="page-title">
        <h1 class="page-header text-overflow"><?= translate('point_management_system'); ?></h1>
    </div>

    <div class="panel-body" style="padding-top: 0">
        <div class="tab-pane fade active in">
            <div class="panel panel-bordered-grey panel-body">
                <div class=row">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab"><?= translate('settings') ?></a></li>
                        <li role="presentation"><a href="#range" aria-controls="range" role="tab" data-toggle="tab"><?= translate('range') ?></a></li>
                        <li role="presentation"><a href="#points" aria-controls="points" role="tab" data-toggle="tab"><?= translate('points') ?></a></li>
                    </ul>

                    <!-- Tab panes -->

                    <div class="tab-content" style="margin-top: 1%">

                        <!-- settings -->

                        <div role="tabpanel" class="tab-pane fade in active" id="settings">
                            <?php require __DIR__.'/points_settings.php'; ?>
                        </div>

                        <!-- range -->

                        <div role="tabpanel" class="tab-pane fade" id="range">
                            <?php require __DIR__.'/points_range_list.php'; ?>
                        </div>

                        <!-- points -->

                        <div role="tabpanel" class="tab-pane fade" id="points">
                            <?php require __DIR__.'/points_list.php'; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var base_url = '<?= base_url(); ?>';
    var user_type = 'admin';
    var module = 'point_system_management';
    var list_cont_func = null;

    $(function () {
        $('#point_system_settings').submit(function(e) {
            submit_form.call(this);

            e.preventDefault();
        });

        $("select").val("<?= $settings->status ?>");
    });

    function submit_form() {
        $.post($(this).attr('action'), $(this).serialize(), function(data) {
            var type, message, icon;

            if (data == 'success') {
                type = 'success';
                message = 'Successfully edited!';
                icon = 'fa fa-check';
            } else {
                type = 'danger';
                message = 'Error!';
                icon = 'fa fa-times';
            }

            $.activeitNoty({
                type: type,
                icon : icon,
                message : message,
                container : 'floating',
                timer : 4000
            });
        });
    }
</script>
