<div id="content-container">
   <?php include('dash-header.php');?>
    <div id="page-title">
        <h1 class="page-header text-overflow" ><?php echo translate('Bulk Uploading Of Categories (Step 2 of 3) ');?></h1>
    </div>

    <div class="tab-base">
        <div class="panel">
            <div class="panel-body">
                <div class="tab-content">
                    <!-- LIST -->
                    <div class="tab-pane fade active in"  id="" >
                        <div class="panel panel-bordered-primary">
                            <!-- <div class="panel-heading">
                                <h3 class="panel-title">
                                    <?php echo translate('genreal_settings');?>
                                </h3>
                            </div> -->
                            <div class="panel-body">
                                <?php if($this->session->flashdata('success')): ?>
                                    <div class="alert alert-success">
                                        <?php  echo $this->session->flashdata('success'); ?>
                                    </div>
                                <?php endif?>

                                <?php if(validation_errors()): ?>
                                    <div class="alert alert-danger">
                                        <?php  echo validation_errors(); ?>
                                    </div>
                                <?php endif?>
                                <?php echo form_open_multipart("admin/bulk_category_upload3", array("id"=>  "promo_form")); ?>
                                <table class="table table-responsive">

                                    <tr>
                                        <td>Uploaded File Name: </td>
                                        <td><strong><?php echo $temp_data['orig_file_name']; ?></strong></td>
                                    </tr>
                                    <tr>
                                        <td>Displayed: </td>
                                        <td><strong>First 5 Lines</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Product Category</td>
                                        <td><strong><?php echo $temp_data['cat']; ?></strong></td>
                                    </tr>
                                    <tr>
                                        <td>Data Login Rule</td>
                                        <td><strong><?php echo $temp_data['update_rule']; ?></strong></td>
                                    </tr>

                                </table>

                                <table class="table table-responsive table-bordered table-hover">
                                    <!-- Col-1 -->
                                    <tr>
                                        <td width="20%">
                                            <select name="col_1">
                                                <?php foreach($sheet_columns as $key => $value): ?>
                                                    <option value="<?php echo $key; ?>"<?php echo $key==1? " selected=\"selected\"" : ""; ?>><?php echo $value; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </td>
                                        <?php
                                        $i = 1;
                                        foreach($sheet_data as $row){

                                            if($i == $show_line_limit){
                                                break;
                                            }else{
                                                foreach($row as $item){
                                                    if($item[0] != null){
                                                        echo "<td>{$item[0]}</td>\n";
                                                    }

                                                }
                                            }
                                        }

                                        ?>
                                    </tr>

                                    <tr> <!-- Col-1 End -->

                                        <td width="20%">
                                            <select name="col_2">
                                                <?php foreach($sheet_columns as $key => $value): ?>
                                                    <option value="<?php echo $key; ?>"<?php echo $key==2? " selected=\"selected\"" : ""; ?>><?php echo $value; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </td>
                                        <?php
                                        $i = 0;
                                        foreach($sheet_data as $row){

                                            if($i == $show_line_limit){
                                                break;
                                            }else{
                                                foreach($row as $item){
                                                    if($item[1] != null){
                                                        echo "<td>{$item[1]}</td>\n";
                                                    }

                                                }
                                            }
                                        }

                                        ?>
                                    </tr>

                                    <tr>

                                        <td width="20%">
                                            <select name="col_3">
                                                <?php foreach($sheet_columns as $key => $value): ?>
                                                    <option value="<?php echo $key; ?>"<?php echo $key==3? " selected=\"selected\"" : ""; ?>><?php echo $value; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </td>
                                        <?php
                                        $i = 0;
                                        foreach($sheet_data as $row){

                                            if($i == $show_line_limit){
                                                break;
                                            }else{
                                                foreach($row as $item){
                                                    if($item[2] != null){
                                                        echo "<td>{$item[2]}</td>\n";
                                                    }

                                                }
                                            }
                                        }

                                        ?>
                                    </tr>

                                    <tr>

                                        <td width="20%">
                                            <select name="col_4">
                                                <?php foreach($sheet_columns as $key => $value): ?>
                                                    <option value="<?php echo $key; ?>"<?php echo $key==4? " selected=\"selected\"" : ""; ?>><?php echo $value; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </td>
                                        <?php
                                        $i = 0;
                                        foreach($sheet_data as $row){

                                            if($i == $show_line_limit){
                                                break;
                                            }else{
                                                foreach($row as $item){
                                                    if($item[3] != null){
                                                        echo "<td>{$item[3]}</td>\n";
                                                    }

                                                }
                                            }
                                        }

                                        ?>
                                    </tr>

                                    <tr>

                                        <td width="20%">
                                            <select name="col_5">
                                                <?php foreach($sheet_columns as $key => $value): ?>
                                                    <option value="<?php echo $key; ?>"<?php echo $key==5? " selected=\"selected\"" : ""; ?>><?php echo $value; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </td>
                                        <?php
                                        $i = 0;
                                        foreach($sheet_data as $row){

                                            if($i == $show_line_limit){
                                                break;
                                            }else{
                                                foreach($row as $item){
                                                    if($item[4] != null){
                                                        echo "<td>{$item[4]}</td>\n";
                                                    }

                                                }
                                            }
                                        }

                                        ?>
                                    </tr>

                                    <tr>
                                        <td width="20%">
                                            <select name="col_6">
                                                <?php foreach($sheet_columns as $key => $value): ?>
                                                    <option value="<?php echo $key; ?>"<?php echo $key==6? " selected=\"selected\"" : ""; ?>><?php echo $value; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </td>
                                        <?php
                                        $i = 0;
                                        foreach($sheet_data as $row){

                                            if($i == $show_line_limit){
                                                break;
                                            }else{
                                                foreach($row as $item){
                                                    if($item[5] != null){
                                                        echo "<td>{$item[5]}</td>\n";
                                                    }

                                                }
                                            }
                                        }

                                        ?>
                                    </tr>

                                    <tr>
                                        <td width="20%">
                                            <select name="col_7">
                                                <?php foreach($sheet_columns as $key => $value): ?>
                                                    <option value="<?php echo $key; ?>"<?php echo $key==7? " selected=\"selected\"" : ""; ?>><?php echo $value; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </td>
                                        <?php
                                        $i = 0;
                                        foreach($sheet_data as $row){

                                            if($i == $show_line_limit){
                                                break;
                                            }else{
                                                foreach($row as $item){
                                                    if($item[6] != null){
                                                        echo "<td>{$item[6]}</td>\n";
                                                    }

                                                }
                                            }
                                        }

                                        ?>
                                    </tr>

                                    <tr>
                                        <td width="20%">
                                            <select name="col_8">
                                                <?php foreach($sheet_columns as $key => $value): ?>
                                                    <option value="<?php echo $key; ?>"<?php echo $key==8? " selected=\"selected\"" : ""; ?>><?php echo $value; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </td>
                                        <?php
                                        $i = 0;
                                        foreach($sheet_data as $row){

                                            if($i == $show_line_limit){
                                                break;
                                            }else{
                                                foreach($row as $item){
                                                    if($item[7] != null){
                                                        echo "<td>{$item[7]}</td>\n";
                                                    }

                                                }
                                            }
                                        }

                                        ?>
                                    </tr>
                                    
                                    <tr>
                                        <td width="20%">
                                            <select name="col_9">
                                                <?php foreach($sheet_columns as $key => $value): ?>
                                                    <option value="<?php echo $key; ?>"<?php echo $key==9? " selected=\"selected\"" : ""; ?>><?php echo $value; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </td>
                                        <?php
                                        $i = 0;
                                        foreach($sheet_data as $row){

                                            if($i == $show_line_limit){
                                                break;
                                            }else{
                                                foreach($row as $item){
                                                    if($item[8] != null){
                                                        echo "<td>{$item[8]}</td>\n";
                                                    }

                                                }
                                            }
                                        }

                                        ?>
                                    </tr>

                                    <tr>
                                        <td width="20%">
                                            <select name="col_10">
                                                <?php foreach($sheet_columns as $key => $value): ?>
                                                    <option value="<?php echo $key; ?>"<?php echo $key==10? " selected=\"selected\"" : ""; ?>><?php echo $value; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </td>
                                        <?php
                                        $i = 0;
                                        foreach($sheet_data as $row){

                                            if($i == $show_line_limit){
                                                break;
                                            }else{
                                                foreach($row as $item){
                                                    if($item[9] != null){
                                                        echo "<td>{$item[9]}</td>\n";
                                                    }

                                                }
                                            }
                                        }

                                        ?>
                                    </tr>
                                    
                                    <tr>
                                        <td colspan="3" align="center"><button class="btn btn-success" type="submit">Insert Into DB</button></td>
                                    </tr>
                                </table>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
