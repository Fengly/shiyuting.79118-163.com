<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
    <ul>
        <?php foreach($cart as $goods_id=> $item){ ?>
            <li><?php echo ($goods_id); ?> <?php echo ($item['name']); ?> <?php echo ($item['price']); ?>


                <form action="<?php echo U('cart/add');?>" method="post">
                    <input type="hidden" name="goods_id" value="<?php echo ($goods_id); ?>">
                    <input type="text" name="qty" value="<?php echo ($item['qty']); ?>">
                    <input type="hidden" name="update" value="1">
                    <input type="submit" value="修改">
                </form>

                <a href="<?php echo U('cart/delete',array('goods_id'=>$goods_id)) ;?>">删除</a>


            </li>
        <?php } ?>
    </ul>


    <a href="<?php echo U('order/create');?>">确认下单</a>

</body>
</html>