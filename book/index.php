<style>  
        /* 在这里添加你的自定义CSS样式 */  
        body {  
            margin: 0;  
            padding: 0;  
            font-family: Arial, sans-serif;  
        }  
        .container {  
            width: 100%;  
            margin: 0 auto;  
margin-top: 10px;
        }  
        .content {  
        }  
</style>
<?php
/**
 * theme for Typecho
 *
 * @package Book
 * @author 昴
 * @version 0.1
 * @link https://xn--uf4a.site/
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<div>
    <?php while ($this->next()): ?>

            <h2 class="post-title" itemprop="name headline">
                <a><?php $this->title() ?></a>
            </h2>
<?php _e('分类: '); ?><?php $this->category(','); ?>
            <div class="post-content" itemprop="articleBody">
                <?php $this->content(); ?>
            </div>
    <?php endwhile; ?>

    <?php $this->pageNav('&laquo; 上一页', '下一页 &raquo;'); ?>
</div><!-- end #main-->
<?php $this->need('footer.php'); ?>
