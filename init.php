<?php
class NP_Article_Or_Scroll extends Plugin {

    private $host;

    function about() {
        return array(1.0,
            "Remap \"n\" and \"p\" keybindings to scroll if article longer than one screen",
            "telotortium");
    }

    function init($host) {
        $this->host = $host;

        $host->add_hook($host::HOOK_HOTKEY_MAP, $this);
    }

    function hook_hotkey_map($hotkeys) {
        $hotkeys["n"] = "next_article_or_scroll";
        $hotkeys["p"] = "prev_article_or_scroll";
        return $hotkeys;
    }

    function api_version() {
        return 2;
    }

}
?>
