{if $os.status == 1}
 <div style="background-color: #474747;color:white;padding: 5px;border-radius:10px;text-align: center;margin: 5px;font-size:17px">
                    <p><b>Очаквате такси на</b></p>
                    {$address} {$num} <p style="margin: 5px;">

                  
                  </div>
   {/if}
                    <div
                            {if $os.status == 1}
                                style="background-color: greenyellow;padding: 5px;text-align: center; margin: 5px;font-size:17"
                            {else}
                                style="background-color:#3db8ff;padding: 30px;text-align: center; margin: 5px;margin-top:150px; font-size:17;border-radius:10px"
                            {/if}
                            >
                        <p><b>
                                {if $os.status == 1}
                                    Търсим шофьор за вас! Моля, изчакайте секунда... 
                                 
                                {/if}
                                
                                  {if $os.status == 3}
                                    
                                {/if}
                                 {if $os.status == 4}
                                    Поръчката е отказана
                                {/if}
                            </b></p>

                        {if !is_array($os.driver_info)}
                            {if isset($ref)}
                                <br><a href="./home.php"  target="_PARENT"
                                style="color:black;background-color: greenyellow;padding: 10px; text-decoration: none; font-size:17px;border-radius:10px;margi:20px">
                                   🔙 Върнете се в началото</a>
                                {else}
<p><br>
    <a href="./view_order.php?order_id={$order.0.order_id}&refuse={$order.0.order_id}" 
    style="background-color: red; text-decoration: none; padding: 5px; color:white;border-radius:10px;opacity:0.8;">Откажи поръчката</a></p>
                             
                             <div>
                             
                             
                             {if $os.status == 1}
                             
                             
                             
                             {/if}
                             
                             </div>
                             
                             
                               
                                {/if}

                            {else}
                            <audio autoplay>
                                <source src="../images/n.mp3" type="audio/mpeg">
                            </audio>

                            {if $os.status == 1}
                            
                            {/if}
                             {if $os.status == 2}
                            <p style="color:white"><b>{$os.driver_info.0.driver_names}</b>, пътува към вас с <b>{$os.driver_info.0.driver_car}</b></p>
                            {/if}
                             {if $os.status == 3}
                            <p>Таксиметровия шофьор приключи пътуването</p>
                            {/if}
                            
                           <p style="text-align:center">
                           
                            <a style="width:100%;background-color:#20bd5f;color:white; text-decoration:none;font-size:25px;padding:10px;border-radius:35px" href="tel: {$os.driver_info.0.driver_phone}" >✆ НАБЕРИ</a>
                       
                       </p>
                                
                                
                            {/if}
                            

                    </div>
                 <style>
.thought {
  display:flex;
  background-color:#efff12;
  padding:10px;
  border-radius:30px;
  min-width:40px;
  max-width:220px;
  min-height:40px;
  margin:20px;
  position:relative;
  align-items:center;
  justify-content:center;
  text-align:center;
}
.thought:before,
.thought:after {
  content:"";
  background-color:#8dcf13;
  border-radius:50%;
  display:block;
  position:absolute;
  z-index:-1;
}
.thought:before {
  width:44px;
  height:44px;
  top:-12px;
  left:28px;
  box-shadow:-50px 30px 0 -12px #fff;
}
.thought:after {
  bottom:-10px;
  right:26px;
  width:30px;
  height:30px;
  box-shadow:40px -34px 0 0 #fff,
             -28px -6px 0 -2px #fff,
             -24px 17px 0 -6px #fff,
             -5px 25px 0 -10px #fff;
  
}</style>
                   {if strlen($order.0.ordre_note) >2} <p class="thought" >
                       {$order.0.ordre_note}</p>{/if}
                  {if $os.status == 2}  <center> <p style="width:100%;margin:5px"><br>
                            <a href="./rate.php?driver={$os.driver_info.0.driver_id}&order_id={$order.0.order_id}"
                               style="text-decoration: none;border-radius:10px; background-color: #ffaa00;color: black;padding: 10px;margin: 5px;">
                                Приключете пътуването</a></p></center>{/if}