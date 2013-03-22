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

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
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
    <h3><span><?php echo $this->_var['lang']['gb_goods_name']; ?></span></h3>
    <div class="boxCenterList">
      <?php if ($this->_var['gb_list']): ?>
      <?php $_from = $this->_var['gb_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'group_buy');if (count($_from)):
    foreach ($_from AS $this->_var['group_buy']):
?>
      <ul class="group clearfix">
      <li style="margin-right:8px; text-align:center;">
      <a href="<?php echo $this->_var['group_buy']['url']; ?>"><img src="<?php echo $this->_var['group_buy']['goods_thumb']; ?>" border="0" alt="<?php echo htmlspecialchars($this->_var['group_buy']['goods_name']); ?>" style="vertical-align: middle" /></a>
      </li>
      <li style="width:555px; line-height:23px;">
      <?php echo $this->_var['lang']['gb_goods_name']; ?><a href="<?php echo $this->_var['group_buy']['url']; ?>" class="f5"><?php echo htmlspecialchars($this->_var['group_buy']['goods_name']); ?></a><br />
      <?php echo $this->_var['lang']['act_time']; ?>：<?php echo $this->_var['group_buy']['formated_start_date']; ?> -- <?php echo $this->_var['group_buy']['formated_end_date']; ?><br />
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
      </li>
      </ul>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      <?php else: ?>
       <span style="margin:2px 10px; font-size:14px; line-height:36px;"><?php echo $this->_var['lang']['group_goods_empty']; ?></span>
      <?php endif; ?>
    </div>
   </div>
  </div>
  <div class="blank5"></div>
  <?php echo $this->fetch('library/pages.lbi'); ?>
  </div>
  
</div>
<div class="blank5"></div>

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
</html>
