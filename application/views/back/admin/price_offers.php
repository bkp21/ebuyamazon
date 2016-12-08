<div id="content-container">
    <div id="page-title">
        <h1 class="page-header text-overflow" ><?=translate('price_offers')?></h1>
    </div>
    <div class="tab-base">
        <div class="panel">
            <div class="panel-body">
                <div class="tab-content">
                    <div class="col-md-12 panel-head" style="border-bottom: 1px solid #ebebeb;padding: 5px; display: none">
                        <button class="btn btn-info btn-labeled fa fa-step-backward pull-right pro_list_btn back-button"
                                onclick="ajax_set_list()">
                            <?=translate('back_to_price_offers');?>
                        </button>
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
    var base_url = '<?=base_url();?>';
    var user_type = 'admin';
    var module = '<?=$page_url?>';
    var list_cont_func = 'list';
    var dlt_cont_func = 'delete';

    function back_button(action) {
        var btn = $('.panel-head');

        if (action == 'show') {
            btn.show();
        } else {
            btn.hide();
        }
    }

    $(".panel-head button.back-button").click(function() {
        back_button('hide');
    });
</script>
