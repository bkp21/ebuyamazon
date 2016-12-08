<div class="boxed-layout container" style="margin-top:20px;">
<div class="row">
    <div class="col-md-12">
    	<div class="col-md-6">
        	<div class="margin-bottom-10 margin-top-20">
    		<h1>
            <?php
            	echo $this->db->get_where('vendor',array('vendor_id'=>$vendor))->row()->display_name;
			?>
            </h1>
            <h3>
            <?php echo translate('company');?> :
            <?php
            	echo $this->db->get_where('vendor',array('vendor_id'=>$vendor))->row()->company;
			?>
            </h3>
            </div>
        </div>
    	<div class="col-md-6 pull-right" style="padding:8px 15px;">
			<?php
                if(!file_exists('uploads/vendor/logo_'.$vendor.'.png')){
            ?>
    		<img src='<?php echo base_url(); ?>uploads/vendor/logo_0.png'  class="img-responsive pull-right" width="100"/>
            <?php
                } else {
            ?>
    		<img src='<?php echo base_url(); ?>uploads/vendor/logo_<?php echo $vendor; ?>.png'  class="img-responsive pull-right" width="100"/>
            <?php
                }
            ?>
        </div>
        <div class="col-md-12">
			<?php
                if(!file_exists('uploads/vendor/logo_'.$vendor.'.png')){
            ?>
    			<img src='<?php echo base_url(); ?>uploads/vendor/banner_0.jpg' 
        class="img-responsive" style="max-height:500px;" />
            <?php
                } else {
            ?>
    			<img src='<?php echo base_url(); ?>uploads/vendor/banner_<?php echo $vendor; ?>.jpg' 
        class="img-responsive" style="max-height:500px;" />
            <?php
                }
            ?>
        
        </div>
    </div>
    <div class="heading heading-v4 margin-bottom-20">
        <h2 style="margin-top:40px !important;">
        <?php echo translate('products_of');?> <?php
            	echo $this->db->get_where('vendor',array('vendor_id'=>$vendor))->row()->display_name;
			?>
        
        </h2>
    </div>
</div>
<?php
	$side_bar_pos=$this->db->get_where('ui_settings',array('type'=>"side_bar_pos_category"))->row()->value;
?>
<!--=== Content Part ===-->
<div class="content container">
	<div class="row">
		<div class="col-md-3 filter-by-block md-margin-bottom-60 pull-<?php echo $side_bar_pos; ?>-md">
			<h1><?php echo translate('filter_by');?></h1>
			<div class="panel-group" id="accordion">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h2 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
								<?php echo translate('category');?>
								<i class="fa fa-angle-down"></i>
							</a>
						</h2>
					</div>
					<div id="collapseOne" class="panel-collapse collapse in">
						<div class="panel-body sky-form">
							<ul class="list-unstyled checkbox-list">
								<li>
								   <label class="radio state-success">
										<input type="radio" name="checkbox" onclick="sub_clear();"  class="check_category"
											value="0" />
										<i class="rounded-x" style="font-size:30px !important;"></i>
										<?php echo translate('all_categories'); ?> 
									</label> 
								</li>
								<?php
									foreach($all_category as $row)
									{
										if($this->crud_model->is_category_of_vendor($row['category_id'],$vendor)){
								?>
								<li>
								   <label class="radio state-success">
										<input type="radio" name="checkbox"  class="check_category"
											onclick="sub_clear(); toggle_subs(<?php echo $row['category_id']; ?>);" 
												value="<?php echo $row['category_id']; ?>" />
										<i class="rounded-x" style="font-size:30px !important;"></i>
										<?php echo $row['category_name']; ?> 
										<small>
											(<?php echo $this->db->get_where('product',array('category'=>$row['category_id'],'status'=>'ok','added_by' => '{"type":"vendor","id":"'.$vendor.'"}'))->num_rows(); ?>)
										</small>
									</label> 
								</li>
								<li>
									<ul class="list-unstyled checkbox-list sub_cat" style="display:none;" id="subs_<?php echo $row['category_id']; ?>">
									<?php
										$sub_category = $this->db->get_where('sub_category',array('category'=>$row['category_id']))->result_array();
										foreach($sub_category as $row1)
										{
											if($this->crud_model->is_sub_cat_of_vendor($row1['sub_category_id'],$vendor)){
									?>
									<li>
										<label class="checkbox state-success">
											<input type="checkbox" name="check_<?php echo $row['category_id']; ?>"  
												class="check_sub_category"
													onclick="filter('click','none','none','0')" 
														value="<?php echo $row1['sub_category_id']; ?>" />
											<i class="square-x"></i>
											<?php echo $row1['sub_category_name']; ?> 
											<small>
												(<?php echo $this->db->get_where('product',array('sub_category'=>$row1['sub_category_id'],'status'=>'ok','added_by' => '{"type":"vendor","id":"'.$vendor.'"}'))->num_rows(); ?>)
											</small>
										</label>
									</li>
									<?php
											} 
										}
									?>
									</ul>
								 </li>
								<?php
										}
									}
								?>
							</ul>        
						</div>
					</div>
				</div>
			</div><!--/end panel group-->

			<div class="panel-group" id="accordion-v4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h2 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion-v4" href="#collapseFour">
								<?php echo translate('price'); ?>
								<i class="fa fa-angle-down"></i>
							</a>
						</h2>
					</div>
					<div id="collapseFour" class="panel-collapse collapse in">
						<div class="panel-body" id="range">
							<input type="text" id="rangelvl" value="<?php echo $range; ?>" name="range" />
						</div>
					</div>
				</div>
			</div>
			
			<!--=== home banner ===-->
			<div class="row margin-bottom-20">
				<?php
					$place = 'after_filter';
					$query = $this->db->get_where('banner',array('page'=>'vendor_home', 'place'=>$place, 'status' => 'ok'));
					$banners = $query->result_array();
					if($query->num_rows() > 0){
						$r = 12/$query->num_rows();
					}
					foreach($banners as $row){
				?>
					<a href="<?php echo $row['link']; ?>" >
						<div class="col-md-<?php echo $r; ?> md-margin-bottom-30">
							<div class="overflow-h">
								<div class="illustration-v1 illustration-img1">
									<div class="illustration-bg banner_cat" 
										style="background:url('<?php echo $this->crud_model->file_view('banner',$row['banner_id'],'','','no','src') ?>') no-repeat center center; background-size: 100% auto;" >										
									</div>    
								</div>
							</div>    
						</div>
					</a>
				<?php
					}
				?>
			</div>
			<!--=== home banner ===-->

			<!-- MOST SOLD -->
			<div class="sdbar posts margin-bottom-20">
				<h4 class="text_color center_text mr_top_0"><?php echo translate('most_sold'); ?></h4>
				<?php
					$i = 0;
						$most_popular = $this->crud_model->most_sold_products();
						foreach ($most_popular as $row2){
							$i++;
							if($i <= 4){
								if(!empty($most_popular[$i])){
									$now = $this->db->get_where('product',array('product_id'=>$most_popular[$i]['id']))->row();
								 
				?>
				<dl class="dl-horizontal">
					<dt>
						<a href="<?php echo $this->crud_model->product_link($now->product_id); ?>">
							<img src="<?php echo $this->crud_model->file_view('product',$now->product_id,'','','thumb','src','multi','one'); ?>" alt="" />
						</a>
					</dt>
					<dd>
						<p>
							<a href="<?php echo $this->crud_model->product_link($now->product_id); ?>">
								<?php echo $now->title; ?>
							</a>
						</p>
						<p>
						<?php if($this->crud_model->get_type_name_by_id('product',$now->product_id,'discount') > 0){ ?>
							<span>
								<?php echo currency().$this->crud_model->get_product_price($now->product_id); ?>
							</span>
							<span style=" text-decoration: line-through;color:#c9253c;">
								<?php echo currency().$now->sale_price; ?>
							</span>
						<?php } else { ?>
							<span>
								<?php echo currency().$now->sale_price; ?>
							</span>
						<?php } ?>
						</p>
					</dd>
				</dl>
				<?php		
							}
						}
					}
				?>
			</div><!--/posts-->
			<!-- End Posts -->
			
			<!-- MOST VIEWED -->
			<div class="sdbar posts margin-bottom-20">
				<h4 class="text_color center_text mr_top_0"><?php echo translate('most_viewed_products'); ?></h4>
				<?php
					$this->db->limit(4);
					$this->db->order_by('number_of_view','desc');
					$this->db->where('status','ok');
					$most_viewed = $this->db->get('product')->result_array();
					foreach ($most_viewed as $row2){
				?>
				<dl class="dl-horizontal">
					<dt>
						<a href="<?php echo $this->crud_model->product_link($row2['product_id']); ?>">
							<img src="<?php echo $this->crud_model->file_view('product',$row2['product_id'],'','','thumb','src','multi','one'); ?>" alt="" />
						</a>
					</dt>
					<dd>
						<p>
							<a href="<?php echo $this->crud_model->product_link($row2['product_id']); ?>">
								<?php echo $row2['title'] ?>
							</a>
						</p>
						<p>
						<?php if($this->crud_model->get_type_name_by_id('product',$row2['product_id'],'discount') > 0){ ?>
							<span>
								<?php echo currency().$this->crud_model->get_product_price($row2['product_id']); ?>
							</span>
							<span style=" text-decoration: line-through;color:#c9253c;">
								<?php echo currency().$row2['sale_price']; ?>
							</span>
						<?php } else { ?>
							<span>
								<?php echo currency().$row2['sale_price']; ?>
							</span>
						<?php } ?>
						</p>
						
					</dd>
				</dl>
				<?php
					}
				?>
			</div><!--/posts-->
			<!-- End Posts -->
							   
			
		</div>

		<input type="hidden" id="viewtype" value="list" />
		<input type="hidden" id="fload" value="first" />
		
		<div class="col-md-9">
			<div class="row margin-bottom-5">
				<div class="col-sm-10 result-category"></div>
				<div class="col-sm-2">
					<ul class="list-inline clear-both">
						<li class="grid-list-icons">
							<span class="viewers" data-typ="list"><i class="fa fa-th-list"></i></span>
							<span class="viewers" data-typ="grid"><i class="fa fa-th"></i></span>
						</li>
					</ul>
				</div>    
			</div><!--/end result category-->
			<div class="filter-results" id="list"></div>
			<div class="text-center pg_links" ></div>
			<!--/end filter resilts-->
		 </div>
		
	</div><!--/end row-->
</div><!--/end container-->    
<!--=== End Content Part ===-->
</div>
<?php
	echo form_open(base_url() . 'index.php/home/listed/', array(
		'method' => 'post',
		'id' => 'plistform',
        'enctype' => 'multipart/form-data'
	));
?>
<input type="hidden" name="category" id="categoryaa">
<input type="hidden" name="sub_category" id="sub_categoryaa">
<input type="hidden" name="featured" id="featuredaa">
<input type="hidden" name="range" id="rangeaa">
<input type="hidden" name="vendor" value="<?php echo $vendor; ?>">
</form>
<style>
.sub_cat{
padding-left:30px !important;
}
</style>

<script>
var range = '<?php echo $range; ?>';
var cur_sub_category = '';
var cur_category = '0';
var base_url = '<?php echo base_url(); ?>';
var tokn_nm = '<?php echo $this->config->item('csrf_token_name'); ?>';
</script>
<script src="<?php echo base_url(); ?>template/front/assets/js/custom/product_list.js"></script>