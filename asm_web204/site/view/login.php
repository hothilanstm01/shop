<div class="bleft">
<form action="index.php?ctrl=login&action=user" method="post">
            <div class="loginn">           
                <div class="text">
                    <input type="text" name="user" id="" placeholder="User"><br><br>
                    <input type="text" name="pass" id=""placeholder="Pass"><br><br>
                </div>
                <div class="submit">
                    <input type="submit" value="LOGIN" name="login">
                </div>
            </div>
        </form>
        <?php
        if(isset($canhbao)&&($canhbao!="")) echo $canhbao;
        
        ?>
</div>