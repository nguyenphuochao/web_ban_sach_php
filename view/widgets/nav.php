<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
  <div class="sidebar-brand d-none d-md-flex">
    <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
      <use xlink:href="public/assets/assets/brand/coreui.svg#full"></use>
    </svg>
    <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
      <use xlink:href="public/assets/assets/brand/coreui.svg#signet"></use>
    </svg>
  </div>
  <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
    <!-- Show chức năng -->
    <li class="nav-title">Chức năng</li>
    <?php if ($menus) {
      foreach ($menus as $menu) {
        $subs = $role->list_menu($_SESSION['user_id'], $menu->id);
    ?>
        <!-- Quản lí sản xuất -->
        <?php if ($menu->pos == 0) { ?>
          <li class="nav-item"><a class="nav-link" href="<?= $menu->link ?>">
              <svg class="nav-icon">
                <use xlink:href="public/assets/vendors/@coreui/icons/svg/free.svg<?= $menu->icon ?>"></use>
              </svg> <?= $menu->name ?><span class="badge badge-sm bg-info ms-auto">NEW</span></a></li>

        <?php } else { ?>
          <li class="nav-group"><a class="nav-link nav-group-toggle" href="<?= $menu->link ?>">
              <svg class="nav-icon">
                <use xlink:href="public/assets/vendors/@coreui/icons/svg/free.svg<?= $menu->icon ?>"></use>
              </svg><?= $menu->name ?></a>
            <ul class="nav-group-items">
              <!-- Sản phẩm -->
              <?php if ($subs) {
                foreach ($subs as $sub) {
                  $sub_1 = $role->list_menu($_SESSION['user_id'], $sub->id);
              ?>
                  <?php if ($sub_1) { ?>
                    <li class="nav-group"><a class="nav-link nav-group-toggle" href="<?= $sub->link ?>">
                        <svg class="nav-icon">
                          <use xlink:href="public/assets/vendors/@coreui/icons/svg/free.svg<?= $sub->icon ?>"></use>
                        </svg> <?= $sub->name ?></a>
                      <ul class="nav-group-items">
                        <?php if ($sub_1) {
                          foreach ($sub_1 as $item) {
                        ?>
                            <li class="nav-item"><a class="nav-link" href="<?= $item->link ?>"><span class="nav-icon"></span><?= $item->name ?></a></li>
                        <?php }
                        } ?>
                      </ul>
                    </li>
                  <?php } else { ?>
                    <li class="nav-item"><a class="nav-link" href="<?= $sub->link ?>"><span class="nav-icon"></span><?= $sub->name ?></a></li>
                  <?php } ?>
              <?php }
              }  ?>

            </ul>
          </li>
        <?php } ?>

    <?php }
    } else {
      echo "Chưa có chức năng";
    }
    ?>
  </ul>
  <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div>