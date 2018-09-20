<div class="content-wrapper" >
    <div class="content" >
        <div class="row">
            <input style="display: none" value="<?=$link?>" class="link-content">
            <div id="content-page-link">

            </div>
        </div>
    </div>
</div>
<script>

$("#content-page-link").html('<object data="'+$(".link-content").val()+'" style="width: 100%; " id="con-height-page">');
$("#con-height-page").css("height", $(window).height())
</script>