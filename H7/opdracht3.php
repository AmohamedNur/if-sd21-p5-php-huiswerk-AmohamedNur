
<?php
if(isset($_POST ['instellen'])){
    if(!empty($_POST['color'])){
        echo $_POST['color'];
        echo"<style>";
        echo"body{";
        echo"background-color:".$_POST['color']. ";";
        echo "}";
        echo "</style>";
    }
}
?><form method="post" action="">
    <input class="nostyle" type="radio" name="color" value="red"/>Red
    <input class="nostyle" type="radio" name="color" value="green"/>Green
    <input class="nostyle" type="radio" name="color" value="blue"/>Blue
    <input class="nostyle" type="radio" name="color" value="pink"/>Pink

    <br><br>
    <input type="submit" name="instellen" value="instellen"/>
</form>



<?php
