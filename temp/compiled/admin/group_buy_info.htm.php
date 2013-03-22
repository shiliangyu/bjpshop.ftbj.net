<!-- $Id: group_buy_info.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<?php echo $this->fetch('pageheader.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'validator.js,../js/utils.js')); ?>

<script type="text/javascript" src="../js/calendar.php?lang=<?php echo $this->_var['cfg_lang']; ?>"></script>
<link href="../js/calendar/calendar.css" rel="stylesheet" type="text/css" />

<!-- 商品搜索 -->
<div class="form-div">
  <form action="javascript:searchGoods()" name="searchForm">
    <img src="images/icon_search.gif" width="26" height="22" border="0" alt="SEARCH" />
    <!-- 分类 -->
    <select name="cat_id"><option value="0"><?php echo $this->_var['lang']['all_cat']; ?></caption><?php echo $this->_var['cat_list']; ?></select>
    <!-- 品牌 -->
    <select name="brand_id"><option value="0"><?php echo $this->_var['lang']['all_brand']; ?></caption><?php echo $this->html_options(array('options'=>$this->_var['brand_list'])); ?></select>
    <!-- 关键字 -->
    <input type="text" name="keyword" size="20" />
    <input type="submit" value="<?php echo $this->_var['lang']['button_search']; ?>" class="button" />
  </form>
</div>

<form method="post" action="group_buy.php?act=insert_update" name="theForm" onsubmit="return validate()">
<div class="main-div">
<table id="group-table" cellspacing="1" cellpadding="3" width="100%">
  <tr>
    <td class="label"><?php echo $this->_var['lang']['label_goods_name']; ?></td>
    <td><select name="goods_id">
      <?php if ($this->_var['group_buy']['act_id']): ?>
      <option value="<?php echo $this->_var['group_buy']['goods_id']; ?>"><?php echo $this->_var['group_buy']['goods_name']; ?></option>
      <?php else: ?>
      <option value="0"><?php echo $this->_var['lang']['notice_goods_name']; ?></option>
      <?php endif; ?>
    </select>    </td>
  </tr>
  <tr>
    <td class="label"><?php echo $this->_var['lang']['label_start_date']; ?></td>
    <td>
      <input name="start_time" type="text" id="start_time" size="22" value='<?php echo $this->_var['group_buy']['start_time']; ?>' readonly="readonly" /><input name="selbtn1" type="button" id="selbtn1" onclick="return showCalendar('start_time', '%Y-%m-%d %H:%M', '24', false, 'selbtn1');" value="<?php echo $this->_var['lang']['btn_select']; ?>" class="button"/>
    </td>
  </tr>
  <tr>
    <td class="label"><?php echo $this->_var['lang']['label_end_date']; ?></td>
    <td>
      <input name="end_time" type="text" id="end_time" size="22" value='<?php echo $this->_var['group_buy']['end_time']; ?>' readonly="readonly" /><input name="selbtn2" type="button" id="selbtn2" onclick="return showCalendar('end_time', '%Y-%m-%d %H:%M', '24', false, 'selbtn2');" value="<?php echo $this->_var['lang']['btn_select']; ?>" class="button"/>
    </td>
  </tr>
  <tr>
    <td class="label"><?php echo $this->_var['lang']['label_deposit']; ?></td>
    <td><input name="deposit" type="text" id="deposit" value="<?php echo empty($this->_var['group_buy']['deposit']) ? '0' : $this->_var['group_buy']['deposit']; ?>" size="30"></td>
  </tr>
  <tr>
    <td class="label"><a href="javascript:showNotice('noticRestrict');" title="<?php echo $this->_var['lang']['form_notice']; ?>"><img src="images/notice.gif" width="16" height="16" border="0" alt="<?php echo $this->_var['lang']['form_notice']; ?>"></a><?php echo $this->_var['lang']['label_restrict_amount']; ?></td>
    <td><input type="text" name="restrict_amount" value="<?php echo empty($this->_var['group_buy']['restrict_amount']) ? '0' : $this->_var['group_buy']['restrict_amount']; ?>" size="30" />
      <br /><span class="notice-span" <?php if ($this->_var['help_open']): ?>style="display:block" <?php else: ?> style="display:none" <?php endif; ?> id="noticRestrict"><?php echo $this->_var['lang']['notice_restrict_amount']; ?></span>    </td>
  </tr>
  <tr>
    <td class="label"><?php echo $this->_var['lang']['label_gift_integral']; ?></td>
    <td><input type="text" name="gift_integral" value="<?php echo empty($this->_var['group_buy']['gift_integral']) ? '0' : $this->_var['group_buy']['gift_integral']; ?>" size="30" /></td>
  </tr>
  <?php $_from = $this->_var['group_buy']['price_ladder']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
  <?php if ($this->_var['key'] == 0): ?>
  <tr>
    <td class="label"><?php echo $this->_var['lang']['label_price_ladder']; ?></td>
    <td><?php echo $this->_var['lang']['notice_ladder_amount']; ?> <input type="text" name="ladder_amount[]" value="<?php echo $this->_var['item']['amount']; ?>" size="8" />&nbsp;&nbsp;
      <?php echo $this->_var['lang']['notice_ladder_price']; ?> <input type="text" name="ladder_price[]" value="<?php echo $this->_var['item']['price']; ?>" size="8" />
      <a href="javascript:;" onclick="addLadder(this)"><strong>[+]</strong></a>    </td>
  </tr>
  <?php else: ?>
  <tr>
    <td></td>
    <td><?php echo $this->_var['lang']['notice_ladder_amount']; ?> <input type="text" name="ladder_amount[]" value="<?php echo $this->_var['item']['amount']; ?>" size="8" />&nbsp;&nbsp;
      <?php echo $this->_var['lang']['notice_ladder_price']; ?> <input type="text" name="ladder_price[]" value="<?php echo $this->_var['item']['price']; ?>" size="8" />
      <a href="javascript:;" onclick="removeLadder(this)"><strong>[-]</strong></a>    </td>
  </tr>
  <?php endif; ?>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  <tr>
    <td class="label"><?php echo $this->_var['lang']['label_desc']; ?></td>
    <td><textarea  name="act_desc" cols="40" rows="3"  ><?php echo $this->_var['group_buy']['act_desc']; ?></textarea></td>
  </tr>
  <tr>
    <td class="label">&nbsp;</td>
    <td>
      <input name="act_id" type="hidden" id="act_id" value="<?php echo $this->_var['group_buy']['act_id']; ?>">
      <input type="submit" name="submit" value="<?php echo $this->_var['lang']['button_submit']; ?>" class="button" />
      <input type="reset" value="<?php echo $this->_var['lang']['button_reset']; ?>" class="button" />
      <?php if ($this->_var['group_buy']['status'] == 1): ?>
      <input type="submit" name="finish" value="<?php echo $this->_var['lang']['button_finish']; ?>" class="button" onclick="return confirm('<?php echo $this->_var['lang']['notice_finish']; ?>')"/>
      <?php elseif ($this->_var['group_buy']['status'] == 2): ?>
      <input type="submit" name="succeed" value="<?php echo $this->_var['lang']['button_succeed']; ?>" class="button" onclick="return confirm(succeed_confirm)" /><?php echo $this->_var['lang']['notice_succeed']; ?><br />
      <input type="submit" name="fail" value="<?php echo $this->_var['lang']['button_fail']; ?>" class="button" onclick="return confirm(fail_confirm)" /><?php echo $this->_var['lang']['notice_fail']; ?>
      <?php elseif ($this->_var['group_buy']['status'] == 3): ?>
      <input type="submit" name="mail" value="<?php echo $this->_var['lang']['button_mail']; ?>" class="button" onclick="return confirm('<?php echo $this->_var['lang']['notice_mail']; ?>')" />
      <?php endif; ?>    </td>
  </tr>
</table>
</div>
</form>
<script language="JavaScript">
<!--


// 检查新订单
startCheckOrder();

/**
 * 检查表单输入的数据
 */
function validate()
{
  validator = new Validator("theForm");
  var eles = document.forms['theForm'].elements;

  var goods_id = eles['goods_id'].value;
  if (goods_id <= 0)
  {
    validator.addErrorMsg(error_goods_null);
  }
  validator.isNumber('deposit', error_deposit, false);
  validator.isInt('restrict_amount', error_restrict_amount, false);
  validator.isInt('gift_integral', error_gift_integral, false);
  return validator.passed();
}

/**
 * 搜索商品
 */
function searchGoods()
{
  var filter = new Object;
  filter.cat_id   = document.forms['searchForm'].elements['cat_id'].value;
  filter.brand_id = document.forms['searchForm'].elements['brand_id'].value;
  filter.keyword  = document.forms['searchForm'].elements['keyword'].value;

  Ajax.call('group_buy.php?is_ajax=1&act=search_goods', filter, searchGoodsResponse, 'GET', 'JSON');
}

function searchGoodsResponse(result)
{
  if (result.error == '1' && result.message != '')
  {
    alert(result.message);
	return;
  }

  var sel = document.forms['theForm'].elements['goods_id'];

  sel.length = 0;

  /* 创建 options */
  var goods = result.content;
  if (goods)
  {
    for (i = 0; i < goods.length; i++)
    {
      var opt = document.createElement("OPTION");
      opt.value = goods[i].goods_id;
      opt.text  = goods[i].goods_name;
      sel.options.add(opt);
    }
  }
  else
  {
    var opt = document.createElement("OPTION");
    opt.value = 0;
    opt.text  = search_is_null;
    sel.options.add(opt);
  }

  return;
}
/**
 * 新增一个价格阶梯
 */
function addLadder(obj, amount, price)
{
  var src  = obj.parentNode.parentNode;
  var idx  = rowindex(src);
  var tbl  = document.getElementById('group-table');
  var row  = tbl.insertRow(idx + 1);
  var cell = row.insertCell(-1);
  cell.innerHTML = '';
  var cell = row.insertCell(-1);
  cell.innerHTML = src.cells[1].innerHTML.replace(/(.*)(addLadder)(.*)(\[)(\+)/i, "$1removeLadder$3$4-");;
}

/**
 * 删除一个价格阶梯
 */
function removeLadder(obj)
{
  var row = rowindex(obj.parentNode.parentNode);
  var tbl = document.getElementById('group-table');

  tbl.deleteRow(row);
}

//-->

</script>

<?php echo $this->fetch('pagefooter.htm'); ?>