<div id="content-container">
<?php include('dash-header.php');?>
    <div id="page-title">
        <h1 class="page-header text-overflow"><?=translate('rma_info')?></h1>
    </div>
    <div class="tab-base">
        <div class="panel">
            <div class="panel-body">
                <div class="tab-content">
                    <div class="back" style="display: none">
                        <button class="btn btn-info btn-labeled fa fa-step-backward pull-right pro_list_btn back-button"
                                onclick="ajax_set_list()">
                            <?=translate('back_to_rma_info');?>
                        </button>
                        <br><br>
                    </div>
                    <!-- LIST -->
                    <div class="tab-pane fade active in" id="list" style="border:1px solid #ebebeb; border-radius:4px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var base_url = '<?=base_url()?>';
    var user_type = 'admin';
    var module = 'rma_info';
    var list_cont_func = 'list';
    var dlt_cont_func = 'delete';

    function back_button(action) {
        var btn = $('.back');

        if (action == 'show') {
            btn.show();
        } else {
            btn.hide();
        }
    }

    $(".back button.back-button").click(function() {
        back_button('hide');
    });
</script>
