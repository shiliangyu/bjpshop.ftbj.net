<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>

<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />


<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,lefttime.js')); ?>
<script type="text/javascript">
  <?php $_from = $this->_var['lang']['js_languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
    var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</script>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>

<div class="block box">
 <div id="ur_here">
  <?php echo $this->fetch('library/ur_here.lbi'); ?>
 </div>
</div>

<div class="blank"></div>
<div class="block clearfix">
  
  <div class="AreaL">
    
    <?php echo $this->fetch('library/cart.lbi'); ?>
    <?php echo $this->fetch('library/category_tree.lbi'); ?>
    <?php echo $this->fetch('library/goods_related.lbi'); ?>
    <?php echo $this->fetch('library/goods_fittings.lbi'); ?>
    <?php echo $this->fetch('library/goods_article.lbi'); ?>
    <?php echo $this->fetch('library/goods_attrlinked.lbi'); ?>
    
    
    
    
    <?php echo $this->fetch('library/history.lbi'); ?>
  </div>
  
  
  <div class="AreaR">
   
   
   <div class="blank5"></div>
   <div class="box">
   <div class="box_1">
    <h3><span><?php echo $this->_var['lang']['groupbuy_goods_info']; ?></span></h3>
    <div class="boxCenterList">
      <ul class="group clearfix">
      <li style="margin-right:8px; text-align:center;">
      <a href="<?php echo $this->_var['gb_goods']['url']; ?>"><img src="<?php echo $this->_var['gb_goods']['goods_thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['gb_goods']['goods_name']); ?>" /></a>
      </li>
      <li style="width:555px; line-height:23px;">
       <?php echo $this->_var['lang']['gb_goods_name']; ?> <font class="f5"><?php echo htmlspecialchars($this->_var['gb_goods']['goods_name']); ?></font><br>
      <?php if ($this->_var['cfg']['show_goodssn'] && 0): ?>
      <?php echo $this->_var['lang']['goods_sn']; ?> <?php echo $this->_var['gb_goods']['goods_sn']; ?><br>
      <?php endif; ?>
      <?php if ($this->_var['cfg']['goods']['brand_name'] && $this->_var['show_brand'] && 0): ?>
      <?php echo $this->_var['lang']['goods_brand']; ?> <?php echo $this->_var['gb_goods']['brand_name']; ?><br>
      <?php endif; ?>
      <?php if ($this->_var['cfg']['show_goodsweight'] && 0): ?>
      <?php echo $this->_var['lang']['goods_weight']; ?> <?php echo $this->_var['gb_goods']['goods_weight']; ?><br>
      <?php endif; ?>
      <?php echo $this->_var['lang']['act_time']; ?>：<?php echo $this->_var['group_buy']['formated_start_date']; ?> -- <?php echo $this->_var['group_buy']['formated_end_date']; ?><br>
      <?php echo $this->_var['lang']['gb_price_ladder']; ?><br />
      <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
       <tr>
          <th width="29%" bgcolor="#FFFFFF"><?php echo $this->_var['lang']['gb_ladder_amount']; ?></th>
         <th width="71%" bgcolor="#FFFFFF"><?php echo $this->_var['lang']['gb_ladder_price']; ?></th>
        </tr>
        <?php $_from = $this->_var['group_buy']['price_ladder']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
        <tr>
          <td width="29%" bgcolor="#FFFFFF"><?php echo $this->_var['item']['amount']; ?></td>
         <td width="71%" bgcolor="#FFFFFF"><?php echo $this->_var['item']['formated_price']; ?></td>
        </tr>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </table>
      <?php if ($this->_var['group_buy']['deposit'] > 0): ?>
      <?php echo $this->_var['lang']['gb_deposit']; ?> <?php echo $this->_var['group_buy']['formated_deposit']; ?><br />
      <?php endif; ?>

      <?php if ($this->_var['group_buy']['restrict_amount'] > 0): ?>
      <?php echo $this->_var['lang']['gb_restrict_amount']; ?> <?php echo $this->_var['group_buy']['restrict_amount']; ?><br />
      <?php endif; ?>

      <?php if ($this->_var['group_buy']['gift_integral'] > 0): ?>
      <?php echo $this->_var['lang']['gb_gift_integral']; ?> <?php echo $this->_var['group_buy']['gift_integral']; ?><br />
      <?php endif; ?>

      <?php if ($this->_var['group_buy']['status'] == 0): ?>
      <?php echo $this->_var['lang']['gbs_pre_start']; ?>
      <?php elseif ($this->_var['group_buy']['status'] == 1): ?>
      <font class="f4"><?php echo $this->_var['lang']['gbs_under_way']; ?>
      <span id="leftTime"><?php echo $this->_var['lang']['please_waiting']; ?></span></font><br />
      <?php echo $this->_var['lang']['gb_cur_price']; ?> <?php echo $this->_var['group_buy']['formated_cur_price']; ?><br />
      <?php echo $this->_var['lang']['gb_valid_goods']; ?> <?php echo $this->_var['group_buy']['valid_goods']; ?><br />
      <?php elseif ($this->_var['group_buy']['status'] == 2): ?>
      <?php echo $this->_var['lang']['gbs_finished']; ?> <?php echo $this->_var['lang']['gb_cur_price']; ?> <?php echo $this->_var['group_buy']['formated_cur_price']; ?> <?php echo $this->_var['lang']['gb_valid_goods']; ?> <?php echo $this->_var['group_buy']['valid_goods']; ?>
      <?php elseif ($this->_var['group_buy']['status'] == 3): ?>
      <?php echo $this->_var['lang']['gbs_succeed']; ?>
      <?php echo $this->_var['lang']['gb_final_price']; ?> <?php echo $this->_var['group_buy']['formated_trans_price']; ?><br />
      <?php echo $this->_var['lang']['gb_final_amount']; ?> <?php echo $this->_var['group_buy']['trans_amount']; ?>
      <?php elseif ($this->_var['group_buy']['status'] == 4): ?>
      <?php echo $this->_var['lang']['gbs_fail']; ?>
      <?php endif; ?>
      </li>
      </ul>
    </div>
   </div>
  </div>
   <div class="blank5"></div>
   <div class="box">
   <div class="box_1">
    <h3><span><?php echo $this->_var['lang']['properties']; ?></span></h3>
    <div class="boxCenterList">
    <form action="group_buy.php?act=buy" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY">
           <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
              <?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');if (count($_from)):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
?>
              <tr>
                <td width="22%" bgcolor="#FFFFFF"><?php echo $this->_var['spec']['name']; ?></td>
                <td width="78%" bgcolor="#FFFFFF">
                    <?php if ($this->_var['cfg']['goodsattr_style'] == 1): ?>
                    <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                    <label for="spec_value_<?php echo $this->_var['value']['id']; ?>">
                    <input type="radio" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?> />
                    <?php echo $this->_var['value']['label']; ?> </label>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                  <?php else: ?>
                    <select name="spec_<?php echo $this->_var['spec_key']; ?>" style="border:1px solid #ccc;">
                    <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                    <option label="<?php echo $this->_var['value']['label']; ?>" value="<?php echo $this->_var['value']['id']; ?>"><?php echo $this->_var['value']['label']; ?> </option>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </select>
                  <?php endif; ?>
                </td>
              </tr>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              <?php if ($_SESSION['user_id'] > 0): ?>
              <tr>
                <td bgcolor="#FFFFFF"><strong><?php echo $this->_var['lang']['number']; ?>:</strong></td>
                <td bgcolor="#FFFFFF">
                <input name="number" type="text" class="inputBg" id="number" value="1" size="4" />
                <input type="hidden" name="group_buy_id" value="<?php echo $this->_var['group_buy']['group_buy_id']; ?>" />
                <input type="image" src="themes/default/images/bnt_buy_1.gif" style="vertical-align:middle;" />
                </td>
              </tr>
              <?php else: ?>
              <tr>
                <td colspan="2" align="right" bgcolor="#FFFFFF"><br />
                  <font class="f_red"><?php echo $this->_var['lang']['gb_notice_login']; ?></font></td>
              </tr>
              <?php endif; ?>
            </table>
          </form>
    </div>
   </div>
  </div>
   <div class="blank5"></div>
   <div class="box">
   <div class="box_1">
    <h3><span><?php echo $this->_var['lang']['groupbuy_intro']; ?></span></h3>
    <div class="boxCenterList">
    <?php echo $this->_var['group_buy']['group_buy_desc']; ?>
    </div>
   </div>
  </div>
  </div>
  
</div>
<div class="blank"></div>

<div class="block">
  <div class="box">
   <div class="helpTitBg clearfix">
    <?php echo $this->fetch('library/help.lbi'); ?>
   </div>
  </div>
</div>
<div class="blank"></div>


<?php if ($this->_var['img_links'] || $this->_var['txt_links']): ?>
<div id="bottomNav" class="box">
 <div class="box_1">
  <div class="links clearfix">
    <?php $_from = $this->_var['img_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?>
    <a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>"><img src="<?php echo $this->_var['link']['logo']; ?>" alt="<?php echo $this->_var['link']['name']; ?>" border="0" /></a>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <?php if ($this->_var['txt_links']): ?>
    <?php $_from = $this->_var['txt_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?>
    [<a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>"><?php echo $this->_var['link']['name']; ?></a>]
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <?php endif; ?>
  </div>
 </div>
</div>
<?php endif; ?>

<div class="blank"></div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
<script type="text/javascript">
var gmt_end_time = "<?php echo empty($this->_var['group_buy']['gmt_end_date']) ? '0' : $this->_var['group_buy']['gmt_end_date']; ?>";
<?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var now_time = <?php echo $this->_var['now_time']; ?>;


onload = function()
{
  try
  {
    onload_leftTime();
  }
  catch (e)
  {}
}

</script>
</html>
