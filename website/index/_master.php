<!DOCTYPE html>
<html lang="en">
    <?php 
        //echo "<base href='" . MAIN_URL . "'>"; 
    ?>
    {{head_render}}
    <body>
        {{body_top_render}}        

        <div class="container-fluid">
            <div id="InnerPageWrapper">
                <div class="InnerPageDiv">
                    {{quick_link_render}}
                    <div id="AboutUsRightWrapper">
                        {{body_content_area}}
                    </div>
                    <div class="clr"></div>
                </div>
            </div>
        </div>

        {{body_bottom_render}}
    </body>  
    {{bottom_render}}
</html>
 