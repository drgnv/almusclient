
<ion-content class="menu-screen">


    <!-- Profile Section -->
    <div class="profile-box">
        {if strlen($profile_pic)>5}
        <img src="{$profile_pic}" alt="" class="profile-box-thumb">
        {/if}
        <div class="profile-box-details">
            <h4 class="profile-name brand-base-text-color">{$user_info.0.user_names}</h4>
            <h6 class="profile-location brand-base-text-color"><i class="ion-compass"></i> {$user_info.0.user_mail}</h6>
              <h6 class="profile-location brand-base-text-color"><i class="ion-star"></i> {$user_info.0.user_rating}</h6>
            <h6 class="profile-location brand-base-text-color"><i class="ion-android-people"></i> {$user_info.0.user_rating_count}</h6>
        </div>
        <i class="profile-settings-icons"></i>
    </div>
    <!-- End Profile Section -->
    <ion-item nav-clear menu-close href="./home.php" class="item item-icon-left brand-base-text-color">
        <i class="icon ion-home"></i>
        Начало
    </ion-item>


    <ion-item nav-clear menu-close href="./your_orders.php" class="item item-icon-left brand-base-text-color">
        <i class="icon ion-android-bookmark"></i>
        Вашите поръчки
    </ion-item>



        <ion-item nav-clear menu-close href="./profile.php" class="item item-icon-left brand-base-text-color">
            <i class="icon ion-person"></i>
            Профил
        </ion-item>
    <ion-item nav-clear menu-close href="./favorite_places.php" class="item item-icon-left brand-base-text-color">
        <i class="icon ion-android-favorite"></i>
        Любими места
    </ion-item>
        <ion-item nav-clear menu-close href="../logout.php" class="item item-icon-left brand-base-text-color">
            <i class="icon ion-log-in"></i>
            Изход
        </ion-item>
        </ion-item>
      
    </ion-list>


</ion-content>
</ion-side-menu>
</ion-side-menus>