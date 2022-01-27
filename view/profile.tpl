{include file="header.tpl"}
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <style type="text/css">
        #results { border:1px solid; background:#ccc; }
    </style>
 <p
 {if $user_info2.0.theme == 0}
              style="font-size:19px;text-align:center;margin:30px; color:black"             {else}   
              style="font-size:19px;text-align:center;margin:30px"
        {/if}
 
>Редактирайте профила си</p>
                <a href="../bolnica.php">tuk</a>
                    <div  
                    {if $user_info2.0.theme == 0}
                          style="margin: auto;
                  border-radius: 25px;
  width: 90%;
  border: 1px ridge #adadad;
 background-color:#242424;
  padding: 10px;"
                     {else}
                          style="margin: auto;
                  border-radius: 25px;
  width: 90%;
  border: 1px ridge #adadad;
 background-color:#e4ecf2;
  padding: 10px;"
                     {/if}
                    
               >
               <center>
               
               
               
           <!--    <div >
    
    <form method="POST" action="./profile.php">
        <div class="row">
            <div class="col-md-6">
                <div id="my_camera"></div>
                <br/>
                <input type=button value="Take Snapshot" onClick="take_snapshot()">
                <input type="hidden" name="image" class="image-tag">
            </div>
            <div class="col-md-6">
                <div id="results">Your captured image will appear here...</div>
            </div>
            <div class="col-md-12 text-center">
                <br/>
                <input type="submit" name="img" value="Запиши" class="btn btn-success">
            </div>
        </div>
    </form>
</div>-->
  
<!-- Configure a few settings and attach camera 
<script language="JavaScript">
    Webcam.set({
        width: 100,
        height: 100,
        image_format: 'jpeg',
        jpeg_quality: 90
    });
  
    Webcam.attach( '#my_camera' );
  
    function take_snapshot() {
        Webcam.snap( function(data_uri) {
            $(".image-tag").val(data_uri);
            document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';
        } );
    }
</script>
               -->
                  
                   <form  action="./profile.php" method="post">
                    <input style="border: 1px solid #ccc;border-radius: 4px;padding: 25px;margin: 25px;width: 90%" type="text" name="names" value="{$user_info2.0.user_names}" placeholder="Имена" required>
                    <input style="padding: 3px;margin: 3px;width: 90%" type="hidden" name="mail" value="{$user_info2.0.user_mail}" placeholder="Мейл" required>
                    <input style="border: 1px solid #ccc;border-radius: 4px;padding: 25px;margin: 25px;width: 90%" type="tel" name="phone" value="{$user_info2.0.user_phone}" placeholder="Телефон"  required>
                   <select name="city" style="padding: 10px;margin: 3px;width: 90%;font-size:15px">
                    {foreach from=$city item=$c}
                    <option value="{$c.bgid}" {if $c.bgid == $user_info2.0.city_id}selected{/if}>{$c.city}</option>
                    {/foreach}
                    </select>
                    <select name="theme" style="padding: 10px;margin: 3px;width: 90%;font-size:15px;display:none">
                        <option value="0" {if $user_info2.0.theme == 0} selected{/if}>Тъмна тема</option>
                        <option value="1" {if $user_info2.0.theme == 1} selected{/if}>Светла тема</option>
                    </select>
                      <br>
<br>
                    <input  style="width: 80%; background: radial-gradient(#387989, #1b6da6);
  background-repeat: no-repeat;color:#ebff36;border-radius: 12px;border: none;-webkit-box-shadow: 3px 3px 18px -5px rgba(0,0,0,0.75);
-moz-box-shadow: 3px 3px 18px -5px rgba(0,0,0,0.75);
box-shadow: 3px 3px 18px -5px rgba(0,0,0,0.75);margin: 3px;padding:12px;font-size:20px" type="submit" name="save" value="Запишете промените" >
<p><br><a href="./change_password.php" 
 {if $user_info2.0.theme == 0}
 style="color: white; text-decoration: none;"
 {else}
 style="color: blue; text-decoration: none;"
 {/if}
>Промени паролата</a></p

<p><br><a href="../logout.php" 
 {if $user_info2.0.theme == 0}
 style="color: white; text-decoration: none;"
 {else}
 style="color: blue; text-decoration: none;"
 {/if}
>Изход</a></p>
                {if isset({$ok}) && $ok==true}
                    <div 
                    
                    
                    
                    style="background-color: #00ff5e;padding: 8px;margin: 5px;border-radius:10px"> Промените са записани успешно</div>
                    {/if}
                   </form></center>
                    </div>
                </div>
                

{include file="footer.tpl"}