<center><h2>Предишни поръчки</h2></center>
                <div class="padding feed ruby" style="margin: 3px;padding: 3px; opacity: 0.9;color:white;width: 99%;height: 100%">
                    {foreach from=$orders item=$order}

                    <div  {if $order.status == 1 || $order.status == 2}onclick="window.location='view_order.php?order_id={$order.order_id}';"{/if}
                         style="background-color:#0384fc;margin:10px;padding:5px;border-radius:5px">
                        <!--Активна търси се шофьор-->
                        {if $order.status == 1}<img src="../images/active.png" width="20" height="20" title="Активна">{/if}
                       <!--Намерен е шофьор-->
                        {if $order.status == 2}<img src="../images/taxi-driver.png" width="20" height="20" title="Отказана">{/if}
                        <!--Приключена успешно-->
                        {if $order.status == 3}<img src="../images/3-512.png" width="20" height="20" title="Приключена">{/if}
                        <!--отказана от клиент-->
                        {if $order.status == 4}<img src="../images/inactive.png" width="20" height="20" title="Отказана">{/if}
                        {if $order.status == 1 || $order.status == 2}
                        <a style="text-decoration: none;color:yellow;" href="view_order.php?order_id={$order.order_id}">{/if}
                        ул.{$order.start_destiantion.0}
                         | {$order.time.0}:{$order.time.1}ч. | {$order.date|date_format}
                            {if $order.status == 1 || $order.status == 2}</a>{/if}
                    </div>
                    {/foreach}
                </div>
                <script id="search.html" type="text/ng-template">
                    <ion-view view-title="Search">
                        <ion-content>
                            <h1>Search</h1>
                        </ion-content>
                    </ion-view>
    </script>

{include file="footer.tpl"}