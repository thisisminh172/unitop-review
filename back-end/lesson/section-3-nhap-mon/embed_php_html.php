<?php
$post_title = "Ca nhiễm nCoV thứ 18 ở Việt Nam";
$post_content = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga, aspernatur dolore? Eos rem similique et illum itaque hic maiores, quas quam in deserunt at tempore veniam omnis ipsam, quaerat inventore ratione autem ea, numquam animi? Repellendus sunt quod cumque aperiam et. Earum quas sapiente tempora sunt enim voluptate sint rem eum alias eos autem repellat, tenetur quod quis, laborum, maiores nihil sit! Ipsa facilis illum officiis deleniti, porro minus blanditiis obcaecati distinctio in corporis iusto debitis possimus laboriosam alias velit qui cum tempora dolorem voluptatibus ipsum rem. Ipsum odio, at eius animi fugiat quae perspiciatis ut, distinctio quas dicta voluptates.
<img alt='[Caption]Phun khử khuẩn tại phố Trúc Bạch, quận Ba Đình,Hà Nội sáng 7/3, sau khi phát hiện ca bệnh Covid-19. Ảnh: Giang Huy' data-natural-h='500' data-natural-width='750' src='https://i-suckhoe.vnecdn.net/2020/03/07/pho-tru-c-ba-ch-1583566236-2535-1583566329.jpg' class='lazyInitial lazyLoaded' data-was-processed='true' data-width='750' data-pwidth='506' style='width: 100%;'>
";

?>
<html>
    <head>
        <title>Nhúng php vào html</title>
    </head>
</html>
<body>
<style>
h1{
    color:red;
}
</style>
    <div id="content">
    <h1 class="post-title"><?php echo $post_title;?></h1>
    <div class="post-content">
    <?php echo $post_content;?>
    </div>
    </div>
</body>