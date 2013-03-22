<?php if ($this->_var['article_categories']): ?>
<div class="box">
 <div class="box_1">
  <h3><span><?php echo $this->_var['lang']['article_cat']; ?></span></h3>
  <div class="boxCenterList RelaArticle">
    <?php $_from = $this->_var['article_categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat_0_24069600_1362985290');if (count($_from)):
    foreach ($_from AS $this->_var['cat_0_24069600_1362985290']):
?>
    <a href="<?php echo $this->_var['cat_0_24069600_1362985290']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat_0_24069600_1362985290']['name']); ?></a><br />
      <?php $_from = $this->_var['cat_0_24069600_1362985290']['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child_0_24095400_1362985290');if (count($_from)):
    foreach ($_from AS $this->_var['child_0_24095400_1362985290']):
?>
      <a href="<?php echo $this->_var['child_0_24095400_1362985290']['url']; ?>" style="background-image:none;"><?php echo htmlspecialchars($this->_var['child_0_24095400_1362985290']['name']); ?></a><br />
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </div>
 </div>
</div>
<div class="blank5"></div>
<?php endif; ?>