<!-- breadcrumb -->
<div class="header-divider"></div>
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb my-0 ms-2">
            <li class="breadcrumb-item">
                <!-- if breadcrumb is single--><span><a href="?controller=system&action=index">Home</a></span>
            </li>
            <li class="breadcrumb-item"><span><a href="?controller=role&action=index">Danh sách user</a></span></li>
            <li class="breadcrumb-item active"><span>Cấp quyền cho <strong><?= $get_item->name ?></strong> </span></li>
        </ol>
    </nav>
</div>
<!-- breadcrumb -->
<div class="container">
    <?= $this->get_error('alert') ?>
    <form action="?controller=role&action=update" method="post">
        <h6>Chọn chức năng</h6>
        <ul style="list-style-type: none;">
            <?php foreach ($parentList as $parent) {
                //check con
                $childs = $role->list_function($parent->id);
            ?>
                <li>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input funcs" name="funcs[]" id="" value="<?= $parent->id ?>" <?= $role->checked($parent->id, $get_item->id) ? 'checked' : '' ?>>
                            <?= $parent->name ?>
                        </label>
                    </div>
                    <?php
                    if ($childs) {
                    ?>
                        <ul style="list-style-type: none;">
                            <?php foreach ($childs as $child) {
                                $child_1 = $role->list_function($child->id);
                            ?>
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input funcs" name="funcs[]" id="" value="<?= $child->id ?>" <?= $role->checked($child->id, $get_item->id) ? 'checked' : '' ?>>
                                            <?= $child->name ?>
                                        </label>
                                    </div>
                                    <!-- Cấp 3 -->
                                    <?php if ($child_1) { ?>
                                        <ul style="list-style-type: none;">
                                            <?php foreach ($child_1 as $item) { ?>

                                                <li>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input funcs" name="funcs[]" id="" value="<?= $item->id ?>" <?= $role->checked($item->id, $get_item->id) ? 'checked' : '' ?>>
                                                            <?= $item->name ?>
                                                        </label>
                                                    </div>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                </li>
                            <?php } ?>
                        <?php } ?>
                        </ul>
                    <?php } ?>
                </li>

            <?php } ?>
        </ul>
        <div>
            <input type="submit" class="btn btn-primary" value="Ghi">
            <input type="hidden" name="id" value="<?= $get_item->id ?>">
            <a name="" id="" class="btn btn-warning" href="?controller=role&action=index" role="button">Quay về</a>
        </div>
    </form>
</div>
<script>
    var input_1 = document.getElementsByClassName('funcs')[1];
    input_1.addEventListener('click', function() {
        if (input_1.checked == true) {
            for (let i = 2; i <= 9; i++)
                document.getElementsByClassName('funcs')[i].checked = true;
        } else {
            for (let i = 2; i <= 9; i++)
                document.getElementsByClassName('funcs')[i].checked = false;
        }
    });
    var input_10 = document.getElementsByClassName('funcs')[10];
    input_10.addEventListener('click', function() {
        if (input_10.checked == true) {
            for (let i = 10; i <= 34; i++)
                document.getElementsByClassName('funcs')[i].checked = true;
        } else {
            for (let i = 10; i <= 34; i++)
                document.getElementsByClassName('funcs')[i].checked = false;
        }
    });
    var input_11 = document.getElementsByClassName('funcs')[11];
    input_11.addEventListener('click', function() {
        if (input_11.checked == true) {
            for (let i = 12; i <= 16; i++)
                document.getElementsByClassName('funcs')[i].checked = true;
        } else {
            for (let i = 12; i <= 16; i++)
                document.getElementsByClassName('funcs')[i].checked = false;
        }
    });
    var input_17 = document.getElementsByClassName('funcs')[17];
    input_17.addEventListener('click', function() {
        if (input_17.checked == true) {
            for (let i = 18; i <= 22; i++)
                document.getElementsByClassName('funcs')[i].checked = true;
        } else {
            for (let i = 18; i <= 22; i++)
                document.getElementsByClassName('funcs')[i].checked = false;
        }
    });
    var input_23 = document.getElementsByClassName('funcs')[23];
    input_23.addEventListener('click', function() {
        if (input_23.checked == true) {
            for (let i = 24; i <= 28; i++)
                document.getElementsByClassName('funcs')[i].checked = true;
        } else {
            for (let i = 24; i <= 28; i++)
                document.getElementsByClassName('funcs')[i].checked = false;
        }
    });
    var input_29 = document.getElementsByClassName('funcs')[29];
    input_29.addEventListener('click', function() {
        if (input_29.checked == true) {
            for (let i = 30; i <= 34; i++)
                document.getElementsByClassName('funcs')[i].checked = true;
        } else {
            for (let i = 30; i <= 34; i++)
                document.getElementsByClassName('funcs')[i].checked = false;
        }
    });
    var input_35 = document.getElementsByClassName('funcs')[35];
    input_35.addEventListener('click', function() {
        if (input_35.checked == true) {
            for (let i = 36; i <= 43; i++)
                document.getElementsByClassName('funcs')[i].checked = true;
        } else {
            for (let i = 36; i <= 43; i++)
                document.getElementsByClassName('funcs')[i].checked = false;
        }
    });
    var input_36 = document.getElementsByClassName('funcs')[36];
    input_36.addEventListener('click', function() {
        if (input_36.checked == true) {
            for (let i = 37; i <= 39; i++)
                document.getElementsByClassName('funcs')[i].checked = true;
        } else {
            for (let i = 37; i <= 39; i++)
                document.getElementsByClassName('funcs')[i].checked = false;
        }
    });
    var input_40 = document.getElementsByClassName('funcs')[40];
    input_40.addEventListener('click', function() {
        if (input_40.checked == true) {
            for (let i = 41; i <= 43; i++)
                document.getElementsByClassName('funcs')[i].checked = true;
        } else {
            for (let i = 41; i <= 43; i++)
                document.getElementsByClassName('funcs')[i].checked = false;
        }
    });
    var input_44 = document.getElementsByClassName('funcs')[44];
    input_44.addEventListener('click', function() {
        if (input_44.checked == true) {
            for (let i = 45; i <= 56; i++)
                document.getElementsByClassName('funcs')[i].checked = true;
        } else {
            for (let i = 45; i <= 56; i++)
                document.getElementsByClassName('funcs')[i].checked = false;
        }
    });
    var input_45 = document.getElementsByClassName('funcs')[45];
    input_45.addEventListener('click', function() {
        if (input_45.checked == true) {
            for (let i = 46; i <= 50; i++)
                document.getElementsByClassName('funcs')[i].checked = true;
        } else {
            for (let i = 46; i <= 50; i++)
                document.getElementsByClassName('funcs')[i].checked = false;
        }
    });
    var input_51 = document.getElementsByClassName('funcs')[51];
    input_51.addEventListener('click', function() {
        if (input_51.checked == true) {
            for (let i = 52; i <= 56; i++)
                document.getElementsByClassName('funcs')[i].checked = true;
        } else {
            for (let i = 52; i <= 56; i++)
                document.getElementsByClassName('funcs')[i].checked = false;
        }
    });
</script>