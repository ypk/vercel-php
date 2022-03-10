<?php
$page = basename($_SERVER['SCRIPT_NAME']);

$column_count = 1;

$menu_json = file_get_contents("./menu.json");
$menu = json_decode($menu_json, true);

echo $menu_json;
echo $menu;

if ($menu_json === FALSE || ($menu === null && json_last_error() !== JSON_ERROR_NONE)) {
    $menu_error = true;
} else {
    $menu_error = false;
}

function getAllergenAndSpiceInfo($items, $multipleSpiceOptions = false)
{
    $allergenAndSpiceInfo = "";
    if (is_array($items)) {
        $counter = 0;
        foreach ($items as $key => $item) {
            $allergenAndSpiceItem = strtolower($item);
            $allergenAndSpiceInfo .= "<span class='${allergenAndSpiceItem}'></span>";
            if ($multipleSpiceOptions && !($key === array_key_last($items))) {
                $allergenAndSpiceInfo .= "&nbsp;or&nbsp;";
            }
            $counter++;
        }
    }
    return $allergenAndSpiceInfo;
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Our Menu - Everest Spice Bristol</title>
    <meta name="description" content=" ">
    <?php include('head.php'); ?>
</head>

<body>
    <div id="header" class="inner">
        <div class="stuck">
            <?php include('header.php'); ?>
        </div>
        <h2>Our Menu</h2>
    </div>

    <div class="menuNotice">
        <p><strong>Note: "Our food may contain allergens (or traces) including Nuts, Celery, Gluten, Lupin, Milk, Mustard, Almond, Sesame Seeds, Soya, Egg,Sulphites. Please check the menu description carefully or call the restaurant before you order if you have specific dietary requirements."</strong></p>
        <ul>
            <li><span class="chilly-1"></span> Medium</li>
            <li><span class="chilly-2"></span> Hot</li>
            <li><span class="chilly-3"></span> Very Hot</li>
            <li><span class="veg"></span> Veg</li>
            <li><span class="nuts"></span> Nuts</li>
        </ul>
    </div>

    <div class="page">
        <div class="container">
            <div class="row">
                <?php
                if ($menu_error) {
                    echo "Menu Temporarily Unavailable. Please try again later.";
                } else {
                    foreach ($menu->sections as $section) {
                        if ($column_count % 2) {
                ?>
                            <div class="col-12 col-md-6">
                            <?php
                        }
                            ?>
                            <div class="menuBlock">
                                <h2><?php echo $section->name; ?></h2>
                                <p><?php echo $section->description; ?></p>
                                <ul class="row">
                                    <li class="col-12">
                                        <?php
                                        foreach ($section->items as $items) {
                                        ?>
                                            <div class="menuItem <?php echo isset($items->variants) ? 'menuVariants' : '' ?>">
                                                <h4>
                                                    <?php echo $items->name; ?>
                                                    &nbsp;
                                                    <?php
                                                    if (isset($items->allergenInfo)) {
                                                        echo getAllergenAndSpiceInfo($items->allergenInfo);
                                                    }
                                                    if (isset($items->spiceInfo)) {
                                                        if (isset($items->multipleSpiceOptions)) {
                                                            echo getAllergenAndSpiceInfo($items->spiceInfo, $items->multipleSpiceOptions);
                                                        } else {
                                                            echo getAllergenAndSpiceInfo($items->spiceInfo);
                                                        }
                                                    }
                                                    ?>
                                                </h4>
                                                <?php
                                                if (isset($items->description)) {
                                                    echo "<div class='menuDesc'>{$items->description}</div>";
                                                }
                                                if (isset($items->price)) {
                                                    echo "<div class='price'>{$items->price}</div>";
                                                }
                                                ?>
                                            </div>
                                            <?php
                                            if (isset($items->variants)) {
                                            ?>
                                                <h4 class="variant-heading">All Dishes available in:</h4>
                                                <?php
                                                foreach ($items->variants as $variants) {
                                                ?>
                                                    <div class="menuItem">
                                                        <h4>
                                                            <?php echo $variants->name; ?>
                                                        </h4>
                                                        <?php
                                                        if (isset($variants->description)) {
                                                            echo "<div class='menuDesc'>{$variants->description}</div>";
                                                        }
                                                        if (isset($variants->price)) {
                                                            echo "<div class='price'>{$variants->price}</div>";
                                                        }
                                                        ?>
                                                    </div>
                                        <?php
                                                }
                                            }
                                        }
                                        ?>
                                    </li>
                                </ul>
                            </div>
                            <?php
                            if ($column_count % 2) {
                            ?>
                            </div>
                <?php
                            }
                        }
                    }
                ?>
            </div>
        </div>
    </div>
    </div>

    <div id="footer">
        <?php include('footer.php'); ?>
    </div>

</body>

</html>