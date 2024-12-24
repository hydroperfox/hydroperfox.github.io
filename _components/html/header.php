<?php

// The topbar is duplicated one time, one fixed topbar and another one
// moving along with the page.
$TopBar_items = array(
    new TopBarItem("Home", "/", true),
    new TopBarItem("Whack", "/whack"),
    new TopBarItem("About", "/about"),
);

$TopBar_content = array();
foreach ($TopBar_items as $item)
{
    $cn1 = $item->logo ? " TopBarLogo" : "";
    $TopBar_content[] = "<a class=\"TopBarItem$cn1\" href=\"{$item->dest}\">{$item->label}</a>";
}

$TopBar_content = join("", $TopBar_content);

class TopBarItem
{
    public string $label = "unlabeled";
    public string $dest = "/";
    public bool $logo = false;

    public function __construct(string $label, string $dest, bool $logo = false)
    {
        $this->label = $label;
        $this->dest = $dest;
        $this->logo = $logo;
    }
}

?>
<header>
    <div class="TopBar">
        <?php echo $TopBar_content; ?>
    </div>
    <div class="TopBar" style="position: fixed; top: 0">
        <?php echo $TopBar_content; ?>
    </div>
</header>