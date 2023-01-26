<link href="/css/test.css" rel="stylesheet" media="all">
<?php
$title = 'Centennial Perspective';
$description = '';
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/_header.php"; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/_navigation.test.php"; ?>

<main role="main">

    <header role="banner">
        <h1><?php echo str_replace(' ', '&nbsp;', $title); ?></h1>
        <!--h2>Podnaslov</h2-->
    </header>

    <section>
        <div class="single">
            <img src="/img/centennial_perspective/centennial_perspective.jpg" style="width:100%; max-width:720px;" />
        </div>
    </section>

    <article role="article" class="article_single">
        <p><?php echo $title; ?><span style="padding-left:1.25pt;"></span> / art intervention / 2017<br/><br/>
            This conceptual work refers on famous and controversial ready-made &ldquo;Fountain&rdquo; by M. Duchamp. Coincidentally or not, a hundred years passed before another was found, and a historical perspective with it.</p>
    </article>
    <div style="clear:both;"></div>

<script type="text/javascript">
    $(document).ready(function() {
        $(".navbar").mouseleave(function(i) {
            $(".sublinebar").addClass("subnavbar_hide");
            $(".subnavbar").addClass("subnavbar_hide");
        });
        /*$(".navbar").find("li").find("a").mouseenter(function(i) {
            $(".sublinebar").addClass("subnavbar_hide");
            $(".subnavbar").addClass("subnavbar_hide");
        });*/
        $(".navbar").find("li").find("a").mouseenter(function(i) {
            if ($(this).parent().parent().hasClass("navbar")) {
                $(".sublinebar").addClass("subnavbar_hide");
                $(".subnavbar").addClass("subnavbar_hide");
            }
        });
        $(".submenu").find("a").mouseenter(function(i) {
            $("#"+$(this).parent().attr('id').replace("menu_", "sublinemenu_")).removeClass("subnavbar_hide");
            $("#"+$(this).parent().attr('id').replace("menu_", "submenu_")).removeClass("subnavbar_hide");
        });
        /*$(".submenu").touch(function(i) {
            if ($("#"+$(this).attr('id').replace("menu_", "submenu_")).hasClass("subnavbar_hide")) {
                $("#"+$(this).attr('id').replace("menu_", "submenu_")).removeClass("subnavbar_hide");
            }
            else {
                $("#"+$(this).attr('id').replace("menu_", "submenu_")).addClass("subnavbar_hide");
            }
        });*/
        $(".sublinebar").mouseenter(function(i) {
            //alert("L.51");
            $(this).removeClass("subnavbar_hide");
        });
        $(".sublinebar").mouseleave(function(i) {
            //alert("L.55");
            $(this).addClass("subnavbar_hide");
        });
        $(".subnavbar").mouseenter(function(i) {
            $(this).removeClass("subnavbar_hide");
        });
        $(".subnavbar").mouseleave(function(i) {
            $(this).addClass("subnavbar_hide");
        });
    });
</script>