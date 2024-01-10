<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
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
    <title><?php $this->archiveTitle([
            'category' => _t('分类 %s 下的文章'),
            'search'   => _t('包含关键字 %s 的文章'),
            'tag'      => _t('标签 %s 下的文章'),
            'author'   => _t('%s 发布的文章')
        ], '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('normalize.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('grid.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body>
<header>
<div class="container">
<a<?php if ($this->is('index')): ?> class="current"<?php endif; ?>
                        href="<?php $this->options->siteUrl(); ?>"><?php _e('🏠首页'); ?></a>
<a href="/tags.html">🏷️标签归档</a>
<a href="/archives.html">📚文章归档</a>
<a href="<?php $this->options->feedUrl(); ?>"><?php _e('🔖订阅RSS'); ?></a>
 <?php if ($this->user->hasLogin()): ?><!-- 登录判断 #main-->
<a href="<?php $this->options->adminUrl(); ?>" target="_blank"><?php _e('🔑进入后台'); ?></a>
                <?php else: ?>
                        <a href="<?php $this->options->adminUrl('login.php'); ?>" target="_blank"><?php _e('🔒登录网站'); ?></a>
                <?php endif; ?><!-- 登录判断 #main-->
</div>
</header>
<div id="body">
    <div class="container">
        <div class="row">
